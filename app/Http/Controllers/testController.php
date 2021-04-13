<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Google_Client;
use Google_Service_YouTube;
use Google_Service_YouTube_SearchResult;

class testController extends Controller
{
    public function index()
    {
        /**
         * Sample PHP code for youtube.liveBroadcasts.list
         * See instructions for running these code samples locally:
         * https://developers.google.com/explorer-help/guides/code_samples#php
         */

        // if (!file_exists(__DIR__ . '/vendor/autoload.php')) {
        //     throw new Exception(sprintf('Please run "composer require google/apiclient:~2.0" in "%s"', __DIR__));
        // }
        // require_once __DIR__ . '/vendor/autoload.php';

        $client = new Google_Client();
        $client->setApplicationName(config("youtube.api.name"));
        $client->setDeveloperKey(config("youtube.api.key"));

        //var_dump($client);
        //die();
        // Define service object for making API requests.
        $service = new Google_Service_YouTube($client);

        $queryParams = [
            'eventType' => 'live',
            'maxResults' => 50,
            'q' => 'among us',
            'type' => 'video',
            'order' => 'viewCount'

        ];

        $response = $service->search->listSearch('snippet', $queryParams);

        $videoIds = [];

        foreach ($response->items as $key => $item) {
            //dd($item);
            $videoIds[] = $item->id->videoId;

            //echo '<a href="https://www.youtube.com/watch?v=' . $item->id->videoId . '"><img src="' . $item->snippet->thumbnails->high->url .'" alt=""></a>';
            //dd($thumbnail);

        }

        $queryParams = [
            'id' => implode(",",$videoIds)
        ];

        $response = $service->videos->listVideos('snippet,contentDetails,statistics', $queryParams);

        foreach ($response->items as $key => $item) {
                    echo '<a href="https://www.youtube.com/watch?v=' . $item->id . '"><img src="' . $item->snippet->thumbnails->high->url .'" alt="">' . number_format($item->statistics->viewCount,0,',',' ') . '</a>';
        }
        //dd($response);
    }
}

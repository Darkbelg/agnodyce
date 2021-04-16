<?php

namespace App\Service\Youtube;

use Google_Client;
use Google_Service_YouTube;

/**
 * Class YoutubeApi
 * @property  search
 * @package App\Service
 */
class Connection
{

    private $service;

    public function __construct()
    {
        $client = new Google_Client();
        $client->setApplicationName(config("youtube.api.name"));
        $client->setDeveloperKey(config("youtube.api.key"));

        // Define service object for making API requests.
        $this->service = new Google_Service_YouTube($client);
    }

    public function get()
    {
        return $this->service;
    }

    /*    public function getVideoMetaData($id)
        {
            $queryParams = [
                'id' => $id
            ];
            $response = $this->service->videos->listVideos(
                'contentDetails,id,liveStreamingDetails,localizations,player,recordingDetails,snippet,statistics,status,topicDetails',
                $queryParams
            );
            return $response["items"][0];
        }*/
}
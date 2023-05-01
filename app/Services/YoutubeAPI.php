<?php

namespace App\Services;

use Google\Client;
use Google\Service\YouTube;

class YoutubeAPI
{
    private $client;
    private $youtube;

    public function __construct()
    {
        $this->client = new Client();
        $this->client->setApplicationName(config("youtube.api.name"));
        $this->client->setDeveloperKey(config("youtube.api.key"));
        $this->youtube = new YouTube($this->client);
    }

    public function __get($name)
    {
        return $this->youtube->$name;
    }
}

<?php
/**
 * Created by PhpStorm.
 * User: sylwester
 * Date: 09.09.16
 * Time: 21:48
 */

namespace App\Integration\Jira;


use GuzzleHttp\Client;

class JiraClient
{
    private $client;

    public function __construct()
    {
        $this->client = new Client(['base_uri' => 'http://jira.dev']);
    }

    public function getTaskByMilestone()
    {
        $ret = $this->client->get('/');
        return unserialize($ret->getBody()->getContents());
    }

}
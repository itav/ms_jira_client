<?php
/**
 * Created by PhpStorm.
 * User: sylwester
 * Date: 09.09.16
 * Time: 21:48
 */

namespace App\Integration\Jira;


use GuzzleHttp\Client;
use Itav\Component\Serializer\Serializer;

class JiraClient
{
    private $client;
    private $serializer;

    public function __construct()
    {
        $this->client = new Client(['base_uri' => 'http://jira.dev']);
        $this->serializer = new Serializer();
    }

    public function getTaskByMilestone()
    {
        $ret = $this->client->get('/');
        $code = $ret->getStatusCode();
        if(!in_array($code, [200,201])){
            return [];
        }

        $ret = json_decode($ret->getBody()->getContents(), true);
        if(JSON_ERROR_NONE !== json_last_error()){
            return [];
        }
        $tasks = [];
        foreach ($ret as $k => $v){
            $tasks[$k] = [
                'tasks' => $v
            ];
        }
        return $this->serializer->denormalize($tasks, Tasks::class.'[]');
    }

}
<?php

namespace App\Integration\Jira;

use Silex\Application;
use Symfony\Component\HttpFoundation\Request;

class Controller
{

    public function someAction(Application $app, Request $request)
    {
        $task = new Task;
        return $app->json($task);
    }
}

<?php


$app->get('/tasks', 'App\\Controller::getTasks')
    ->bind('homepage');

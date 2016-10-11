<?php
/**
 * Created by PhpStorm.
 * User: sylwester
 * Date: 09.09.16
 * Time: 21:44
 */

namespace App\Integration\Jira;

class Tasks
{
    /**
     * @var Task[]
     */
    private $tasks;

    /**
     * @return Task[]
     */
    public function getTasks(): array
    {
        return $this->tasks;
    }

    /**
     * @param Task[] $tasks
     * @return Tasks
     */
    public function setTasks(array $tasks): Tasks
    {
        $this->tasks = $tasks;
        return $this;
    }

    /**
     * @param int $index
     * @return Task
     */
    public function getTask(int $index): Task
    {
        return isset($this->tasks[$index])? $this->tasks[$index] : null;
    }


}
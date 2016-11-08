<?php

use Illuminate\Foundation\Testing\DatabaseMigrations;

class TaskApiTest extends TestCase
{
    private $URI = '/api/task';

    use DatabaseMigrations;

    /**
     * A basic test example.
     *
     * @return void
     */
    public function testShowAllTasks()
    {
        $this->json('GET', $this->URI)
        ->dump();
//        ->seeJson();
    }

    /**
     * @group failing
     */
    public function testShadowOneTask()
    {
        $task = factory(App\Task::class)->create();
        $this->json('GET', $this->URI.'/'.id)
                ->seeJsonStructure([
                    'id', 'name', 'done', 'priority',
                ]);
//                ->seeJsonContains([
//                   "name" => $task->name,
//                    "done" => $task->done,
//                    "priority" => $task->priority
//                ]);
//            ->dump();
//            ->seeJson();
    }
}

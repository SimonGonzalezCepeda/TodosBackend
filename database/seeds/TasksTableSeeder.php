<?php

use Illuminate\Database\Seeder;

class TasksTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Task::class, 30)->create()->each(function ($user){
            $user->tasks()->saveMany(
                factory(App\Task::class, 5)->create(["user_id"=> $user->id])
            );
        });
        /*$task = factory(App\Task::class)->make();
        *   Create a temporal object that isn't saved into the DDBB
        */
    }
}

<?php

namespace App\Repositories;

use App\Repositories\Contracts\Repository;

class TaskRepository implements Repository
{

    public function find($id, $columns = array('*'))
    {
        return Task::findOrFail($id);
    }
}
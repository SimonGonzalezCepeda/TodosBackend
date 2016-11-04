<?php

namespace App\Transformers;

use App\Exceptions\IncorrectModelException;
use App\Transformers\Contracts\Transformer;

class TaskTransformer implements Transformer
{
    /**
     * @param $resources
     * @return array
     * @throws IncorrectModelException
     */
    public function transform($resources)
    {
        if (! $resources instanceof \App\Task){
            throw new IncorrectModelException();
        }
        return [
            "name" => $resources['name'],
            "done" => $resources['done'],
            "priority" => $resources['priority']
        ];
    }
}
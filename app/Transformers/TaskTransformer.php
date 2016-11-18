<?php

namespace App\Transformers;

use App\Exceptions\IncorrectModelException;

class TaskTransformer extends Transformer
{

    /**
     * @param $resources
     *
     * @throws IncorrectModelException
     *
     * @return array
     */

    public function transform($resources)
    {
        if (!$resources instanceof \App\Task) {
            throw new IncorrectModelException();
        }

        return [
            'name'     => $resources['name'],
            'done'     => $resources['done'],
            'priority' => $resources['priority'],
        ];
    }
}

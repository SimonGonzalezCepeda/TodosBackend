<?php

namespace App\Transformers\Contracts;

interface Transformer
{
    public function transform($resources);

    public function transformCollection($resources);

}
<?php
/**
 * Created by PhpStorm.
 * User: sylver
 * Date: 11/11/16
 * Time: 15:50
 */

namespace App\Transformers;

use App\Transformers\Contracts as ContractTransformer;

abstract class Transformer implements ContractTransformer
{
    /**
     * @param $resources
     * @return array
     */
    protected function transformCollection($resources){
        //Colection Laravel collections
        return array_map(function($resources){
            return $this->transformer->transform($resources);
        }, $resources);
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: sylver
 * Date: 11/11/16
 * Time: 15:50
 */

namespace App\Transformers;

use App\Transformers\Contracts\Transformer as ContractTransformer;

abstract class Transformer implements ContractTransformer
{
    /**
     * @param $resources
     * @return array
     */
    public function transformCollection($resources){
        //Colection Laravel collections
        return array_map(function($resources){
            return $this->transformer->transform($resources);
        }, $resources);
    }
}
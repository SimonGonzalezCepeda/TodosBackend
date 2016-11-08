<?php

namespace App\Http\Controllers;

use App\Transformers\Contracts\Transformer;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * @var Transformer
     */
    protected $transformer;

    /**
     * Controller constructor.
     *
     * @param Transformer $transformer
     */
    public function __construct(Transformer $transformer)
    {
        $this->transformer = $transformer;
    }

    /**
     * @param $resources
     *
     * @return array
     */
    protected function transformCollection($resources)
    {
        //Colection Laravel collections
        return array_map(function ($resources) {
            return $this->transformer->transform($resources);
        }, $resources);
    }
}

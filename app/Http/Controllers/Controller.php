<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\Repository;
use App\Transformers\Contracts\Transformer;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * @var Transformer
     */
    protected $transformer;

    protected $repository;

    /**
     * Controller constructor.
     * @param Transformer $transformer
     */
    public function __construct(Transformer $transformer, Repository $repository)
    {
        $this->transformer = $transformer;
        $this->repository = $repository;
    }

}

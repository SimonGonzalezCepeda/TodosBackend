<?php

namespace App\Http\Controllers;

use App\Repositories\Contracts\Repository;
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

    protected $repository;

    /**
     * Controller constructor.
     *
     * @param Transformer $transformer
     */
    public function __construct(Transformer $transformer, Repository $repository)
    {
        $this->transformer = $transformer;
        $this->repository = $repository;
    }

}

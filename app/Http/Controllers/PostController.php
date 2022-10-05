<?php

namespace App\Http\Controllers;
use App\Features\HandlePostFeature;
use Lucid\Units\Controller;

class PostController extends Controller
{
    public function index()
    {
        return $this->serve(HandlePostFeature::class);
    }

}

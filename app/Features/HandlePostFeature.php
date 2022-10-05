<?php

namespace App\Features;

use Illuminate\Http\Request;
use Lucid\Units\Feature;
use App\Domains\Post\Jobs\GetPostsJob;

class HandlePostFeature extends Feature
{
    public function handle(Request $request)
    {
        $post = $this->run(getPostsJob::class);
        return $post;
    }
}

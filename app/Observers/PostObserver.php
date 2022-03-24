<?php

namespace App\Observers;

use App\Events\PostPublishedEvent;
use App\Models\Post;
use Illuminate\Support\Facades\Event;

class PostObserver
{
    public function created(Post $post)
    {
        Event::dispatch(new PostPublishedEvent($post));
    }
}

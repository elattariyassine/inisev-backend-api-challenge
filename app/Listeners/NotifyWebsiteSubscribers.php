<?php

namespace App\Listeners;

use App\Events\PostPublishedEvent;
use Illuminate\Support\Facades\Artisan;

class NotifyWebsiteSubscribers
{
    public function handle(PostPublishedEvent $postPublishedEvent)
    {
        Artisan::call('post:notify-website-subscribers', ['post' => $postPublishedEvent->post->id]);
    }
}

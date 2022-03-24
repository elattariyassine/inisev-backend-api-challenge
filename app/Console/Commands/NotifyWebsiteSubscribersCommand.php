<?php

namespace App\Console\Commands;

use App\Models\Post;
use App\Models\User;
use App\Notifications\PostPublishedNotification;
use Illuminate\Console\Command;

class NotifyWebsiteSubscribersCommand extends Command
{
    protected $signature = 'post:notify-website-subscribers {post}';

    protected $description = 'Notify website subscribers for a given post';

    public function handle()
    {
        /** @var Post $post */
        $post = Post::query()->with('website.subscribers')->find($this->argument('post'));

        if (! $post) {
            $this->error('Given post is not found');

            return self::INVALID;
        }

        $post->website->subscribers->each(fn (User $subscriber) =>
            $subscriber->notify(new PostPublishedNotification($post))
        );

        return self::SUCCESS;
    }
}

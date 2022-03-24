<?php

namespace App\Notifications;

use App\Models\Post;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class PostPublishedNotification extends Notification implements ShouldQueue
{
    use Queueable;

    public Post $post;

    public function __construct(Post $post)
    {
        $this->post = $post;
    }

    public function via()
    {
        return ['mail'];
    }

    public function toMail()
    {
        return (new MailMessage)
            ->subject($this->post->title)
            ->greeting($this->post->title)
            ->line($this->post->description);
    }
}

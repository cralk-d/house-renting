<?php

namespace App\Observers;

use App\Notifications\NewPost;
use App\Post;
use App\Subscribe;
use App\User;

class PostObserver
{
    public function created(Post $post)
    {
        User::all()->except($post->user->id)
        ->each(function (User $user) use ($post)
        {
            $user->notify(new NewPost($post));
        });
        
    }
}

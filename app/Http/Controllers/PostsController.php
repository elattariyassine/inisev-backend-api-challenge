<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Models\Post;
use Illuminate\Http\Response;

class PostsController extends Controller
{
    public function store(StorePostRequest $request): Response
    {
        Post::query()->create($request->validated());

        return response()->noContent();
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\SubscribeToWebsiteRequest;
use App\Models\Website;
use Illuminate\Http\Response;

class WebsitesController extends Controller
{
    public function subscribe(Website $website, SubscribeToWebsiteRequest $request): Response
    {
        $website->subscribers()->syncWithoutDetaching($request->input('user_id'));

        return response()->noContent();
    }
}

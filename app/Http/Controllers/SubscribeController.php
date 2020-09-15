<?php

namespace App\Http\Controllers;

use App\Subscriber;
use App\Http\Requests\SuscribeRequest;
use Illuminate\Http\Request;

class SubscribeController extends Controller
{
   
    public function subscribe(SuscribeRequest $request)
    {
        $data = \array_merge($request->validated());
        Subscriber::create($data);
    }
}

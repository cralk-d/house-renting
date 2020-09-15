<?php

namespace App\Http\Controllers;


use App\Post;
use App\Feed;
use App\Booking;
use App\Http\Requests\BookHouseRequest;
use App\Http\Requests\SuscribeRequest;
use App\Subscribe;
use App\User;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $posts=Post::latest()->approved()->paginate(10);
        return view('frontend.index',compact('posts'));
    }
    public function subscribe(SuscribeRequest $request)
    {
        $data = \array_merge($request->validated());
        Subscribe::create($data);
        return \redirect()->back();
    }

    public function book(BookHouseRequest $request)
    {
       $data = array_merge($request->validated(),['status'=>'Pending']);
       Booking::create($data);
       return redirect()->back()->with('success','House is Requested successfully');

    }
    public function landlords()
    {
        $owners= User::all();
        return view('frontend.owners',\compact('owners'));
    }

    
    
    public function show(Request $request, Post $post)
    {
        return view('frontend.show',compact('post'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Notifications\NewPost;
use App\Post;
use App\User;
use Illuminate\Http\Request;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class PostController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return \view('posts.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return \view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = request()->validate([
            'price' => ['required','string'],
            'bedrooms'=>['required','integer'],
            'bathrooms'=>['required','integer'],
            'image' => ['required', 'image'],
            'image_i' => ['required','image'],
            'image_ii'=> ['required','image'],
            'image_iii' =>['required','image'],
            'description'=>['required','string','max:500'],
        ]);

        $imagePath = request('image')->store('uploads', 'public');
        $imagePath_i = request('image_i')->store('uploads','public');
        $imagePath_ii = request('image_ii')->store('uploads','public');
        $imagePath_iii = request('image_iii')->store('uploads','public');

        $image = Image::make(public_path("storage/{$imagePath}"))->fit(1200, 1200);
        $image_i = Image::make(public_path("storage/{$imagePath_i}"))->fit(1200, 1200);
        $image_ii = Image::make(public_path("storage/{$imagePath_ii}"))->fit(1200, 1200);
        $image_iii = Image::make(public_path("storage/{$imagePath_iii}"))->fit(1200, 1200);
        $image->save();
        $image_i->save();
        $image_ii->save();
        $image_iii->save();

        $post = auth()->user()->posts()->create([
            'price' => $data['price'],
            'bedrooms'=>$data['bedrooms'],
            'bathrooms'=>$data['bathrooms'],
            'image'=> $imagePath,
            'image_i'=>$imagePath_i,
            'image_ii'=>$imagePath_ii,
            'image_iii'=>$imagePath_iii,
            'description'=>$data['description'],
        ]);

        /*
        */
        Toastr::success('Post Successfully Saved :)','Success');
        return redirect('/posts/');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return \view('posts.show',compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return \view('posts.edit',compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return \redirect()->back();
    }
}

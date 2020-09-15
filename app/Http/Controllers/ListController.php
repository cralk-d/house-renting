<?php

namespace App\Http\Controllers\Owner;

use App\Http\Controllers\Controller;
use App\Landlord;
use App\Post;

class ListController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:landlord');
    }
    public function index()
    {
        return view('owner.lists.index');
        
    }
}

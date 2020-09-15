<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeriesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $series= Serie::all();
        return view('admin.series.index',compact('series'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.series.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(['prefix'=>'required | unique:series']);
       $request= array([
        'prefix'=> $request->prefix,
    ]);
    
    DB::table('series')->insert($request);
    return redirect('/admin/series/')->with('success',' Prefix is saved successfully');
    }

    
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Serie  $serie
     * @return \Illuminate\Http\Response
     */
    public function edit(Serie $serie)
    {
        return view('/admin/series/edit', compact('series'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Serie  $serie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Serie $serie)
    {
       
        $request->validate(['prefix'=>'required | unique:series']);
  
        $serie->update($request->all());
        return redirect('/admin/series/')->with('success','Series is updated succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Serie  $serie
     * @return \Illuminate\Http\Response
     */
    public function destroy(Serie $series)
    {
        $series->delete();
        return redirect('/admin/series/')->with('success','Serie is deleted successfully');
    }
}


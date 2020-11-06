<?php

namespace App\Http\Controllers;

use App\Models\Virus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VirusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //get data dfrom json 
        
        $jsonData = file_get_contents(base_path('resources/json/result.json'));
        
        $virus = json_decode($jsonData);
        
        //dump($virus);
        if(Auth::check()) {
          return view('virus.index',['virus'=>$virus]);
        }
 
        return('auth.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Virus  $virus
     * @return \Illuminate\Http\Response
     */
    public function show(Virus $virus)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Virus  $virus
     * @return \Illuminate\Http\Response
     */
    public function edit(Virus $virus)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Virus  $virus
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Virus $virus)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Virus  $virus
     * @return \Illuminate\Http\Response
     */
    public function destroy(Virus $virus)
    {
        //
    }
}

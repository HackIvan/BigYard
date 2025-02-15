<?php

namespace App\Http\Controllers;

use App\Recent;
use Illuminate\Http\Request;

class RecentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(auth()->user()->hasRole('seller')){

            $query->where('user_id', auth()->id());
        }
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
     * @param  \App\Recent  $recent
     * @return \Illuminate\Http\Response
     */
    public function show(Recent $recent)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Recent  $recent
     * @return \Illuminate\Http\Response
     */
    public function edit(Recent $recent)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Recent  $recent
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Recent $recent)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Recent  $recent
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recent $recent)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\InteractiveSession;
use Illuminate\Http\Request;

class InteractiveSessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $interactiveSessions = InteractiveSession::all();
        return view('cms.interactiveSessions.index', compact('interactiveSessions'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cms.interactiveSessions.create');
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
     * @param  \App\Models\InteractiveSession  $interactiveSession
     * @return \Illuminate\Http\Response
     */
    public function show(InteractiveSession $interactiveSession)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\InteractiveSession  $interactiveSession
     * @return \Illuminate\Http\Response
     */
    public function edit(InteractiveSession $interactiveSession)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\InteractiveSession  $interactiveSession
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, InteractiveSession $interactiveSession)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\InteractiveSession  $interactiveSession
     * @return \Illuminate\Http\Response
     */
    public function destroy(InteractiveSession $interactiveSession)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\UserReviews;
use Illuminate\Http\Request;

class UserReviewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $userReviews = UserReviews::all();
        return view('cms.usereviews.index', compact('userReviews'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('cms.usereviews.create');
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
     * @param  \App\Models\user_reviews  $user_reviews
     * @return \Illuminate\Http\Response
     */
    public function show(UserReviews $user_reviews)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\user_reviews  $user_reviews
     * @return \Illuminate\Http\Response
     */
    public function edit(UserReviews $user_reviews)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\user_reviews  $user_reviews
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserReviews $user_reviews)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\user_reviews  $user_reviews
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserReviews $user_reviews)
    {
        //
    }
}

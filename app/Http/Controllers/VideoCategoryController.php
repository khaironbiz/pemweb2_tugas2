<?php

namespace App\Http\Controllers;

use App\Models\Video_category;
use App\Http\Requests\StoreVideo_categoryRequest;
use App\Http\Requests\UpdateVideo_categoryRequest;

class VideoCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreVideo_categoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreVideo_categoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Video_category  $video_category
     * @return \Illuminate\Http\Response
     */
    public function show(Video_category $video_category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Video_category  $video_category
     * @return \Illuminate\Http\Response
     */
    public function edit(Video_category $video_category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateVideo_categoryRequest  $request
     * @param  \App\Models\Video_category  $video_category
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateVideo_categoryRequest $request, Video_category $video_category)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Video_category  $video_category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Video_category $video_category)
    {
        //
    }
}

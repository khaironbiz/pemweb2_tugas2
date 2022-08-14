<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;

class EventController extends Controller
{
    //tampil di landing page
    public function index()
    {
        $data = [
            'title'     => 'Events',
            'navbar'    => 'events',
        ];
        return view('landing.events.events', $data);
    }
    public function detail($slug)
    {

        $data = [
            'title'     => 'Event',
            'navbar'    => 'events',
        ];
        return view('landing.events.detail', $data);
    }
    //by kontributor
    public function list()
    {

        $data = [
            'title'     => 'Event',
            'navbar'    => 'events',
        ];
        return view('landing.events.kontributor.list', $data);
    }
    public function create()
    {

        $data = [
            'title'     => 'Event',
            'navbar'    => 'events',
        ];
        return view('landing.events.kontributor.create', $data);
    }
    //tampil di admin
    public function all()
    {
        $events = Event::all();
        $data = [
            'title'     => 'Events',
            'navbar'    => 'events',
            'class'     => 'event',
            'sub_class' => 'list',
            'events'    => $events
        ];
        return view('admin.event.index', $data);
    }
    public function add()
    {
        $data = [
            'title'     => 'Events',
            'navbar'    => 'events',
            'class'     => 'event',
            'sub_class' => 'list',

        ];
        return view('admin.event.create', $data);
    }
    public function store(StoreEventRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function edit(Event $event)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEventRequest  $request
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEventRequest $request, Event $event)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Event  $event
     * @return \Illuminate\Http\Response
     */
    public function destroy(Event $event)
    {
        //
    }
}

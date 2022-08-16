<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use App\Models\Partner;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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
        $event  = Event::all();
        $data   = [
            'title'     => 'Event',
            'navbar'    => 'events',
            'event'     => $event
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
        $partner    = Partner::all();
        $data = [
            'title'     => 'Events',
            'navbar'    => 'events',
            'class'     => 'event',
            'sub_class' => 'create',
            'partner'   => $partner

        ];
        return view('admin.event.create', $data);
    }
    public function store(StoreEventRequest $request)
    {
        $file = $request->file('file');
        // isi dengan nama folder tempat kemana file diupload
        $tujuan_upload = 'assets/upload/images/user/';
        // upload file
        $nama_file_baru = uniqid().$file->getClientOriginalName();
        $file->move($tujuan_upload,$nama_file_baru);

        $user = new User();
        $user->gelar_depan = $request->gelar_depan;
        $user->gelar_belakang = $request->gelar_belakang;
        $user->nama_depan = $request->nama_depan;
        $user->nama_belakang = $request->nama_belakang;
        $user->nama_lengkap = $request->gelar_depan." ".$request->nama_depan." ".$request->nama_belakang.", ".$request->gelar_belakang;
        $user->tgl_lahir ="1984-09-06";
        $user->jk = 1;
        $user->username = Str::slug($request->username, '-');
        $user->email = $request->email;
        $user->phone_cell = $request->phone_cell;
        $user->password = hash::make($request->password);

        $user->foto = $nama_file_baru;
        $user->save();

        if($user){

            return redirect()->route('user')->with(['success'=>'data anda tersimpan']);
        }else{
            return redirect()->route('example.data')->with(['error'=>'data gagal tersimpan']);
        }
    }


    public function detail_event($slug)
    {
        $event = Event::firstwhere('slug', $slug);
        $data   = [
            'title'     => 'Detail Event',
            'navbar'    => 'events',
            'class'     => 'event',
            'sub_class' => 'detail',
            'event'     => $event
        ];
        return view('admin.event.detail', $data);
    }
    public function edit_event($slug)
    {
        $event      = Event::firstwhere('slug', $slug);
        $partner    = Partner::all();
        $data       = [
            'title'     => 'Edit Event',
            'navbar'    => 'events',
            'class'     => 'event',
            'sub_class' => 'detail',
            'event'     => $event,
            'partner'   => $partner,
        ];
        return view('admin.event.edit', $data);
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

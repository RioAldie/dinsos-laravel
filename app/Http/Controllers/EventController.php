<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    // Menyimpan event baru ke database
    function show() {
        return view('events.show');
       }
   function create() {
    return view('event.add');
   }
   function submit(Request $request){
    $event = new Event();

    $event->judul = $request->judul;
    $event->lokasi = $request->lokasi;
    $event->peserta = $request->peserta;
    $event->date = $request->date;
    $event->waktu = $request->waktu;
    $event->isActive = 1;
    $event->save();

    return redirect()->route('events.show');
   }
   function edit(){
    return view('event.edit');
   }
}

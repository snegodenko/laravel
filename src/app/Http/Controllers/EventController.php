<?php

namespace App\Http\Controllers;


use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EventController extends Controller
{
    public function view()
    {
        $events = DB::table('events')->get();

        return view('events.index', ['events' => $events]);
    }


    public function event($id)
    {
        $event = DB::table('events')->find($id);
        return view('events.event', ['event' => $event]);
    }
}

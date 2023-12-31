<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function index() {
        
        $events = Event::all();
        return view ('home.index', [
            'events' => $events,
        ]);
    }

    public function create()
    {
        return view ('events.create');
    }

    public function store (Request $request)
    {
        $event = new Event;

        $event->title = $request->title;
        $event->city = $request->city;
        $event->private = $request->private;
        $event->description = $request->description;

        $event->save();

        return redirect('/')->with('msg', 'Evento cadastrado com sucesso!');

    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class EventsController extends Controller
{
    //
    public function index()
    {
        return Inertia::render('Events/Index', [
            // 'event' => $event->only(
            //     'id',
            //     'title',
            //     'start_date',
            //     'description'
            // ),
            'event' => 'The Events',
        ]);
    }
}

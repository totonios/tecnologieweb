<?php

namespace Ski360\Http\Controllers;

use Ski360\Evento;
use Illuminate\Http\Request;


class EventsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $eventi=Event::all();
      return view('eventi',compact('eventi'));

    }

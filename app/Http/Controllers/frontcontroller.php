<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class frontcontroller extends Controller
{
  public function index() {

    return view('homehome');
  }

  public function shop() {
    return view('shop');
  }

  public function team() {
    return view('team');
  }

  public function events() {
    return view('events');
  }

  public function single() {
    return view('single');
  }

  public function login(){
    return view('auth.login');
  }
}
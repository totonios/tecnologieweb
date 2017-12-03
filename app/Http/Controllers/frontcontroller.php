<?php

namespace Ski360\Http\Controllers;

use Ski360\Category;
use Ski360\Product;
use Illuminate\Http\Request;



class frontcontroller extends Controller
{
  public function homehome() {

    $products=Product::all();
    return view('homehome',compact('products'));
  }

  public function shop() {
    $products=Product::all();
    return view('shop',compact('products'));
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

  public function contact(){
    return view('contact');
  }

  public function eventi(){
    return view('eventi');
  }


}

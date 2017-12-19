<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<div class="col-md-12"><h2>Upcoming Events</h2></div>
@forelse($ciao as $evento)

  <div class="col-sm-4">
    <div class="thumbnail">
      <div class="overlay">
        <i class="fa fa-share md"></i>
      </div>
      <img class="img-responsive" alt="a" src="{{url('images',$evento->image)}}">
    </div>
    <div class="row">
      <div class="col-md-3">
        <h3><span class="label label-info">Jun 12</span></h3>
      </div>
      <div class="col-md-9">
          <strong>{{$evento->descrizione}}</strong><br>
          <em>at Grand Hotel Italia</em><br>
          <span class="small">10:00 AM - 21:00 PM</span>
      </div>
    </div>
  </div>


        @empty
        <h3>No shirts</h3>
       @endforelse

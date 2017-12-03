@extends('layout.appauth')

@section('content')

<div class="main">
  <div id="loginbackg">

 <div class="shop_top">
<div class="container">
 <div class="col-md-6">
    <div class="login-page">
     <h4 class="title">New Customers</h4>
     <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis</p>
     <div class="button1">
        <a href="register.html"><input type="submit" name="Submit" value="Create an Account"></a>
      </div>
      <div class="clear"></div>
     </div>
   </div>
   <div class="col-md-6">
    <div class="login-title">
           <h4 class="title">Registered Customers</h4>
     <div id="loginbox" class="loginbox">

    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
     {{ csrf_field() }}
         <fieldset class="input">
           <p id="login-form-username">
             <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                               <label for="email" class="col-md-4 control-label">E-Mail: </label>

                               <div class="col-md-4">
                                   <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

                                   @if ($errors->has('email'))
                                       <span class="help-block">
                                           <strong>{{ $errors->first('email') }}</strong>
                                       </span>
                                   @endif
                               </div>
                           </div>

                           <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                               <label for="password" class="col-md-4 control-label">Password</label>

                               <div class="col-md-4">
                                   <input id="password" type="password" class="form-control" name="password" required>

                                   @if ($errors->has('password'))
                                       <span class="help-block">
                                           <strong>{{ $errors->first('password') }}</strong>
                                       </span>
                                   @endif
                               </div>
                           </div>




             <input type="submit" name="Submit" class="button" value="Login"><div class="clear"></div>
          </div>
         </fieldset>
        </form>
     </div>
       </div>
    <div class="clear"></div>
   </div>
 </div>
 </div>
</div>
@endsection

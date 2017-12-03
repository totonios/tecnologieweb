@extends('layout.appauth')

@section('content')

<div class="main">
  <div id="loginbackg">

 <div class="shop_top">
<div class="container">
 <div class="col-md-6">
    <div class="login-page">
     <h4 class="title">Nuovo Utente?</h4>
     <p>La registrazione ti ruberà solo pochi secondi, e ti permetterà di....</p>
     <div class="button1">
        <a href="register.html"><input type="submit" name="Submit" value="Crea un account"></a>
      </div>
      <div class="clear"></div>
     </div>
   </div>
   <div class="col-md-6">
    <div class="login-title">
           <h4 class="title">Utente Registrato?</h4>
     <div id="loginbox" class="loginbox">

    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
     {{ csrf_field() }}
         <fieldset class="input">
           <p id="login-form-username">
             <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                               <label for="email" class="col-md-4 control-label">E-Mail: </label>

                               <div class="col-md-6">
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

                               <div class="col-md-6">
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

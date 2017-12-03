@extends('layout.appauth')

@section('content')

      <div class="main">
        <div id="loginbackg">

       <div class="shop_top">
      <div class="container">
       <div class="col-md-6">
          <div class="login-page">
           <h4 class="title">Registrarsi è bello! :)</h4>
           <p>Compila i campi qui di fianco per vivere un'esperienza a 360°</p>
           
            <div class="clear"></div>
           </div>
         </div>
         <div class="col-md-6">
          <div class="login-title">
                 <h4 class="title">Utente Registrato?</h4>
           <div id="loginbox" class="loginbox">

             <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
              {{ csrf_field() }}
               <fieldset class="input">
                 <p id="login-form-username">
                   <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                   <label for="name" class="col-md-4 control-label">   <span class="pull-right"> Nome </span> </label>
                      <div class="col-md-6">
                    <input id="name" type="text"  name="name" class="form-control" value="{{ old('name') }}" required autofocus>

                           @if ($errors->has('name'))
                               <span class="help-block">
                                   <strong>{{ $errors->first('name') }}</strong>
                               </span>
                           @endif
                       </div>

                     </div>
                     <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                       <label for="email" class="col-md-4 control-label">   <span class="pull-right"> E-Mail </span> </label>
                         <div class="col-md-6">
                       <input id="email" type="email" class="form-control"  name="email" value="{{ old('email') }}" required>

                             @if ($errors->has('email'))
                                 <span class="help-block">
                                     <strong>{{ $errors->first('email') }}</strong>
                                 </span>
                             @endif
                         </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                          <label for="password" class="col-md-4 control-label">   <span class="pull-right"> Password </span> </label>
                           <div class="col-md-6">
                          <input id="password" class="form-control" type="password" name="password" required>


                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                          </div>

                          <div class="form-group">
                              <label for="password-confirm" class="col-md-4 control-label">   <span class="pull-right"> Conferma Password </span> </label>
                              <div class="col-md-6">
                            <input id="password-confirm" class="form-control" type="password"  name="password_confirmation" required>
                              </div>
                            </div>

                            <button type="submit" class="btn btn-custom btn-lg btn-block">
                                      Registrati!
                                  </button>


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

</div>


@endsection

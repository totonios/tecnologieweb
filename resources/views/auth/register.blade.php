@extends('layout.appauth')

@section('content')
<div class="main">
  <div id="loginbackg">



      <section id="login">
          <div class="container">
          	<div class="row">
          	    <div class="col-xs-12">
              	    <div class="form-wrap">
                      <h1>Registrati a Ski360</h1>

                      <form class="form-horizontal" role="form" method="POST" action="{{ url('/register') }}">
                       {{ csrf_field() }}


                              <h1>Nome:</h1>
                                  <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <input id="name" type="text"  name="name" class="form-control" value="{{ old('name') }}" required autofocus>

                                          @if ($errors->has('name'))
                                              <span class="help-block">
                                                  <strong>{{ $errors->first('name') }}</strong>
                                              </span>
                                          @endif
                                      </div>

                                      <h1>E-mail</h1>

                                  <label for="email" class="sr-only">Password</label>
                                  <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">



                                          <input id="email" type="email" class="form-control"  name="email" value="{{ old('email') }}" required>

                                          @if ($errors->has('email'))
                                              <span class="help-block">
                                                  <strong>{{ $errors->first('email') }}</strong>
                                              </span>
                                          @endif
                                      </div>
                                      <h1>Inserisci Password</h1>


                                            <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">



                                                    <input id="password" class="form-control" type="password" name="password" required>

                                                    @if ($errors->has('password'))
                                                        <span class="help-block">
                                                            <strong>{{ $errors->first('password') }}</strong>
                                                        </span>
                                                    @endif
                                                </div>
                                                  <h1>Conferma Password</h1>

                                                  <div class="form-group">



                                                          <input id="password-confirm" class="form-control" type="password"  name="password_confirmation" required>
                                                      </div>



                              <button type="submit" class="btn btn-custom btn-lg btn-block">
                                        Register
                                    </button>
                                        </div>
                          </form>


          		</div> <!-- /.col-xs-12 -->
          	</div> <!-- /.row -->
          </div> <!-- /.container -->
      </section>



</div>


@endsection

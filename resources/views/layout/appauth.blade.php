<!DOCTYPE html>

<html>
 @include('partials.header')
	  </div>
		<div class="body">
		  @yield('content')
			</div>





</body>
 @include('partials.footer')

</html>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">









    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

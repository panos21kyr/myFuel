<!DOCTYPE html>
<html>
    <head>
        <title>{{env('APP_NAME')}}</title>
        {{-- bootstrap --}}
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        {{-- map --}}
        <script src="https://polyfill.io/v3/polyfill.min.js?features=default"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key={{config('googlemap')['map_apikey']}}&callback=initMap&libraries=&v=weekly" defer ></script>      
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="auth-check" content="{{ (Auth::check()) ? 'true' : 'false' }}">
      </head>
    <body>
    @yield('nav')
    <div id="map"></div>
    @yield('modals')
    <footer class="bg-light text-center text-lg-start">
      <div class="text-center p-3">
        © {{ date('Y')}} Copyright:
        <a class="text-dark" href="www.Myfuel.com">www.Myfuel.com</a>
      </div>
      </footer>
    <script type="text/javascript" src="{{asset('js/googlemapsfuel.js') }}"></script>
    <script type="text/javascript" src="{{asset('js/fuelsmap.js') }}"></script>
    <script type="text/javascript" src="{{asset('js/googlemap.js') }}"></script>
    </body>
</html>
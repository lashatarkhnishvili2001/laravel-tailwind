<!doctype html>
<html lang="en">
  <head>
   @include('templates.head')
</head>
    <body>
    
        @include('templates.nav-bar')
        <div class="containe-fluid py-3">
            @yield('content')
        </div>

        @include('templates.script')

        @yield('script')
    </body>
</html>
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

       

        <!-- Styles -->
        
        <link rel="stylesheet" href="{{ asset('css/main.css')}}">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset ('css/font-awesome.min.css') }}" >
        <link rel="stylesheet" href="{{ asset('css/blog.css')}}">
       @yield('style')
    </head>
    @include('partials._nav')
    
    <body>
        <div class="container">
            <div class="row">
                
                    @yield('content')
                        
            </div>
        </div>
        @include('partials._footer')
       
    </body>
</html>

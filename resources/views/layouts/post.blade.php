<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name','Blogpedia')}}</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        
        <link rel="icon" type="image" href="/favicon/favicon.ico">
        <!-- Styles -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        
    </head>
    <body class="d-flex flex-column min-vh-100">
        @include('inc.topbar')
        @include('inc.nav')
        {{-- @include('inc.hero') --}}
        <div class="container">
            @include('inc.messages')
            @yield('content')
        </div>
            @include('inc.footer') 
    </body>
</html>
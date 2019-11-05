<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
     <link rel="stylesheet" href="{{asset('css//bootstrap.css')}}">
     <link rel="stylesheet" href="{{asset('css//style.css')}}">
     <link rel="stylesheet" href="{{asset('css//mdi.css')}}">
     <link rel="stylesheet" href="{{asset('css//fl-bigmug-line.css')}}">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
      
    </head>
    <body>
       @yield('content')
    </body>
</html>

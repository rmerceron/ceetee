<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    </head>

    <body class="font-sans text-black antialased">

    <div id="app" class=" flex justify-center items-center">
        <shop-card :shops="{{$shops}}" ></shop-card>
    </div>

    <script src="./js/app.js"></script>
    </body>
</html>

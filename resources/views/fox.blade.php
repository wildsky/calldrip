<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>A Random fox!</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
        .mainImage {
            display:block;
            width:90%;
            margin-left: auto;
            margin-right: auto
            }

        .center-text {
            text-align: center;
        }
        </style>
    </head>

    <body>
        <div>
            <h2 class="center-text">Showing: {{$imgUrl}}</h2>
            </P>
            <img class='mainImage' src="{{$imgUrl}}" alt="" />
        </div>
    </body>
</html>

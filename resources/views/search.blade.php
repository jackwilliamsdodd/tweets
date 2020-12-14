<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css"/>

    <link rel="stylesheet" href="{{mix('css/app.css')}}">
    <style type="text/css">
        @font-face {
            font-family: GalanoGrotesqueBold;
            src: url('{{ asset('/fonts/Galano-Grotesque-Bold.otf') }}');
        }
    </style>
    <title>Tweets</title>
</head>
<body>


<div id="app">

    <div class="container">

        <h1 class="title">Tweets</h1>

        <div>
        <br><br>
        <searchbar></searchbar>
        <tweets></tweets>

</div>
    </div>
</div>



<script async src="{{mix('js/app.js')}}"></script>

</body>

</html>


<!DOCTYPE html>
<html>
<head>
    <title>Practice</title>

    <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;
            font-family: 'Lato';
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 96px;
        }
    </style>
</head>
<body>

{{--}}Standard PHP adat kiírás {{--}}
<?php foreach ($people as $person) : ?>
<li><?= $person;?></li>
<?php endforeach; ?>



{{--}}Laravel way{{--}}
@foreach ($people as $person)
        {{$person}}
@endforeach
<br>
@if (empty($people))
    There is no people
@else
    There are some people
@endif
<br>
@unless (empty($people))
    There are some people (with unless)
@endunless

</body>
</html>

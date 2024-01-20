<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>Weather Report</h1>
    <h2>Location:{{$location}}</h2>
    <h2>Current Temperature:{{$currentTemp}}°C</h2>
    <h2>Weather Condition:{{$currentCondition}}</h2>
</body>
</html>
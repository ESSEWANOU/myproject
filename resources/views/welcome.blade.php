@inject('date','App\Utilities\Date')

@extends('layouts.application')

<h1>Demo</h1>
{{$name}}






 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Demo</title>
</head>
<body>
<h1>Demo</h1>
{{$name}}
   

    @if($date->isWeekend())
    {{"C'est le weekand"}}

    @else
     {{"ce ne pas le weekend"}}

    @endif


</body>
</html>
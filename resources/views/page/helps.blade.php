
@inject('date','App\Utilities\Date')
@extends('layouts.application')

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>helps</title>
</head>
<body>
   <h1>helps</h1>

   @if($date->isWeekend())
    {{"C'est le weekand"}}
   @else
     {{"ce ne pas le weekend"}}
   @endif


</body>
</html>
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>Title</title>
</head>
<body>

<h1>React Default Example</h1>

<div id="example">
    <example-component></example-component>
</div>

<script src="{{ asset('/js/app.js') }}"></script>
</body>
</html>
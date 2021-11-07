<?php $data = 'admin ' . Request::route()->getName(); ?>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title class="title">{{ ucwords($data) }}</title>
    <link rel="icon" href="{{asset("") }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        .titleadmin{
            text-transform: uppercase;
        }
    </style>
      @include('snippets/fonts')
</head>


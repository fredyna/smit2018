<!DOCTYPE html>

<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0">

  <title>Komunitas SMIT</title>
  {{--  icon logo  --}}

  <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,400,600,700,300&subset=latin" rel="stylesheet" type="text/css">
  <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet" type="text/css">

  {{--  Core stylesheets  --}}
  <link href="{{ asset('template-admin/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('template-admin/css/pixeladmin.min.css') }}" rel="stylesheet" type="text/css">
  <link href="{{ asset('template-admin/css/widgets.min.css') }}" rel="stylesheet" type="text/css">

  {{--  font awesome  --}}
  <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">

  {{--  Theme  --}}
  <link href="{{ asset('template-admin/css/themes/clean.min.css') }}" rel="stylesheet" type="text/css">

  {{-- include style --}}
  @@yield('mystyle')
</head>
<body>
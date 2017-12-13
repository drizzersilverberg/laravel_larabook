<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>Larabook</title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
  <style type="text/css">
    body {
      padding-top: 70px;
    }
  </style>
</head>
  <body>

    @include('layouts.partials.nav')

    <div class="container">
      @yield('content')
    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" type="text/javascript" charset="utf-8" async defer></script>
  </body>
</html>

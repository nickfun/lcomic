<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <title>@yield('title')</title>
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet">
  <script src="//code.jquery.com/jquery.js"></script>
  @yield('head')
</head>
<body>
  <h1>@yield('title')</h1>
  @yield('body')
</body>
</html>

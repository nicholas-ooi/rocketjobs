<!DOCTYPE html>
<html>
<head>
  @include('layouts.header')
</head>
<body>
@include('layouts.followingnavbar')
@yield('content')
</body>
<footer>
      @include('layouts.footer')
</footer>
</html>

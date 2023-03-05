<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <!-- Bootstrap core CSS -->
    <link href="{{ asset('css/bootstrap.min.css')}}" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Découverte jquery</title>
    <title></title>
  </head>
  <body>
    @yield('content')
    <script src="{{ asset('js/jquery-3.6.0.js' )}}" type="text/javascript"></script>
    <script src="{{ asset('js/search.js' )}}" type="text/javascript"></script>
    <script type="text/javascript">
      //$('p').hide();
    </script>
  </body>
</html>

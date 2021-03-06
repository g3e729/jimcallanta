<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Jim Callanta portfolio and works"/>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="shortcut icon" type="image/png" href="{!! asset('favicon.ico') !!}"/>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  <link href="{!! asset('css/app.css') !!}" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.5.2/animate.min.css">
  
  <title>@yield('title', 'Jim Callanta')</title>
</head>
<body>
  
@include('partials.sidebar')
  
<div class="wrapper">
@yield('content')
<div class="mobile">menu</div>
</div> <!-- Wrapper -->
</body>

<script src="http://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script>
  $('.mobile').click(function() {
      $("#sidebar").toggleClass('active');
      var text = 'menu';

      if ($('#sidebar').hasClass('active')) {
        text = 'hide';
      }

      $(this).text(text);
  });
</script>

@stack('scripts')

</html>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>{{ config('app.name', 'Laravel')}} | @section('title') @show</title>

  <!-- Styles -->
  <link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
</head>
<body class="bg-flex">
  @include('inc.navbar')

  <div class="container">
    @include('inc.messages')

    @if(Request::is('/'))
      @include('inc.showcase')
    @endif

    <div class="row">
      <div class="col-sm-8">
        @yield('content')
      </div>
      <div class="col-sm-4">
        @include('inc.sidebar')
      </div>
    </div>
  </div>

  <div class="flex-grow-1"></div>

  <footer id="footer">
    <p>&copy; <?php echo date("Y"); ?> Acme.</p>
  </footer>

  @if(Request::is('contact'))
    @include('inc.focus')
  @endif
</body>
</html>
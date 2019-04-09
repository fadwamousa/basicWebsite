
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v3.8.5">
    <title>@yield('title') || Bootstrap</title>

    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    rel="stylesheet"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <!-- Custom styles for this template -->
    <link href="{{url('css/starter-template.css')}}" rel="stylesheet">
  </head>
  <body>
      @include('inc.navbar')

    <div class="container">
      @if(Request::is('/'))
        @include('inc.casejump')
      @endif
      <div class="row">

        @if(session('message'))
          <div class="alert alert-success">

            {{session('message')}}

          </div>
        @endif
        <div class="col-md-8 col-lg-8">
               @yield('content')
        </div>
        <div class="col-md-4 col-lg-4">
              @include('inc.sidebar')
        </div>

      </div>

    </div>

    <!-- Footer -->
  <footer class="page-footer font-small special-color-dark pt-4">

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">
      © 2018 Copyright: <span style="color:red">Fadwa-Mousa</span>
    </div>
    <!-- Copyright -->

    </footer>
  <!-- Footer -->

</body>
</html>

<!DOCTYPE html>

<html lang="({app()->getLocale() })">

  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{asset('css/app.css')}}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
    <title>Document</title>
  </head>

  <body class="d-flex flex-column" style="min-height:100vh;">


    @include('partials.menue')
    <div class="container flex-grow-1">
      <div class="row">
        <div class="col-md-12 pt-5">
          @yield('content')
        </div>
      </div>
    </div>
    @include('partials.menue-secondaire')

    <script src="{{asset('js/app.js')}}"></script>
  </body>
</html>
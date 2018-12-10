<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>@yield('title')</title>

    <link href="{{ asset('css/app.css')}}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <style type="text/css">
        
        body {
          padding-top: 3rem;
          padding-bottom: 3rem;
          color: #5a5a5a;
        }

        .carousel {
          margin-bottom: 4rem;
        }

        .carousel-caption {
          bottom: 3rem;
          z-index: 10;
        }

        .carousel-item {
          height: 32rem;
          background-color: #777;
        }
        .carousel-item > img {
          position: absolute;
          top: 0;
          left: 0;
          min-width: 100%;
          height: 32rem;
        }

        .marketing .col-lg-4 {
          margin-bottom: 1.5rem;
          text-align: center;
        }
        .marketing h2 {
          font-weight: 400;
        }
        .marketing .col-lg-4 p {
          margin-right: .75rem;
          margin-left: .75rem;
        }

        .featurette-divider {
          margin: 5rem 0;
        }

        .featurette-heading {
          font-weight: 300;
          line-height: 1;
          letter-spacing: -.05rem;
        }

        @media (min-width: 40em) {
          .carousel-caption p {
            margin-bottom: 1.25rem;
            font-size: 1.25rem;
            line-height: 1.4;
          }

          .featurette-heading {
            font-size: 50px;
          }
        }

        @media (min-width: 62em) {
          .featurette-heading {
            margin-top: 7rem;
          }
        }

    </style>
  </head>
  <body>
    @include('layouts.header')
    @yield('main')
    <script src="js/app.js"></script>
  </body>
</html>
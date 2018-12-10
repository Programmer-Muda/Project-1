<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Halaman Depan</title>

    <!-- import bootstrap -->
    <link href="{{ asset('css/app.css')}}" rel="stylesheet">

    <style type="text/css">
        /* GLOBAL STYLES
        -------------------------------------------------- */
        /* Padding below the footer and lighter body text */

        body {
          padding-top : 0;
          padding-bottom: 3rem;
          color: #5a5a5a;
        }


        /* CUSTOMIZE THE CAROUSEL
        -------------------------------------------------- */

        /* Carousel base class */
        .carousel {
          margin-bottom: 4rem;
        }
        /* Since positioning the image, we need to help out the caption */
        .carousel-caption {
          bottom: 3rem;
          z-index: 10;
        }

        /* Declare heights because of positioning of img element */
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


        /* MARKETING CONTENT
        -------------------------------------------------- */

        /* Center align the text within the three columns below the carousel */
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


        /* Featurettes
        ------------------------- */

        .featurette-divider {
          margin: 5rem 0; /* Space out the Bootstrap <hr> more */
        }

        /* Thin out the marketing headings */
        .featurette-heading {
          font-weight: 300;
          line-height: 1;
          letter-spacing: -.05rem;
        }


        /* RESPONSIVE CSS
        -------------------------------------------------- */

        @media (min-width: 40em) {
          /* Bump up size of carousel content */
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

    <header>
      <nav class="navbar navbar-expand-md navigasi">
        <a class="navbar-brand" href="#">Project-01</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
          <div class="navbar-nav mt-2 mt-md-0 ml-auto">
            <div class="btn-group">
              <a class="btn btn-primary " id="khusus">Login</a>
              <a class="btn btn-primary ">Register</a>
            </div>
          </div>
        </div>
      </nav>
    </header>

    <main role="main">

      <div class="jumbotron jumbotron-fluid slet">
        <h1>
          Make the <strong>World</strong> <br> Be a <strong>Better</strong> place
        </h1>
      </div>


      <div class="container marketing">

        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Ngobrol Langsung <span class="text-muted">Dengan Para Pelajar</span></h2>
            <p class="lead">Dengan fitur real time chat kalain bisa mengobrol langsung dengan para pelajar sambil menyelesaikan
            soal soal yang sedang kamu kerjakan.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7 order-md-2">
            <h2 class="featurette-heading">Adu Otak Dengan Pelajar Lain <span class="text-muted">Dengan Kuis.</span></h2>
            <p class="lead">
                Setiap seminggu sekali akan diadakan kuis untuk menguji siapa yang memiliki nilai terbaik pada setiap minggunya
            </p>
          </div>
          <div class="col-md-5 order-md-1">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-7">
            <h2 class="featurette-heading">Edit Atau Tambah Materi Baru <span class="text-muted">Oleh Dirimu Sendiri.</span></h2>
            <p class="lead">disini kamu dapat mengedit atau membuat materi baru tentunya dengan persetujuan para admin.</p>
          </div>
          <div class="col-md-5">
            <img class="featurette-image img-fluid mx-auto" data-src="holder.js/500x500/auto" alt="Generic placeholder image">
          </div>
        </div>

        <hr class="featurette-divider">

        <!-- /END THE FEATURETTES -->

      </div><!-- /.container -->


      <!-- FOOTER -->
      <footer class="container">
        <p class="float-right"><a href="#">Keatas</a></p>
        <p>&copy; 2017-2018 TeenPoi &middot; <a href="#">Privacy</a> &middot; <a href="#">Terms</a></p>
      </footer>
    </main>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/app.js"></script>
  </body>
</html>

@extends('layouts.master')

@section('main')
    <main role="main">

      <div id="myCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="first-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="First slide">
            <div class="container">
              <div class="carousel-caption text-left">
                <h1>Belajar Bersama</h1>
                <p>Mari mulai belajar bersama kita, lalu mulai daftar untuk memulai</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">daftar</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="second-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Second slide">
            <div class="container">
              <div class="carousel-caption">
                <h1>Belajar Lagi</h1>
                <p>Pelajari berbagai macam rumus untuk memecahkan soal soal yang sedang kamu pelajari </p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Rumus</a></p>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="third-slide" src="data:image/gif;base64,R0lGODlhAQABAIAAAHd3dwAAACH5BAAAAAAALAAAAAABAAEAAAICRAEAOw==" alt="Third slide">
            <div class="container">
              <div class="carousel-caption text-right">
                <h1>Saling Bertanya Dan Saling Membantu sesama pelajar</h1>
                <p>Mulailah dengan bertanya atau menjawab soal matematika yang sedang kamu pelajari</p>
                <p><a class="btn btn-lg btn-primary" href="#" role="button">Forum</a></p>
              </div>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
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
@endsection()


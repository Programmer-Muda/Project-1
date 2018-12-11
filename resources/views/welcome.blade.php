@extends('layouts.master')

@section('main')
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
@endsection()


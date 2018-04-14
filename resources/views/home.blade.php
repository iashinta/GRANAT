@extends('home-template.nav-reg')

@section('Title')
	GrAnaT
@endsection

@section('body')
    <!--==========================
    Hero Section
  ============================-->

  <section id="hero">
    <div class="hero-container">
      <h1>Welcome to GrAnaT {{ Auth::user()->name }}!</h1>
      <h2>Tidak Alasan Untuk Menyembunyikan Bakatmu</h2>
      <h2>"Hail a New Dawn!"</h2>
    </div>
  </section><!-- #hero -->
  <main id="main">
@endsection
@extends('home-template.app')

@section('Title')
	Welcome to GrAnaT
@endsection

@section('body')
    <!--==========================
    Hero Section
  ============================-->
  @if (Auth::guest())
  <section id="hero">
    <div class="hero-container">
      <div >
        <img class="img_hero" src="{{ asset('images\hero_logo.png')}}">
      </div>
<!--       <h1>Welcome to GrAnaT!</h1>
      <h2>"Symphony of Divergency"</h2> -->
      <a href="{{url('register')}}" class="btn-get-started">Daftar Sekarang</a>
    </div>
  </section><!-- #hero -->

  @else

  <section id="hero">
    <div class="hero-container">
      <div >
        <img class="img_hero" src="{{ asset('images\hero_logo.png')}}">
      </div>
      <h1>Welcome to GrAnaT {{ Auth::user()->name }}!</h1>
      <h2>Tidak Alasan Untuk Menyembunyikan Bakatmu</h2>
      <h2>"Symphony of Divergency"</h2>
    </div>
  </section><!-- #hero -->
  <main id="main">
  @endif

    <!--==========================
      About Us Section
    ============================-->
    <section id="about">
      <div class="container layer">
        <div class="row about-container">

          <div class="col-lg-6 content order-lg-1 order-2 wow fadeInUp">
            <h2 class="title">About GrAnaT</h2>
            <h3 class="sub-title">"Gelar Apresiasi Anak Teknik"</h3>
            <p>
              GrAnaT (Gelar Apresiasi Anak Teknik) merupakan kegiatan tahunan dari Senat Mahasiswa Fakultas Teknik Universitas Udayana. GrAnaT merupakan Event Underground kampus terbesar yang ada di Bali yang menampilkan band-band Bali dengan Aliran musik Underground
            </p>

            <div class="icon-box">
              <div class="icon"><i class="fa fa-quote-right"></i></div>
              <h4>"Symphony of Divergency"</h4>
              <p class="description">lorem ipsun dolor sit amet, lorem ipsun dolor sit amet,lorem ipsun dolor sit amet</p>
            </div>

            <div class="read-more pull-right">
              <a href="#">Read More </a><i class="fas fa-angle-double-right"></i>
            </div>


          </div>

          <div class="col-lg-6 background order-lg-2 order-1 wow fadeInDown"></div>
        </div>

      </div>
    </section><!-- #about -->
    <!--==========================
      Timeline Section
    ============================-->
    <section id="news">
      <div class="container">
        <div class="page-header">
          <h1 id="timeline">News</h1>
        </div>
        <!-- isi timeline begin -->
        <div >
        <ul class="timeline">
          <li class="wow fadeInLeft">
            <div class="timeline-badge"><i class="far fa-edit"></i></div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4 class="timeline-title">lorem Ipsun 1</h4>
              </div>
              <div class="timeline-body">
                <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo.</p>
              </div>
            </div>
          </li>
          <li class="timeline-right wow fadeInRight">
            <div class="timeline-badge"><i class="fab fa-bitcoin"></i></div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4 class="timeline-title">Lorem Ipsun 2</h4>
              </div>
              <div class="timeline-body">
                <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis.</p>
              </div>
            </div>
          </li>
          <li class="wow fadeInLeft">
            <div class="timeline-badge"><i class="far fa-calendar-alt"></i></div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4 class="timeline-title">Lorem Ipsun 3</h4>
              </div>
              <div class="timeline-body">
                <p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis.</p>
              </div>
            </div>
          </li>
        </ul>
      </div>
    </section>
    <!--==========================
      Tour Section
    ============================-->
    <section id="facts">
      <div class="layer">
        <div class="container fadeInUp">
          <div class="section-header ">
           
            <h3 class="section-title-inverse"><span><i class="fa fa-road"></i></span> <strong>TOUR KOTA</strong></h3>
            <p class="section-description-inverse">
            GrAnat tidak hanya berhenti di satu tempat, tunggu kami di Kotamu! </p>
          </div>
          <div class="row counters">

      				<div class="col-lg-3 col-6 text-center">
                <div class="thumbnail">
                  <img class="img-kab" src="{{ asset('js\images\kab1.jpg')}}">
                  <p><strong>Bangli</strong></p>
                  <p>12 Juli 2018</p>
                </div>
      				</div>

              <div class="col-lg-3 col-6 text-center">
                <div class="thumbnail">
                  <img class="img-kab" src="{{ asset('js\images\kab1.jpg')}}">
                  <p><strong>Gianyar</strong></p>
                  <p>19 Juli 2018</p>
                </div>
              </div>

              <div class="col-lg-3 col-6 text-center">
                <div class="thumbnail">
                  <img class="img-kab" src="{{ asset('js\images\kab1.jpg')}}">
                  <p><strong>Karangasem</strong></p>
                  <p>27 Juli 2018</p>
                </div>
              </div>

              <div class="col-lg-3 col-6 text-center">
                <div class="thumbnail">
                  <img class="img-kab" src="{{ asset('js\images\kab1.jpg')}}">
                  <p><strong>Klungkung</strong></p>
                  <p>3 Agustus 2018</p>
                </div>
              </div>
              
    			</div>

        </div>
      </div>
    </section><!-- #facts -->


  
    <!--==========================
      Contact Section
    ============================-->
    <section id="contact">
      <div class="container fadeInUp">
        <div class="section-header">
          <h3 class="section-title">Kontak</h3>
          <div class="kontak-isi">
            <div class="row">

            <div class="col-lg-6">

              <div class="info">
              <div>
                <i class="fa fa-map-marker"></i>



                <p>Universitas Udayana, Kampus Sudirman<br>Jalan P.B. Sudirman, Dangin Puri Klod, Denpasar Bar.Bali</p>
              </div>

              <div>
                <i class="fa fa-envelope"></i>
                <p>granatsmft@gmail.com</p>
              </div>

              <div>
                <i class="fa fa-phone"></i>
                <p>081 338 980 913</p>
              </div>
            </div>

              <div class="social-links">
              <a href="#" class="kontak-ico"><i class="fab fa-facebook"></i></a>
              <a href="https://www.instagram.com/granatsmft/" class="kontak-ico"><i class="fab fa-instagram"></i></a>
              <a href="#" class="kontak-ico"><i class="fab fa-whatsapp"></i></a>
              <a href="#" class="kontak-ico"><i class="fab fa-line"></i></a>
              <a href="#" class="kontak-ico"><i class="fab fa-youtube"></i></a>
            </div>

            </div>

            <div class="col-lg-6">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2788.9656192617163!2d115.2175817116393!3d-8.673187761872017!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd240ec7b6fbad9%3A0x870580569f7703d5!2sUniversitas+Udayana%2C+Kampus+Sudirman!5e0!3m2!1sen!2sin!4v1464236302846" width="100%" height="200" frameborder="0" style="border:0" scrolling="no" marginheight="0" marginwidth="0"></iframe></script>
            </div>
          </div>
          
            
          </div>
    </section><!-- #contact -->

  </main>
@endsection
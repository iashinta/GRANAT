@extends('home-template.app')

@section('Title')
	GrAnaT&reg; 2018
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
<!--       <h1>GrAnaT&reg; 2018</h1>
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
      <h1>WELCOME TO GrAnaT&reg;, {{ Auth::user()->name }}!</h1>
      <h2>The biggest underground music event in Bali</h2>
      <h2>" Symphony of Divergency "</h2>
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
            <h2 class="title">About GrAnaT&reg;</h2>
            <h3 class="sub-title">"Gelar Apresiasi anak Teknik"</h3>
            <p>
                GrAnaT&reg; merupakan event tahunan yang diselenggarakan oleh Senat Mahasiswa Fakultas Teknik Universitas Udayana <a href="https://smft.unud.ac.id" class="smft">(SMFT UNUD)</a>. Kegiatan ini merupakan warisan pemikiran dari senior terdahulu yang berusaha kami pertahankan sehingga GrAnaT&reg; tetap eksis dan berkembang dengan semangat untuk terus berkarya dan berjaya menjadi wadah bagi komunitas musik underground di Bali sehingga GrAnaT&reg; menjadi icon musik underground terbesar di Bali, GrAnaT&reg; terus berkembang dan menyuguhkan sesuatu yang baru dalam menciptakan event musik underground yang berkualitas.
            </p>
            <p>
                GrAnaT&reg; akan terus berkarya dan berinovasi menampilkan sesuatu yang baru agar selalu menjadi event yang ditunggu setiap tahunnya oleh para penikmat dan pecinta musik underground. 
            </p>

            <div class="icon-box">
              <div class="icon"><i class="fa fa-quote-right"></i></div>
              <h4>"Symphony of Divergency"</h4>
              <p class="description">Memiliki arti alunan musik yang berbeda. Symphony of Divergency memiliki makna bahwa GrAnaT&reg; 2018, menyatukan beberapa aliran musik underground yang berbeda. </p>
            </div>

            <div class="read-more pull-right">
              <a href="https://granatsmft.com/sejarah">Read More </a><i class="fas fa-angle-double-right"></i>
            </div>


          </div>

          <div class="col-lg-6 order-lg-2 order-1 wow fadeInDown">
              <div class="videoWrapper">
                  <iframe width="560" height="349"
                    src="https://www.youtube.com/embed/xKjD74z0xvI">
                    </iframe>
            </div>
          </div>
        </div>

      </div>
    </section><!-- #about -->
    <!--==========================
      Timeline Section
    ============================-->
    <section id="news">
      <div class="container">
        <div class="page-header">
          <h1 id="timeline">Pengumuman</h1>
        </div>
        <!-- isi timeline begin -->
        <div >
        <ul class="timeline">
          <li class="wow fadeInLeft">
            <div class="timeline-badge"><i class="far fa-edit"></i></div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4 class="timeline-title">Pendaftaran Band</h4>
              </div>
              <div class="timeline-body">
                <p>Pendaftaran band audition dibuka dari tanggal 6 Mei 2018 sampai 16 Juni 2018.</p>
              </div>
            </div>
          </li>
          <li class="timeline-right wow fadeInRight">
            <div class="timeline-badge"><i class="fab fa-bitcoin"></i></div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4 class="timeline-title">Pembayaran Registrasi Band Audition</h4>
              </div>
              <div class="timeline-body">
                <p>Pembayaran di transfer melalui Bank BRI sejumlah Rp.50.000,-<br>No. Rek 0248-01-024417-50-2 a.n. I Dewa Gede Wedrayana Kembar Suputra. Konfirmasi dan sertakan bukti pembayaran ke CP 082247819997.</p>
              </div>
            </div>
          </li>
          <li class="wow fadeInLeft">
            <div class="timeline-badge"><i class="far fa-calendar-alt"></i></div>
            <div class="timeline-panel">
              <div class="timeline-heading">
                <h4 class="timeline-title">Audisi CD</h4>
              </div>
              <div class="timeline-body">
                <p>Audisi CD akan dilaksanakan pada tanggal 17 Juni 2018 di Sekber FT UNUD, Kampus Sudirman, pengumuman lebih lanjut akan dipost segera. </p>
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
           
            <h3 class="section-title-inverse"><span><i class="fa fa-calendar"></i></span> <strong>Tanggal Penting GrAnaT&reg; </strong></h3>
            <p class="section-description-inverse">
                Catat tanggalnya! Jangan sampai ketinggalan GrAnaT&reg; tahun ini!!!</p>
          </div>
          <div class="row counters">

      				<div class="col-lg-3 col-6 text-center">
                  <div class="thumbnail">
                    <img class="img-kab" src="{{ asset('images\daftar.jpg')}}">
                    <p><strong>Pendaftaran Band</strong></p>
                    <p>6 Mei-16 Juni 2018</p>
                  </div>
                </div>
  
                <div class="col-lg-3 col-6 text-center">
                  <div class="thumbnail">
                    <img class="img-kab" src="{{ asset('images\cd.jpg')}}">
                    <p><strong>Audisi CD</strong></p>
                    <p>17 Juni 2018</p>
                  </div>
                </div>
  
                <div class="col-lg-3 col-6 text-center">
                  <div class="thumbnail">
                    <img class="img-kab" src="{{ asset('images\audition.jpg')}}">
                    <p><strong>Next Tour and Audition</strong></p>
                    <p>30 Juni 2018</p>
                  </div>
                </div>
  
                <div class="col-lg-3 col-6 text-center">
                  <div class="thumbnail">
                    <img class="img-kab" src="{{ asset('images\main.jpg')}}">
                    <p><strong>Main Event</strong></p>
                    <p>25 Agustus 2018</p>
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
          <h3 class="section-title">Contact</h3>
          <div class="kontak-isi">
            <div class="row">

            <div class="col-lg-6">

              <div class="info">
              <div>
                <i class="fa fa-map-marker"></i>



                <p>Sekretariat Bersama Fakultas Teknik Universitas Udayana<br>Jalan P.B. Sudirman, Denpasar, Bali 80234</p>
              </div>

              <div>
                <i class="fa fa-envelope"></i>
                <p>info@granatsmft.com</p>
              </div>

              <div>
                <i class="fa fa-phone"></i>
                <p>081 338 980 913</p>
              </div>
            </div>

              <div class="social-links">
              <a href="https://web.facebook.com/granatSMFTunud/" class="kontak-ico"><i class="fab fa-facebook"></i></a>
              <a href="https://www.instagram.com/granatsmft/" class="kontak-ico"><i class="fab fa-instagram"></i></a>
              <a href="https://twitter.com/granat_smft" class="kontak-ico"><i class="fab fa-twitter"></i></a>
              <a href="line://ti/p/@ibo3252f" class="kontak-ico"><i class="fab fa-line"></i></a>
              <a href="https://www.youtube.com/channel/UCJiGAXqyzXC74Cli2PDXJuQ" class="kontak-ico"><i class="fab fa-youtube"></i></a>
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
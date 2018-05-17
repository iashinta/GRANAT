@extends('home-template.nav-reg')

@section('Title')
	News GrAnaT&reg;
@endsection

@section('body')
<div class="reg-container">
	<div class="card container-fuild">
    <div class="container">
        <div class="row">
         
            <div class="col-lg-3">
                <h3 class="my-4">Menu</h3>
                <div class="list-group">
                    <a href="#" class="list-group-item">Audisi CD</a>
                    <a href="#" class="list-group-item">Next Tour and Auditio</a>
                    <a href="#" class="list-group-item">Main Event</a>
                </div>
            </div>
                <!-- /.col-lg-3 -->
                
                
                <div class="col-lg-9">
                    <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                        <ol class="carousel-indicators">
                          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                          <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                        </ol>
                        
                    <div class="carousel-inner" role="listbox">
                      <div class="carousel-item active">
                        <img class="d-block img-fluid" src="{{ asset('images\n0.jpg')}}" alt="First slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block img-fluid" src="{{ asset('images\n1.jpg')}}" alt="First slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block img-fluid" src="{{ asset('images\n2.jpg')}}" alt="Second slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block img-fluid" src="{{ asset('images\n3.jpg')}}" alt="Third slide">
                      </div>
                      <div class="carousel-item">
                        <img class="d-block img-fluid" src="{{ asset('images\n4.jpg')}}" alt="Third slide">
                      </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                    </a>
                  </div>
        
                  <div class="row">
        
                    <!-- Page Heading -->
                            <h1 class="my-4"><b>Berita Acara</b>
                                        <small></small>
                            </h1>
                        
                        @foreach($pengumumans as $pengumuman)  
                          <!-- Project One -->
                          <div class="row">
                            <div class="col-md-7">
                              <a href="#">
                                <img class="img-fluid rounded mb-3 mb-md-0" src="{{ asset("images/$pengumuman->gambar")}}" alt="">
                              </a>
                            </div>
                            <div class="col-md-5">
                              <h3>{{$pengumuman->judul}}</h3>
                              <p align="justify">
                                {{ str_limit(strip_tags($pengumuman->isi), 80) }}
                              </p>
                              @if (strlen(strip_tags($pengumuman->isi)) > 80)
                                    <a href="{{route('detail.news', $pengumuman->id)}}" class="btn btn-primary">Read More</a>
                              @endif
                            </div>
                          </div>
                          <!-- /.row -->
                    
                          <hr>
                        @endforeach
                          
                          <!-- /.row -->

                      <hr>
                
                              <!-- Pagination -->
                              <ul class="pagination justify-content-center">
                                <li class="page-item">
                                  <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">&laquo;</span>
                                    <span class="sr-only">Previous</span>
                                  </a>
                                </li>
                                <li class="page-item">
                                  <a class="page-link" href="#">1</a>
                                </li>
                                <li class="page-item">
                                  <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item">
                                  <a class="page-link" href="#">3</a>
                                </li>
                                <li class="page-item">
                                  <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">&raquo;</span>
                                    <span class="sr-only">Next</span>
                                  </a>
                                </li>
                              </ul>

                  </div>
                  <!-- /.row -->

                </div>
                <!-- /.col-lg-9 -->

        </div>
        <!-- /.row -->

    </div>
    <!-- /.container -->
</div>

@endsection
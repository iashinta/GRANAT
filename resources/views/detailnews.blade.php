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
                            
                  <div class="row">
        
                    <!-- Page Heading -->
                            <h1 class="my-4"><b>{{$pengumumans->judul}}</b>
                                        <small></small>
                            </h1>

                          <!-- Project One -->
                          <div class="row">
                            <div class="col-md-12" style="display:block;width:950px;text-align:center">
                              <a href="#">
                                <img src="{{ asset("images/$pengumumans->gambar")}}" alt="">
                              </a>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col-md-12" style="margin-top:30px;width:950px;padding:10px">
                              <p align="center">
                                {{ $pengumumans->isi }}
                              </p>
                            </div>
                          </div>
                          <!-- /.row -->
                    
                          <hr>
                          
                          <!-- /.row -->

                      <hr>

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
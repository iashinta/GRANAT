@extends('layouts.adm-app')

@section('Title')
	Pengumuman GrAnaT&reg;
@endsection

@section('content')
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                 <h2>GrAnaT&reg; 2018</h2>   
                   
                </div>
            </div>
             <!-- /. ROW  -->
            <div class="row">
                <div class="col-md-12">
                    <h3 style="padding:10px">Input Pengumuman</h3>
                    <div class="panel-body">
                        <form method="POST" action="" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group">
                                    <label>Input Judul</label>
                                    <input class="form-control" name="judul" placeholder="Judul Pengumuman" style="width:500px"/>
                            </div>
                            <div class="form-group">
                                <label>Input Gambar</label>
                                <input type="file" class="form-control" name="gambar" style="width:500px"/>
                            </div>
                            <div class="form-group">
                                    <label>Input Isi</label>
                                    <textarea class="form-control" name="isi" rows="5" placeholder="Masukkan Isi Pengumuman" style="width:500px"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Save</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection 
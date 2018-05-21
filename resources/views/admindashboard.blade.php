@extends('layouts.adm-app')

@section('Title')
	Dashboard GrAnaT&reg;
@endsection

@section('content')
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Selamat Datang di Halaman Administrator GrAnaT&reg; 2018</h2>   
                        <h5>You are logged in as {{Auth::guard('admin')->user()->username}}</h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
               
                <div class="row">
                    <div class="col-md-12">
                            <h3 style="padding:10px">Pengumuman</h3>
                            <div class="panel-body">
                                    <table class="table table-responsive table-hover" id="pengumuman" >
                                        <thead>
                                            <tr>
                                                <th >No</th>
                                                <th>Judul</th>
                                                <th>Isi</th>
                                                <th>Gambar</th>
                                                <th style="text-align: center">Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($pengumumans as $pengumuman)
                                                <tr>
                                                    <td>{{$pengumuman->id}}</td>
                                                    <td>{{$pengumuman->judul}}</td>
                                                    <td>{{$pengumuman->isi}}</td>
                                                    <td><center>
                                                        @if($pengumuman->gambar==NULL) -
                                                        @else
                                                            <a href="{{asset("images/$pengumuman->gambar")}}" class="fa fa-eye" aria-hidden="true"></a>
                                                        @endif
                                                    </center></td>
                                                    <td><div style="text-align: center">
                                                            <form method="GET" action="{{route('pengumuman.edit', $pengumuman->id)}}" style="display: inline-block">
                                                                {{csrf_field()}}
                                                                <button type="submit"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                                </button></form>
                                                            <form class='delete' method="POST" action="{{route('pengumuman.delete', $pengumuman->id)}}" style="display: inline-block">
                                                                {{csrf_field()}}
                                                                <input type="hidden" name="_method" value="DELETE">
                                                                <button type="submit" onclick="return confirm('Are you sure?')"><i class="fa fa-trash-o" aria-hidden="true"></i></button></form>
                                                        
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                        
                                    </table>
                            
                                
                            </div>

                        <!--End Advanced Tables -->
                    </div>
                </div>
        </div>
    </div>


@endsection 
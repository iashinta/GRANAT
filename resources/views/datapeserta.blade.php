@extends('layouts.adm-app')

@section('Title')
	Data Band GrAnaT&reg;
@endsection

@section('content')
<!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>Pendaftar Band Audition GrAnaT&reg; 2018</h2>   
                        <h5>You are logged in as {{Auth::guard('admin')->user()->username}}</h5>
                       
                    </div>
                </div>
                 <!-- /. ROW  -->
                 <hr />
               
            <div class="row">
                <div class="col-md-12">
                        <h3 style="padding:10px">Data Band</h3>
                        <div class="panel-body">
                                <table class="table table-responsive table-hover" id="dataTables-example" style="width:100%" >
                                    <thead >
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Band</th>
                                            <th>Email</th>
                                            <th>Genre</th>
                                            <th>Leader</th>
                                            <th>Asal</th>
                                            <th>No Identitas</th>
                                            <th>Riwayat</th>
                                            <th>Profil</th>
                                            <th>Lagu</th>
                                            <th>Link</th>
                                            <th>Logo</th>
                                            <th>No Telp</th>
                                            <th>Status</th>
                                            <th> </th>
                                        </tr>
                                    </thead>
                                    @foreach ($users as $user)
                                    <tbody>
                                        <tr>
                                            <td>{{$user->id}}</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->genre}}</td>
                                            <td>{{$user->leader}}</td>
                                            <td>{{$user->nama_kabupaten}}</td>
                                            <td>{{$user->no_id}}</td>
                                            <td><a href="{{asset("riwayats/$user->riwayat")}}" class="fa fa-download" aria-hidden="true"></a> {{$user->riwayat}}</td>
                                            <td><a href="{{asset("profils/$user->profil")}}" class="fa fa-download" aria-hidden="true"></a> {{$user->profil}}</td>
                                            <td><a href="{{asset("lagu/$user->lagu")}}" class="fa fa-download" aria-hidden="true"></a> {{$user->lagu}}</td>
                                            <td><a href="{{ $user->link }}">{{ $user->link }}</a></td>
                                            <td><a href="{{asset("logo/$user->logo")}}" class="fa fa-download" aria-hidden="true"></a> {{$user->logo}}</td>
                                            <td>{{$user->no_telp}}</td>
                                            <td>{{$user->status}}</td>
                                            <td style="text-align: center">
                                                <div>
                                                    @if($user->status=="Sudah Lunas")
                                                        <form method="POST" action="{{ route('cancel', $user->id) }}" style="display: inline-block">
                                                            {{csrf_field()}}
                                                            <button type="submit" class="btn btn-danger square-btn-adjust" style="background-color:red;border-radius: 3px">Batal Konfirmasi
                                                            </button>
                                                        </form>
                                                    @else
                                                        <form method="POST" action="{{ route('confirm', $user->id) }}" style="display: inline-block">
                                                            {{csrf_field()}}
                                                            {{ method_field('PATCH') }}
                                                            <button type="submit" class="btn btn-danger square-btn-adjust" style="background-color:green;border-radius: 3px">Konfirmasi
                                                            </button>
                                                        </form>
                                                    @endif
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                    @endforeach
                                </table>
                        
                            
                        </div>

                    <!--End Advanced Tables -->
                </div>
            </div>

@endsection 
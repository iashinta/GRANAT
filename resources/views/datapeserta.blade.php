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
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Data Band
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Band</th>
                                            <th>Email</th>
                                            <th>Genre</th>
                                            <th>Leader</th>
                                            <th>Asal</th>
                                            <th>No Identitas</th>
                                            <th>Link</th>
                                            <th>No Telp</th>
                                            <th>Status</th>
                                            <th> </th>
                                        </tr>
                                    </thead>
                                    @foreach ($users as $user)
                                    <tbody>
                                        <tr class="odd gradeX">
                                            <td>{{$user->id}}</td>
                                            <td>{{$user->name}}</td>
                                            <td>{{$user->email}}</td>
                                            <td>{{$user->genre}}</td>
                                            <td>{{$user->leader}}</td>
                                            <td>{{$user->asal}}</td>
                                            <td>{{$user->no_id}}</td>
                                            <td>{{$user->link}}</td>
                                            <td>{{$user->no_telp}}</td>
                                            <td>{{$user->status}}</td>
                                            <td style="text-align: center">
                                                <div>
                                                    <form method="GET" action="/#" style="display: inline-block">
                                                        {{csrf_field()}}
                                                        <button type="submit" href="/#"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                                        </button></form>
                                                    <form class='delete' method="POST" action="/#" style="display: inline-block">
                                                        {{csrf_field()}}
                                                        <input type="hidden" name="_method" value="DELETE">
                                                        <button type="submit"><i class="fa fa-trash-o" aria-hidden="true"></i></button></form>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                    @endforeach
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>

@endsection 
@extends('dashboard.layouts.app')

@section('title','Profile')

@section('page-title','Profile')

@section('dashboard-content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h2><b>Profile {{ Auth::user()->name }}</b></h2>        
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <form class="form-horizontal" method="POST" action="{{ route('editprofile', Auth::user()->id) }}" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <table style="table-layout:auto;width:500px">
                            <tr>
                                <td><label for="name">Nama Band</label></td>
                                <td>
                                    <div class="col-sm-5" >
                                        <input type="text" class="form-control" style="width:300px;border-radius:3px" id="name" name="name" value="{{ Auth::user()->name }}" required>
                                    </div>
                                </td>                            
                            </tr>
                            <tr>
                                <td ><label for="email">E-mail</label></td>
                                <td style="margin-bottom:20px">
                                    <div class="col-sm-5" >
                                        <input type="email" class="form-control" style="width:300px;border-radius:3px" id="email" name="email" value="{{ Auth::user()->email }}" required>
                                    </div>
                                </td>                            
                            </tr>
                            <tr>
                                <td><label for="genre">Genre</label></td>
                                <td>
                                    <div class="col-sm-5" >
                                        <input type="text" class="form-control" style="width:300px;border-radius:3px" id="genre" name="genre" value="{{ Auth::user()->genre }}" required>
                                    </div>
                                </td>                            
                            </tr>
                            <tr>
                                <td><label for="leader">Leader</label></td>
                                <td>
                                    <div class="col-sm-5" >
                                        <input type="text" class="form-control" style="width:300px;border-radius:3px" id="leader" name="leader" value="{{ Auth::user()->leader }}" required>
                                    </div>
                                </td>                            
                            </tr>
                            <tr>
                                <td><label for="asal">Asal</label></td>
                                <td>
                                    <div class="col-sm-5" >
                                        <select id="asal" name="asal" style="width:300px; padding:10px; border-radius:3px">
                                            @foreach($kabupatens as $asal)
                                                <option value="{{$asal->id}}" {{ $selectedvalue == $asal->id ? 'selected="selected"' : '' }}> {{$asal->name}} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </td>                            
                            </tr>
                            <tr>
                                <td><label for="no_id">No Identitas</label></td>
                                <td>
                                    <div class="col-sm-5" >
                                        <input type="text" class="form-control" style="width:300px;border-radius:3px" id="no_id" name="no_id" value="{{ Auth::user()->no_id }}" required>
                                    </div>
                                </td>                            
                            </tr>
                            <tr>
                                <td><label for="no_telp">No Telepon</label></td>
                                <td>
                                    <div class="col-sm-5" >
                                        <input type="text" class="form-control" style="width:300px;border-radius:3px" id="no_telp" name="no_telp" value="{{ Auth::user()->no_telp }}" required>
                                    </div>
                                </td>                            
                            </tr>
                        </table>    

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary" style="margin-top:10px">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
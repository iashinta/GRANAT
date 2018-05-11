@extends('dashboard.layouts.app')

@section('title','Profile')

@section('page-title','Profile')

@section('dashboard-content')
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <h2><b>Profile {{ Auth::user()->name }}!</b></h2>        
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <table>
                    @foreach ($users as $user)
                        <tr>
                            <td>Nama Band</td>
                            <td>{{$user->name}}</td>
                        </tr>
                    @endforeach
                    </table>
                </div>
            </div>
        </div>
    </div>


@endsection
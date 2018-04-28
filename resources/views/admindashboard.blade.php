@extends('layouts.adm-app')

@section('Title')
	Welcome Admin
@endsection

@section('content')
    <div id="page-wrapper" >
        <div id="page-inner">
            <div class="row">
                <div class="col-md-12">
                    <h2>Administrator Page</h2>   
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in as {{Auth::guard('admin')->user()->username}}
                       
                </div>
            </div>
            <hr />       
        </div>
             <!-- /. PAGE INNER  -->
    </div>

@endsection
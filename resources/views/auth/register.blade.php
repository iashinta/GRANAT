@extends('home-template.nav-reg')

@section('Title')
	Register GrAnaT&reg;
@endsection

@section('body')
	<div class="reg-container">
		<div class="card container-fuild">
            <div class="container">
            <div class="row" >
                <div class="col-md-7">
                    <div class="panel panel-default">
                            <h3 class="title">REGISTER</h3>
                        <div class="panel-body">
                            <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                                {{ csrf_field() }}

                                <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                    <label for="name" class="col-md-8 control-label">Nama Band</label>

                                    <div class="col-md-8">
                                        <input  id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus
                                        >

                                        @if ($errors->has('name'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                                    <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                                    <div class="col-md-8">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                        @if ($errors->has('email'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                                    <label for="password" class="col-md-4 control-label">Password</label>

                                    <div class="col-md-8">
                                        <input id="password" type="password" class="form-control" name="password" required>

                                        @if ($errors->has('password'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                                    <div class="col-md-8">
                                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                                    </div>
                                </div>

                                <!-- <div class="form-group{{ $errors->has('asal') ? ' has-error' : '' }}">
                                    <label for="asal" class="col-md-4 control-label">Kota Asal</label>

                                    <div class="col-md-8">
                                        <input id="asal" type="text" class="form-control" name="asal" value="{{ old('asal') }}" required autofocus>

                                        @if ($errors->has('asal'))
                                            <span class="help-block">
                                                <strong>{{ $errors->first('asal') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                </div> -->

                                <!-- line baru -->
                                <div class="form-group">
                                    <label for="genre" class="col-md-4 control-label">Genre</label>

                                    <div class="col-md-8">
                                        <input id="genre" type="text" class="form-control" name="genre" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="leader" class="col-md-4 control-label">Leader Name</label>

                                    <div class="col-md-8">
                                        <input id="leader" type="text" class="form-control" name="leader" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="asal" class="col-md-4 control-label">Asal</label>

                                    <div class="col-md-8">
                                        <select id="asal" name="asal" style="width:390px; padding:10px; border-radius:3px"><br>
                                            @foreach($kabupatens as $asal)
                                                    <option value="{{$asal->id}}"> {{$asal->name}} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="no_id" class="col-md-4 control-label">No. Identitas (KTP)</label>

                                    <div class="col-md-8">
                                        <input id="no_id" type="number" class="form-control" name="no_id" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="no_telp" class="col-md-4 control-label">No. Telp / Hp</label>

                                    <div class="col-md-8">
                                        <input id="no_telp" type="number" class="form-control" name="no_telp" required>
                                    </div>
                                </div>
                                



                                <!-- line baru end -->

                                

                                

                                <div class="form-group">
                                    <div class="col-md-6 col-md-offset-4">
                                        <button type="submit" class="btn btn-primary">
                                            Register
                                        </button>
                                    </div>
                                </div>
					        
					        	<div class="form-group">
    						    <div>
    								<a class="btn btn-link" href="https://granatsmft.com/login">
    									already signed up? Login now >>
    								</a>
    						    </div>
    						    </div>
                            <!-- form end here -->
                            </form>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-md-5">
                    <div>
                        <h3 class="title">KELENGKAPAN</h3>
                        <p>Lorem ipsun</p>
                    </div>
                </div> -->
            </div>
        </div>
	</div>
   
    </div>
@endsection
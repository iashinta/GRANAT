@extends('home-template.nav-reg')

@section('Title')
	Log in GrAnaT&reg; 2018
@endsection

@section('body')
   
    <div class="login-container">
		<div class="card container-fuild">
			<div class="container">
				<div class="row">

				<div class="col-md-12">
					<div class="col-md-6 animate-box">
					<h3 class="title">LOG IN</h3>
					<form method="POST" action="{{ route('login') }}">
                        {{ csrf_field() }}
						<div class="row form-group{{ $errors->has('email') ? ' has-error' : '' }}">
							<div class="col-md-12">
								<label class="sr-only" for="email">Email</label>
								<input id="email" type="email" id="email" name="email" class="form-control" placeholder="E-mail" value="{{ old('email') }}" required autofocus>

								@if ($errors->has('email'))
									<span class="help-block">
										<strong>{{ $errors->first('email') }}</strong>
									</span>
								@endif
							</div>
						</div>

						<div class="row form-group{{ $errors->has('password') ? ' has-error' : '' }}">
							<div class="col-md-12">
								<label class="sr-only" for="password">Password</label>
								<input type="password" id="password" name="password" class="form-control" placeholder="Password" required>

								@if ($errors->has('password'))
                                    <span class="help-block">
                                    	<strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
							</div>
						</div>

						<div class="form-group">
							<div>
								<a class="btn btn-link" href="{{ route('password.request') }}">
									Forgot Your Password?
								</a>
							</div>
						<div>
								<a class="btn btn-link" href="https://granatsmft.com/register">
									Not Register? Register Now >>
								</a>
							</div>
							
							<input type="submit" value="Login" class="btn btn-primary">
							
						</div>

					</form>		
				
				</div>
				</div>
			</div>
		</div>
	</div>

@endsection


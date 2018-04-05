@extends('layout.app')

@section('Title')
	Sign In
@endsection

@section('content')
	<div class="row">
		<div class="leftcolumn">
			<div class="form-header">
				<center>
					<h1>SILAHKAN SIGN IN</h1>
				</center>
			</div>
			<div class="form-container">
				<form action="/user" method="post">
					{{csrf_field()}}
					<input type="text" name="username" placeholder="Username"><br>
					<input type="password" name="password" placeholder="Password"><br>

					<input type="submit" name="submit" value="Masuk" id="submit">
					@if (count($errors)>0)
							<div class="isa_error" align="center">
									@foreach ($errors->all() as $error)
										<li>{{ $error }}</li>
									@endforeach
							@endif
							</div>
				</form>
			</div>
		</div>
		<div class="rightcolumn">
			<div class="article">TITLE HEADING</div>
			<div class="img" style="height:200px;">Image</div>
			<div class="content"><p>Some text..</p>
				<p>Sunt in culpa qui officia deserunt mollit anim id est laborum consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco.</p>
			</div>
		</div>
		
	</div>
@endsection
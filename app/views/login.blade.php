<!DOCTYPE html>
<html>
<head>
	<title>Ardent Test</title>
</head>
<body>
	{{ Form::open(array('url'=>'login')) }}
	<h3>Please Login</h3>
	<div style="color:red;display:{{ ($errors->has())?'block':'none' }};">
			{{ HTML::ul($errors->all()) }}
	</div>
	<p>
	{{ Form::label('email', 'Email') }}
	{{ Form::text('email', Input::old('email'), array('placeholder'=>'your email')) }}
	</p>
	<p>
	{{ Form::label('password', 'Password') }}
	{{ Form::password('password', array('placeholder'=>'your password')) }}
	</p>
	{{ Form::submit('Login') }}
	{{ Form::close() }}
</body>
</html>

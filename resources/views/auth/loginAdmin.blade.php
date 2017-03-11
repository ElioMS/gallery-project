<!DOCTYPE html>
<html>
<head>
	<title></title>
	{{ Html::style('admin/css/admin.css?v=2.1') }}
	{{ Html::style('admin/semantic/semantic.min.css') }}
</head>
<body>
	<div class="image-opacity">
		<div class="opacity">

			<div class="middle">
				<h2 class="ui teal inverted center aligned icon header">
				  <i class="circular users icon"></i>
				   Admin Laravel Login
				</h2>
				<div class="ui  segment">
					{!! Form::open(['route' => 'admin.login.submit' , 'method' => 'POST']) !!}
						<div class="ui large form">

							<div class="field {{ $errors->has('username') ? 'error' : '' }}">
								<label> Username </label>
								{!! $errors->first('username', ' <div class="ui pointing below red basic label"> :message </div>') !!}
								<div class="ui left icon input">
									<i class="user icon"></i>
									<input type="text" name="username" placeholder="Username" autocomplete="false"/>
								</div>
							</div>

							<div class="field {{ $errors->has('password') ? 'error' : '' }}">
								<label> Password </label>
								{!! $errors->first('password', ' <div class="ui pointing below red basic label"> :message </div>') !!}
								<div class="ui left icon input">
									<i class="lock icon"></i>
									<input type="password" name="password" placeholder="Password" autocomplete="false" ..>
								</div>
							</div>
							
							<button class="ui fluid large teal button"> Login </button>
						</div>
					{!! Form::close() !!}
				</div>
			</div>

		</div>
	</div>
</body>
</html>

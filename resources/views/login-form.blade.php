<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">

	<title>Login Form</title>
	<!-- CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

</head>
<body>

	<div class="container">
		<div class="row">
			<div class="col-md-4" style="margin-top: 20px">
				<form action="{{ route('login.login') }}" method="POST">

					@csrf

					<div class="form-group">
						<label class="control-label">Username</label>
						<input type="text" class="form-control" name="username">
					</div>
					<div class="form-group">
						<label class="control-label">Password</label>
						<input type="password" class="form-control" name="password">
					</div>
					<button class="btn btn-primary" type="submit">Login</button>
				</form>
			</div>
		</div>
	</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<!-- J-Query -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<!-- Bootstrap script -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
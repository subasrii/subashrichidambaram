<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width,initial_scale=1">
	<title>login form</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js" ></script>
</head>
<body>
	<h1>login form</h1>
	<div class="container">
		<div class="row">
			<div class="col">
				<form method="post" action="logviw.php">
					<div class="form-group">
						<label class="form-label">Enter your name</label>
						<input type="text"  name="name" id="name" placeholder="enter your first name">
					</div>
						<div class="form-group">
						<label class="form-label">Enter your password</label>
						<input type="password" name="password" id="password">
					</div><br>
					<div class="form-group">
						<input type="submit" class="btn btn-success" name="save my data">
					</div><br>
					<div class="form-group">
						<input type="reset" class="btn btn-danger" name="reset data">
					</div>
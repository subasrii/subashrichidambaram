<html>
<head>
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.phptutorial.net/app/css/style.css">
    <title>Register form</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" >
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</head>
<body >
 	<h1 align="center">Registartion form</h1>
	
	<div class="container" align="center">
		<div class="row">
			<div class="col">
				<form method="post" action="save.php">
					<div class="form-group">
						<label class="form-label">Enter your first name</label>
						<input type="text"  name="name" id="name" placeholder="enter your first name">
					</div>
						<div class="form-group">
						<label class="form-label">Enter your last name</label>
						<input type="text"  name="lastname" id="lastname"placeholder="enter your last name">
					</div>
						<div class="form-group">
						<label class="form-label">Enter your password</label>
						<input type="password"  name="password" id="password" >
					</div>
						<div class="form-group">
						<label class="form-label">ReEnter your password</label>
						<input type="password"  name="reenterpassword" id="reenterpassword" >
					</div>
						<div class="form-group">
						<label class="form-label">Enter your email</label>
					<input type="email"  name="email" id="email">
					</div>
						<div class="form-group">
						<label class="form-label">Enter your mobile</label>
						<input type="number"  name="mobile" id="mobile">
					</div>
						<div class="form-group">
						<label class="form-label">Enter your address</label>
						<textarea  name="address" id="address" row="3"></textarea>
					</div>
					<div class="form-group">
						<label class="form-label"> gender</label>
						male<input type="radio" class="form-control-check" name="gender" value="male">
						female<input type="radio" class="form-control-check" name="gender" value="female">
					</div>
					<div class="form-group">
						<label class="form-label"> hobbies</label>
						hobby1<input type="radio" class="form-control-check" name="hobbies" value="hobby1">
						hobby2<input type="radio" class="form-control-check" name="hobbies" value="hobby2">
						hobby3<input type="radio" class="form-control-check" name="hobbies" value="hobby3">
					</div>
					<div class="form-group">
						<label class="form-label">select your DOB</label>
						<input type="date"  name="dob" id="dob">
					</div>
					<div class="form-group">
						<label class="form-label">select your country</label>
					<select  name="country" id="country">
						<option>india</option>
						<option>singabore</option>
						<option>london</option>
						<option>pakistan</option>
					</div>
					<br>
					<br>
					<div class="form-group">
						<input type="submit" class="btn btn-success" name="save my data">
					</div>
					<br>
					<div class="form-group">
						<input type="reset" class="btn btn-success" name="reset data">
					</div>
				
			
		</div>
		</div>
		</div>
		</body>
			</html>






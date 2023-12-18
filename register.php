<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Register</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/roboto-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-5/css/fontawesome-all.min.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="assets/register/css/style.css"/>
</head>
<body class="form-v5">
	<div class="page-content">
		<div class="form-v5-content">
			<form class="form-detail" action="#" method="post">
				<h2>Register Account Form</h2>
				<div class="form-row">
					<label for="full-name">Full Name</label>
					<input type="text" name="full-name" id="full-name" class="input-text" placeholder="Your Name" required>
					<i class="fas fa-user"></i>
				</div>
				<div class="form-row">
					<label for="your-email">Alamat</label>
					<input type="text" name="alamat" id="your-email" class="input-text" placeholder="Alamat" required pattern="[^@]+@[^@]+.[a-zA-Z]{2,6}">
					<i class="fas fa-envelope"></i>
				</div>
				<div class="form-row">
					<label for="password">Nomor Telepon</label>
					<input type="text" name="notelp" id="notelp" class="input-text" placeholder="Nomor Telepon" required>
					<i class="fas fa-lock"></i>
				</div>
				
				<div class="form-row">
					<label for="password">Email</label>
					<input type="email" name="email" id="email" class="input-text" placeholder="Email" required>
					<i class="fas fa-lock"></i>
				</div>
				<!-- <div class="form-row-last">
					<input type="submit" name="register" class="register" value="Register">
				</div> -->
				<div class="form-row">
					<label for="password">Password</label>
					<input type="password" name="password" id="password" class="input-text" placeholder="Your Password" required>
					<i class="fas fa-lock"></i>
				</div>
				<div class="form-row-last">
					<input type="submit" name="register" class="register" value="Register">
				</div>
			</form>
		</div>
	</div>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
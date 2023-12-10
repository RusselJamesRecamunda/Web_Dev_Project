<?php

if (isset($_POST['login'])) {
    try {

        // Establishing connection with the database
        include('connect.php');

        // Checking login info into the database using prepared statement
        $stmt = $conn->prepare("SELECT * FROM admininfo WHERE username=? AND password=? AND type=?");
        $stmt->bind_param("sss", $_POST['username'], $_POST['password'], $_POST['type']);
        $stmt->execute();
        $result = $stmt->get_result();
        $row = $result->num_rows;

        if ($row > 0 && $_POST["type"] == 'employee') {
            session_start();
            $_SESSION['name'] = "oasis";
            header('location: employee/index.php');
        } elseif ($row > 0 && $_POST["type"] == 'admin') {
            session_start();
            $_SESSION['name'] = "oasis";
            header('location: admin/signup.php');
        } else {
            throw new Exception("Username, Password, or Role is wrong, try again!");
            header('location: login.php');
        }
    } catch (Exception $e) {
        $error_msg = $e->getMessage();
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
	<!--===============================================================================================-->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/login_util.css">
	<link rel="stylesheet" type="text/css" href="css/login.css">
	<!--===============================================================================================-->
</head>
<body>

	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt" data-tilt>
					<img src="img/PC.png" alt="IMG">
				</div>

				<form method="post" action="login.php" class="login100-form validate-form">
					<span class="login100-form-title">
						Personal Collection Employee Attendance
					</span>

					<div class="wrap-input100 validate-input" data-validate="Valid username is required">
						<input id="input1" class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="material-symbols-outlined">account_circle</span>
						</span>
					</div>

					<div id="input1" class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<span class="material-symbols-outlined">lock</span>
						</span>
					</div>

					<!-- Login Options -->
					<div class="login-options">
						<label for="input1">Login As:</label>
						<label>
							<input type="radio" name="type" id="optionsRadios1" value="employee" checked> Employee
						</label>
						<label>
							<input type="radio" name="type" id="optionsRadios1" value="admin"> Admin
						</label>
					</div>

					<div class="container-login100-form-btn">
						<input type="submit" class="login100-form-btn" value="Login" name="login" />
					</div>

					<div class="text-center p-t-12">
						<p><strong><a href="reset.php" style="text-decoration:none;">Reset Password</a></strong></p>
					</div>
				</form>
			</div>
		</div>
	</div>

	<!--===============================================================================================-->	
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
	<!--===============================================================================================-->
	<script src="vendor/tilt/tilt.jquery.min.js"></script>
	<script>
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
	<!--===============================================================================================-->

</body>
</html>

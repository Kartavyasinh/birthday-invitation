<?php
session_start();

$guests = [
	'aditya bhai'	=> 'Aditya@2004',
	'chudel'		=> 'Chitra@2003',
	'kashish boii'	=> 'Kashish@2001',
	'ishita'		=> 'Ishita@2004',
	'mayurika'		=> 'Mayurika@2003',
	'jiten party'	=> 'Jiten@2003',
	'shastri veera'	=> 'Shastri@2004',
	'paji'			=> 'Parvindar@2003',
	'Zaigam bro'	=> 'Zaigam@2003',
	'Shubham bhai'	=> 'Shubham@2000',
	'vaghela'		=> 'Sahil@2005',
	'harshesh boii'	=> 'Harshesh@2001',
	'viraj'			=> 'Viraj@2005',
];
$error_msg		= '';
$name			= "";
$password       = "";
if(isset($_POST['name']))
{
	$name		= strtolower(trim($_POST['name']));
	$password	= trim($_POST['password']);

	if(isset($guests[$name]) && $password === $guests[$name])
	{
		$_SESSION['guest_name'] = $name;
		header('Location: invitation.php');
		exit;
	} else {
		$error_msg = "Invaild Guest Name or Password";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>BaNna's Birthday Party</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<div class="login100-pic js-tilt mb-5" data-tilt>
					<img src="images/img-03.avif" alt="IMG">
				</div>

				<form class="login100-form validate-form" method="post">
					<span class="login100-form-title">
						Invited Person Login
					</span>

					<div class="wrap-input100 validate-input" data-validate = "Guest Name is required">
						<input class="input100" type="text" name="name" placeholder="Guest Name" value="<?php echo $name;?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user" aria-hidden="true"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Password is required">
						<input class="input100" type="text" name="password" placeholder="Password" value="<?php echo $password; ?>">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock" aria-hidden="true"></i>
						</span>
					</div>
					<?php if ($error_msg): ?>
						<div class="error"><?php echo $error_msg; ?></div>
					<?php endif; ?>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Login
						</button>
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
	<script >
		$('.js-tilt').tilt({
			scale: 1.1
		})
	</script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
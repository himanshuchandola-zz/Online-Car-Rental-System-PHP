<!DOCTYPE html>
<html lang="en">
<head>
	<title>Online Car Rental System</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>

	<section class="">
		<?php
			include 'header.php';
		?>

			<section class="caption
				<h3 class="caption" style="text-align: center"><p><center><img src="img/csystem.png"><br><br><p><h1> Online Car Rental System</h1></p></center></p></h3>
			</section>
	</section><!--  end hero section  -->

<br><br><br><br><br><br><br><br><br><br>
	<section class="search">
		<div class="wrapper">
		<div id="fom">
			<form method="post">
			<p><img src="img/login-here.jpg"></P><br><br>
				<table height="200" align="center">
					<tr>
						<td>Email Address:</td>
						<td><input type="email" name="email" placeholder="Enter Email Address" required></td>
					</tr>
					<tr>
						<td>Password:</td>
						<td><input type="password" name="pass" placeholder="Enter Password" required></td>
					</tr>
					<tr>
						<center><td><input type="submit" name="log" value="Login "></td></center>
						
					</tr>
				</table>
			</form>
			<?php
				if(isset($_POST['log'])){
					include 'includes/config.php';
					
					$uname = $_POST['email'];
					$pass = $_POST['pass'];
					
					$qy = "SELECT * FROM client WHERE email = '$uname' AND id_no = '$pass'";
					$log = $conn->query($qy);
					$num = $log->num_rows;
					$row = $log->fetch_assoc();
					if($num > 0){
						session_start();
						$_SESSION['email'] = $row['email'];
						$_SESSION['pass'] = $row['id_no'];
						echo "<script type = \"text/javascript\">
									alert(\"Login Successful.\");
									window.location = (\"index.php\")
									</script>";
					} else{
						echo "<script type = \"text/javascript\">
									alert(\"Login Failed. Try Again\");
									window.location = (\"account.php\")
									</script>";
					}
				}
			?>
			</div>
			
		</div>

	</section><!--  end search section  -->

	<footer>
	<p><center><img src="img/logo.jfif"></center></p>
		<div class="copyrights wrapper">
			Copyright &copy; <?php echo date("Y")?> Online Car Rental System
		</div>
	</footer><!--  end footer  -->
	
</body>
</html>
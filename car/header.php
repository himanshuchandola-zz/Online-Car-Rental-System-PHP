<?php
	session_start();
	error_reporting("E-NOTICE");
?>
<header>
			<div class="wrapper">
			
				<h1 class="logo"><img src="img/carlogo.png"></h1>
				
				<a href="" class="hamburger"></a>
				<nav>
					<?php
						if(!$_SESSION['email'] && (!$_SESSION['pass'])){
					?>
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="rentcars.php">Rent Cars</a></li>
						<li><a href="account.php">Login</a></li>
						<li><a href="signup.php">Register</a></li>
						<li><a href="contact.php">Contact Us</a></li>
					</ul>
					<?php
						} else{
					?>
							<ul>
								<li><a href="index.php">Home</a></li>
								<li><a href="status.php">View Status</a></li>
								<li><a href="message_admin.php">Message Admin</a></li>
								<li><a href="admin/logout.php">Logout</a></li>
							</ul>
					
					<?php
						}
					?>
				</nav>
			</div>
		</header>
<?php if (isset($_SESSION['user']['username'])) { ?>
	<div>
		<?php include('reg_user_home.php'); ?>
	</div>
	<div class="logged_in_info">
		<span>Welcome <?php echo $_SESSION['user']['username'] ?></span>
		|
		<span><a href="logout.php">logout</a></span>
	</div>
<?php }else{ ?>
	<div class="banner">
		<div class="welcome_msg">
			<h1>What is your
				<br>wine topic
				<br>of the day?</h1>
		</div>

		<div class="signup_div">
			<div>
				<form method="post" >
					<h2>Join our Winepedia Community!</h2>
					<?php include(ROOT_PATH . '/includes/errors.php') ?>
					<input  type="text" name="username" value="<?php echo $username; ?>"  placeholder="Username">
					<input type="email" name="email" value="<?php echo $email ?>" placeholder="Email">
					<input type="password" name="password_1" placeholder="Password">
					<input type="password" name="password_2" placeholder="Password confirmation">
					<button type="submit" class="btn" name="reg_user">Register</button>
					<p>
						Already a member? <a class="sign_in_form" href="login.php">Sign in</a>
					</p>
				</form>
			</div>
		</div>
	</div>
<?php } ?>

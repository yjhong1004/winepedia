<!DOCTYPE html>
<html>
<head>

  <link href= "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Work+Sans:900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="static/css/styling.css">
	<meta charset="UTF-8">

<?php include('config.php') ?>
<?php  include('includes/registration_login.php'); ?>

	<title>WINEPEDIA | Sign in </title>
</head>
<body>
  <?php include('includes/navbar.php') ?>
<div class="container">


  <div class="signin_message">
    <h1>What are you waiting for?
      <br>
      All of your wine needs are met here
    </h1>
  </div>

  <div class="login_div">
    <div style="width: 40%; margin: 20px auto;">
  		<form method="post" action="login.php" >
  			<h2>SIGN IN</h2>
  			<?php include(ROOT_PATH . '/includes/errors.php') ?>
  			<input type="text" name="username" value="<?php echo $username; ?>" value="" placeholder="Username">
        <br>
  			<input type="password" name="password" placeholder="Password">
        <br>
  			<button type="submit" class="btn" name="login_btn">Login</button>
  			<p>
  				Not yet a member? <a class= "signup_form" href="index.php">Sign up</a>
  			</p>
  		</form>
  	</div>
  </div>

</div>
<!-- // container -->
</body>
</html>

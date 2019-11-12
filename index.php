<!DOCTYPE html>
<html>
<head>

  <link href= "https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Montserrat|Work+Sans:900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="static/css/styling.css">
	<meta charset="UTF-8">

  <?php require_once('config.php') ?>
  <?php require_once( ROOT_PATH . '/includes/public_functions.php') ?>
  <?php require_once( ROOT_PATH . '/includes/registration_login.php') ?>
  <!-- Retrieve all posts from database  -->
  <?php $posts = getPublishedPosts(); ?>

	<title>WINEPEDIA</title>
</head>
<body>


  <?php include('includes/navbar.php') ?>
  <?php include('includes/banner.php') ?>



  <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
  <script>
    $(document).ready(function() {
      $('.open-menu').on('click', function() {
         $('.overlay').addClass('open');
      });

      $('.close-menu').on('click', function() {
        $('.overlay').removeClass('open');
      });
    });
  </script>


</body>
</html>

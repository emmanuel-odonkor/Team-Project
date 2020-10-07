
<?php 
/**
 * @author Team Fleg
 * @version 1.1.0
 */
session_start();
include_once 'class.user.php';
$user = new User();
if (isset($_POST['submit'])) { 
    extract($_POST);   
      $login = $user->check_login($email, $password);
      if ($login) {
          // Registration Success
         header("location:User_Page.php");
      } else {
          // Registration Failed
          echo '<b>Wrong email address or password!</b>';
        //return false;
      }
  }
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>LOG IN PAGE</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

	<!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script> 


	<script src="https://use.fontawesome.com/releases/v5.0.8/js/all.js"></script>


   <!-- CSS STYLESHEET LINK -->

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">

    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>

    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>

    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>


	<link rel="stylesheet" type="text/css" href="style.css">


    <link href="css/agency.min.css" rel="stylesheet" type="text/css">


    <script type="text/javascript" src="Log_In_Page.js"></script>


</head>
<!-- Creates the navigation bar and front image of the log in page -->
<body class="FLEG4" >
	<div>
		<nav class="navbar navbar-expand-md bg-dark navbar-dark" id="mainNav">
			<div class="container">
        <ul class="navbar-nav">
          <a class = "navbar-brand" href="#"><img src = "img/folder/pic_4.png"></a>
        </ul>
        <ul class= "navbar-nav">
          <font color="yellow"><h5><li class="text-warning font-weight-bold">City Mobile Car Wash and Auto-Detailing Service</li></h5></font> 
        </ul>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target = "#collapsenavbar">
          <span class="navbar-toggler-icon"></span> 
        </button>
        <div class="collapse navbar-collapse text-center" id="collapsenavbar">

          <ul class="navbar-nav  ml-auto">
            <li class="nav-item active">
              <a href="HOME_PAGE.php" class="nav-link">HOME</a> 
            </li>
            <li class="nav-item active">
              <a href="ABOUT_US_PAGE.php" class="nav-link">ABOUT US</a> 
            </li>
            <li class="nav-item active">
              <a href="SERVICES.php" class="nav-link">SERVICES</a> 
            </li>
            <li class="nav-item active">
              <a href="Register.php" class="nav-link">SIGN UP</a> 
            </li>

          </ul>

        </div>
      </div>
		</nav>
	</div>
  <!-- Contains the form where the user would sign in -->
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Sign In</h5>
            <form class="form-signin" action="" method="post" name="login">
              <div class="form-label-group">
               Email address <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email address" required autofocus>
                
              </div>

              <div class="form-label-group">
                Password<input type="password" id="inputPassword" name = "password" class="form-control" placeholder="Password" required>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" type="submit" name="submit" onclick="checkEMAIL()">Sign in</button>
              <a href="Register.php">Don't have an account? <span class="blink-one"><b>Create one</b></span></a>
              <center><a class="btn btn-warning btn-xl text-uppercase js-scroll-trigger" href="forgotpass.php">Forgot password</a></center>
            </font>
              <hr class="my-4">
              <center><a class="btn btn-warning btn-xl text-uppercase js-scroll-trigger" href="SERVICES.php">PREVIOUS PAGE</a></center>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
  <!-- footer -->
  <footer class="footer">
  	<div class="container">
      <div class="row align-items-center">
        <div class="col-md-4">
          <b><span class="copyright">Copyright &copy; Case Scenario for City Mobile Car Wash and Auto- Detailing (CMCW) 2019</span></b>
        </div>
        <div class="col-md-4">
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="list-inline quicklinks">
            <li class="list-inline-item">
              <b><a href="#">Privacy Policy</a></b>
            </li>
            <li class="list-inline-item">
              <b><a href="#">Terms of Use</a></b>
            </li>
          </ul>
        </div>
      </div>
    </div> 
  </footer>
</body>
</html>
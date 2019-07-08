<!DOCTYPE html>
<html lang="en">

<head>
	<title>The Wilde Barber</title>
	<meta charset="utf-8"/> 
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> <!--Bootstrap href-->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script> <!--Bootstrap javascript-->
  <link rel="stylesheet" href="_styles/stylepage.css"> <!--css href-->
</head>

<body>
  <div class="container">

<!--Navbar-->
 <nav class="navbar navbar-expand-lg fixed-top navbar-dark" style="background-color: rgb(89, 89, 89);">
   <a class="navbar-brand" href="home.php">The Wilde Barber</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active"> <!--button home-->
        <a class="nav-link" href="home.php">Home<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item active"> <!--button login-->
        <a class="nav-link" href="login.php">Login</a>
      </li>
      <li class="nav-item active"> <!--button sign up-->
        <a class="nav-link" href="sign_up.php">Sign Up</a>
      </li>
      <li class="nav-item active"> <!--button barber sign up-->
        <a class="nav-link" href="barber_login.php">Barber Sign up</a>
      </li>
       <li class="nav-item active"> <!--button contact us-->
        <a class="nav-link" href="contact_us.php">Contact Us</a>
      </li>
    </ul>
    <!--in line form-->
    <form class="form-inline" method="POST" action="login_test.php">
    <div class="input-group"> 
      <input name="username" type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="basic-addon1" required> <!--input email-->
       <input name="password" type="password" class="form-control" placeholder="Password" aria-label="Username" aria-describedby="basic-addon1" required> <!--input password-->
       <button type="submit" class="btn btn-outline-primary">Login</button> <!--button-->
    </div>
  </form>
  </div>
</nav>
</div>


<!--javascript for the navbar responsivity-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>
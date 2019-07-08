
	<?php include 'barber_header.php';?>
	<?php include 'barber_carousel.php';?>
<!--login Page-->
<div class="container">
	<h1>The Wilde Barber</h1>
    <h3>Login</h3>
    <p>Enter your email and password to log in on your account. To book an appointment you must be logged in, if you do not have an account please sign up <a href="sign_up.php">here</a>.</p>
<br>

<!--Form to colect the email and password from the user-->
<form method="POST" action="login_test.php" >
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input name="username" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
  </div>
  <button type="submit" class="btn btn-primary">Login</button>
</form>
</div>

	<?php include 'barber_footer.php';?>

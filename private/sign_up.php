
	<?php include 'barber_header.php';?>
	<?php include 'barber_carousel.php';?>

<!--Customer Sign up page-->
<div class="container">

<h1>The Wilde Barber</h1>
<h3>Sign up</h3>
<p>Hi, welcome to our client sign up page, please inform your details to become a member of our family. If you are a barber/hairdresser who wants to be part of our time please sign up <a href="barber_login.php">here</a>.</p><br>

<!--Form to colect data from the user-->
   <form method="POST" action="user_signup.php">
  <div class="form-group" >
    <label for="formGroupExampleInput">First Name</label>
    <input type="text" name="firstname" class="form-control" id="formGroupExampleInput" placeholder="Enter your First Name" required>
</div>
 <div class="form-group">
    <label for="formGroupExampleInput2">Last Name</label>
    <input type="text" name="lastname" class="form-control" id="formGroupExampleInput2" placeholder="Enter your Last Name" required>
</div>
 <div class="form-group">
    <label for="formGroupExampleInput3">Phone Number</label>
    <input type="tel" name="phone" class="form-control" id="formGroupExampleInput3" placeholder="Enter your Phone Number" required>
</div>
 <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
</div>
<div class="form-group">
    <label for="inputPassword5">Password</label>
<input type="password" name="password" id="inputPassword5" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" class="form-control" aria-describedby="passwordHelpBlock"> <!--pattern for the password - the password must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters-->
<small id="passwordHelpBlock" class="form-text text-muted">
  Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters.
</small>
</div>
    <button type="submit" class="btn btn-primary">Sign Up</button>
</form>
</div>

   <?php include 'barber_footer.php';?>

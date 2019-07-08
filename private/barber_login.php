<?php include 'barber_header.php';?> <!-- header include -->
<?php include 'barber_carousel.php';?> <!-- carousel include -->

<div class="container">

<h1>The Wilde Barber</h1>
<h3>Barber/Hairdresser Sign up Page</h3>
<p>Hi, welcome to our staff sign up page, please inform your details to become a member of our family. If you are a customer who wants to register on our site please sign up <a href="sign_up.php">here</a>.</p>
<br>

<!--Barber Sign Up form-->
<form method="POST" action="barber_signup.php">
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
    <label for="inputAddress">Number Address</label>
    <input type="text" name="numberaddress" class="form-control" id="inputAddress" placeholder="123" required>
</div>
<div class="form-group">
    <label for="inputAddress2">Street</label>
    <input type="text" name="street" class="form-control" id="inputAddress2" placeholder="Main Street" required>
</div>
<div class="form-group">
    <label for="inputAddress3">City</label>
    <input type="text" name="city" class="form-control" id="inputAddress3" placeholder="Dublin" required>
</div>
<div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
</div>
<div class="form-group">
    <label for="inputPassword5">Password</label>
<input type="password" name="password" id="inputPassword5" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" class="form-control" aria-describedby="passwordHelpBlock">
<small id="passwordHelpBlock" class="form-text text-muted">
 Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters.
</small>
</div>
    <button type="submit" class="btn btn-primary">Sign Up</button>
</form>
</div>


	<?php include 'barber_footer.php';?> <!-- footer include -->

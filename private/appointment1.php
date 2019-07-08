<!--This page books an appointment taking as a option the barber's name-->

<?php include 'barber_header.php';?> <!-- header include -->
<?php include 'barber_carousel.php';?> <!-- carousel include -->

<?php



try {
    require_once './_shared/dbconnection.php'; /*Database Connection*/
      $sql = 'SELECT B_FName, B_LName, number, street, City FROM barber'; /*database query*/
      $sql2 = 'SELECT S_Type, S_Price, S_Description FROM service'; /*database query*/

} catch (Exception $e) { /*cacth any error and display*/
    $error = $e->getMessage();
}

if (isset($error)) {
    echo "<p>$error</p>";
}

?>

	
<div class="container">
<!-- this page books an appointment by the barbers name -->
<h2>Book an appointment</h2>
<form method="POST" action="appointment_next.php">
  <div class="form-group">
    <label for="exampleFormControlSelect1">Select a Barber</label>
    <select name= "Barber" class="form-control" id="exampleFormControlSelect1">
    <?php foreach ($db->query($sql) as $row) { /*loop the first database query and display a list of barbers showing their First Name and Last Name*/
      echo "<option>".$row['B_FName'] . "&nbsp;" . $row['B_LName']."</option>";
  }
      ?>
    </select>
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect2">Select a Service</label>
    <select name= "Service" multiple class="form-control" id="exampleFormControlSelect2">
      <?php foreach ($db->query($sql2) as $row2) {/*loop the second database query and display a list of services showing the service type, description and price*/
      echo "<option>".$row2['S_Type'] . "&nbsp;"."(" .$row2['S_Description'].")". "&nbsp; &euro;" . $row2['S_Price']."</option>";
  }
      ?>
   </select>
  </div>

  <div class="form-group" >
    <label for="formGroupExampleInput">Date</label><!-- date form type -->
    <input type="Date" name="Date" class="form-control" id="formGroupExampleInput" placeholder="Choose a Date" required>
  </div>

  <div class="form-group">
    <label for="formGroupExampleInput2">Time</label><!-- time form type -->
    <input type="Time" name="Time" class="form-control" id="formGroupExampleInput2" placeholder="Choose a Time" required>
  </div>

  <div class="form-group">
    <button type="submit" class="btn btn-primary">Book</button><!-- submit button -->
  </div>
</form>



</div>
	<?php include 'barber_footer.php';?>

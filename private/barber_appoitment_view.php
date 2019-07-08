<?php include 'barber_header.php';?> <!-- header include -->
<?php include 'barber_carousel.php';?> <!-- carousel include -->
<!--This page displays a table with the Customer name, Barber Name, Appointment Date and Time-->
<?php

try {
    require_once './_shared/dbconnection.php'; /*Database Connection*/
     $sql = "Select c.C_FName, c.C_LName , b.B_FName , b.B_LName, a.A_Date, a.A_Time from Customer as c join appointment as a on c.C_ID = a.C_ID join barber as b on a.B_ID = b.B_ID;"; /*database query
     Select Customer name, Barber Name, Appointment Date and Time*/

} catch (Exception $e) { /*cacth any error and display*/
    $error = $e->getMessage();
}

if (isset($error)) {
    echo "<p>$error</p>";
}

?>
<div class="container"> 
<p>Welcome Barber</p>
<p>Check your Appointments below</p>

<!--Displays a table with the database data-->
<table class="table table-hover">
  <thead>
    <tr>
      <th scope="col">Barber's Name</th>
      <th scope="col">Customer's Name</th>
      <th scope="col">Appointment Date</th>
      <th scope="col">Appointment Time</th>
    </tr>
  </thead>
  <tbody>
    <tr>
     <?php foreach ($db->query($sql) as $row) { 
        echo "<tr>";
        echo "<td>" . $row['B_FName'] .  "&nbsp;" .$row['B_LName']. "</td>"; 
        //concat the first and last name
        echo "<td>" .$row['C_FName'] .  "&nbsp;" .$row['C_LName'] . "</td>"; 
        //concat the first and last name
        echo "<td>" . $row['A_Date'] . "</td>";
        echo "<td>" . $row['A_Time'] . "</td>";
        echo "</tr>";
        }
        ?>
    </tr>
  </tbody>
</table>

</div>

<?php include 'barber_footer.php';?>

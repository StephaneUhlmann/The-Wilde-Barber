<?php include 'barber_header.php';?> <!-- header include -->
<?php include 'barber_carousel.php';?> <!-- carousel include -->

<div class="container"> 

<!--This page displays a table with the Customer name, Barber Name, Appointment Date and Time-->
<p>Appointment booked with success</p>
<p>Check your appointments below</p>

<!--Displays a table with the database data-->
<table class="table table-hover">
  <thead>
    <tr>
    	<th scope="col">Customer's Name</th>
        <th scope="col">Barber's Name</th>
        <th scope="col">Appointment Date</th>
        <th scope="col">Appointment Time</th>
    </tr>
  </thead>
  <tbody>
    <tr>
     <?php foreach ($db->query($sql) as $row) {
        echo "<tr>";
        echo "<td>" .$row['C_FName'] .  "&nbsp;" .$row['C_LName'] . "</td>";
        //concat the first and last name
        echo "<td>" . $row['B_FName'] .  "&nbsp;" .$row['B_LName']. "</td>";
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
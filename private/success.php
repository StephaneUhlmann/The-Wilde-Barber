<?php

try {
    require_once './_shared/dbconnection.php'; /*Database Connection*/
    $sql = "Select c.C_FName, c.C_LName , b.B_FName , b.B_LName, a.A_Date, a.A_Time from Customer as c join appointment as a on c.C_ID = a.C_ID join barber as b on a.B_ID = b.B_ID where c.C_ID = (SELECT C_ID from Customer WHERE C_Email = '".$_SESSION['login_user']."');"; /*database query Select the Barber and Customer name, Appointments date and time filtering by the customer email given by the session variable*/


} catch (Exception $e) { /*cacth any error and display*/
    $error = $e->getMessage();
}

if (isset($error)) {
  echo "<p>$error</p>";
}

if ($db->query($sql)){
  include 'Customer_appoitment_view.php'; //if the query is successful goes to the Customer_appoitment_view page

} else {
  
}

?>

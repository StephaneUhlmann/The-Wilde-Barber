<?php
session_start();
 
 $myusername = $_POST["username"]; /*Colect the input email from the form in the login page*/
 $mypassword = $_POST["password"]; /*Colect the input password from the form in the login page*/

 //setcookie($myusername, $myusername, time() + (86400 * 30), "/");

try {
    require_once './_shared/dbconnection.php'; /*Database Connection*/
    $sql = "SELECT COUNT(B_ID) FROM Barber WHERE B_Email = '$myusername' and B_Password = '$mypassword';"; 
    /*database query-counts the number of IDs that matches the email and password from the form and the database barber*/
    $sql2 = "SELECT COUNT(C_ID) FROM Customer WHERE C_Email = '$myusername' and C_Password = '$mypassword';";
    /*database query-counts the number of IDs that matches the email and password from the form and the database customer*/
} catch (Exception $e) {
    $error = $e->getMessage(); /*cacth any error and display*/
}

if (isset($error)) {
    echo "<p>$error</p>";
}

foreach ($db->query($sql) as $row) { /*loop for the barber login*/
	foreach ($db->query($sql2) as $row2) { /*loop for the customer login*/
   if($row['COUNT(B_ID)'] == 1) { /*if the barber table displays only 1 row so the login will be successful*/
   $_SESSION['login_user'] = $myusername;
   include 'barber_appoitment_view.php';
}
   elseif($row2['COUNT(C_ID)'] == 1){ /*if the customer table displays only 1 row so the login will be successful*/
    $_SESSION['login_user'] = $myusername;
   	include 'choice.php';
   }else { /*else goes back to the login page*/
    include 'login.php';
    echo "Sorry something went wrong 😥, try again.";
}
  }
}

?>
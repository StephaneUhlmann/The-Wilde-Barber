<!--This page insert the data to the database at the table appointment-->

<?php
session_start(); //session starts

//variables colected at the form on the pages apointment1 and appointment2
 $Date = $_POST["Date"];
 $Time = $_POST["Time"];
 $Barber = $_POST["Barber"];
 $Service = $_POST["Service"];
// $Complain = $_POST["Complain"];

try {
    require_once './_shared/dbconnection.php'; /*Database Connection*/
     $sql = "INSERT INTO `Appointment` (`A_Date`, `A_Time`,`C_ID`, `B_ID`,`S_ID`, `Comp_ID`) VALUES ('".$Date."', '".$Time."', (SELECT C_ID from Customer WHERE C_Email = '".$_SESSION['login_user']."'), 1, 1, 1);"; /*database query*/

    /* $sql = "INSERT INTO `Appointment` (`A_Date`, `A_Time`,`C_ID`, `B_ID`,`S_ID`, `Comp_ID`) VALUES ('".$Date."', '".$Time."', (SELECT C_ID from Customer WHERE C_Email = '".$_SESSION['login_user']."'), (SELECT B_ID from Barber WHERE B_FName = '".$Barber."'), (SELECT S_ID from Service WHERE S_Type = '".$Service."'),1);"; database query*/

} catch (Exception $e) { /*cacth any error and display*/
    $error = $e->getMessage();
}

if (isset($error)) {
    echo "<p>$error</p>";
}

if ($db->query($sql)){
    include 'success.php'; //if the querry is executed go to the page succexx.php

} else {
    echo "Sorry something went wrong 😥, try again.";
    include 'choice.php'; //else returns to choice.php
}




?>

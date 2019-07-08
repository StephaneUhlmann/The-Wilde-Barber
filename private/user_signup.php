<?php

 //variables colected at the form on the page sign_up
 $firstname = $_POST["firstname"];
 $lastname = $_POST["lastname"];
 $phone = $_POST["phone"];
 $email = $_POST["email"];
 $password = $_POST["password"];



  require_once './_shared/dbconnection.php'; //database connection
  $user_check_query = "SELECT COUNT(C_ID) FROM Customer WHERE C_Email = '$email';";
  //query count the quantity of IDs that matchs the email informed
  foreach ($db->query($user_check_query) as $user) {
    if ($user['COUNT(C_ID)'] == 0) { //if the query result is equals to zero insert data to the database
    	
    	try {
            require_once './_shared/dbconnection.php';
            $sql = "INSERT INTO Customer" . " (C_FName, C_LName, C_Phone, C_Email, C_Password)"." VALUES "."('".$firstname."','".$lastname."','".$phone."','".$email."','".$password."')"; //insert the data to the database

            } catch (Exception $e) {
                $error = $e->getMessage();
            }

            if (isset($error)) {
                echo "<p>$error</p>";
            }

            if ($db->query($sql)){
                include 'login.php'; //if the query is successful goes to the login page
            } else {
                echo "Sorry something went wrong 😥, try again.";
                include 'sign_up.php'; //if not returns to the sign_up
            }
        }

  else{
        
        include 'sign_up.php'; //if the query result is different to zero returns to page sign_up
        echo "Email already exists";

}
}
?>




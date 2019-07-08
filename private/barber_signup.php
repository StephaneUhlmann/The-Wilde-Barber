<?php
 
 //variables colected at the form on the page barber_login
 $firstname = $_POST["firstname"];
 $lastname = $_POST["lastname"];
 $phone = $_POST["phone"];
 $email = $_POST["email"];
 $password = $_POST["password"];
 $numberaddress = $_POST["numberaddress"];
 $street = $_POST["street"];
 $city = $_POST["city"];


require_once './_shared/dbconnection.php'; //database connection
  $user_check_query = "SELECT COUNT(B_ID) FROM Barber WHERE B_Email = '$email';"; //query count the quantity of IDs that matchs the email informed
  foreach ($db->query($user_check_query) as $user) {
    if ($user['COUNT(B_ID)'] == 0) { //if the query result is equals to zero insert data to the database


try {
    require_once './_shared/dbconnection.php';
     $sql = "INSERT INTO Barber" . " (B_FName, B_LName, B_Phone, B_Email, B_Password, Number, Street, City)"." VALUES "."('".$firstname."','".$lastname."','".$phone."','".$email."','".$password."','".$numberaddress."','".$street."','".$city."')"; //insert the data to the database

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
    include 'barber_login.php'; //if not returns to the barber_login
}
}
else{
        
        include 'barber_login.php'; //if the query result is different to zero returns to page barber_login
        echo "Email already exists";

}
}
?>


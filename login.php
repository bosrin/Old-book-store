<?php
include 'connect.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];
 echo $password;
    $sql = "SELECT * FROM usersweb WHERE email = '$email' AND password = '$password'";
    $result = $con->query($sql);
    if ($result->num_rows > 0) {    
        echo "Login successful!";
    } else {  
        echo "Invalid  password.";
    }
}
?>
<?php
include 'connect.php';

$name = $_POST[ 'name' ];
$email = $_POST[ 'email' ];
$contactnumber = $_POST[ 'contactnumber' ];
$password = $_POST['password'];

echo $name;
$query = "INSERT INTO usersweb(name,  email, contactnumber, password)
VALUES('$name',  '$email', '$contactnumber', '$password' )";

$run = mysqli_query( $con, $query );

if ( !$con ) {
    echo 'Submission failed';
} else {
    echo 'Submission Successful';
}

?>
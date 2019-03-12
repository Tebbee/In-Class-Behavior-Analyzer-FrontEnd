<?php

require('database.php');

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$password = $_POST['password'];
$email = $_POST['email'];

$sql = "INSERT INTO users (username, email, firstname, lastname, password) VALUES ('".$email."', '".$email."', '".$firstname."', 
'".$lastname."', '".$password."')";

if($conn->query($sql) === TRUE){
    echo "We have successfully created your account!";
    header("Location: login.php");
}
else{
    echo"We could not create your account.";
}

$conn->close();
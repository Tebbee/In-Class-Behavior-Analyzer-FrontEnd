<?php

if(!isset($_SESSION)){
    session_start();
}

require('database.php');

$username = $_POST['email'];
$password = $_POST['password'];

$sql = "SELECT * FROM users WHERE username = '" . $username ."'";

$result = $conn->query($sql);

if($result->num_rows > 0 ){
    while($row = $result->fetch_assoc()){
        if($row['password']==$password){
            $_SESSION['username'] = $username;
            $_SESSION['userLoggedIn'] = true;
            
            echo "You have successfully logged in!";
            header("Location: index.php");
        }
        else{
            echo"Your email and password did not match.";
        }
    }
}
$conn->close();
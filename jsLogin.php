<?php
session_start();
require_once('includes/db_con.php');
?>
<?php

    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM users WHERE username = '$username' AND password = '$password' LIMIT 1";
    $result = mysqli_query($conn, $sql);

    if($result){
        $loginUser = mysqli_fetch_assoc($result);
        
         if(mysqli_num_rows($result) === 1){

              $_SESSION['loginUser'] = $loginUser;
              $_SESSION['user'] = $loginUser['username'];
              $_SESSION['id'] = $loginUser['id'];
              echo '1';

         }
         else{
              echo "Password or username is incorrect!";
        }
    }
    else{
        echo "There were errors while connecting to database.";
    }
    mysqli_close($conn);
?>
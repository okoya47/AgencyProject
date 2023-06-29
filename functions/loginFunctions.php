<?php 
require('db_con.php');
if(isset($_POST['user']) && isset($_POST['password'])){
    $user = $_POST['user'];
    $id = $_POST['IDNUM'];
    $password = $_POST['password'];

    $query = "INSERT INTO 'users' (user ,IDNUM ,password) VALUES('$user', '$id', '$password')";
    $result = mysqli_query($query);
    if($result){
        $msg = "Registered Sussecfully";
        echo $msg;
    }
    else
        $msg = "Error Registering";
        echo $msg;
}
?>
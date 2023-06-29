<?php
require_once('includes/db_con.php');
?>
<?php
if(isset($_POST)){
    
    $referrerName = $_POST['referrer'];
    $userName = $_POST['username'];
    $userEmail = $_POST['email'];
    $firstName = $_POST['first_name'];
    $phoneNumber = $_POST['phonenumber'];
    $userPassword = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];

    $sql = "INSERT INTO users (username, email, password, referrer, Active, firstname) VALUES ('$userName', '$userEmail', '$userPassword', '$referrerName', 1, '$firstName')";

    if(mysqli_query($conn, $sql)){
        echo "Successfully saved";
    }
    else{
        echo "Failed to save";
    }
    mysqli_close($conn);
}else{
    echo "No Data";
}
?>
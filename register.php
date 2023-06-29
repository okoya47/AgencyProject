<?php 
require_once('includes/db_con.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 

    <!-- Title Page-->
    <title>Register</title>

    <!-- Icons font CSS-->
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/main.css" rel="stylesheet" media="all">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
<div class="container">
    <div class="title">Registration</div>
    <form action="#">
        <div class="userDetails">
            <div class="userInputBox">

            </div>
        </div>
    </form>
</div>



    <body class="bg-login">
    <!--wrapper-->
    <div class="wrapper">
        <div class="d-flex align-items-center justify-content-center my-5 my-lg-0">
            <div class="container">
                <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2">
                    <div class="col mx-auto">
                        <div class="my-4 text-center">
                            <img src="assets/images/logo/logonew.png" alt="" class="mx-auto" height="150">
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="rounded">
                                    <div class="text-center">
                                        <h4 class="text-uppercase mt-0">Register</h4>
                                    </div>

                                    <div class="form-body">
                                        <form action="register.php" class="row g-3" method="post">
                                            
                                            <div class="col-sm-6">
                                                <label for="inputFirstName" class="form-label text-white">Invited By</label>
                                                <input type="text" class="form-control" id="referrerName" name="referrer" value="officialmanagement" readonly>
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="inputLastName" class="form-label text-white">Your Name</label>
                                                <input type="text" class="form-control" id="firstName" name="first_name" value="" placeholder="John Doe" required>
                                            </div>
                                            <div class="col-sm-6">
                                                <label for="inputLastName" class="form-label text-white">Email</label>
                                                <input type="email" class="form-control" id="email" name="email" placeholder="Email Address" value="" required>
                                            </div>

                                            <div class="col-sm-6">
                                                <label for="inputLastName" class="form-label text-white">Phone Number</label>
                                                <input id="phonenumber" class="form-control" type="tel" name="phonenumber" value="" required>
                                            </div>


                                            <div class="col-12">
                                                <label for="inputEmailAddress" class="form-label text-white">Username</label>
                                                <input type="text" class="form-control" id="userName" placeholder="Enter Username" name="username" value="" required>
                                            </div>
                                            <div class="col-6">
                                                <label for="inputChoosePassword" class="form-label text-white">Password</label>
                                                <div class="input-group" id="show_hide_password">
                                                    <input type="password" class="form-control border-end-0" name="password" id="userPassword" placeholder="Enter Password" required>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <label for="inputChoosePassword" class="form-label text-white">Confirm Password</label>
                                                <div class="input-group" id="show_hide_password">
                                                    <input type="password" class="form-control border-end-0" name="confirm_password" id="confirmPassword" placeholder="Confirm Password">
                                                </div>
                                            </div>


                                            <div class="mb-1">
                                                <div class="form-check">
                                                    <input type="checkbox" class="form-check-input" id="checkbox-signup" namme="agree" value="1" required>
                                                    <label class="form-check-label text-white" for="checkbox-signup text-white">I accept <a href="javascript: void(0);">Terms and Conditions</a></label>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <div class="d-grid">
                                                    <button type="submit" id="register" name="signup-btn" class="btn btn-success waves-effect waves-light text-center"><i class='mdi mdi-account-check'></i>Sign up</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>


                                </div>

                            </div>

                        </div>
                        <div class="mt-3 text-center">
                            <p>Already have an account? <a href="login.php">Sign in here</a>
                            </p>
                        </div>
                    </div>
                </div>
                <!--end row-->
            </div>
        </div>
    </div>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
$(function(){
   $('#register').click(function(e){

    var valid = this.form.checkValidity();

    if(valid){
        var firstName = $('#firstName').val();
        var referrer = $('#referrerName').val();
        var address = $('#email').val();
        var tel = $('#phonenumber').val();
        var userName = $('#userName').val();
        var pass = $('#userPassword').val();
        var confirmPass = $('#confirmPassword').val();

        e.preventDefault();
debugger;
        $.ajax({
            type:'POST',
            url: 'process.php',
            data: {username: userName, email: address, password: pass, referrer: referrer, Active:1, first_name: firstName, phonenumber:tel,confirm_password:confirmPass },
            success: function(data){
                Swal.fire({
                    'title':'Successful!',
                    'text':data,
                    'icon':'success',
                    'type':'success'
                });
            },
            error: function(data){
                Swal.fire(
                          'Failed!',
                          'User not registered',
                          'error'
                         );
            }

        });
    }else{
        alert('Not Valid');
    }
   })
});
</script>    
<style>



</style>   
</html>
<!-- end document-->
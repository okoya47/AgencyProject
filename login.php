<?php
/*session_start();

if(isset($_SESSION['loginUser'])){
    header("location: index.php");
}*/
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Agency Login</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta content="Earn online" name="description" />
  <meta content="Agency Login" name="author" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- App favicon -->
  <link rel="shortcut icon" href="assets/images/logo/logonew.png">

   <!-- Icons font CSS-->
  <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">
  <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">

  <!-- Main CSS-->
  <link href="css/main.css" rel="stylesheet" media="all">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>

<body>

<body class="bg-login">

    <div class="wrapper my-5">
        <div class="container">

            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-4">
                    <div class="text-center">
                        <a href="index.php">
                            <img src="assets/images/logo/logonew.png" alt="" height="150" class="mx-auto">
                        </a>
                     
                    </div>
                    <div class="card">
                        <div class="card-body p-4">
                                                                                    <div class="text-center mb-4">
                                <h4 class="text-uppercase mt-0">Sign In</h4>
                            </div>

                            <form action="login.php" method="post">
                                <div class="mb-3">
                                    <label for="Username" class="form-label text-white">Username</label>
                                    <input id ="username" class="form-control" type="text" name="username" placeholder="Username">
                                </div>

                                <div class="mb-3">
                                    <label for="password" class="form-label text-white">Password</label>
                                    <input id="password" class="form-control" type="password" name="password" id="password" placeholder="Password">
                                </div>



                                <div class="mb-3 d-grid text-center">
                                    <button id="login" class="btn btn-success waves-effect waves-light text-center" type="submit" name="login-submit"> Log In </button>
                                </div>
                            </form>

                        </div> <!-- end card-body -->
                    </div>
                    <!-- end card -->

                    <div class="row mt-3">
                        <div class="col-12 text-center">
                            <p> <a href="forgot.php" class="text-muted ms-1"><i class="fa fa-lock me-1"></i>Forgot your password?</a></p>
                            <p class="text-muted">Don't have an account? <a href="register.php" class="ms-1"><b>Sign Up</b></a></p>
                        </div> <!-- end col -->
                    </div>
                    <!-- end row -->

                </div> <!-- end col -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </div>
    <!-- end page -->
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    $(function(){
    $('#login').click(function(e){
        var valid = this.form.checkValidity();
        if(valid){
            var username = $("#username").val();
            var password = $("#password").val();
            var error = "";

            e.preventDefault();
debugger;
            $.ajax({
              type:'POST',
              url: 'jsLogin.php',
              data: {username: username, password: password},
              success: function(data){
                debugger;
                if($.trim(data) === "1"){
                    setTimeout('window.location.href = "index.php"',2000);
                    Swal.fire({
                    'title':'Login Successful!',
                    'icon':'success',
                    'type':'success'
                  });
                }
               },
              error: function(data){
                Swal.fire(
                          'Failed!',
                          'User not logged in',
                          'error'
                         );
            }

        });
        }         
    });
});
</script>


</html>
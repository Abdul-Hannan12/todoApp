<?php

session_start();
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true){
    header("Location: todo.php");
    exit();
}

if(isset($_GET['msg']) && $_GET['msg'] == "user"){
  echo '<div class="alert alert-danger" role="alert" style="position: absolute; top: 25;"> User With Same Email Already Exists! </div>';
}
if(isset($_GET['msg']) && $_GET['msg'] == "success"){
  echo '<div class="alert alert-primary" role="alert" style="position: absolute; top: 25;"> User Registered SuccessFully! </div>';
}

?>


<!DOCTYPE html>
<html>
<head>
  <title>Signup Page</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body class="body">
    <div class="container">
        <div class="row d-flex justify-content-center align-items-center mt-5">
          <div class="col-lg-5 mainCardContainer">
            <div class="card border-0 shadow-lg mt-5">
                <div class="main_div">
              <div class="pb-0 ">
                <h3 class="text-center">Sign Up</h3>
              </div>
              <div class="card-body">
                <form class="text-center" method="POST" action="api.php">
                  <div class="mb-3">
                    <input type="text" name="name" placeholder="Name">
                  </div>
                  <div class="mb-3">
                    <input type="email" name="email" placeholder="Email">
                  </div>
                  <div class="mb-3">
                    <input type="password" name="password" placeholder="Password">
                  </div>
                  <button type="submit" name="register" class="btn btn-primary p-2 px-5">Register</button>
                </form>
              </div>
              <div class="card-footer pt-0 bg-transparent">
                <p class="text-center">Don't have an account? <a href="index.php">Sign in</a></p>
              </div>
            </div>
        </div>
          </div>
        </div>
      </div>

</body>
</html>

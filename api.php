<?php

$conn = new mysqli("localhost","root","","todo");

if(isset($_POST['register'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
  
    $sql = "SELECT * from users where email = '$email'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
  
    if($count > 0){
        header("Location: signup.php?msg=user");
        exit();
    }else{
        $sql = "INSERT into users (name, email, pass) VALUES ('$name', '$email','$password')";
        $result = mysqli_query($conn, $sql);
        if($result){
            header("Location: signup.php?msg=success");
            exit();
        }
    }
  }

  if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * from users where email = '$email' and pass = '$password'";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);

    if($count <= 0){
        header("Location: index.php?msg=user");
        exit();
    }else{
        $row = mysqli_fetch_assoc($result);
        $_SESSION['userid'] = $row['uid'];
        $_SESSION['isLoggedIn'] = true;
        header("Location: todo.php");
        exit();
    }
}

?>
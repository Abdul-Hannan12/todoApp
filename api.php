<?php

$conn = new mysqli("localhost","root","","todo");
session_start();

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
        $_SESSION['user_id'] = $row['uid'];
        $_SESSION['logged_in'] = true;
        header("Location: todo.php");
        exit();
    }
  }

    if(isset($_POST['logout'])){
        session_destroy();
        header("Location: index.php");
    }

    if(isset($_POST['MODE']) && $_POST['MODE'] == 'add'){
        $text = $_POST['text'];
        $uid = $_SESSION['user_id'];

        $sql = "INSERT into todos (content, uid) VALUES ('$text', '$uid')";
        $result = mysqli_query($conn, $sql);
        if($result){
            header("Location: todo.php?msg=success");
            exit();
        }else{
            header("Location: todo.php?msg=error");
            exit();
        }
    }

    if(isset($_POST['MODE']) && $_POST['MODE'] == 'remove'){
        $id = $_POST['id'];

        $sql = "DELETE FROM todos WHERE id='$id'";
        $result = mysqli_query($conn, $sql);
        if($result){
            header("Location: todo.php?msg=del");
            exit();
        }else{
            header("Location: todo.php?msg=error");
            exit();
        }
    }

?>
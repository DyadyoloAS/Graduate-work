<?php
    session_start();
    require_once 'connect.php';

    $name = $_POST['name'];
    $famil =$_POST['famil'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password2 = $_POST['password2'];

    if ($password === $password2) {
        $password = md5($password);
        mysqli_query($connect,"INSERT INTO `users`(`name`, `famil`, `email`, `password`) VALUES ('$name','$famil','$email','$password')"); 
        header('Location: ../login.php');
    } 
    else {
        $_SESSION['message'] = 'Пароли не совпадают';
        header('Location: ../reg.php');
    }

<?php
    session_start();
    require_once 'connect.php';
    
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password2 = md5($password);

    $check_user = mysqli_query($connect,"SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password2'");
    
    if (mysqli_num_rows($check_user) > 0) {

        $user = mysqli_fetch_assoc($check_user);

        $_SESSION['user'] = [
            "id" => $user['id'],
            "name" => $user['name'],
            "famil" => $user['famil'],
            "email" => $user['email'],
        ];

        header('Location: ../index1.php');
        
    } else {
        $_SESSION['message'] = 'Неверный Email или пароль';
        header('Location: ../login.php');
    }
<!-- ?php
      session_start();
      require_once 'connect.php';

      $naz = $_SESSION['naz'];
      $sr = $_SESSION['sr'];

      mysqli_query($connect,"SELECT`naz`, `sr` FROM `obr` WHERE 1"); 
            header('Location: ../profile.php');
? -->
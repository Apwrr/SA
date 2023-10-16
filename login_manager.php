<?php
    session_start();
    include('condb.php');

    if(isset($_POST['uname']) && isset($_POST['pass'])){
        function validate($data){
            $data = trim($data);
            $data = stripslashes($data);
            $data = htmlspecialchars($data);
            return $data;
        }
    }


    $uname = validate($_POST['uname']);
    $pass = validate($_POST['pass']);
    if(empty($uname)){
        header('location: index_manager.php?error=User Name is required');
        exit();
    }
    else if(empty($pass)){
        header('location: index_manager.php?error=Password is required');
        exit();
    }

    $sql = "SELECT * FROM users Where user_name = '$uname' AND password = '$pass'";

    $result = mysqli_query($conn , $sql);

    if(mysqli_num_rows($result) === 1){
        $row = mysqli_fetch_assoc($result);
        if($row['user_name'] === $uname && $row['password'] = $pass){
            echo "Logged In!";
            $_SESSION['user_name'] = $row['user_name'];
            $_SESSION['password'] = $row['password'];
            header('location: Manager.html');
            exit();
        }
        else{
            header('location: index_manager.php?error=Incorrect User Name or Password');
        }
    }
    else{
        header('location: index_manager.php');
        exit();
    }
?>

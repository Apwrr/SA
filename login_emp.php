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
        header('location: index_emp.php?error=User Name is required');
        exit();
    }
    else if(empty($pass)){
        header('location: index_emp.php?error=Password is required');
        exit();
    }

    $sql = "SELECT * FROM employees Where USERNAMES = '$uname' AND PASSWORDS = '$pass'";

    $result = mysqli_query($conn , $sql);

    if(mysqli_num_rows($result) === 1){
        $row = mysqli_fetch_assoc($result);
        if($row['USERNAMES'] === $uname && $row['PASSWORDS'] = $pass){
            echo "Logged In!";
            $_SESSION['USERNAMES'] = $row['USERNAMES'];
            $_SESSION['PASSWORDS'] = $row['PASSWORDS'];
            $_SESSION['FIRST_NAME'] = $row['FIRST_NAME'];
            $_SESSION['LAST_NAME'] = $row['LAST_NAME'];

            header("location: employees.php?n=".$row['USERNAMES']."");
            exit();
        }
        else{
            header('location: index_emp.php?error=Incorrect User Name or Password');
        }
    }
    else{
        header('location: index_emp.php');
        exit();
    }
?>

<?php 
session_start();

if(isset($_SESSION['user_name']) && isset($_SESSION['password'])){
    ?>
    <!DOCTYPE html>
    <html>
    <head>
    <title>HOME_EMP</title>
    </head>
    <body>

    <div class="header">
        <h1>EMPLOYEES</h1>
        <h2>เข้าระบบแล้วจ้าาาาาาาาาาาาาาาาาาาาาา</h2>
    </div>
    <div class="content">
        <a href="logout_emp.php">Logout</a>
    </div>
    </body>
    </html>
    <?php
}
else{
    header('location: index_emp.php');
    exit();
}
?>
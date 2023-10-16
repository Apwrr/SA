<!DOCTYPE html>
<html>
  <head>
    <title>Leave system</title>

    
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap"
      rel="stylesheet"
    />
  </head>

  <style>
    body {
      background-color: #2b2936;
    }
    .container {
      width: 600px;
      height: 500px;
      background-color:rgba(255, 255, 255, 0.13);
      position: absolute;
      top: 50%;
      left: 50%;
      transform: translate(-50%, -50%);
      border-radius: 10px;
      border: 2px solid rgba(255, 255, 255, 0.1);
      box-shadow: 0 0 40px rgba(8, 7, 16, 0.6);
    }
    .box-manager {
      width: 200px;
      height: 300px;
      margin: 80px 50px 10px 50px;
      background-color: #fbfffb42;
      float: left;
      border-radius: 10%;
      border: 2px solid rgba(255, 255, 255, 0.1);
      box-shadow: 0 0 40px rgba(8, 7, 16, 0.6);
    }
    .box-emp {
      width: 200px;
      height: 300px;
      margin: 80px 50px 60px 10px;
      background-color: #fbfffb42;
      float: right;
      border-radius: 10%;
      border: 2px solid rgba(255, 255, 255, 0.1);
        box-shadow: 0 0 40px rgba(8, 7, 16, 0.6);
    }
    .img-profile {
      width: 100px;
      height: 80px;
      border-radius: 50%;
      margin-top: 65px;
      background-color: rgb(255, 255, 255);
    }
    .img- {
      border-color: #2b2936;
      border-radius: 50%;
      width: 100px;
      height: 90px;
      margin-top: 50px;
      border-style: solid;
      background-color: rgba(255, 255, 255, 0.47);
      padding: 3px;
    }
    .box-manager:hover {
      transform: scale(1.1);
      background: #5F9EA0;
      box-shadow: 2px 2px 2px #837a7a;
      z-index: 2;
    }
    .box-emp:hover {
      transform: scale(1.1);
      background: #5F9EA0;
      box-shadow: 2px 2px 2px #837a7a;
      z-index: 2;
    }
    button {
        margin-top: 50px;
        width: 100%;
        background-color: #ffffff;
        color: #080710;
        padding: 15px 0;
        font-size: 18px;
        font-weight: 600;
        border-radius: 5px;
        cursor: pointer;
      }
    /* Add a hover effect for buttons */
    button:hover {
      opacity: 0.8;
    }
  </style>

  <body>
    
    <div class="container">
      <center>
        <h1 style = "color:white">
        Leave System
        </h1>
      </center>
      <div class="texthead"></div>
      <center>
        <a href="index_manager.php">
          <div class="box-manager">
            <img class="img-" src="prof.png" />
            <h3 style="color:white">MANAGER</h3>
            <br />
          </div>
        </a>
        
        <a href="index_emp.php">
          <div class="box-emp">
            <img class="img-" src="prof.png" />
            <h3 style="color:white">EMPLOYEE</h3>
            <br />
          </div>
        </a>
      </center>
    </div>
  </body>
</html>
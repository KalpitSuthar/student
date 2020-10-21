<?php
session_start();
if($_SESSION['login'])
{
    echo "Connected";
}
else
{
    header("location:../login.php");
}
?>
<html>
  <head>
    <title></title>
  <link href="../css/dash.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <div class="title" align="center">
        <h4><a href="../logout.php" style="float:right;margin-right:30px; font-size:30px; color:red;" >Log Out</a></h4>
        <h1>Welcome to Admin Dashboard</h1>
      </div>
      <div class="dashboard" align="center">
      <a href="stuadd.php">1)Add A New Student</a><br>
        <a href="studel.php">2)Remove a Student</a><br>
          <a href="stuupd.php">3)Update a Student</a>
      </div>
          </body>
</html>
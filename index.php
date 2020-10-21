<html>
  <head>
    <title>Details Of Users</title>
    <meta content="">
    <style></style>
  </head>
  <body>
      <h3 align="right" style="margin:right:20px;"><a href="login.php">Login</a></h3>
        <h1 align="center">Welcome</h1>
      <form action="index.php" method="post">
        <table border="1" align="center">
            <tr align="center">
                <td colspan="2" align="center">Record</td>
            </tr>
           
              <tr>
                <td>Enter Name:</td>
                <td><input type="text" name="name" placeholder="Enter Name"></td>
            </tr>
            
            <tr>
                <td colspan="2" align="center"><input type="Submit" name="submit" value="Show Info"></td>
            </tr>
          </table>
      </form>
    </body>
</html>
<?php
    if(isset($_POST['submit']))
    {
       
        $name=$_POST['name'];//test //admin //user1  /Kalpit
        //$class = $_POST['class'];
        include ('dcon.php');
        include ('function.php');
        showdata($name);
    }

?>
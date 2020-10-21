<?php
include ("dcon.php");
session_start();
if($_SERVER["REQUEST_METHOD"]=="POST");
{
   // $username = $_POST['uname'];//admin
    //$password = $_POST['passwd'];//admin
   $username=filter_input($con,$_POST['uname'],FILTER_SANITIZE_SPECIAL_CHARS);
   $password=($con,$_POST['passwd']);
    if($username !="" && $password!=""){
    $sql="SELECT * FROM `admin` WHERE `username`='$username' AND `password`='$password'";
    
    $run=mysqli_query($con,$sql);
    $row=mysqli_fetch_array($run,MYSQLI_ASSOC);
    $active=$row['active'];
    $count=mysqli_num_rows($run);
    if($count>0)
    {
      //session_register("username");
        $_SESSION['login']=$username;
        header("location:admin/admindash.php");
    }
    else
    {
      echo "<script>alert('Account  is not Found')</script>";
    }
    //array
    //0 -> admin ->admin
    //1
    
}
}
?>


<html>
  <head>
    <title>Log In Page</title>
    <meta content="">
    <style></style>
  </head>
  <body>
    <form action="#" method="post">
       <table align="center">
           <tr>
               <td><h1>Admin Page</h1></td>
           </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" placeholder="Enter UserName" name="uname"></td>
                
           </tr>
             <tr>
                <td>Password</td>
                <td><input type="password" placeholder="Enter Password" name="passwd"></td>
           </tr>
           <tr>
            <td><input type="submit" value="Login"></td>
           </tr>
        </table>
      </form>
    </body>
</html>
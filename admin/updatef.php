<?php
session_start();
if($_SESSION['login'])
{
    echo " ";
}
else
{
    header("location:../login.php");
}
?>
<?php
    include ('../dcon.php');
$sid=$_GET['sid'];
$sql="SELECT * FROM `student` WHERE `id` = '$sid'";
$run=mysqli_query($con,$sql);
$data=mysqli_fetch_assoc($run);?>
<html>
  <head>
    <title></title>
    <meta content="">
  <link href="../css/dash.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <div class="title" align="center">
        <h4><a href="../logout.php" style="float:right;margin-right:30px; font-size:30px; color:red;" >Log Out</a></h4>
        <h1>Welcome to Admin Dashboard</h1>
      </div>
      <form method="post" action="updated.php" enctype="multipart/form-data">
            <table>
                <tr>
                    <td>Enter Your Name</td>
                    <td><input type="text" name="name" value="<?php echo $data['Name'];?>"></td>
                </tr>
                <tr>
                    <td>Enter Your roll number</td>
                    <td><input type="text" name="rollno" value="<?php echo $data['rollno'];?>"></td>
                </tr>
                <tr>
                    <td>Enter Your City</td>
                    <td><input type="text" name="city" value="<?php echo $data['City'];?>"></td>
                </tr>
                <tr>
                    <td>Enter Your Parents Contact</td>
                    <td><input type="number" name="pnumber" value="<?php echo $data['Pnumber'];?>"></td>
                </tr>
                <tr>
                    <td>Enter Your Class</td>
                    <td><input type="text" name="class" value="<?php echo $data['Class'];?>"></td>
                </tr>
                 <tr>
                    <td>Insert Image</td>
                    <td><input type="file" name="simg" ></td>
                </tr>
                <tr>
                    <input type="hidden" name="sid" value="<?php echo $data['id'];?>">
                    <td><input type="submit" name="submit"></td>
                </tr>
            </table>
                  
            
        </form>
    </body>
</html>
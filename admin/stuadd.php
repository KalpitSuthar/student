<?php
session_start();
if($_SESSION['login'])
{
    echo "Logged In";
}
else
{
    header('location:../login.php');
}
?>
<html>
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <title></title>
    <meta content="">
  <link href="../css/dash.css" rel="stylesheet" type="text/css">
  </head>
  <body>
    <div class="container">
    <div class="title" align="center">
        <h4><a href="../logout.php" style="float:right;margin-right:30px; font-size:30px; color:red;" >Log Out</a></h4>
        <h1>Welcome to Admin Dashboard</h1>
      </div>
      <div class="form-group">
        <form method="post" action="stuadd.php" enctype="multipart/form-data">
            <table class="table">
                <tr>
                    <td>Enter Your Name</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>Enter Your roll number</td>
                    <td><input type="text" name="rollno"></td>
                </tr>
                <tr>
                    <td>Enter Your City</td>
                    <td><input type="text" name="city"></td>
                </tr>
                <tr>
                    <td>Enter Your Parents Contact</td>
                    <td><input type="number" name="pnumber"></td>
                </tr>
                <tr>
                    <td>Enter Your Class</td>
                    <td><input type="text" name="class"></td>
                </tr>
                 <tr>
                    <td>Insert Image</td>
                    <td><input type="file" name="simg"></td>
                </tr>
                <tr>
                    
                    <td><input type="submit" name="submit" class="btn btn-success"></td>
                </tr>
            </table>
            </div>
                  
            
        </form>
        </div>
          </body>
</html>
<?php
    if(isset($_POST['submit']))
    {
        include('../dcon.php');
        $rollno=$_POST['rollno'];
        $name=$_POST['name'];
        $city=$_POST['city'];
        $parents=$_POST['pnumber'];
        $class=$_POST['class'];
        $imagename=$_FILES['simg']['name'];
        $tempname=$_FILES['simg']['tmp_name'];
        move_uploaded_file($tempname,"../images/$imagename");
        $sql="INSERT INTO `student`(`rollno`, `Name`, `City`, `Pnumber`, `Class`,`image`) VALUES ('$rollno','$name','$city','$parents','$class','$imagename')";
        $run=mysqli_query($con,$sql);
        if($run==true)
        {
            echo "<script>alert('Data Insert Sucessfully')</script>";
        }
        else
        {
            echo "Error";
        }
    }
?>

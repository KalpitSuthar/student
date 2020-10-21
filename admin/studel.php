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
          <table align="center" border="1">
        <form action="studel.php" method="post">
       <th>Enter Your Name:</th>
         <td><input type="text" name="name" placehoder="Enter Name"></td>
        <th>Enter Class</th>
         <td><input type="number" name="class" placeholder="Enter Class"></td>
         <td><input type="submit" name="submit" value="search"></td>
        </form>
      </table>
      <table align="center" border="1">
        <tr>
        <th>No</th>
          <th>Image</th>
          <th>Name</th>
            <th>RollNo</th>
          <th>City</th>
          <th>PNumber</th>
          <th>Class</th>
          <th>Edit</th>
        </tr>
          <?php
            if(isset($_POST['submit']))
            {
                include ('../dcon.php');
                $name=$_POST['name'];
                $class=$_POST['class'];
                $sql="SELECT * FROM `student` WHERE `Class`='$class' AND `Name` LIKE '%$name%'";
                $run=mysqli_query($con,$sql);
                if(mysqli_num_rows($run)<1)
                {
                    echo "<tr><td>No records Found</td><tr>";
                }
                else
                {
                    $count=0;
                    while($data=mysqli_fetch_assoc($run))
                    {
                        $count++;

                        ?>

            <tr>

              <td><?php echo $count;?></td>
              <td><img src=..images><?php echo $data['image'];?></td>
              <td><?php echo $data['Name'];?></td>
                <td><?php echo $data['rollno'];?></td>
              <td><?php echo $data['City'];?></td>
              <td><?php echo $data['Pnumber'];?></td>
              <td><?php echo $data['Class'];?></td>
              <td><a href="deletef.php?sid=<?php echo $data['id'];?>">Delete</a></td>
            </tr>
                    <?php
                    }
                }
            }
      ?>
      </table>
        
    </body>
</html>

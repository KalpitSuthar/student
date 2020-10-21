<?php
    if(isset($_POST['submit']))
    {
        include('../dcon.php');
        $rollno=$_POST['rollno'];
        $name=$_POST['name'];
        $city=$_POST['city'];
        $parents=$_POST['pnumber'];
        $class=$_POST['class'];
        $id=$_POST['sid'];
        $imagename=$_FILES['simg']['name'];
        $tempname=$_FILES['simg']['tmp_name'];
        move_uploaded_file($tempname,"../images/$imagename");
        $sql="UPDATE `student` SET `rollno` = '$rollno', `Name` = '$name', `City` = '$city', `Pnumber` = '$parents', `Class` = '$class' WHERE `id` = $id ;";
        $run=mysqli_query($con,$sql);
        if($run==true)
        {
            echo "<script>alert('Data Updates Sucessfully')</script>";
            echo "<script>window.open('updatef.php?sid=<?php echo $id;?>','_self')</script>";
        }
    }
?>

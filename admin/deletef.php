<?php
        include('../dcon.php');
        $id=$_REQUEST['sid'];
        $sql="DELETE FROM `student` WHERE `id`='$id';";
        $run=mysqli_query($con,$sql);
        if($run==true)
        {
            echo "<script>alert('Data Delete Sucessfully')</script>";
            echo "<script>window.open('studel.php','_self')</script>";
        }
    
?>

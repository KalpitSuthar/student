<?php
    function showdata($name)
{
    include ('dcon.php');
    $sql="SELECT * FROM `student` WHERE `Name`='$name'";
    $run=mysqli_query($con,$sql);
    //print_r($run);
    if(mysqli_num_rows($run)>0)
    {
        $data=mysqli_fetch_assoc($run);
       
        ?><table border="1" align="center">
        <tr>
            <th colspan="3">Student Details</th>
        </tr>
        <tr>
            <td colspan="3"><img src="images/<?php echo $data['image'];?>"></td>
            
        </tr>
        <tr>
            <th>
                Roll No
            </th>
            <td><?php echo $data['rollno'];?></td>
        </tr>
        <tr>
            <th>Name</th>
            <td><?php echo $data['Name'];?></td>
        </tr>
        <tr>
            <th>Class</th>
            <td><?php echo $data['Class'];?></td>
        </tr>
         <tr>
            <th>City</th>
            <td><?php echo $data['City'];?></td>
        </tr>
        <tr>
        <th>Parents Conatct number</th>
        <td><?php echo $data['Pnumber'];?></td>
        </tr>
</table><?php
    
    }
        else
        {
            echo "<script>alert('No Data Found')</script>";
        }
}
?>
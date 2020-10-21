<?php
    $con=mysqli_connect('sql103.epizy.com','epiz_25104330','PFudK3bIUJ','epiz_25104330_test');
        if($con==false)
        {
            echo "Your Database is Not Connected TO Server";
        }
       else
       {
           echo "Conneted";
       }
?>
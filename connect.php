<?php
    $con=new mysqli('localhost','root','','sandbox');

    if(!$con)
    {
        die(mysqli_error($con));
    }

?>
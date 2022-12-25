<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "pets";

    $con = new mysqli($servername,$username,$password,$dbname);

    if($con->connect_error)
    {
        die("Connection failed: ".$con->connect_error);
    }

    $sql = "INSERT INTO animals (id,name,gender,price,image,age,type) VALUES (1, 'Twixy', 'Male', 100, 'Twixy.JPEG',1.5,'cat')";
    if($con->query($sql)===TRUE)
    {
        echo "New Record Added successfully";
        
    }
    else
    {
        echo "Error adding record: ".$con->error;
    }
    $con->close();
?>
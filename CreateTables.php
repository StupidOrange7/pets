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

    $sqla = "CREATE TABLE animals (
        id INT(10) PRIMARY KEY AUTO_INCREMENT,
        name VARCHAR(20) NOT NULL,
        gender VARCHAR(6) NOT NULL,
        price INT(3),
        image MEDIUMBLOB,
        age INT (2) NOT NULL,
        email VARCHAR(40),
        KEY 'email_animal'('email'),
        CONSTRAINT 'email_animal' FOREIGN KEY ('email') REFERENCES 'info'('email')) ON DELETE CASCADE";

    $sqli = "CREATE TABLE info (
        fname VARCHAR(25) NOT NULL,
        lname VARCHAR(25) NOT NULL,
        email VARCHAR(40) PRIMARY KEY,
        address VARCHAR(40) NOT NULL,
        age INT (2) NOT NULL,
        password VARCHAR(20),
        image blob NOT NULL
        )";
    
    $sqlm = "ALTER TABLE animals DROP FOREIGN KEY 'email_animal'";
    $sqlp = "ALTER TABLE animals ADD CONSTRAINT 'email_animal';"; 
            
    $sqlo = "           FOREIGN KEY (email_ani) REFERENCES 'info' ('email') ON DELETE CASCADE;";
    if($con->query($sqla)===TRUE)
    {
        echo "Tables created successfully <br>";
    }
    else
    {
        echo "Error creating Table: ".$con->error."<br>";
    }
    if($con->query($sqli)===TRUE)
    {
        echo "Tables created successfully <br>";
    }
    else
    {
        echo "Error creating Table: ".$con->error."<br>";
    } if($con->query($sqlm)===TRUE)
    {
        echo "Tables modified successfully <br>";
    }
    else
    {
        echo "Error creating Table: ".$con->error."<br>";
    } if($con->query($sqlp)===TRUE)
    {
        echo "Tables modified successfully <br>" ;
    }
    else
    {
        echo "Error creating Table: ".$con->error."<br>";
    } if($con->query($sqlo)===TRUE)
    {
        echo "Tables modified successfully <br>";
    }
    else
    {
        echo "Error creating Table: ".$con->error."<br>";
    }
    $con->close();
?>
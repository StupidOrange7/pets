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
        a_name VARCHAR(20) NOT NULL,
        a_gender VARCHAR(6) NOT NULL,
        price INT(3) NOT NULL,
        a_image MEDIUMBLOB NOT NULL,
        month INT (2) NOT NULL,
        type VARCHAR(10) NOT NULL,
        email_ani VARCHAR(40))";
    $sqlAdmin = "INSERT INTO info(fname, lname, email, password, age, address, image) VALUES ('admin','admin','admin@gmail.com','123','30','masr el gedida',' ');";

    $sqli = "CREATE TABLE info (
        fname VARCHAR(25) NOT NULL,
        lname VARCHAR(25) NOT NULL,
        email VARCHAR(40) PRIMARY KEY,
        address VARCHAR(40) NOT NULL,
        age INT (2) NOT NULL,
        password VARCHAR(20),
        image MEDIUMBLOB NOT NULL
        )";

    $sqlf =" CREATE TABLE favorite(
        email_fav VARCHAR(40) NOT NULL,
        id_fav INT NOT NULL,
        PRIMARY KEY(email_fav,id_fav),
        FOREIGN KEY (email_fav) REFERENCES info (email) ON DELETE RESTRICT ON UPDATE RESTRICT,
        FOREIGN KEY (id_fav) REFERENCES animals (id) ON DELETE RESTRICT ON UPDATE RESTRICT
    )";

    $sqlm = "ALTER TABLE animals ADD FOREIGN KEY (email_ani) REFERENCES info (email) ON DELETE RESTRICT ON UPDATE RESTRICT";
  
    if($con->query($sqli)===TRUE )
    {
        echo "Tables created successfully <br>";
    }
    else
    {
        echo "Error creating Table: ".$con->error."<br>";
    }
    if($con->query($sqlAdmin)===TRUE )
    {
        echo "Admin added successfully <br>";
    }
    else
    {
        echo "Error adding Admin: ".$con->error."<br>";
    }
    if($con->query($sqla)===TRUE)
    {
        echo "Tables created successfully <br>";
    }
    else
    {
        echo "Error creating Table: ".$con->error."<br>";
    } 
    if($con->query($sqlm)===TRUE)
    {
        echo "Tables modfied successfully <br>";
    }
    else
    {
        echo "Error creating Table: ".$con->error."<br>";
    }
    if($con->query($sqlf)===TRUE)
    {
        echo "Tables created successfully <br>";
    }
    else
    {
        echo "Error creating Table: ".$con->error."<br>";
    }
    $con->close();
?>
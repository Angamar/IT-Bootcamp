<?php

require_once "bookstore_connection.php";

$sql=           "CREATE DATABASE IF NOT EXISTS bookstore;";

                if ($conn->query($sql))
                {
                        Echo "<p>Baza uspesno kreirana!</p>";
                }
                else
                {
                        echo "baza nije kreirana, greska " . $conn->error;
                }

$sql=           "USE bookstore;";
$sql.=          "CREATE TABLE IF NOT EXISTS orders 
                (
                id INT UNSIGNED AUTO_INCREMENT,
                first_name VARCHAR(50) NOT NULL,
                last_name VARCHAR(90) NOT NULL,
                address VARCHAR(255) NOT NULL,
                city VARCHAR(100) NOT NULL,
                country VARCHAR(100) NOT NULL,
                delivery_option CHAR(18) NOT NULL,
                order_time DATETIME NOT NULL,
                PRIMARY KEY (id)
                )
                ENGINE = InnoDB;";


if ($conn->multi_query($sql))
{
        echo "<p>Uspesno izvrseni upiti</p>";
}
else
{
        echo "Greska: " . $conn->error;
}

?>
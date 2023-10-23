<?php

function connectToDB()
{


    $host = "localhost";
    $database_name = "movies_db";
    $database_username = "scarred-codes";
    $database_password = "scarred*codes";

    $mysqli = mysqli_connect($host, $database_username, $database_password, $database_name);

    if (!$mysqli) {

        die("Connection failed: " . mysqli_connect_error());

    }

    return $mysqli;
}

$mysqli = connectToDB();

echo "Connected to database successfully <br />";

?>
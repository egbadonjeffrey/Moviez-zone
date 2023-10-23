<?php


function connectToDB()
{
    require_once('dbconfig.php');



    $mysqli = mysqli_connect($host, $database_username, $database_password, $database_name);

    if (!$mysqli) {

        die("Connection failed: " . mysqli_connect_error());

    }

    return $mysqli;
}

$mysqli = connectToDB();

echo "Connected to database successfully <br />";

?>
<?php

require_once('db_credentials.php');

function connectDatabase() 
{
    $connection = mysqli_connect(DB_SERVER, DB_USER, DB_PASS, DB_NAME);
    return $connection;
}

function disconnectDatabase($connection) 
{   
    if (isset($connection)) {
        mysqli_close($connection);
    };
}





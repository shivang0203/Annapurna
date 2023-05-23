<?php
    session_start();
    define('SITEURL','http://localhost/IT262-Project/admin1/');
    $LOCALHOST="localhost";
    $DB_USERNAME="root";
    $DB_PASSWORD="";
    $DB_NAME="IT262";
    $conn = mysqli_connect($LOCALHOST, $DB_USERNAME, $DB_PASSWORD, $DB_NAME); 
    if(!$conn){
        die("Sorry we failed to connect".mysqli_connect_error());
    }
    else{
        // echo "The Connection was successful";
    }
     // datadbase connetion
?>
<?php 
require "config.php";
$hostname = MYSQL_HOST;
$dbname = MYSQL_DATABASE;
$username = MYSQL_ADMIN;
$password = MYSQL_PASSWORD;
$connect_string = "mysql:host=$hostname;dbname=$dbname";

//$con_string = "sqlite:database/database.sqlite"; //This is an Example

try {
    $con = new PDO($connect_string, $username, $password);            //Properties Data Object //Method of connecting to a database
    $con->setAttribute(PDO::ATTR_ERRMODE, 
    PDO::ERRMODE_EXCEPTION); //Set the error mode to exception
    echo "Database Connection Succeed";
} catch (PDOException $e) {
    echo "Connection Failed: " . $e->getMessage();
}

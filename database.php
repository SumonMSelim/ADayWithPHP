<?php
/*** mysql hostname ***/
$hostname = 'localhost';

/*** mysql username ***/
$username = 'root';

/*** mysql password ***/
$password = 'iamselim';

try {
    $dbh = new PDO("mysql:host=$hostname;dbname=php", $username, $password);
    /*** set the error reporting attribute ***/
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo 'Connected to database';

} catch (PDOException $e) {
    echo $e->getMessage();
}
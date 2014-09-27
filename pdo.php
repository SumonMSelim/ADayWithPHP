<?php
/*** mysql hostname ***/
$hostname = 'localhost';

/*** mysql username ***/
$username = 'username';

/*** mysql password ***/
$password = 'password';

try {
    $dbh = new PDO("mysql:host=$hostname;dbname=mysql", $username, $password);
    /*** echo a message saying we have connected ***/
    echo 'Connected to database';

    /*** set the error reporting attribute ***/
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    /*** some variables ***/
    $animal_id = 6;

    $animal_name = 'bruce';

    /*** prepare the SQL statement ***/
    $stmt = $dbh->prepare("SELECT * FROM animals WHERE animal_id = :animal_id AND animal_name = :animal_name");

    /*** bind the paramaters ***/
    $stmt->bindParam(':animal_id', $animal_id, PDO::PARAM_INT);
    $stmt->bindParam(':animal_name', $animal_name, PDO::PARAM_STR, 5);

    /*** execute the prepared statement ***/
    $stmt->execute();

    /*** fetch the results ***/
    $result = $stmt->fetchAll();

    /*** loop of the results ***/
    foreach($result as $row)
    {
        echo $row['animal_id'].'<br />';
        echo $row['animal_type'].'<br />';
        echo $row['animal_name'];
    }

    // query
    $sql = "INSERT INTO books (title,author) VALUES (:title,:author)";
    $q = $dbh->prepare($sql);
    $q->execute(array(':author'=>$author,
                    ':title'=>$title));

    $sql = "UPDATE books
        SET title=?, author=?
		WHERE id=?";
    $q = $dbh->prepare($sql);
    $q->execute(array($title,$author,$id));

}
catch(PDOException $e)
{
    echo $e->getMessage();
}
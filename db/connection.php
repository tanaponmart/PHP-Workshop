<?php
    $host = 'localhost';
    $user = 'root';
    $pwd = '';
    $dbName = 'webboard';

    try {
        $conn = new PDO("mysql:host=$host;dbname=$dbName", $user, $pwd);

         //foreach($dbh->query('') as $row) {
            // print_r($row);
         
        // $dbh = null;
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
?>
<?php
$host = 'phpwebapp.cyxigq728kv2.us-east-1.rds.amazonaws.com'; 
$db   = 'rdsdb';
$user = 'admin';      
$pass = 'admin1234';      

try {
    $dbh = new PDO("mysql:host=$host;dbname=$db", $user, $pass);
    echo "Connected to $db at $host successfully!";
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

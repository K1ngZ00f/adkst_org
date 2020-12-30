<?php
$_DBh = null; 

$dbhost = 'localhost';
$dbname='_adkst';
$dbuser = 'root';
$dbpass = 'root';


try {
    $_DBh = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
} catch (PDOException $ex) {
    die("Could not connect to MySQL! " . $ex->getMessage());
}


//echo "<hr><pre>";
//var_dump($_DBh);
//echo "</pre>";

//$result = $_DBh->query("SELECT * FROM testtable;");
//foreach ($result as $key => $value) {
//    var_dump($value);
//}

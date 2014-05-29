<?php
// These variables define the connection information for your MySQL database
$username = "redacted";
$password = "redacted";
$host = "redacted";
$dbname = "redacted";

//$dsn = "mysql:host={$host};dbname={$dbname};charset=utf8";    , $dsn
try { $db = new PDO("mysql:host={$host};dbname={$dbname};charset=utf8", $username, $password); }
catch(PDOException $ex){ die("Failed to connect to the database: " . $ex->getMessage());}
$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
header('Content-Type: text/html; charset=utf-8');
session_start();
?>
<?php

$server = 'localhost';
$username = 'root';
$pass = '';
$database = 'bloom';

$con = mysqli_connect($server,$username,$pass,$database);
if ($con) {
}else {
    die('Connection LOST');
}

?>
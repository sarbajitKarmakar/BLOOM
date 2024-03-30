<?php 
session_start();
$userIdddd = $_SESSION['userid'];
include 'conn.php';

$id = $_GET['id'];
$notid = $_GET['notid'];
$updateNotSeen = "UPDATE `notification_seen` SET `tf`= true WHERE notification_id = $notid AND seen_user_id = $userIdddd";  //MAKE THIS RIGHT ACCORDING TO USER
$updateNotSeenQuery = mysqli_query($con,$updateNotSeen);


header("location: update.php?id=".$id);


?>
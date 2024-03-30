<?php
    session_start();
    include 'conn.php';
        $idddddd = $_SESSION['userid'];
        if(isset($_GET['allcheck'])){
            $allchk = "UPDATE `notification_seen` SET `tf`=true WHERE seen_user_id=$idddddd";
            $allchkqur = mysqli_query($con,$allchk);
            header("location: ".$_SESSION["link"]);
        }
?>
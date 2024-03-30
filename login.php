<?php
 session_start() ;

 if(isset($_SESSION['userid'])){
    header("location: index.php");
 }
 ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>bloom</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <header class="loginH">
        <div class="logo logoL">
            <svg xmlns="http://www.w3.org/2000/svg" width="27" height="30" viewBox="0 0 27 30" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd"
                    d="M14.7637 3L13.0316 0L11.2996 3L1.73205 19.5714L0 22.5714H3.4641H3.95897L1.73205 26.4286L0 29.4286H3.4641H22.5991H26.0632L24.3312 26.4286L22.1043 22.5714H22.5991H26.0632L24.3312 19.5714L14.7637 3ZM20.9496 20.5714H22.5991L21.4444 18.5714L14.1863 6L13.0316 4L11.8769 6L4.6188 18.5714L3.4641 20.5714H5.11367L11.2996 9.85714L13.0316 6.85714L14.7637 9.85714L20.9496 20.5714ZM7.42308 20.5714L11.8769 12.8571L13.0316 10.8571L14.1863 12.8571L18.6402 20.5714H7.42308ZM6.26837 22.5714H19.7949L21.4444 25.4286L22.5991 27.4286H20.2897H5.7735H3.4641L4.6188 25.4286L6.26837 22.5714Z"
                    fill="white" />
            </svg>
            <p class="comName">BLOOM</p>
        </div>
    </header>
    <div class="orgBody">
        <form action="login.php">
            <input type="submit" name="management" id="mng" class="displayNone">
            <label for="mng">
                
                <div id="management" class="loginBTN">
                    Click here to login Management id
                </div>
            </label>
            <input type="submit" name="employee" id="emp" class="displayNone">
            <label for="emp">

                <div id="employee" class="loginBTN">
                    Click herer to login Employee id
                </div>
            </label>
        </form>

    </div>
</body>

</html>

<?php

if (isset($_GET['management'])) {

    $_SESSION['userid'] = 5432;
    header("location: index.php");
}
if (isset($_GET['employee'])) {
    $_SESSION['userid'] = 5747;
    header("location: index.php");
}

?>
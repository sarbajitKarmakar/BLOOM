<?php
include 'conn.php';

$id = $_GET["id"];

$select = "SELECT * FROM `patient_details` WHERE id=$id";
$selectRev = "SELECT * FROM `revenue` WHERE patient_id=$id";

$result = mysqli_query($con, $select);
$resultRev = mysqli_query($con, $selectRev);

$arr = mysqli_fetch_array($result);
$arrRev = mysqli_fetch_array($resultRev);


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <form action="" method="post" class="patientForm">

        <!-- visible area -->
        <div id="visible">
            <input type="text" name="name" placeholder="Enter Patient Name" value="<?php echo $arr['name'] ?>">
            <input type="number" name="number" placeholder="Enter Phone number"
                value="<?php echo $arr['contact_number'] ?>">
            <input type="text" name="dctrName" placeholder="Enter Doctor Name"
                value="<?php echo $arr['doctor_name'] ?>">
            <input type="text" name="reason" placeholder="Reason" value="<?php echo $arr['reason'] ?>">
            <div class="radioDiv">
                <div class="radioDivinp">
                    <input type="radio" name="gender" value="male" id="male" <?php if ($arr['gender'] == 'male')
                        echo "checked" ?>>
                        <label for="male">Male</label>
                    </div>
                    <div class="radioDivinp">
                        <input type="radio" name="gender" value="female" id="female" <?php if ($arr['gender'] == 'female')
                        echo "checked" ?>>
                        <label for="female">Female</label>
                    </div>
                    <div class="radioDivinp">
                        <input type="radio" name="gender" value="others" id="others" <?php if ($arr['gender'] == 'others')
                        echo "checked" ?>>
                        <label for="others">Others</label>
                    </div>
                </div>
                <div class="checkBoxDiv">
                    <div class="checkbox">
                        <input type="checkbox" id="recovered" name="recovered" value="Recovered" <?php echo ($arr['status'] == 'Recovered') ? 'checked disabled' : '' ?>>
                    <label for="recovered">Recovered</label>
                </div>
                <div class="checkbox">
                    <input type="checkbox" id="paid" name="paid" value="Paid" <?php echo ($arrRev['pay_status'] == 'Paid') ? 'checked disabled' : '' ?>>
                    <label for="paid">Paid</label>
                </div>
            </div>
            <div class="options" required>
                <label for="dept">Select Department:</label>
                <select id="dept" name="dept" required>
                    <option value="Cardiology" <?php if ($arrRev['dept'] == 'Cardiology')
                        echo 'selected' ?>>Cardiology
                        </option>
                        <option value="Neurology" <?php if ($arrRev['dept'] == 'Neurology')
                        echo 'selected' ?>>Neurology</option>
                        <option value="Outpatient" <?php if ($arrRev['dept'] == 'Outpatient')
                        echo 'selected' ?>>Outpatient
                        </option>
                        <option value="Other" <?php if ($arrRev['dept'] == 'Other')
                        echo 'selected' ?>>Other</option>
                    </select>
                </div>
            </div>

            <!-- invisible are that appire while checked paid -->
            <div id="invsbl" class="invisible displayNone">
                <input type="number" id="billno" name="billno" placeholder="Bill No" <?php echo ($arrRev['pay_status'] == 'Paid') ? 'checked disabled value="' . $arrRev['bill_no'] . '"' : '' ?>>
            <input type="number" id="amount" name="amount" placeholder="Amount" <?php echo ($arrRev['pay_status'] == 'Paid') ? 'checked disabled value="' . $arrRev['amount'] . '"' : '' ?>>
            <input type="number" id="discount" name="discount" placeholder="Discount" <?php echo ($arrRev['pay_status'] == 'Paid') ? 'checked disabled value="' . $arrRev['discount'] . '"' : '' ?>>
            <input type="number" id="netAmount" name="netAmount" disabled placeholder="Net Amount" <?php echo ($arrRev['pay_status'] == 'Paid') ? 'checked disabled value="' . $arrRev['net_amount'] . '"' : '' ?>>
        </div>
        <input type="submit" name="submit" class="btn">
    </form>

    <script src="JS/update.js"></script>
</body>

</html>

<?php

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $number = $_POST['number'];
    $dctrName = $_POST['dctrName'];
    $reason = $_POST['reason'];
    $gender = $_POST['gender'];
    $dept = $_POST['dept'];
    $paidd = false;
    $rcvre = false;


    if (isset($_POST['recovered'])) {
        $rcvre = true;
        $recovered = $_POST['recovered'];

        $update = "UPDATE `patient_details` SET `name`='$name',`gender`='$gender',`status`='$recovered',`rcvrdDate`= CURRENT_TIMESTAMP,`contact_number`='$number',`doctor_name`='$dctrName',`reason`='$reason',`time`=CURRENT_TIMESTAMP WHERE id=$id";
    } else {
        $update = "UPDATE `patient_details` SET `name`='$name',`gender`='$gender',`contact_number`='$number',`doctor_name`='$dctrName',`reason`='$reason' WHERE id=$id";
    }

    $updateQuery = mysqli_query($con, $update);

    if (isset($_POST['paid'])) {
        $paidd = true;
        $billno = $_POST['billno'];
        $amount = $_POST['amount'];
        $discount = $_POST['discount'];
        $netAmount = $_POST['amount'] - $_POST['discount'];
        $paid = $_POST['paid'];

        $insertRev = "UPDATE `revenue` SET `amount`='$amount',`discount`='$discount',`net_amount`='$netAmount',`pay_status`='$paid',`bill_no`='$billno',`paid_time`=CURRENT_TIMESTAMP,`dept`='$dept' WHERE patient_id=$id"; // patinet_details insert query
    }else{
        $insertRev = "UPDATE `revenue` SET `dept`='$dept' WHERE patient_id=$id";
    }
    $insertRevQuery = mysqli_query($con, $insertRev); 

    // notification

    if ($paidd || $rcvre) {
        if ($paidd && $rcvre) {

            $msg = "Patient no : " . $arr['patient_id'] . " recovered & paid successfully";

        } else if ($paid) {

            $msg = "Patient no : " . $arr['patient_id'] . " paid successfully";


        } else if ($rcvre) {

            $msg = "Patient no : " . $arr['patient_id'] . " recovered";
        }

        $insertNot = "INSERT INTO `notification`(`patient_id`,`massage`,`time`) VALUES('$id','$msg',CURRENT_TIMESTAMP)";
        $notQuery = mysqli_query($con, $insertNot);

        // SELECT LAST UPDATED NOTIFICATION'S ID
        $selectNot = "SELECT id FROM `notification` ORDER BY time DESC LIMIT 1";
        $notQuery = mysqli_query($con, $selectNot);
        $notArr = mysqli_fetch_array($notQuery);
        $notId = $notArr['id'];

        $selectUser = "SELECT id FROM `user`";
        $userQuery = mysqli_query($con, $selectUser);
        while ($userArr = mysqli_fetch_array($userQuery)) {
            $userId = $userArr['id'];
            $notSInsert = "INSERT INTO `notification_seen`(`notification_id`,`seen_user_id`) VALUES ('$notId','$userId')";
            $notSQuERY = mysqli_query($con, $notSInsert);
        }
    }


    if ($updateQuery) {
        ?>
        <script>alert('Update Successful')</script>
        <?php
        header("location: billingdetails.php");
    } else {
        ?>
        <script>alert('Update not Successful') </script>
        <?php
    }
}

?>

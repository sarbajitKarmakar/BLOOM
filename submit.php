<?php
include "conn.php";

    if (isset($_POST['submit'])) {
        $name = $_POST['name'];
        $number = $_POST['number'];
        $dctrName = $_POST['dctrName'];
        $reason = $_POST['reason'];
        $gender = $_POST['gender'];
        $dept = $_POST['dept'];
        
        

        while (true) {
            $patientId = rand(1000000000,9999999999);
            $select = "SELECT * FROM `patient_details` WHERE patient_id='$patientId'";
            $selectQuery = mysqli_query($con,$select);
            if (mysqli_num_rows($selectQuery) >= 1) {
                continue;
            }else {
                break;
            }
        }


// add department in query

        if (isset($_POST['recovered'])) {
            $recovered = $_POST['recovered'];

            $insert = "INSERT INTO `patient_details`( `patient_id`, `name`, `admsndate`, `status`, `rcvrdDate`, `contact_number`, `doctor_name`, `reason`, `gender`, `time`) VALUES ('$patientId', '$name', CURRENT_TIMESTAMP, '$recovered', CURRENT_TIMESTAMP,'$number','$dctrName','$reason','$gender',CURRENT_TIMESTAMP)";
        } else {
            $insert = "INSERT INTO `patient_details`( `patient_id`, `name`, `admsndate`, `contact_number`, `doctor_name`, `reason`, `gender`,`time`) VALUES ('$patientId', '$name', CURRENT_TIMESTAMP,'$number','$dctrName','$reason','$gender',CURRENT_TIMESTAMP)";
        }

        $insertQuery = mysqli_query($con, $insert);  // patinet_details insert query

        $idsql = "SELECT * FROM `patient_details` ORDER BY admsndate DESC LIMIT 1";

        $result = mysqli_query($con, $idsql);

        $id = mysqli_fetch_array($result)['id'];

        if (isset($_POST['paid'])) {
            $billno = $_POST['billno'];
            $amount = $_POST['amount'];
            $discount = $_POST['discount'];
            $netAmount = $_POST['amount'] - $_POST['discount'];
            $paid = $_POST['paid'];

            $insertRev = "INSERT INTO `revenue`(`patient_id`, `amount`, `discount`, `net_amount`, `pay_status`, `bill_no`, `time`,`paid_time`,`dept`) VALUES ('$id','$amount','$discount','$netAmount','$paid','$billno', CURRENT_TIMESTAMP , CURRENT_TIMESTAMP,'$dept')";
        } else {
            $insertRev = "INSERT INTO `revenue`(`patient_id`, `amount`, `discount`, `net_amount`, `bill_no`, `time`,`dept`) VALUES ('$id','$amount','$discount','$netAmount','$billno', CURRENT_TIMESTAMP, '$dept')";
        }

        $insertRevQuery = mysqli_query($con, $insertRev);  // revenue insert query

        // notification section

        $msg = "New Patient Admitted. Name: " . $name . "& id: " . $patientId . ". " . $reason ;

        $insertNot = "INSERT INTO `notification`(`patient_id`,`massage`,`time`) VALUES('$id','$msg',CURRENT_TIMESTAMP)";
        $notQuery = mysqli_query($con,$insertNot);

        // SEEN DATABASE UPDATE

        // SELECT LAST UPDATED NOTIFICATION'S ID
        $selectNot = "SELECT id FROM `notification` ORDER BY time DESC LIMIT 1"; 
        $notQuery = mysqli_query($con,$selectNot);
        $notArr = mysqli_fetch_array($notQuery);
        $notId = $notArr['id'];

        $selectUser = "SELECT id FROM `user`";
        $userQuery = mysqli_query($con,$selectUser);
        while($userArr = mysqli_fetch_array($userQuery)){
            $userId = $userArr['id'];
            $notSInsert = "INSERT INTO `notification_seen`(`notification_id`,`seen_user_id`) VALUES ('$notId','$userId')";
            $notSQuERY = mysqli_query($con,$notSInsert);
        }

        if($insertQuery){
            ?>
            <script>alert('Insert Successful')</script>
            <?php
            header("location: billingdetails.php");
        }else{
            ?>
            <script>alert('Insert Successful')</script>
            <?php
        }
    }

?>
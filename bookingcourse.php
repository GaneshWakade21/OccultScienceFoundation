<?php
$first_name = $_POST['first_name'];
$middle_name = $_POST['middle_name'];
$last_name = $_POST['last_name'];
$fathers_name = $_POST['fathers_name'];
$mob_no = $_POST['mob_no'];
$email_id = $_POST['email_id'];
$address = $_POST['address'];
$pin_code = $_POST['pin_code'];
$course_name = $_POST['course_name'];
$course_type = $_POST['course_type'];
$batch = $_POST['batch'];
$pay_type = $_POST['pay_type'];
$upi = $_POST['upi'];
$upi_no = $_POST['upi_no'];
$amount_paid = $_POST['amount_paid'];
$trans_date = $_POST['trans_date'];
$trans_time = $_POST['trans_time'];
$trans_slip = $_POST['trans_slip'];
$remark = $_POST['remark'];

function id($coursename, $types )
    {
        // $words = explode(" ", $coursename);
        // $firstWord = $words[0];
        // $secondWord = $words[1];
        // $firstWord = substr($firstWord, 0, 1);
        // $secondWord = substr($secondWord, 0, 1);


        $coursename = substr($coursename, 0, 1);

        $types = substr($types, 0, 1);

        //  date('d-m-y');
        // $startdate = date('d-m-y', strtotime($startdate));
        // $startdate = preg_replace('/[^\p{L}\p{N}\s]/u', '', $startdate);
        // $enddate = date('d-m-y', strtotime($enddate));
        // $enddate = preg_replace('/[^\p{L}\p{N}\s]/u', '', $enddate);

        // $id = $firstWord . $secondWord . $types . $startdate . $enddate;
        $id = $coursename  . $types ;
        return $id;
    }

    $pid = id($course_name, $course_type );
    $id = strtoupper($pid);



// Database Connection 
error_reporting(E_ALL);
$mysqli = new mysqli("localhost", "root", "", "astrology");
if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}
$stmt = $mysqli->prepare("INSERT INTO coursebooking (id, first_name, middle_name, last_name, fathers_name, mob_no , email_id , address , pin_code , course_name , course_type , batch ,pay_type ,  upi, upi_no, amount_paid ,trans_date, trans_time, trans_slip, remark) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
if ($stmt === false) {
  die("Prepare failed: " . $mysqli->error);
}
$stmt->bind_param(
  "ssssssssisssssisssbs",
  $id,
  $first_name,
  $middle_name,
  $last_name,
  $fathers_name,
  $mob_no,
  $email_id,
  $address,
  $pin_code,
  $course_name,
  $course_type,
  $batch,
  $pay_type,
  $upi,
  $upi_no,
  $amount_paid,
  $trans_date,
  $trans_time,
  $trans_slip,
  $remark
);


$stmt->execute();
echo "Regestration Successfully... ";
$stmt->close();
$mysqli->close();

// i - integer 
// d-double 
// s- string 
// b - blob


?>
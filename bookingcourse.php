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
// $trans_slip = $_POST['trans_slip'];
$remark = $_POST['remark'];

 #file name with a random number so that similar dont get replaced
 $translip = $_FILES["trans_slip"]["name"];

 #temporary file name to store file
 $tempname = $_FILES["trans_slip"]["tmp_name"];

 #TO move the uploaded file to specific location
 move_uploaded_file($tempname, "course_translip/".$translip);

function id($first_name, $middle_name, $last_name, $coursename, $types)
{

  $fnf = substr($first_name, 0, 1);
  $mnf = substr($middle_name, 0, 1);
  $snf = substr($last_name, 0, 1);

  $words = explode(" ", $coursename);
  $firstWord = $words[0];
  $secondWord = $words[1];
  $firstWord = substr($firstWord, 0, 1);
  $secondWord = substr($secondWord, 0, 1);


  // $coursename = substr($coursename, 0, 1);

  $types = substr($types, 0, 1);

  //  date('d-m-y');
  // $startdate = date('d-m-y', strtotime($startdate));
  // $startdate = preg_replace('/[^\p{L}\p{N}\s]/u', '', $startdate);
  // $enddate = date('d-m-y', strtotime($enddate));
  // $enddate = preg_replace('/[^\p{L}\p{N}\s]/u', '', $enddate);

  $id = $fnf . $mnf . $snf . $firstWord . $secondWord . $types;
  // $id = $coursename  . $types ;
  return $id;
}

$pid = id($first_name, $middle_name, $last_name, $course_name, $course_type);
$id = strtoupper($pid);

// Database Connection 
error_reporting(E_ALL);
$mysqli = new mysqli("localhost", "root", "", "astrology");
if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}

$sql = "INSERT INTO `coursebooking` (`id`, `first_name`, `middle_name`, `last_name`, `fathers_name`, `mob_no`, `email_id`, `address`, `pin_code`, `course_name`, `course_type`, `batch`, `pay_type`, `upi`, `upi_no`, `amount_paid`, `trans_date`, `trans_time`, `trans_slip`, `remark`) VALUES ('$id', '$first_name', '$middle_name', '$last_name', '$fathers_name', '$mob_no', '$email_id', '$address', '$pin_code', '$course_name', '$course_type', '$batch', '$pay_type', '$upi', '$upi_no', '$amount_paid', '$trans_date', '$trans_time', '$translip', '$remark');";
$result = mysqli_query($mysqli, $sql);
header("Location: bookcourse.php");

?>
<?php
$firstname = $_POST['firstname'];
$middlename = $_POST['middlename'];
$lastname = $_POST['lastname'];
$fathername = $_POST['fathername'];
$dob = $_POST['dob'];
$age = $_POST['age'];

$age = filter_var($age, FILTER_SANITIZE_NUMBER_INT);

$tob = $_POST['tob'];
$gender = $_POST['gender'];
$birthpalce = $_POST['birthpalce'];
$birthstate = $_POST['birthstate'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$doappoint = $_POST['doappoint'];

// $doappoint = date('d-m-y', strtotime($doappoint));
// $dob = date('d-m-y', strtotime($dob));

// $hrfrom = $_POST['hrfrom'];

// Retrieve selected options from the form

// Convert array of selected options into a string
// $hour = implode(',', $hour);

// Insert the string into the database
// $sql = "INSERT INTO queries (query_types) VALUES ('$queryTypes')";


$timefrom = $_POST['timefrom'];
$timeto = $_POST['timeto'];

// $hour = $_POST['hour'];
// $minfrom = $_POST['minfrom'];
// $ampmfrom = $_POST['ampmfrom'];
// $hrto = $_POST['hrto'];
// $minto = $_POST['minto'];
// $ampmto = $_POST['ampmto'];


$totaldur = $_POST['totaldur'];
$fee = $_POST['fee'];

// query 
$query = $_POST['querytype'];
$querystring = implode(',', $query);



$upi = $_POST['upi'];
$upino = $_POST['upino'];
$amount = $_POST['amount'];
$transdate = $_POST['transdate'];
$transtime = $_POST['transtime'];
$translip = $_POST['translip'];
$remark = $_POST['remark'];

// if (isset($_POST['age'])) {
//     $age = $_POST['age'];
// } else {
//     $age = "0"; // set default value if 'age' is not set
// }



// first name                  -   G 
// middle name                 -   N 
// last name                   -   W 
// data entry time             -   2204        i.e is at 10:04 pm   remove
// date of data entry          -   9323        i.e = 9 march 2023    
// minutes bought              -   30          i.e - 30 min 
// slot timed booked           -   14001430    i.e - 2:00 pm to 2:30 pm 
// date of slot booked         -   12323       i.e - 12 march 2023

function id($firstname, $middlename, $lastname, $current_time, $today, $totaldur, $timefrom, $timeto, $doappoint)
{
  $fnf = substr($firstname, 0, 1);
  $mnf = substr($middlename, 0, 1);
  $snf = substr($lastname, 0, 1);

  $db = date('Y');
  $dba = date('m');
  $dbc = date('d');

  $current_time = preg_replace('/[^\p{L}\p{N}\s]/u', '', $current_time);

  $today = date('d-m-y');
  $today = preg_replace('/[^\p{L}\p{N}\s]/u', '', $today);

  $totaldur = preg_replace("/[a-zA-Z\s]+/","", $totaldur);

  $timefrom = preg_replace('/[^\p{L}\p{N}\s]/u', '', $timefrom);
  $timeto = preg_replace('/[^\p{L}\p{N}\s]/u', '', $timeto);
  $string = str_replace(' ', '', $today);
  // $doappoint = date('d-m-y');
  $doappoint = date('d-m-y', strtotime($doappoint));
  $doappoint = preg_replace('/[^\p{L}\p{N}\s]/u', '', $doappoint);

  // $id = $fnf . $mnf . $snf . $current_time . $today . $totaldur . $timefrom . $timeto . $doappoint;
  $id = $fnf . $mnf . $snf . $doappoint . $timefrom ;
  return $id;
}
date_default_timezone_set('Asia/Kolkata');
$today = date('d/m/Y');
$current_time = date('H:i');

$pid = id($firstname, $middlename, $lastname, $current_time, $today, $totaldur, $timefrom, $timeto, $doappoint);
$id = strtoupper($pid);



// Database Connection 
error_reporting(E_ALL);
$mysqli = new mysqli("localhost", "root", "", "astrology");
if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}
$stmt = $mysqli->prepare("INSERT INTO appointment (id, firstname, middlename, lastname, fathername, dob, age, tob, gender, birthplace, birthstate, email, phone, doappoint, 
-- hour, minfrom, ampmfrom, hrto, minto, ampmto,
timefrom,timeto, 
totaldur, fee, query, upi, upino, amount,transdate,transtime, translip, remark) VALUES (?,?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
if ($stmt === false) {
  die("Prepare failed: " . $mysqli->error);
}
$stmt->bind_param(
  "ssssssisssssisssssssssssbs",
  $id,
  $firstname,
  $middlename,
  $lastname,
  $fathername,
  $dob,
  $age,
  $tob,
  $gender,
  $birthpalce,
  $birthstate,
  $email,
  $phone,
  $doappoint,
  // $hour, $minfrom, $ampmfrom, $hrto, $minto, $ampmto, 
  $timefrom,
  $timeto,
  $totaldur,
  $fee,
  $querystring,
  $upi,
  $upino,
  $amount,
  $transdate,
  $transtime,
  $translip,
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
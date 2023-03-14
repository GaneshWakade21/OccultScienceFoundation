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

// $hrfrom = $_POST['hrfrom'];

// Retrieve selected options from the form
$hour = $_POST['hour'];

// Convert array of selected options into a string
// $hour = implode(',', $hour);

// Insert the string into the database
// $sql = "INSERT INTO queries (query_types) VALUES ('$queryTypes')";



$minfrom = $_POST['minfrom'];
$ampmfrom = $_POST['ampmfrom'];
$hrto = $_POST['hrto'];
$minto = $_POST['minto'];
$ampmto = $_POST['ampmto'];
$totaldur = $_POST['totaldur'];
$fee = $_POST['fee'];

// query 
$query = $_POST['business'];
// $query = $_POST['investment'];
// $query = $_POST['relationship'];
// $query = $_POST['health'];
// $query = $_POST['career'];
// $query = $_POST['job'];
// $query = $_POST['premarriage'];
// $query = $_POST['postmarriage'];
// $query = $_POST['pregnancy'];
// $query = $_POST['litigation'];
// $query = $_POST['foreigntravel'];
// $query = $_POST['other'];

// $query = $_POST['query'];

$upi = $_POST['upi'];
$upino = $_POST['upino'];
$amount = $_POST['amount'];
$translip = $_POST['translip'];
$remark = $_POST['remark'];

// if (isset($_POST['age'])) {
//     $age = $_POST['age'];
// } else {
//     $age = "0"; // set default value if 'age' is not set
// }



// Database Connection 
error_reporting(E_ALL);
$mysqli = new mysqli("localhost", "root", "", "astrology");
if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}
$stmt = $mysqli->prepare("INSERT INTO appointment (firstname, middlename, lastname, fathername, dob, age, tob, gender, birthplace, birthstate, email, phone, doappoint, hour, minfrom, ampmfrom, hrto, minto, ampmto, totaldur, fee, query, upi, upino, amount, translip, remark) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
if ($stmt === false) {
  die("Prepare failed: " . $mysqli->error);
}
$stmt->bind_param("sssssisssssisssssssssssssbs", $firstname, $middlename, $lastname, $fathername, $dob, $age, $tob, $gender, $birthpalce, $birthstate, $email, $phone, $doappoint, $hour, $minfrom, $ampmfrom, $hrto, $minto, $ampmto, $totaldur, $fee, $query, $upi, $upino, $amount, $translip, $remark);

$stmt->execute();
echo "Regestration Successfully... ";
$stmt->close();
$mysqli->close();




//     $conn = new mysqli('localhost','root','','astrology');
//     if($conn->connect_error){
//         die('Connection Failed : ' .$conn->connect_error);
//     }else{
//         $stmt = $conn->prepare("insert into appointment(firstname, middlename, lastname, fathername, dob, age, tob, gender, birthplace, birthstate, email, phone, doappoint, hour, minfrom, ampmfrom, hrto, minto, ampmto, totaldur, fee, query, upi, upino, amount, translip, remark) values(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
//         // $stmt->bind_param("sssssisssssisssssssssssssbs",$firstname,$middlename,$lastname,$fathername,$dob,$age,$tob,$gender,$birthpalce,$birthstate,$email,$phone,$doappoint,$hour,$minfrom,$ampmfrom,$hrto,$minto,$ampmto,$totaldur,$fee,$query,$upi,$upino,$amount,$translip,$remark);

//         // $stmt->bind_param("ssss", $firstname, $middlename, $lastname, $fathername);

//         $stmt->execute();
//         echo "Regestration Successfully... ";
//         $stmt->close();
//         $conn->close();

//         // i - integer 
//         // d-double 
//         // s- string 
//         // b - blob
//     }


function id($firstname, $middlename, $lastname, $gendera, $dob, $amount, $doa)
{
  $fnf = substr($firstname, 0, 1);
  $mnf = substr($middlename, 0, 1);
  $snf = substr($lastname, 0, 1);
  $gen = substr($gendera, 0, 1);
  $db = date('Y');
  $dba = date('m');
  $dbc = date('d');
  // $pho =  substr($phonenumber,0,4);
  $date = date('d-m-y h:i:s');
  $datea = preg_replace('/[^\p{L}\p{N}\s]/u', '', $date);
  $string = str_replace(' ', '', $datea);
  $doad = preg_replace('/[^\p{L}\p{N}\s]/u', '', $doa);
  $id = $fnf . $mnf . $snf . $gen . $db . $dba . $dbc . $amount . $doad . $string;
  return $id;
}

$pid = id($firstname,$middlename,$lastname,$gender,$dob,$amount,$doappoint);
$id = strtoupper($pid);

// echo "id is ";
// echo $id;





?>
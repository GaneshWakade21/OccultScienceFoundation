<?php
include('db.php');
$msg = "";
function id($firstname,$middlename,$lastname,$gendera,$dob,$amount,$doa){
  $fnf =  substr($firstname,0,1);
  $mnf =  substr($middlename,0,1);
  $snf =  substr($lastname,0,1);
  $gen =  substr($gendera,0,1);
  $db = date('Y');
  $dba = date('m');
  $dbc = date('d');
  // $pho =  substr($phonenumber,0,4);
  $date = date('d-m-y h:i:s');
  $datea = preg_replace('/[^\p{L}\p{N}\s]/u','', $date);
  $string = str_replace(' ','',$datea);
  $doad = preg_replace('/[^\p{L}\p{N}\s]/u','', $doa);
  $id = $fnf.$mnf.$snf.$gen.$db.$dba.$dbc.$amount.$doad.$string ;
  return $id;
}

$is_page_refreshed = (isset($_SERVER['HTTP_CACHE_CONTROL']) && $_SERVER['HTTP_CACHE_CONTROL'] == 'max-age=0');
 
if($is_page_refreshed ) {
//   header('Location:index.php');
}

$first_name = ucwords($_POST['first_name']);
$middle_name = ucwords($_POST['middle_name']);
$last_name = ucwords($_POST['last_name']);
$gender = $_POST['gender'];
$email_id = $_POST['email_id'];
$phone_number = $_POST['phone_number'];
$father_name = ucwords($_POST['father_name']);
$date_of_birth = $_POST['date_of_birth'];
$today = date("Y-m-d");
$diff = date_diff(date_create($date_of_birth), date_create($today));
$age = $diff->format('%y');
$profession = $_POST['profession'];
$time_of_birth_hours =ucwords( $_POST['time_of_birth_hours']);
$time_of_birth_min = $_POST['time_of_birth_min'];
$time_of_birth_shift = $_POST['time_of_birth_shift'];
$city = $_POST['city'];
$state = $_POST['state'];
$upi_phone_number = $_POST['upi_phone_number'];
$amount = $_POST['amount'];
$upi = $_POST['upi'];
$booking_slot = $_POST['booking_slot'];
$fee = $_POST['fee'];
$time_of_booking = $_POST['time_of_booking'];
$query_type = $_POST['query'];
$date_of_appointment = $_POST['date_of_appointment'];
$remarks = ucwords($_POST['remarks']);


$pid = id($first_name,$middle_name,$last_name,$gender,$date_of_birth,$amount,$date_of_appointment);
$id = strtoupper($pid);


$transaction_details = $_FILES['transaction_details'];
// $passport_size_photo = $_FILES['passport_size_photo'];
// $medical_document = $_FILES['medical_document'];



$transaction_details_filename = "$id".$_FILES["transaction_details"]["name"];
$transaction_details_tempname = $_FILES["transaction_details"]["tmp_name"];
$transaction_details_folder = "./assets/docs/" . $transaction_details_filename;


// $passport_size_photo_filename = "$id".$_FILES["passport_size_photo"]["name"];
// $passport_size_photo_tempname = $_FILES["passport_size_photo"]["tmp_name"];
// $passport_size_photo_folder = "./assets/docs/" . $passport_size_photo_filename;


// $medical_document_filename = "$id".$_FILES["medical_document"]["name"];
// $medical_document_tempname = $_FILES["medical_document"]["tmp_name"];
// $medical_document_folder = "./assets/docs/" . $medical_document_filename;
// echo $medical_document_filename;

// if (move_uploaded_file($tempname, $folder)) {
//     echo "<h3> Image uploaded successfully!</h3>";
// } else {
//     echo "<h3> Failed to upload image!</h3>";
// }
// echo $masked_adhar_card_filename."<br>";
// echo $passport_size_photo_folder."<br>";
// echo $medical_document_folder."<br>";


move_uploaded_file($transaction_details_tempname, $transaction_details_folder);
// move_uploaded_file($passport_size_photo_tempname, $passport_size_photo_folder);
// move_uploaded_file($medical_document_tempname, $medical_document_folder);













// echo $first_name."<br>";
// echo $middle_name."<br>";
// echo $last_name."<br>";
// echo $gender."<br>";
// echo $email_id."<br>";
// echo $phone_number."<br>";
// echo $father_name."<br>";
// echo $date_of_birth."<br>";
// echo $age."<br>";
// echo $aadhar_card."<br>";
// echo $masked_aadhar_card."<br>";
// echo $passport_size_photo."<br>";
// echo $attendant_name."<br>";
// echo $attendent_phone_number."<br>";
// echo $attendent_email_id."<br>";
// echo $attendant_relation."<br>";
// echo $doctor_name."<br>";
// echo $clinic_address."<br>";
// echo $doc_phone_number."<br>";
// echo $date_of_first_treatment."<br>";
// echo $medical_document."<br>";
// echo $concern."<br>";
// echo $date_of_appointment."<br>";
// echo $time_of_appointment."<br>";
// echo $remarks."<br>";
$num = rand(10,100);

echo $id;

$sql = "INSERT INTO `appointment`(`id`, `first_name`, `middle_name`, `last_name`, `fathers_name`, `date_of_birth`, `AGE`, `profession`, `gender`, `email`, `phone_number`, `time_of_birth_hours`, `time_of_birth_min`, `time_of_birth_shift`, `city`,`state`, `time_of_booking`, `booking_slot`,`fee`, `upi`, `upi_phone_number`, `amount`, `transaction_details`, `remarks`, `query_type`, `date_of_appointement`) VALUES('$id', '$first_name', '$middle_name', '$last_name', '$father_name', '$date_of_birth','$age', '$profession','$gender', '$email_id', '$phone_number',  '$time_of_birth_hours', '$time_of_birth_min', '$time_of_birth_shift', '$city','$state', '$time_of_booking', '$booking_slot','$fee', '$upi', '$upi_phone_number', '$amount', '$transaction_details_filename', '$remarks', '$query_type','$date_of_appointment')";
// $foundation= 'foundation';
// $numberchecksql = "SELECT * FROM `admin` WHERE `admin_id` = '$foundation'";
// $numbercheckresult  = mysqli_query($conn, $numberchecksql);
// $numbercheckdata = mysqli_fetch_assoc($numbercheckresult);
// echo $numbercheckdata['admin_id'];
// echo var_dump($numbercheckdata);
// if(isset($numbercheckdata)){
//     // header('Location : numberalreadyexist.php');
// }

$result  = mysqli_query($conn, $sql);
$total = mysqli_fetch_assoc($result);
echo mysqli_num_rows($total);
if($result){
    setcookie('id', $id, time() + (86400 * 30), "/");
    setcookie('name', $first_name." ".$last_name, time() + (86400 * 30), "/");
    setcookie('appointment', $date_of_appointment." ".$time_of_booking, time() + (86400 * 30), "/");
    // setcookie('profession', $profession, time() + (86400 * 30), "/");
    header('Location:appointment_reciept_info.php');

}else{
  echo "error ";
}

?>

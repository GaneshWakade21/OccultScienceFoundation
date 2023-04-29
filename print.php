<?php
require('db.php');
$msg = "";
// UPDATE `patients` SET `concern` = 'Career', `date_of_appointement` = '2022-10-17', `time_of_appointement` = '12:00pm - 13:00pm', `appointment_fill_time` = NOW(), `next_appointement_date` = '2022-10-26', `next_appointement-time` = '12:00pm - 13:00pm', `fee_charged` = '500', `mode_of_payment` = 'cash', `transaction_details` = 'cash payment', `remarks_doctor` = 'having carrer issure gets more testion which is not requierd' WHERE `patients`.`id` = 'SKF2022102020221018';


// Concern
// $doctor_concern =array();

// if(!empty($_POST['relationship'])) {
//     $concern_relationshiop = $_POST['relationship'];
//     foreach($concern_relationshiop as $value){
//         array_push($doctor_concern,$value);
//     }
// }
// if(!empty($_POST['Career'])) {
//     $concern_Career = $_POST['Career'];
//     foreach($concern_Career as $value){
//         array_push($doctor_concern,$value);
//     }
// }
// if(!empty($_POST['Education'])) {
//     $concern_Education = $_POST['Education'];
//     foreach($concern_Education as $value){
//         array_push($doctor_concern,$value);
//     }
// }
// if(!empty($_POST['Psychological'])) {
//     $concern_Psychological = $_POST['Psychological'];
//     foreach($concern_Psychological as $value){
//         array_push($doctor_concern,$value);
//     }
// }
// if(!empty($_POST['Behavioural'])) {
//     $concern_Behavioural = $_POST['Behavioural'];
//     foreach($concern_Behavioural as $value){
//         array_push($doctor_concern,$value);
//     }
// }
// if(!empty($_POST['Mental_Health'])) {
//     $concern_Mental_Health = $_POST['Mental_Health'];
//     foreach($concern_Mental_Health as $value){
//         array_push($doctor_concern,$value);
//     }
// }
// if(!empty($_POST['Disorders'])) {
//     $concern_Disorders = $_POST['Disorders'];
//     foreach($concern_Disorders as $value){
//         array_push($doctor_concern,$value);
//     }
// }
// if(!empty($_POST['Abuse'])) {
//     $concern_Abuse = $_POST['Abuse'];
//     foreach($concern_Abuse as $value){
//         array_push($doctor_concern,$value);
//     }
// }


// $string  = "";
// foreach($doctor_concern as $value){
//     $string  = $string.",".$value;


// }

$pid = ucwords($_POST['id']);
$firstname = ucwords($_POST['first_name']);
$middlename = ucwords($_POST['middle_name']);
$lastname = ucwords($_POST['last_name']);
$father_name = ucwords($_POST['father_name']);
$date_of_birth = $_POST['date_of_birth'];
$age = $_POST['age'];
$time_of_birth = $_POST['time_of_birth'];
$gender = $_POST['gender'];
$city = $_POST['city'];
$state = $_POST['state'];
$email_id = $_POST['email_id'];
$phone_number = $_POST['phone_number'];
$date_of_appointment = $_POST['date_of_appointment'];
$timefrom = $_POST['timefrom'];
$timeto = $_POST['timeto'];
$duration = $_POST['duration'];
$fee = $_POST['fee'];
$query = $_POST['query_type'];
$upi = $_POST['upi'];
$upi_phone = $_POST['upi_phone_number'];
$amount = $_POST['amount'];
$trans_date = $_POST['trans_date'];
$trans_time = $_POST['trans_time'];
$trans_slip = $_POST['trans_slip'];
$remark = $_POST['remarks'];

$sql = "UPDATE `appointment` SET `firstname`='$firstname',`middlename`='$middlename',`lastname`='$lastname',`fathername`='$father_name',`dob`='$date_of_birth',`age`='$age',`tob`='$time_of_birth',`gender`='$gender',`birthplace`='$city',`birthstate`='$state',`email`='$email_id',`phone`='$phone_number',`doappoint`='$date_of_appointment',`timefrom`='$timefrom',`timeto`='$timeto',`totaldur`='$duration',`fee`='$fee',`query`='$query',`upi`='$upi',`upino`='$upi_phone',`amount`='$amount',`transdate`='$trans_date',`transtime`='$trans_time',`translip`='$trans_slip',`remark`='$remark' WHERE `id`='$pid'";

$conn = new mysqli($servername, $username, $password,$database);
$result  = mysqli_query($conn, $sql);

// header("Location : adminpage_search_user.php?pid=");


// $today = date("Y-m-d");
// $diff = date_diff(date_create($date_of_birth), date_create($today));
// $age = $diff->format('%y');
// $aadhar_card = $_POST['aadhar_card'];


// $attendant_name =ucwords( $_POST['attendant_name']);
// $attendent_phone_number = $_POST['attendent_phone_number'];
// $attendent_email_id = $_POST['email_id'];
// $attendant_relation = $_POST['attendant_relation'];
// $doctor_name = ucwords($_POST['doctor_name']);
// $clinic_address = ucwords($_POST['clinic_address']);
// $doc_phone_number = $_POST['doc_phone_number'];
// $date_of_first_treatment = $_POST['date_of_first_treatment'];

// $concern = $_POST['concern'];
// $date_of_appointment = $_POST['date_of_appointment'];
// $time_of_appointment = $_POST['time_of_appointment'];
// $remarks = ucwords($_POST['remarks']);

// $phone_number = $_POST['phone_number'];
// $concern = $_POST['concern'];
// $date_of_appointment = $_POST['date_of_appointment'];
// $time_of_appointment = $_POST['time_of_appointment'];
// $next_appointment_date = $_POST['next_appointment_details'];
// $next_appointment_time = $_POST['next_appointment_time'];
// $fee = $_POST['fee'];
// $mode_of_payment = $_POST['mode_of_payment'];
// $transaction_details = $_POST['transaction_details'];
// $doc_remarks = $_POST['doc_remarks'];

function id($fn,$lastname,$gendera,$doa){
    // echo $fn;
    $fnf =  substr($fn,0,1);
    $snf =  substr($lastname,0,1);
    $gen =  substr($gendera,0,1);
    $date = date('d-m-y h:i:s');
    $datea = preg_replace('/[^\p{L}\p{N}\s]/u', '', $date);
    $string = str_replace(' ', '', $datea);
    $doad = preg_replace('/[^\p{L}\p{N}\s]/u', '', $doa);
    // echo "<br>".$fnf."<br>";
    $id = $fnf.$snf.$gen.$doad.$string;
    // echo $id;
    return $id;
  }

//   $pid = id($first_name,$last_name,$gender,$date_of_appointment);
  $id = strtoupper($pid);  

//   commented 151,157,158,155,159,179 currently we are on 154 line
//   $transaction_details = $_FILES['transaction_details'];

// $transaction_details_filename = "$id".$_FILES["transaction_details"]["name"];
// $transaction_details_tempname = $_FILES["transaction_details"]["tmp_name"];
// $transaction_details_folder = "./assets/docs/" . $transaction_details_filename;
  
  
//   $masked_adhar_card_filename = $masked_aadhar_card;
//   $masked_adhar_card_tempname = $masked_aadhar_card;
//   $masked_adhar_card_folder = "./assets/docs/" . $masked_adhar_card_filename;
  
  
//   $passport_size_photo_filename = $passport_size_photo;
//   $passport_size_photo_tempname = $passport_size_photo;
//   $passport_size_photo_folder = "./assets/docs/" . $passport_size_photo_filename;
  
//   $medical_document_filename = "$id".$_FILES["medical_docs"]["name"];
//   $medical_document_tempname = $_FILES["medical_docs"]["tmp_name"];
//   $medical_document_folder = "./assets/docs/" . $medical_document_filename;

  

  
  
// move_uploaded_file($transaction_details_tempname, $transaction_details_folder);
//   move_uploaded_file($passport_size_photo_tempname, $passport_size_photo_folder);
//   move_uploaded_file($medical_document_tempname, $medical_document_folder);
  

$cid = $_POST['cid'];

// $sql = "UPDATE `appointment` SET `appointment_fill_time` = NOW(), `next_appointement_date` = '$next_appointment_date', `next_appointement-time` = '$next_appointment_time', `fee_charged` = '$fee', `mode_of_payment` = '$mode_of_payment', `transaction_details` = '$transaction_details', `doctors_concern` = '$string', `remarks_doctor` = '$doc_remarks' WHERE `patients`.`id` = '$cid';";




// $newsql = "INSERT INTO `appointment`(`id`, `first_name`, `middle_name`, `last_name`, `fathers_name`, `date_of_birth`, `AGE`, `profession`, `gender`, `email`, `phone_number`, `time_of_birth_hours`, `time_of_birth_min`, `time_of_birth_shift`, `city`,`state`, `time_of_booking`, `booking_slot`,`fee`, `upi`, `upi_phone_number`, `amount`, `transaction_details`, `remarks`, `query_type`, `date_of_appointement`) VALUES('$id', '$first_name', '$middle_name', '$last_name', '$father_name', '$date_of_birth','$age', '$profession','$gender', '$email_id', '$phone_number',  '$time_of_birth_hours', '$time_of_birth_min', '$time_of_birth_shift', '$city','$state', '$time_of_booking', '$booking_slot','$fee', '$upi', '$upi_phone_number', '$amount', '$transaction_details_filename', '$remarks', '$query_type','$date_of_appointment')";


// $newappointment  = mysqli_query($conn, $newsql);




// $sucess = false;
// if($result){
//  $sucess =true;
// }else{
//   $sucess = false;
// }

// if(!$_COOKIE['aminloggedin']){
//     header("Location: index.php");
//   }
  
  
echo "Updation successful";
  
?>

<?php
// if($sucess && $newappointment){
//     include('sucess.php');
// }else{
//     include('error.php');
// }
?>

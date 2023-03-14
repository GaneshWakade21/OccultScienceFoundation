<?php
$pid = $_GET['pid'];
require('db.php');
if (!$_SERVER['REQUEST_METHOD'] === 'GET') {
   echo "not done";
}
// require('db.php');
// echo $pid;
// $conn = new mysqli($servername, $username, $password,$database);

$phone = "SELECT `phone_number` FROM appointment WHERE id = '$pid';";
$pn  = mysqli_query($conn, $phone);
$phoneNumber ; 
if (mysqli_num_rows($pn) > 0) {
    // output data of each row
    $count = 0;
    while($row = mysqli_fetch_assoc($pn)) {
        $phoneNumber = $row['phone_number'];
 }}else{
    header("Location: wrecript.php");
 }
$sql = "SELECT * FROM `appointment` WHERE phone_number = $phoneNumber ORDER BY `appointment`.`date_of_appointement` DESC ;";
if(!$_COOKIE['aminloggedin']){
    header("Location: index.php");
  }
$result  = mysqli_query($conn, $sql);

$store = [];
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    $count = 0;
    while($row = mysqli_fetch_assoc($result)) {
        // echo $count;
        $store[$count] = $row;
        $count++;
        // echo var_dump($row['date_of_appointement'])."<br>";
    //    }
 }}

//  foreach 

$currentdatasql = "SELECT * FROM `appointment` WHERE id = '$pid';";
$currentappointementresult = mysqli_query($conn, $currentdatasql);
$currentdata = mysqli_fetch_assoc($currentappointementresult);
$data = [];
$data = $currentdata;

foreach($store as $key => $value){
    foreach($value as $field=>$d){
            //    echo "field : $field & value : is $d <br>";
    }
}

// echo var_dump($data['first_name'])1
// echo var_dump($store);
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report</title>
    <link href="assets/img/favicon.png" rel="icon">
    <link rel="stylesheet"
    href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
  <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.10.1/html2pdf.bundle.min.js"></script>
		<script>
			function generatePDF() {
			const element = document.getElementById('container_content');
			var opt = {
                margin:       -1,
				  filename:     'AppointmentReport.pdf',
				  image:        { type: 'jpeg', quality: 0.98 },
				  html2canvas:  { scale: 2 },
				  jsPDF:        { unit: 'in', format: 'letter', orientation: 'portrait' }
				};
				// Choose the element that our invoice is rendered in.
				html2pdf().set(opt).from(element).save();
			}
		</script>
       <style>


.drag .textarea {
  display: block;
  width: 100%;
  overflow: hidden;
  resize: both;
  min-height: 40px;
  line-height: 20px;
  resize:none;
  outline:none;
  border:2px solid black;
}

.drag .textarea[contenteditable]:empty::before {
  content: "Placeholder still possible";
  color: gray;
}

/* Just for demo */
* {
  box-sizing: border-box;
}
</style>
</head>

<!-- 
<div class="w-6/12   w-full p-1 flex flex-col items-start justify-start ">
            <div class=" w-full flex font-semibold text-md justify-center ">Ms. <span class=" mx-1"> Tamana Sharma, Psychologist</span></div>
            <div class="text-sm w-full flex justify-center font-semibold"> MSc. Applied Psychology</div>
            <div class="text-xs w-full flex justify-center font-semibold  h-auto">M: +91-9779981199 , E: bloomwithuscounselling@gmail.com</div>
            <div class=" w-full flex  text-xs justify-center">M.Sc Applied Psychology </div>
            <div class=" w-full flex  text-xs justify-center">GeM Seller Id: TEMK220006712203</div>
            <div class=" w-full flex  text-xs justify-center">MSME Reg. No: UBYAM-HR-13-0009859 </div>
            <div class=" w-full flex  text-xs justify-center">H.No.132, Sector-6, Mansa Devi Complex, Panchkula-134109 </div>
            <div class=" w-full flex  text-xs justify-center">Contact No: 97799-81199, Email: tamanasharma501@gmail.com </div>
        </div>
        <div class="w-4/12   flex flex-col justify-start items-start p-2 border">
             
             <div class="text-xs w-full flex  justify-center font-semibold  h-auto">Gem Seller Id: TEMK220006712203</div>
             <div class="text-xs w-full flex  justify-center font-semibold  h-auto">MSME Reg.No: UBYAM-HR-13-0009859</div>
             <div class="text-xs w-full flex  justify-center font-semibold  h-auto">Clinic Address: 132, Sector-6, MDC, Panchkula</div>
             <div class="text-xs w-full flex  justify-center font-semibold  h-auto">GeM Seller Id: TEMK220006712203</div>
        </div> -->




<body >
    <!-- component -->
<!-- This is an Orignal Reciept component -->
<div class=" ">

	<div class="  itmes-center justify-start  h-auto max-w-2xl mx-auto bg-white  container_content" id="container_content" id="container_content">
     <!-- <div class="text-lg w-full mx-auto flex justify-center items-center py-4 text-xl font-bold">Medical Report</div> -->
     <div class="flex  w-full">
       <div class="w-full  border-black  flex ">
         <div class="w-2/12   ">
             <img src="assets/img/logo.jpg" class="p-2" alt="logo">
         </div>
         <div class="w-10/12  ">
             <div class="w-full h-4/6  flex">
                <div class="w-7/12  justify-center items-start">
                <div class=" w-full flex font-bold text-md justify-center ">Ms. <span class=" mx-1"> Tamana Sharma, Psychologist</span></div>
                <div class=" w-full flex  text-xs font-semibold justify-center">M.Sc Applied Psychology </div>
                <div class=" w-full flex  text-xs justify-center ">M: +91-9779981199</div>
                </div>
                <div class="w-5/12  flex flex-col justify-center items-start py-2">
                <div class=" w-full flex  text-xs justify-center flex justify-start">Gem Seller Id: TEMK220006712203 </div>
                <div class=" w-full flex  text-xs justify-center flex justify-start py-0.5">MSME Reg.No: UBYAM-HR-13-0009859 </div>
                <div class=" w-full flex  text-xs justify-center flex justify-start">E: bloomwithuscounselling@gmail.com </div>
                </div>
             </div>
             <div class="w-full h-2/6  text-xs font-semibold px-2 flex justify-start px-20 items-center">Plot No. 132, Sector-6, Mansa Devi Complex, Panchkula, Haryana, 134109</div>

        </div>
         
       </div>
       
     </div>
     <!-- <div class="flex w-full justify-end px-2 items-center py-2 drop-shadow  text-black text-lg font-bold border-t border-b my-2 border-black">DATE<?php echo " :"." ".date("d/m/y"); ?></div> -->
     <div class=" flex w-full justify-start px-2 items-center py-1 bg-white text-black text-md font-semibold border border-black">Personal Details</div>
     <div class="w-12/12 h-full border border-black flex flex-row px-2 items-center py-1">
       <div class="w-2/6  p-1  ">
        
        <?php
        // echo $data['photo'];
        $img = "https://cdn2.iconfinder.com/data/icons/business-hr-and-recruitment/100/account_blank_face_dummy_human_mannequin_profile_user_-512.png";
        ?>
        <!-- <img src=" ?>"alt="profile here" class="w-28  h-28 rounded-2xl"> -->
        <img src="<?php 
        
        if(strpos($data['photo'], '.png') !== false){
            echo "assets/docs/".$data['photo'];
        }elseif(strpos($data['photo'], '.jpg')){
            echo "assets/docs/".$data['photo'];
        }else{
            echo $img;
        }
        
        ?>" class=" w-16 object-fit  h-16 rounded-2xl">
        
                </div>
       <div class="w-4/6 flex flex-col justify-start  h-full ">
        <div>Application ID :<span class="font-bold"> <?php echo $data['id']; ?> </span></div>
        
        <div>Full Name :<span class="font-bold"><?php echo ($data['gender'] == 'male' || $data['gender'] == 'Male')?" Mr. ":" Ms. ";  echo $data['first_name']." "; echo $data['middle_name']." "; echo $data['last_name']; ?></span>  </div>
        <div>Age : <span class="font-bold"> <?php echo $data['AGE']; ?></span></div>
        
       </div>
       
        
      
    </div>
     
   







     <div class="flex w-full">
        <div class="w-4/12 border border-black flex flex-col px-2 items-center py-1">
            <div class="h-5/12 w-full text-sm fot-semibold text-black">Date of Birth</div>
            <div class="h-7/12 w-full font-bold text-sm"><?php
            echo date("d-m-Y", strtotime($data['date_of_birth']));
            
            
              ?></div>
        </div>
        <div class="w-4/12 border border-black flex flex-col px-2 items-center py-1">
            <div class="h-5/12 w-full text-sm fot-semibold text-black">Gender</div>
            <div class="h-7/12 w-full font-bold text-sm"><?php echo $data['gender']; ?> </div>
        </div>
        
        <div class="w-4/12 border border-black flex flex-col px-2 items-center py-1">
            <div class="h-5/12 w-full text-sm fot-semibold text-black">Aadhar Card(LAST FOUR DIGIT)</div>
            <div class="h-7/12 w-full font-bold text-sm"><?php echo $data['adhar_card']; ?></div>
        </div>
     </div>
     <?php 
if(isset($data['doc_name']) ){
    include('assets/compo/previousdetails.php');
}


?>
     <div class="flex w-full">
     
        <div class="w-3/12 border border-black flex flex-col px-2 items-center py-1">
            <div class="h-5/12 w-full text-sm fot-semibold text-black">Patient Concern</div>
            <div class="h-7/12 w-full font-bold text-sm"><?php echo $data['concern']; ?></div>
        </div>
        <div class="w-9/12 border border-black flex flex-col px-2 items-center py-1">
            <div class="h-5/12 w-full text-sm fot-semibold text-black">Psychologist Concern</div>
            <div class="h-7/12 w-full font-bold text-sm"><?php echo ltrim($data['doctors_concern'], ','); ?></div>
        </div>
       
     </div>
     <div class=" flex w-full justify-start px-2 items-center py-1 bg-white text-black text-md font-semibold border border-black">Appointment Details</div>
     <div class="flex w-full">
        <div class="w-6/12 border border-black flex flex-col px-2 items-center py-1">
            <div class="h-5/12 w-full text-sm fot-semibold text-black">Appointment Date</div>
            <div class="h-7/12 w-full font-bold text-sm"><?php 
            
            echo date("d-m-Y", strtotime($data['date_of_appointement']));
           ?></div>
        </div>
        <div class="w-6/12 border border-black flex flex-col px-2 items-center py-1">
            <div class="h-5/12 w-full text-sm fot-semibold text-black">Appointment Time</div>
            <div class="h-7/12 w-full font-bold text-sm"><?php echo $data['time_of_appointement']; ?></div>
        </div>
     </div>
     
     <div class="flex w-full">
        <div class="w-6/12 border border-black flex flex-col px-2 items-center py-1">
            <div class="h-5/12 w-full text-sm fot-semibold text-black">Mode of Payment</div>
            <div class="h-7/12 w-full font-bold text-sm"><?php echo $data['mode_of_payment']; ?></div>
        </div>
        <div class="w-6/12 border border-black flex flex-col px-2 items-center py-1">
            <div class="h-5/12 w-full text-sm fot-semibold text-black">Fee Charged(INR)</div>
            <div class="h-7/12 w-full font-bold text-sm">₹<?php echo $data['fee_charged']; ?>/-</div>
        </div>
     </div>
     <div class=" flex w-full justify-start px-2 items-center py-1 bg-white text-black text-md font-semibold border border-black">Remarks</div>
     <div class="flex w-full">
        <div class="w-full border border-black flex flex-col px-2 items-center py-1">
            <div class="h-5/12 w-full text-sm fot-semibold text-black">Patient Remarks</div>
            <div class="h-7/12 w-full font-bold text-sm py-1 flex flex-wrap"><?php echo $data['remarks_patient']; ?></div>
        </div>  
        
     </div>
     <div class="flex w-full">
     <div class="w-full border border-black flex flex-col px-2 items-center py-1">
            <div class="h-auto w-full text-sm fot-semibold text-black">Psychologist Remarks</div>
            <!-- <textarea  class="border-none outline-none h-auto w-full font-bold text-sm py-1 flex flex-wrap" value="" type="text"></textarea> -->

            <span class=" textarea  border w-full  p-1" role="textbox" contenteditable><?php echo $data['remarks_doctor']; ?></span>
        </div>  
     </div>
     










    <?php
    $phone_number_for_next = $data['phone_number'];
    $current_date_for_next =  $data['date_of_appointement'];
    $nextsql = "SELECT * FROM `patients` WHERE `phone_number` = $phone_number_for_next  AND date_of_appointement > '$current_date_for_next' ORDER BY `patients`.`date_of_appointement` DESC;";
    $next_result = mysqli_query($conn, $nextsql);
    $nextdata = mysqli_fetch_assoc($next_result);
         // echo var_dump($nextdata);
      if(isset($nextdata)){
        // include('assets/compo/nextappointemnetdetails.php');
      }

       ?>

  <?php 
  $phone_number_for_previous = $data['phone_number'];
  $current_date =  $data['date_of_appointement'];
  $previoussql = "SELECT * FROM `patients` WHERE `phone_number` = $phone_number_for_previous  AND date_of_appointement < '$current_date' ORDER BY `patients`.`date_of_appointement` DESC;";
  $previous_result = mysqli_query($conn, $previoussql);
 $previousdata = mysqli_fetch_assoc($previous_result);
//  echo var_dump($previousdata);
   if(isset($previousdata)){
    // include('assets/compo/previous.php');
   }
?>
<div class="flex w-full py-1 border border-black  ">
        <div class="w-4/12  border-black flex flex-col px-2  py-1">
        <div class="h-5/12 w-full text-sm font-bold text-black">Facilities</div>
        <div class="h-5/12 w-full text-sm  text-black">Educational Guidence</div>
        <div class="h-5/12 w-full text-sm  text-black">Career Counselling</div>
        <div class="h-5/12 w-full text-sm  text-black">Child Psychology</div>
        <div class="h-5/12 w-full text-sm  text-black">Marriage Counselling</div>
        <div class="h-5/12 w-full text-sm  text-black"></div>
        <div class="h-5/12 w-full text-sm  text-black">Behavioural Assesment</div>
        </div>
        <div class="w-4/12  border-black flex flex-col px-2 items-center py-1">
        <div class="h-5/12 w-full text-sm font-bold text-black">Internshiop Modules</div>
        <div class="h-5/12 w-full text-sm  text-black">2 Month</div>
        <div class="h-5/12 w-full text-sm  text-black">1 Month</div>
        <div class="h-5/12 w-full text-sm  text-black">15 Days</div>
        <div class="h-5/12 w-full text-sm  text-black">1 Month Teaching Of Basics of Psyschology</div>
        <!-- <div class="h-5/12 w-full text-sm  text-black">Behavioural Assesment</div> -->
            
        </div>
        <div class="w-4/12  border-black flex flex-col px-2 items-center py-1">
        <div class="h-5/12 w-full text-sm font-bold text-black">Personality Development Programme & Workshop</div>
         
        </div>
     </div>
<!-- 
    
<img class="max-w-full h-auto" src="assets/docs/<?php echo $data['masked_adhar']?>" alt="image description">
<img class="max-w-full h-auto" src="assets/docs/<?php echo $data['doc_doc']?>" alt="image description"> -->

    <div class="flex justify-center items-center py-6">
        <button onclick="window.print()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full">
            PRINT
        </button>
    </div>
    </div>

</div>










</body>
</html>
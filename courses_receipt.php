<?php
require('db.php');
$msg = "";
function id($coursename,$coursetype,$courseduration,$tf,$doa){
  $fnf =  substr($coursename,0,1);
  $snf =  substr($coursetype,0,1);
  $gen =  substr($courseduration,0,1);
  $date = date('d-m-y h:i:s');
  $datea = preg_replace('/[^\p{L}\p{N}\s]/u', '', $date);
  $string = str_replace(' ', '', $datea);
  $doad = preg_replace('/[^\p{L}\p{N}\s]/u', '', $doa);
  $id = $fnf.$snf.$gen.$tf.$doad.$string;
  return $id;
}


$course_name = $_POST['course_name'];
$course_type = $_POST['course_type'];
$course_duration = $_POST['course_duration'];
$enrollement_date = $_POST['enrollement_date'];
$end_date = $_POST['end_date'];
$course_fee = $_POST['course_fee'];
$date_of_payment = $_POST['date_of_payment'];
$payment_mode = $_POST['payment_mode'];
$payment_type = $_POST['payment_type'];
$total_fees = $_POST['total_fees'];
$monthly_emi = $_POST['monthly_emi'];
$remaining_fee = $_POST['remaining_fee'];
$no_of_classes = $_POST['no_of_classes'];
$status = $_POST['status'];
if(!$course_name = $_POST['course_name']){
    header("Location: index.php");
}


$num = rand(10,100);
$pid = id($course_name,$course_type,$course_duration,$total_fees,$enrollement_date);
$id = strtoupper($pid);



// $masked_aadhar_card = $_FILES['adhar'];
// $passport_size_photo = $_FILES['photo'];
// $cv = $_FILES['cv'];



// $masked_adhar_card_filename = "$id".$_FILES["adhar"]["name"];
// $masked_adhar_card_tempname = $_FILES["adhar"]["tmp_name"];
// $masked_adhar_card_folder = "./assets/docs/" . $masked_adhar_card_filename;


// $passport_size_photo_filename = "$id".$_FILES["photo"]["name"];
// $passport_size_photo_tempname = $_FILES["photo"]["tmp_name"];
// $passport_size_photo_folder = "./assets/docs/" . $passport_size_photo_filename;


// $resume_filename = "$id".$_FILES["cv"]["name"];
// $resume_tempname = $_FILES["cv"]["tmp_name"];
// $resume_folder = "./assets/docs/" . $resume_filename;



// move_uploaded_file($masked_adhar_card_tempname, $masked_adhar_card_folder);
// move_uploaded_file($passport_size_photo_tempname, $passport_size_photo_folder);
// move_uploaded_file($resume_tempname, $resume_folder);








$sql = "INSERT INTO `courses`(`id`, `course_name`, `course_type`, `course_duration`, `enrollement_date`, `end_date`, `course_fee`, `date_of_payment`, `payment_mode`, `payment_type`, `total_fees`, `monthly_emi`, `remaining_fee`, `no_of_classes`, `status`) VALUES ('$id', '$course_name', '$course_type', '$course_duration', '$enrollement_date', '$end_date', '$course_fee', '$date_of_payment', '$payment_mode', '$payment_type', '$total_fees', '$monthly_emi', '$remaining_fee', '$no_of_classes', '$status');";

$datasql = "SELECT `course_fee` FROM `courses`";
$interns = mysqli_query($conn, $datasql);
$exists = false;
if (mysqli_num_rows($interns) > 0) {
    while($row = mysqli_fetch_assoc($interns)) {
      foreach($row as $key => $element ){
              if($row['course_fee'] == $course_fee){
                $exists = true;
               } 
                 }
    }
}else{
    // echo "no data herere";
}


if($exists){
    echo "<script> alert('Courses Already Taken') </script>";
}else{
    $result  = mysqli_query($conn, $sql);

}




?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Courses Reciept</title>
    <link rel="stylesheet"
      href="https://unpkg.com/flowbite@1.5.3/dist/flowbite.min.css" />
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- component -->
    <link rel="stylesheet"
      href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css">
    <link rel="stylesheet"
      href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">
  </head>
<body>

<section class=" py-1 bg-blueGray-50">
      <div class="w-full lg:w-8/12 px-4 mx-auto mt-6">
      <div class="w-full flex justify-center itmes-center">
      <h2 class="text-2xl font-extrabold dark:text-black">COURSES RECIEPT</h2>
</div>
<div class="overflow-x-auto relative mt-6">
    <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
        <thead class="text-m text-gray-700 uppercase bg-gray-50 font-bold">
            <tr>
                <th scope="col" class="py-3 px-6">
                    Course ID
                </th>
                <th scope="col" class="py-3 px-6">
                    Course Name
                </th>
                <th scope="col" class="py-3 px-6">
                    Course Type
                </th>
                <th scope="col" class="py-3 px-6">
                    Course Duration
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="border-b ">
                <th scope="row" class="py-4 px-6 font-medium text-gray-900 whitespace-nowrap ">
                    <?php echo (!$exists)?$id:$id; ?>
                </th>
                <td class="py-4 px-8 font-medium text-gray-900 whitespace-nowrap">
                <?php echo (!$exists)?$course_name : $course_name; ?>
                </td>
                <td class="py-4 px-8 font-medium text-gray-900 whitespace-nowrap">
                <?php echo (!$exists)?$course_type:$course_type; ?>
                </td>
                <td class="py-4 px-8 font-medium text-gray-900 whitespace-nowrap">
                <?php echo (!$exists)?$course_duration:$course_duration; ?>
                </td>
            </tr>
            
        </tbody>
    </table>
</div>


<!-- Main modal -->
<div id="defaultModal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 w-full md:inset-0 h-modal md:h-full">
    <div class="relative p-4 w-full max-w-2xl h-full md:h-auto">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
            <!-- Modal header -->
            <div class="flex justify-between items-start p-4 rounded-t border-b dark:border-gray-600">
                <h3 class="text-xl font-semibold text-gray-900 dark:text-white">
                   
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-toggle="defaultModal">
                    <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
      </div>
    </div>
  </div>
</div>

                
      </div>
    </section>
    <div >
<a href="index.php">
                 <div class="flex justify-center w-full my-4">
                 <button type="button" class="text-white bg-red-700 hover:bg-red-800 focus:outline-none focus:ring-4 focus:ring-red-300 font-medium rounded-full text-sm px-5 py-2.5 text-center mr-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Return to Homepage</button>
</div>
</a>
</div>
</body>
</html>
<?php
$mysqli=mysqli_connect("localhost", "root", "", "astrology");
if(mysqli_connect_errno()){
  echo "Connection Fail".mysqli_connect_error();
}
$id = $_GET['id'];
$sql = "SELECT * FROM coursemaster WHERE id = '$id'";
$result = mysqli_query($mysqli, $sql);
$row = mysqli_fetch_assoc($result);

?>

<!DOCTYPE html>
<html>

<head>
    <title></title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>

<body>


    <div class="container"><br>
        <div class="col-lg-6 m-auto d-block">
            <form action="#" method="post" class="bg-light" onsubmit="return validation()">
                <div class="form-group">
                    <label for="coursenames" class="font-weight-bold" value="<?php echo $row['course_name'];?>"> Course Name: </label>
                    <select name="course_name" id="coursenames">
                    <option value="<?php echo $row['course_name'];?>">
                <?php echo $row['course_name'];?>
                 </option>
              
                        <option value="Tarot Cards Course">Tarot Cards Course</option>
                        <option value="Chaledean Numerology Course">Chaledean Numerology Course</option>
                        <option value="Lal Kitaab Course">Lal Kitaab Course</option>
                        <option value="Vastu Shastra Course">Vastu Shastra Course</option>
                        <option value="Vedic Astrology Course">Vedic Astrology Course</option>
                    </select>
                    <span id="coursename" class="text-danger font-weight-bold"> </span>
                </div>

                <div class="form-group">
                    <label for="corsetypes" class="font-weight-bold"> Course type: </label>
                    <select name="course_type" id="corsetypes">
                    <option value="<?php echo $row['course_type'];?>">
                <?php echo $row['course_type'];?>
                 </option>
              
                        <option value="Basic">Basic</option>
                        <option value="Advanced">Advanced</option>
                    </select>
                    <span id="coursetype" class="text-danger font-weight-bold"> </span>
                </div>

                <div class="form-group">
                    <label for="coursedurations" class="font-weight-bold">Course Duration: </label>
                    <select  onchange="{autoManHours();updateMonths()}" onclick="autoEndDate()" name="course_duration" id="coursedurations"> 
                    <option value="<?php echo $row['course_duration'];?>">
                       <?php echo $row['course_duration'];?>
                               </option>
              
                      <option value="1 Month">1 Month</option>
                        <option value="2 Month">2 Month</option>
                        <option value="3 Month">3 Month</option>
                        <option value="4 Month">4 Month</option>
                        <option value="5 Month">5 Month</option>
                        <option value="6 Month">6 Month</option>
                    </select>
                    <span id="coursedur" class="text-danger font-weight-bold"> </span>
                </div>

                <!-- <div class="form-group">
                    <label class="font-weight-bold"> Start Date </label>
                    <input onchange="autoEndDate()" required type="date" name="startdate" id="startdate" autocomplete="off">
                    <span id="mobileno" class="text-danger font-weight-bold"> </span>
                </div>

                <div class="form-group">
                    <label class="font-weight-bold"> End Date </label>
                    <input required type="date" name="enddate" id="enddate" autocomplete="off">
                    <span id="emailids" class="text-danger font-weight-bold"> </span>
                </div> -->

                <div class="form-group">
                    <label for=""coursefees class="font-weight-bold"> Course Fee </label>
                    <input oninput="autoEmi()" value="<?php echo $row['course_fee'];?>" type="text" name="course_fee" id="coursefees" autocomplete="off">
                    <span id="coursefeesspan" class="text-danger font-weight-bold"> </span>
                </div>
                
               
               

                
                <div class="form-group">
                    <label for="modes" class="font-weight-bold">Mode </label>
                    <!-- <input type="text" name="text" class="form-control" id="text" autocomplete="off"> -->
                    <select name="mode" id="modes">
                    <option value="<?php echo $row['mode'];?>">
                <?php echo $row['mode'];?>
                 </option>
              
                        <option value="Online">Online</option>
                        <option value="Offline">Offline</option>
                        <option value="Both">Both</option>

                    </select>
                    <span id="text" class="text-danger font-weight-bold"> </span>
                

                <div class="form-group">
                    <label for="cpw" class="font-weight-bold">Classes Per week</label>
                    <!-- <input type="text" name="text" class="form-control" id="text" autocomplete="off"> -->
                    <select onchange="autoManHours()" name="no_classes_per_week" id="cpw">
                    <option value="<?php echo $row['no_classes_per_week'];?>">
                <?php echo $row['no_classes_per_week'];?>
                            </option>
              
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                        <option value="6">6</option>
                        <option value="7">7</option>
                    </select>
                    <span id="text" class="text-danger font-weight-bold"> </span>
                </div>
                
                

                <div class="form-group">
                    <label for="status" class="font-weight-bold"> Status </label>
                    <!-- <input type="text" name="text" class="form-control" id="text" autocomplete="off"> -->
                    <select name="status" id="status">
                    <option value="<?php echo $row['status'];?>">
                         <?php echo $row['status'];?>
                         </option>
                        <option value="Active">Active</option>
                        <option value="Completed">Completed</option>
                        <option value="Suspended">Suspended</option>
                        <option value="Dropout">Dropout</option>
                    </select>
                    <span id="text" class="text-danger font-weight-bold"> </span>
                </div>
                <div class="form-group">
                    <label for="remarks" class="font-weight-bold"> Remark </label>
                    <input type="text" value="<?php echo $row['remark'];?>" name="remark" class="form-control" id="remarks" autocomplete="off">
                    <span id="remarksspan" class="text-danger font-weight-bold"> </span>
                </div>

                <input type="submit" name="register" value="submit" class="btn btn-success" autocomplete="off">
            </form><br><br>
        </div>
    </div>
</body>

</html>
<?php
error_reporting(0);
$mysqli = new mysqli("localhost", "root", "", "astrology");
if ($mysqli->connect_error) {
  die("Connection failed: " . $mysqli->connect_error);
}
if ($_POST['register']) {
  $course_name = $_POST['course_name'];
  $course_type = $_POST['course_type'];
  $course_duration = $_POST['course_duration'];
  $status = $_POST['status'];
  $course_fee = $_POST['course_fee'];
  $mode = $_POST['mode'];
  $no_classes_per_week = $_POST['no_classes_per_week'];
  $remark = $_POST['remark'];
 
  $query = "UPDATE coursemaster set  course_name = '$course_name',course_type ='$course_type',course_duration='$course_duration',
status='$status',course_fee = '$course_fee',mode = '$mode', no_classes_per_week ='$no_classes_per_week',remark ='$remark' WHERE id = '$id'";
  $data = mysqli_query($mysqli, $query);
  if($data){
    echo "<script>alert('Update recorde Succefully');</script>";
}
else{
  echo "<script>alert('connection failed');</script>";
}

 
}
?>
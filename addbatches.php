<?php
$con=mysqli_connect("localhost", "root", "", "astrology");
if(mysqli_connect_errno()){
  echo "Connection Fail".mysqli_connect_error();
}
?>

<?php
// session_start();
error_reporting(0);
if(($_SERVER['REQUEST_METHOD'] == 'POST'))
{
	$batch_id = '1';
	$course_name = $_POST['coursenames'];
	$course_type = $_POST['coursetypes'];
	$batch_start_date = $_POST['start_date'];
	$batch_end_date = $_POST['end_date'];
	$batch_timefrom = $_POST['timefrom'];
	$batch_timeto = $_POST['timeto'];
	$batch_mode = $_POST['mode'];
	$batch_weekdays = $_POST['querytype'];
	$batch_weekdays_string = implode(',', $batch_weekdays);
	$batch_remark = $_POST['remark'];

	$sql = "INSERT INTO `batchmaster` (`batch_id`, `course_name`, `course_type`,`batch_start_date`, `batch_end_date`, `batch_timefrom`, `batch_timeto`, `batch_mode`, `batch_weekdays`, `batch_remark`) VALUES ('$batch_id', '$course_name', '$course_type', '$batch_start_date', '$batch_end_date', '$batch_timefrom', '$batch_timeto', '$batch_mode', '$batch_weekdays_string', '$batch_remark');";
	$result = mysqli_query($con, $sql);
    header("Location: batchmaster.php");
	// mysqli_close($con);
	}
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
            <form action="addbatches.php" method="post" class="bg-light">
                <div class="form-group">
                    <label for="coursenames" class="font-weight-bold"> Course Name: </label>
                    <select onclick="selectedCourse()" name="coursenames" id="coursenames">

                        <?php 
                        	$sql = "SELECT DISTINCT course_name FROM coursemaster;";
                            $result = mysqli_query($con, $sql);
                            $num = mysqli_num_rows($result);
                            if($num > 0){
                                while($row = mysqli_fetch_assoc($result)){
                                    echo '
                                    <option value="'. $row["course_name"] .'">'. $row["course_name"] .'</option>';
                                    }
                              }
                    ?>


                    </select>
                    <span id="coursename" class="text-danger font-weight-bold"> </span>
                </div>

                <div class="form-group">
                    <label for="coursetypes" class="font-weight-bold"> Course type: </label>
                    <select name="coursetypes" id="coursetypes">

                        <?php 
                   
                    echo '
                    let selCourses
                        <script>
                                function selectedCourse(){ 
                                selCourses = document.querySelector("#coursenames").value;
                                // console.log(selCourses)

                                ';
                                echo '
                                var callphp = selectCourse(selCourses);
                            }
                            </script>';

                            function selectCourse($selCourses){
                                echo $selCourses;
                                return $selCourses;
                            }
                            // $selCourse = selCourses; 
                       console.log(selCourses);   
                        	$sql = "SELECT course_type FROM coursemaster WHERE `course_name`= '$selCourse';";
                            $result = mysqli_query($con, $sql);
                            $num = mysqli_num_rows($result);
                            echo var_dump($result);
                            if($num > 0){
                                while($row = mysqli_fetch_assoc($result)){
                                    echo '
                                    <option value="'. $row["course_type"] .'">'. $row["course_type"] .'</option>';
                                    }
                              }
                     
                    ?>
                    </select>
                    <span id="coursetype" class="text-danger font-weight-bold"> </span>
                </div>


                <div class="form-group">
                    <label class="font-weight-bold"> Start Date </label>
                    <input required type="date" name="start_date" id="date" autocomplete="off">
                    <span id="mobileno" class="text-danger font-weight-bold"> </span>
                </div>

                <div class="form-group">
                    <label class="font-weight-bold"> End Date </label>
                    <input required type="date" name="end_date" id="date" autocomplete="off">
                    <span id="emailids" class="text-danger font-weight-bold"> </span>
                </div>

                <div class="form-group">
                    <label for="modes" class="font-weight-bold">No of sessions per week </label>
                    <!-- <input type="text" name="text" class="form-control" id="text" autocomplete="off"> -->
                    <select name="mode" id="modes">
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

                <div class="form-group" style="display: inline-flex;">
                    <label class="font-weight-bold"> Batch Timings </label>
                    <div class="input-box">
                        <span class="details"></span>

                        <!-- <input type="time" id="timefrom" name="timefrom" min="09:00" max="23:30" step="1800"> -->

                        <select id="timefrom" name="timefrom" placeholder="9:00 PM">
                            <option value="" disabled selected>Select</option>
                            <option value="09:00">9:00 AM</option>
                            <option value="09:30">9:30 AM</option>
                            <option value="10:00">10:00 AM</option>
                            <option value="10:30">10:30 AM</option>
                            <option value="11:00">11:00 AM</option>
                            <option value="11:30">11:30 AM</option>
                            <option value="12:00">12:00 PM</option>
                            <option value="12:30">12:30 PM</option>
                            <option value="13:00">1:00 PM</option>
                            <option value="13:30">1:30 PM</option>
                            <option value="14:00">2:00 PM</option>
                            <option value="14:30">2:30 PM</option>
                            <option value="15:00">3:00 PM</option>
                            <option value="15:30">3:30 PM</option>
                            <option value="16:00">4:00 PM</option>
                            <option value="16:30">4:30 PM</option>
                            <option value="17:00">5:00 PM</option>
                            <option value="17:30">5:30 PM</option>
                            <option value="18:00">6:00 PM</option>
                            <option value="18:30">6:30 PM</option>
                            <option value="19:00">7:00 PM</option>
                            <option value="19:30">7:30 PM</option>
                            <option value="20:00">8:00 PM</option>
                            <option value="20:30">8:30 PM</option>
                            <option value="21:00">9:00 PM</option>
                            <option value="21:30">9:30 PM</option>
                            <option value="22:00">10:00 PM</option>
                            <option value="22:30">10:30 PM</option>
                            <option value="23:00">11:00 PM</option>
                            <option value="23:30">11:30 PM</option>
                            <option value="24:00">12:00 PM</option>
                        </select>
                    </div>

                    <div class="input-box">
                        <span class="details"> To</span>

                        <!-- <input type='time' id='timeto' name='timeto' value="09:30" step='600' min="09:30"
                                        max="24:00" onchange="displayalert()"> -->

                        <select onchange="durationCal()" id="timeto" name="timeto">
                            <option value="" disabled selected>Select</option>
                            <option value="09:00">9:00 AM</option>
                            <option value="09:30">9:30 AM</option>
                            <option value="10:00">10:00 AM</option>
                            <option value="10:30">10:30 AM</option>
                            <option value="11:00">11:00 AM</option>
                            <option value="11:30">11:30 AM</option>
                            <option value="12:00">12:00 PM</option>
                            <option value="12:30">12:30 PM</option>
                            <option value="13:00">1:00 PM</option>
                            <option value="13:30">1:30 PM</option>
                            <option value="14:00">2:00 PM</option>
                            <option value="14:30">2:30 PM</option>
                            <option value="15:00">3:00 PM</option>
                            <option value="15:30">3:30 PM</option>
                            <option value="16:00">4:00 PM</option>
                            <option value="16:30">4:30 PM</option>
                            <option value="17:00">5:00 PM</option>
                            <option value="17:30">5:30 PM</option>
                            <option value="18:00">6:00 PM</option>
                            <option value="18:30">6:30 PM</option>
                            <option value="19:00">7:00 PM</option>
                            <option value="19:30">7:30 PM</option>
                            <option value="20:00">8:00 PM</option>
                            <option value="20:30">8:30 PM</option>
                            <option value="21:00">9:00 PM</option>
                            <option value="21:30">9:30 PM</option>
                            <option value="22:00">10:00 PM</option>
                            <option value="22:30">10:30 PM</option>
                            <option value="23:00">11:00 PM</option>
                            <option value="23:30">11:30 PM</option>
                            <option value="24:00">12:00 PM</option>
                        </select>
                    </div>
                </div>

                <!-- <div class="form-group">
                    <label for="modes" class="font-weight-bold">Batch Mode </label>
                    <select name="mode" id="modes">
                        <option value="Online">Online</option>
                        <option value="Offline">Offline</option>
                        <option value="Both">Both</option>
                    </select>
                    <span id="text" class="text-danger font-weight-bold"> </span>
                </div> -->


                <div class="form-group">
                    <label for="modes" class="font-weight-bold">Batch Mode </label>
                    <!-- <input type="text" name="text" class="form-control" id="text" autocomplete="off"> -->
                    <input type="radio" id="age1" name="mode" value="Online">
                    <label for="age1">Online</label><br>
                    <input type="radio" id="age2" name="mode" value="Offline">
                    <label for="age2">Offline</label><br>
                    <input type="radio" id="age3" name="mode" value="Both">
                    <label for="age3">Both</label><br><br>
                    <span id="text" class="text-danger font-weight-bold"> </span>
                </div>


                <div class="form-group">
                    <label for="modes" class="font-weight-bold">No of sessions per week </label>
                    <!-- <input type="text" name="text" class="form-control" id="text" autocomplete="off"> -->
                    <select name="mode" id="modes">
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

                <label class="font-weight-bold"> Weekdays </label>
                <div class="query row col-md-4" name="query">
                    <div class="subheading">
                    </div>
                    <div class="check">
                        <div class="option">
                            <label for="dot-1">Sunday</label>
                            <input type="checkbox" name="querytype[]" value="Sunday" id="dot-1">
                        </div>

                        <div class="option">
                            <label for="dot-2">Monday</label>
                            <input type="checkbox" name="querytype[]" value="Monday" id="dot-2">
                        </div>
                        <div class="option">
                            <label for="dot-3">Tuesday</label>
                            <input type="checkbox" name="querytype[]" value="Tuesday" id="dot-3">
                        </div>
                        <div class="option">
                            <label for="dot-4">Wednesday</label>
                            <input type="checkbox" name="querytype[]" value="Wednesday" id="dot-4">
                        </div>
                        <div class="option">
                            <label for="dot-5">Thursday</label>
                            <input type="checkbox" name="querytype[]" value="Thursday" id="dot-5">
                        </div>
                        <div class="option">
                            <label for="dot-7">Friday</label>
                            <input type="checkbox" name="querytype[]" value="Friday" id="dot-7">
                        </div>
                        <div class="option">
                            <label for="dot-6">Saturday</label>
                            <input type="checkbox" name="querytype[]" value="Saturday" id="dot-6">
                        </div>
                    </div>

                </div>

                <div class="form-group">
                    <label for="remarks" class="font-weight-bold"> Remark </label>
                    <input type="text" name="remark" class="form-control" id="remarks" autocomplete="off">
                    <span id="remarksspan" class="text-danger font-weight-bold"> </span>
                </div>

                <input type="submit" name="submit" value="submit" class="btn btn-success" autocomplete="off">
            </form><br><br>


        </div>
    </div>
</body>

</html>
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

	$coursename=$_POST['coursenames'];
	$types=$_POST['corsetypes'];
	$dur=$_POST['coursedurations'];
	$startdate=$_POST['date'];
	$enddate=$_POST['dates'];
	$start=$_POST['date'];
	$end=$_POST['dates'];
	$fee=$_POST['coursefees'];
	$emi=$_POST['monthlyemis'];
	$mode=$_POST['modes'];
	$classperweek=$_POST['cpw'];
	$stat=$_POST['status'];
	$rem=$_POST['remarks'];
	$query = "INSERT INTO `coursemaster` (`course_name`, `course_type`, `course_duration`, `status`, `start_date`, `end_date`, `actual_start_date`, `actual_end_date`, `course_fee`, `monthlyemi`, `mode`, `no_classes_per_week`, `remark`) VALUES ('$coursename', '$types', '$dur', '$stat', '$start', '$end', '$startdate', '$enddate', '$fee', '$emi', '$mode', '$classperweek', '$rem');";
	mysqli_query($con, $query);
	mysqli_close($con);
		if ($query) {
	    	$msg="Visitors Detail has been added.";
	  	}
	  	else
	    {
	      	$msg="Something Went Wrong. Please try again";
	    }
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
            <form action="index (2).php" method="post" class="bg-light" onsubmit="return validation()">
                <div class="form-group">
                    <label for="coursenames" class="font-weight-bold"> Course Name: </label>
                    <select name="coursenames" id="coursenames">
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
                    <select name="corsetypes" id="corsetypes">
                        <option value="Basic">Basic</option>
                        <option value="Advanced">Advanced</option>
                    </select>
                    <span id="coursetype" class="text-danger font-weight-bold"> </span>
                </div>

                <div class="form-group">
                    <label for="coursedurations" class="font-weight-bold">Course Duration: </label>
                    <select name="coursedurations" id="coursedurations">
                        <option value="1 Month">1 Month</option>
                        <option value="2 Month">2 Month</option>
                        <option value="3 Month">3 Month</option>
                        <option value="4 Month">4 Month</option>
                        <option value="5 Month">5 Month</option>
                        <option value="6 Month">6 Month</option>
                    </select>
                    <span id="coursedur" class="text-danger font-weight-bold"> </span>
                </div>

                <div class="form-group">
                    <label class="font-weight-bold"> Start Date </label>
                    <input required type="date" name="date" id="date" autocomplete="off">
                    <span id="mobileno" class="text-danger font-weight-bold"> </span>
                </div>

                <div class="form-group">
                    <label class="font-weight-bold"> End Date </label>
                    <input required type="date" name="dates" id="date" autocomplete="off">
                    <span id="emailids" class="text-danger font-weight-bold"> </span>
                </div>
                <div class="form-group">
                    <label for=""coursefees class="font-weight-bold"> Course Fee </label>
                    <input type="text" name="coursefees" id="coursefees" autocomplete="off">
                    <span id="coursefeesspan" class="text-danger font-weight-bold"> </span>
                </div>
                <div class="form-group">
                    <label for="monthlyemis" class="font-weight-bold"> Monthly EMI</label>
                    <input type="text" name="monthlyemis" id="monthlyemis" autocomplete="off">
                    <span id="monthlyemisspan" class="text-danger font-weight-bold"> </span>
                </div>

                <div class="form-group">
                    <label for="modes" class="font-weight-bold">Mode </label>
                    <!-- <input type="text" name="text" class="form-control" id="text" autocomplete="off"> -->
                    <select name="modes" id="modes">
                        <option value="Online">Online</option>
                        <option value="Offline">Offline</option>
                        <option value="Both">Both</option>

                    </select>
                    <span id="text" class="text-danger font-weight-bold"> </span>
                </div>

                <div class="form-group">
                    <label for="cpw" class="font-weight-bold">Classes Per week</label>
                    <!-- <input type="text" name="text" class="form-control" id="text" autocomplete="off"> -->
                    <select name="cpw" id="cpw">
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
                    <label for="durations" class="font-weight-bold"> Duration </label>
                    <!-- <input type="text" name="date" class="form-control" id="date" autocomplete="off"> -->
                    <select name="durations" id="durations">
                        <option value="60 Min">60 Min</option>
                        <option value="90 Min">90 Min</option>
                        <option value="120 Min">120 Min</option>

                    </select>
                    <span id="emailids" class="text-danger font-weight-bold"> </span>
                </div>
                <div class="form-group">
                    <label for="status" class="font-weight-bold"> Status </label>
                    <!-- <input type="text" name="text" class="form-control" id="text" autocomplete="off"> -->
                    <select name="status" id="status">
                        <option value="Active">Active</option>
                        <option value="Completed">Completed</option>
                        <option value="Suspended">Suspended</option>
                        <option value="Dropout">Dropout</option>

                    </select>
                    <span id="text" class="text-danger font-weight-bold"> </span>

                </div>

                <div class="form-group">
                    <label for="remarks" class="font-weight-bold"> Remark </label>
                    <input type="text" name="remarks" class="form-control" id="remarks" autocomplete="off">
                    <span id="remarksspan" class="text-danger font-weight-bold"> </span>
                </div>

                <input type="submit" name="submit" value="submit" class="btn btn-success" autocomplete="off">
            </form><br><br>


        </div>
    </div>

    <script>
    function validation() {
        var coursefees1 = document.getElementById('coursefees').value;
        var monthlyemis1 = document.getElementById('monthlyemis').value;
        var remark1 = document.getElementById('remarks').value;

        if (coursefees1 == "") {
            console.log("dfbhukjshy")
            document.getElementById('coursefeesspan').innerHTML = " ** Please fill the coursefee field";
            return false;
        }

        if (monthlyemis1 == "") {
            document.getElementById('monthlyemisspan').innerHTML = " ** Please fill the Monthly emi field";
            return false;
        }

        if (remark1 == "") {
            document.getElementById('remarksspan').innerHTML = " ** Please fill the remark field";
            return false;

        }
    }
    </script>


</body>

</html>
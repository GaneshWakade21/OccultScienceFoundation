<?php
$con = mysqli_connect("localhost", "root", "", "astrology");

//connect
// var_dump($_POST);
$cname =$_POST["data"]['cname'];
$ctype =$_POST["data"]['ctype'];  
$batch =$_POST["data"]['batch'];  

$sql = "SELECT batch_timefrom,batch_timeto FROM batchmaster WHERE `course_name`= '$cname' AND `course_type`= '$ctype' AND `batch_start_date`='$batch'";
$result = mysqli_query($con, $sql);
$num = mysqli_num_rows($result);

if($num > 0){
    while($row = mysqli_fetch_assoc($result)){
    echo $row["batch_timefrom"] ." to ". $row["batch_timeto"];
    }
}

?>
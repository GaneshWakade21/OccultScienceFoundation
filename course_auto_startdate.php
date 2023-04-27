<?php
$con = mysqli_connect("localhost", "root", "", "astrology");

//connect
// var_dump($_POST);
$cname =$_POST["data"]['cname'];
$ctype =$_POST["data"]['ctype'];  

$sql = "SELECT batch_start_date FROM batchmaster WHERE `course_name`= '$cname' AND `course_type`= '$ctype'";
$result = mysqli_query($con, $sql);

$num = mysqli_num_rows($result);
if($num > 0){
    $ctypeArr = array();
    while($row = mysqli_fetch_assoc($result)){
        array_push($ctypeArr,$row["batch_start_date"]);
    }
    echo json_encode($ctypeArr);
}

?>
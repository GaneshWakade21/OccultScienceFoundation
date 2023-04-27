<?php
$con = mysqli_connect("localhost", "root", "", "astrology");

//connect
// var_dump($_POST);
$cname =$_POST["data"]['cname'];
$ctype =$_POST["data"]['ctype'];  

$sql = "SELECT course_type FROM coursemaster WHERE `course_name`= '$cname'";
$result = mysqli_query($con, $sql);

$num = mysqli_num_rows($result);
if($num > 0){
    $ctypeArr = array();
    while($row = mysqli_fetch_assoc($result)){
        array_push($ctypeArr,$row["course_type"]);
    }
    echo json_encode($ctypeArr);
}

?>
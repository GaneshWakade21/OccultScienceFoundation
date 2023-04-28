<?php
$con = mysqli_connect("localhost", "root", "", "astrology");

//connect

$cname =$_POST["data"]['cname'];
$ctype =$_POST["data"]['ctype'];  

$sql = "SELECT course_duration FROM coursemaster WHERE `course_name`= '$cname' AND `course_type`= '$ctype'";
$result = mysqli_query($con, $sql);

$num = mysqli_num_rows($result);

if($num > 0){
    while($row = mysqli_fetch_assoc($result)){
    echo $row["course_duration"];
    }
}

?>
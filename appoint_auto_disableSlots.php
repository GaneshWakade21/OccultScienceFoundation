<?php
$con = mysqli_connect("localhost", "root", "", "astrology");

//connect
// var_dump($_POST);
$doappoint =$_POST["data"];
// $ctype =$_POST["data"]['ctype'];  
// echo $doappoint;
$sql = "SELECT timefrom,timeto FROM appointment WHERE `doappoint`= '$doappoint'";
$result = mysqli_query($con, $sql);
$num = mysqli_num_rows($result);

$timefromArr = array();
if($num>0){
while($row = mysqli_fetch_assoc($result)){
    array_push($timefromArr,$row["timefrom"],$row["timeto"]);
}
echo json_encode($timefromArr);
}

?>
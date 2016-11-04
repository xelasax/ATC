<?php
$type = $_GET['type'];
urldecode($type);
$fromDate = $_GET['init'];
urldecode($fromDate);
$toDate = $_GET['finit'];
urldecode($toDate);
include "connection.php";

if ($type=='ACSYS') {
	# code...
$sql="SELECT * FROM `atcgui` WHERE req_date>='$fromDate' AND req_date<='$toDate' and (msisdn != 'ECOBANK' and msisdn NOT LIKE 'CHECK%');";
$result=mysqli_query($con,$sql);


header("Content-type: application/csv");
header("Content-Disposition: attachment; filename=report.csv");
header("Pragma: no-cache");
header("Expires: 0");

while($row=mysqli_fetch_assoc($result)) {
    echo $row['msisdn'].",".$row['request'].",".$row['response'].",".$row['req_date']."\n";
}

mysqli_free_result($result);
}elseif ($type=='INVENDIS') {
	# code...
$sql="SELECT * FROM `atcgui_invendis` WHERE req_date>='$fromDate' AND req_date<='$toDate' and (msisdn != 'ECOBANK' and msisdn NOT LIKE 'CHECK%');";
$result=mysqli_query($con,$sql);

header("Content-type: application/csv");
header("Content-Disposition: attachment; filename=report.csv");
header("Pragma: no-cache");
header("Expires: 0");

while($row=mysqli_fetch_assoc($result)) {
    echo $row['msisdn'].",".$row['request'].",".$row['req_date']."\n";
}

mysqli_free_result($result);
}

// Free result set


mysqli_close($con);
?>
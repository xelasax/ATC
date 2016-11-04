<?php
//ini_set('display_errors', 1); // set to 0 for production version 
//error_reporting(E_ALL);
#Require Connection
require_once('connection.php');

date_default_timezone_set('UTC');
$filename = 'REPORT FOR '.'_period_' . date('Y-m-d');
$myFile = $filename . '.csv';

$fh = fopen($myFile, 'w') or die("Permission denied");



$from = $_POST['from'];
$to = $_POST['to'];
$type = $_POST['type'];


if ($type == 'INVENDIS') {
		#FOR INVENDIS
		$tbl_q = "SELECT msisdn,request,req_date FROM atcgui_invendis WHERE req_date >= '$from' AND req_date <= '$to' order by req_date desc";
		$tbl_result = mysqli_query($con, $tbl_q);
		$label = array('MSISDN', 'REQUEST', 'DATETIME');
		fputcsv($fh, $label);
		
		while ($row = mysqli_fetch_array($tbl_result)) {
		
		$msisdn = $row['msisdn'];
		$request = $row['request'];
		$datetime = $row['req_date'];
		
		$ins = array($msisdn, $request, $datetime);
		fputcsv($fh, $ins);
		
		}

	} else {
		$tbl_q = "SELECT msisdn,request,req_date,response FROM atcgui WHERE req_date >= '$from' AND req_date <= '$to' AND (msisdn != 'ECOBANK' AND msisdn NOT LIKE 'CHECK%') ORDER BY req_date DESC";
		$tbl_result = mysqli_query($con, $tbl_q);
		$label = array('MSISDN', 'REQUEST', 'RESRONSE', 'DATETIME');
		fputcsv($fh, $label);
		
		while ($row = mysqli_fetch_array($tbl_result)) {
		
		$msisdn = $row['msisdn'];
		$request = $row['request'];
		$response = $row['response'];
		$datetime = $row['req_date'];
		
		$ins = array($msisdn, $request, $response, $datetime);
		fputcsv($fh, $ins);
		
		}

	}
	
	// $path=$folder.'/'.$user_sess.'.csv';
	//
	header('Content-Type: application/octet-stream');
	header('Content-Disposition: attachment; filename="' . basename($myFile) . '"');
	header('Content-Length: ' . filesize($myFile));
	readfile($myFile);
	unlink($myFile);
	
	
	// header('location: ' . $path);
	
	
	// unset($_SESSION['per_to']);
	// unset($_SESSION['per_from']);
	
	// header('Location: reports_spec.php');
	mysqli_close($con);
?>

<?php

set_time_limit(0);
$data = array('metadata' => array('service' => 'noise', 'mode' => 'download', 'feature' => 'overallLocationStatistics'), 'rawdata' => array('location_id' => $_GET['locationId'], 'from_date' => $_GET['from_date'], 'to_date' => $_GET['to_date'], 'displacement_range' => $_GET['displacement_range']));
$data_string = json_encode($data);
$url = 'http://156.56.93.34/CDME/request.php';

$ch = curl_init($url);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
//  curl_setopt($ch, CURLOPT_PROXY, "cache.mrt.ac.lk:3128");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
    'Content-Type: application/json',
    'Content-Length: ' . strlen($data_string))
);
$result = curl_exec($ch);
curl_close($ch);

echo $result;

//$json_result = json_decode($result, true);
?>
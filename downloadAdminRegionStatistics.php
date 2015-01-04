<?php

set_time_limit(0);
$data = array('metadata' => array('service' => 'noise', 'mode' => 'download', 'feature' => 'adminRegionStatistics'), 'rawdata' => array('region_id' => $_GET['region_id'], 'region_level' => $_GET['region_level']));
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
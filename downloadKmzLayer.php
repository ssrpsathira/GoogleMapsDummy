<?php

set_time_limit(0);
$data = array('metadata' => array('service' => 'noise', 'mode' => 'download', 'feature' => 'admin2kmzLayer', 'imei' => $_GET['imei']), 'rawdata' => array('from_date' => $_GET['from_date'], 'to_date' => $_GET['to_date'], 'sampling_rate' => $_GET['sampling_rate'], 'time_stamp' => $_GET['time_stamp']));
require './downloadHelper.php';
downloadData($data);
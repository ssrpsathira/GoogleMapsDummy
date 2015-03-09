<?php

set_time_limit(0);
$data = array('metadata' => array('service' => 'noise', 'mode' => 'download', 'feature' => 'latestLocationStatistics'), 'rawdata' => array('location_id' => $_GET['locationId'], 'from_date' => $_GET['from_date'], 'to_date' => $_GET['to_date'], 'displacement_range' => $_GET['displacement_range']));
require './downloadHelper.php';
downloadData($data);
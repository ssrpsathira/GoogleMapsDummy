<?php

set_time_limit(0);
$data = array('metadata' => array('service' => 'noise', 'mode' => 'download', 'feature' => 'allLocations'), 'rawdata' => array('from_date' => $_GET['from_date'], 'to_date' => $_GET['to_date']));
require './downloadHelper.php';
downloadData($data);
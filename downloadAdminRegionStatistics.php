<?php

set_time_limit(0);
$data = array('metadata' => array('service' => 'noise', 'mode' => 'download', 'feature' => 'adminRegionStatistics'), 'rawdata' => array('region_id' => $_GET['region_id'], 'region_level' => $_GET['region_level'], 'from_date' => $_GET['from_date'], 'to_date' => $_GET['to_date'], 'sampling_rate' => $_GET['sampling_rate']));
require './downloadHelper.php';
downloadData($data);
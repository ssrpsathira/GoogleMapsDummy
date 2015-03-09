<?php

function downloadData($data, $returnData = false) {
   $data_string = json_encode($data);

   $url = 'http://localhost/CDME/request.php';
   $ch = curl_init($url);
   curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
   curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
     //curl_setopt($ch, CURLOPT_PROXY, "cache.mrt.ac.lk:3128");
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
   curl_setopt($ch, CURLOPT_HTTPHEADER, array(
       'Content-Type: application/json',
       'Content-Length: ' . strlen($data_string))
   );
   $result = curl_exec($ch);
   curl_close($ch);
   
   if ($returnData) {
       return $result;
   }

   echo $result;
}
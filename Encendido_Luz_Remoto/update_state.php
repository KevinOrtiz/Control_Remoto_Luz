<?php


  // Create cURL call, make sure to change it with your Yun name
  $service_url = 'http://kevinleonelgrupo1.local/arduino/digital/8/' . $_GET["command"];
  $curl = curl_init($service_url);
   
  // Send cURL to Yun board
  curl_setopt($curl, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4 ); 
  $curl_response = curl_exec($curl);
  curl_close($curl);

?>

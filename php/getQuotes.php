<?php

$debug = 0;

  $curl = curl_init();

  curl_setopt_array($curl, [
    CURLOPT_URL => "https://api.quotable.io/random?maxLength=160",
    CURLOPT_RETURNTRANSFER => true,
    CURLOPT_FOLLOWLOCATION => true,
    CURLOPT_ENCODING => "",
    CURLOPT_MAXREDIRS => 10,
    CURLOPT_TIMEOUT => 30,
    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
    CURLOPT_CUSTOMREQUEST => "GET",
    ]);
  
  $response = curl_exec($curl);
  $err = curl_error($curl);
  
  curl_close($curl);

  $obj = json_decode($response, true);
  echo "===\n";
  print_r($obj);  
  echo "===\n";

  #echo "Response: [" . $response. "]\n";
  #echo "err: [" . $err. "]\n";
  

?>

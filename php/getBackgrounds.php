<?php

$debug = 0;

  $curl = curl_init();

  $page = 1;
  while ($page <= 10) {

    $url = "https://pixabay.com/api/?key=18841169-1f29b08e7049dcf74a6b65a71&image_type=\"photo\"&safesearch=\"true\"&orientation=\"landscape\"&category=\"places\"&page=$page";
    curl_setopt_array($curl, [
      CURLOPT_URL => "$url",
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
    #echo "===\n";
    #print_r($obj);  
    #echo "===\n";

    #echo "Response: [" . $response. "]\n";
    #echo "err: [" . $err. "]\n";

    if ($obj['total'] == 0) {
      echo "Warning: Nothing from Pixabay\n"; 
    } else {
      if (is_null($obj)) {
         echo "ERROR: Null obj.\n";
      } else {
        $picNum = 0; $picMax = 19;
        while ($picNum < $picMax) {
          echo $obj['hits'][$picNum]['webformatURL']."\n";
          $picNum++;
        }
      }
    }

    $page++;
  }

?>

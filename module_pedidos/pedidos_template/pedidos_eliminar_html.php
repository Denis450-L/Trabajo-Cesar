<?php


    $curl = curl_init();

    curl_setopt_array($curl, array(
      CURLOPT_URL => 'https://cevicherias.informaticapp.com/pedidos/'.$_GET['ped_id'],
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_ENCODING => '',
      CURLOPT_MAXREDIRS => 10,
      CURLOPT_TIMEOUT => 0,
      CURLOPT_FOLLOWLOCATION => true,
      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
      CURLOPT_CUSTOMREQUEST => 'DELETE',
      CURLOPT_HTTPHEADER => array(
        'Authorization: Basic YTJhYTA3YWRmaGRmcmV4ZmhnZGZoZGZlcnR0Z2VsYmtmREhTSEE0YjNaUDRNNUR3QlBMa0NDVnNzYUVDOm8yYW8wN29kZmhkZnJleGZoZ2RmaGRmZXJ0dGdlY1Y1TWpMVlZNN2xIRXU1Vlk0UnNsTzAzNmtMZmVSVw=='
      ),
    ));
    

    $response = curl_exec($curl);

    curl_close($curl);
    $data = json_decode($response, true);
    header("Location: pedidos_html.php");

?>
<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");
header('Access-Control-Allow-Credentials: true');
header('Access-Control-Max-Age: 86400');    // cache for 1 day

if(isset($_GET['data']) && $_GET['data'] != ''){
  include($_GET['data'].'.php');
}

  // Convert Array to JSON String
  $someJSON = json_encode($someArray);
  echo $someJSON;
?>

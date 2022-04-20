<?php

error_reporting(0);

$username='your-tigergraph-cloud-database-username';
$password ='your-tigergraph-cloud-database-password';
$graph_db ='your-tigergraph-cloud-database-graphName';



 // Your Tigergraph Databse url instance eg: https://example.i.tgcloud.io

$your_tiger_cloud_server_url='https://yourinstance.i.tgcloud.io'; 

$data_param ='{"graph": "'.$graph_db.'"}';



$url ="$your_tiger_cloud_server_url:9000/requesttoken";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, TRUE);
curl_setopt($ch, CURLOPT_USERPWD, "$username:$password");
//curl_setopt($ch, CURLOPT_HTTPHEADER, array("accept: application/json", 'Content-Type: application/json'));  
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_param);
//curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");

curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$output = curl_exec($ch); 

echo $output;


if($output ==''){
echo "<div style='background:red;color:white;padding:10px;border:none'>Ensure that your Tigergraph Database Instance 
 has been started. also ensure there is Internet Connection and Try Again</div>";
}


$json = json_decode($output, true);
$msg = $json["message"];
if($msg !=''){
echo "<div style='background:#800000;color:white;padding:10px;border:none'>Message: $msg</div>";
}

$tk  = $json["results"]["token"];

if($msg !=''){
echo "<div style='background:green;color:white;padding:10px;border:none'>Tigergraph Token Successfully generated..</div>";
echo "<b>Your Token is:</b>  $tk";
}






?>
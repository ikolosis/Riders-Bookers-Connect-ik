<?php
error_reporting(0);

//header('Access-Control-Allow-Origin: *');
//header('Access-Control-Allow-Methods: GET, POST');
//header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");


$id=strip_tags($_POST['id']);
//$reciever_id=strip_tags($_POST['rid']);

//DELETE /graph/{graph_name}/vertices/{vertex_type}/{vertex_id}
// Get notification from vertex Ponotification in Tigergraph Database

include('settings.php');

$url ="$tg_url:9000/graph/$graph_db/vertices/$table_notification/$id";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
//curl_setopt($ch, CURLOPT_POST, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Authorization: Bearer $tg_accesstoken")); 
//curl_setopt($ch, CURLOPT_HTTPHEADER, array("accept: application/json", 'Content-Type: application/json'));  
//curl_setopt($ch, CURLOPT_POSTFIELDS, $data_param);

curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$output = curl_exec($ch); 

if($output ==''){
echo "<div style='background:red;color:white;padding:8px;border:none;'>Cannot connect to Tigergraph Database. Ensure there is Internet Connection and Try Again</div>";
exit();
}


$json = json_decode($output, true);
$msg = $json["message"];
if($msg !=''){
echo "<div style='background:red;color:white;padding:8px;border:none;'>Error Message: $msg</div>";
exit();
}


$res = $json["results"]["deleted_vertices"];
if($res == 1){

//echo "<div style='background:green;color:white;padding:8px;border:none;'>Data Successfully deleted</div>";
echo 1;
}
else{

echo 0;
}









?>



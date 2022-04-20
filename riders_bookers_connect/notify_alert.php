<?php
error_reporting(0);

$userid_sess_data = $_POST['userid_sess_data'];

// Get notification from vertex Ponotification in Tigergraph Database

include('settings.php');

$reciever_id=$userid_sess_data;


$url =''.$tg_url.':9000/graph/'.$graph_db.'/vertices/'.$table_notification.'?filter=reciever_id="'."$reciever_id".'" ';




$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
//curl_setopt($ch, CURLOPT_POST, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Authorization: Bearer $tg_accesstoken")); 
//curl_setopt($ch, CURLOPT_HTTPHEADER, array("accept: application/json", 'Content-Type: application/json'));  
//curl_setopt($ch, CURLOPT_POSTFIELDS, $data_param);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");

//curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
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


//$nosofrowsx = $json["results"][0]["attributes"]["status"];
$nosofrows = 0;
foreach($json["results"] as $row){
$nos   =  $row["attributes"]["status"];

if($nos=='unread'){
 $vertex_id = $row["v_id"];
$nosofrows++;

}

}

echo $nosofrows;



/*
$url =''.$tg_url.':9000/graph/'.$graph_db.'/vertices/'.$table_notification.'?count_only=true&filter=reciever_id="'."$reciever_id".'" ';

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
//curl_setopt($ch, CURLOPT_POST, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Authorization: Bearer $tg_accesstoken")); 
//curl_setopt($ch, CURLOPT_HTTPHEADER, array("accept: application/json", 'Content-Type: application/json'));  
//curl_setopt($ch, CURLOPT_POSTFIELDS, $data_param);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");

//curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
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



echo $nosofrows = $json["results"][0]["count"];

*/


?>


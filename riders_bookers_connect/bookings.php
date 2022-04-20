<?php
error_reporting(0);
session_start();

$uid = strip_tags($_SESSION['uid2p']);
$userid = $uid;
$fullname = strip_tags($_SESSION['fullname2p']);
$username =  strip_tags($_SESSION['username2p']);
$userphoto = strip_tags($_SESSION['photo2p']);
$email = strip_tags($_SESSION['email2p']);

$postid = strip_tags($_POST['postid']);
$comdesc = strip_tags($_POST['comdesc']);
$reciever_userid = strip_tags($_POST['reciever_userid']);
$title = strip_tags($_POST['title']);
$title_seo = strip_tags($_POST['title_seo']);


if ($comdesc == ''){
exit();
}




if($comdesc != ''){



$token= md5(uniqid());
$timer = time();
include("time/now.fn");
$created_time=strip_tags($now);
$dt2=date("Y-m-d H:i:s");
$pa = 0;






// Insert Into in bookings Vertex in Tigergraph Database

include('settings.php');
         

$data_param='
{
  "vertices": {
    "'.$table_bookings.'": {
      "'.$timer.'": {

 "postid": {
           "value": "'.$postid.'"
         },

 "comment": {
           "value": "'.$comdesc.'"
         },
 "timer": {
           "value": "'.$timer.'"
         },
 "userid": {
           "value": "'.$userid.'"
         },
 "fullname": {
           "value":  "'.$fullname.'"
         },
 "photo": {
           "value":  "'.$userphoto.'"
         }

      }
    }
  }
}';




$url ="$tg_url:9000/graph/$graph_db";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Authorization: Bearer $tg_accesstoken"));  
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_param);
//curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
 $output = curl_exec($ch); 


if($output ==''){
echo "<div style='background:red;color:white;padding:8px;border:none;'>Connection to Tigergraph Database Failed. Ensure there is Internet Connection and Try Again</div>";
exit();
}


$json = json_decode($output, true);
$msg = $json["message"];
if($msg !=''){
echo "<div style='background:red;color:white;padding:8px;border:none;'>Error Message: $msg</div>";
}

$res = $json["results"][0]["accepted_vertices"];
if($res == 1){

//echo "<div style='background:green;color:white;padding:8px;border:none;'>Bookingss Successfully Inserted</div>";
}





// Get Bookings count from Posts table Vertex and then update the Posts bookings and points Counts for the User in Tigergraph

$url ="$tg_url:9000/graph/$graph_db/vertices/$table_posts/$postid";
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
echo "<div style='background:red;color:white;padding:8px;border:none;'>Connection to Tigergraph Database Failed. Ensure there is Internet Connection and Try Again</div>";
exit();
}



$json = json_decode($output, true);
$msg = $json["message"];


$total_bookings = $json["results"][0]["attributes"]["total_booking"];
//echo $posts = $json["results"][0]["attributes"]["posts"];
//$points = $json["results"][0]["attributes"]["points"];

$vertex_id = $json["results"][0]["v_id"];
$pid_x = $vertex_id;


$new_count = 10;
//$final_count_points = $points + $new_count;
$final_count_bookings = $total_bookings + 1;


//update Posts Table Vertex for bookings and points count on posts


$data_param2='
{
  "vertices": {
    "'.$table_posts.'": {
      "'.$postid.'": {
 "total_booking": {
           "value": "'.$final_count_bookings.'"
         }


      }
    }
  }
}';




$url ="$tg_url:9000/graph/$graph_db";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Authorization: Bearer $tg_accesstoken"));  
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_param2);
//curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$output = curl_exec($ch); 

$json = json_decode($output, true);
$msg = $json["message"];
if($msg !=''){
echo "<div style='background:red;color:white;padding:8px;border:none;'>Error Message: $msg</div>";
}

$res = $json["results"][0]["accepted_vertices"];
if($res == 1){

//echo "<div style='background:green;color:white;padding:8px;border:none;'>Data Successfully Updated 2</div>";
}











// Insert into notification vertex

$notify_id = time();
$data_param2x='
{
  "vertices": {
    "'.$table_notification.'": {
      "'.$notify_id.'": {
 "post_id": {
           "value": "'.$postid.'"
         },
"userid": {
           "value": "'.$uid.'"
         },
"fullname": {
           "value": "'.$fullname.'"
         },
"photo": {
           "value": "'.$userphoto.'"
         },
"reciever_id": {
           "value": "'.$reciever_userid.'"
         },
"status": {
           "value": "unread"
         },
"data_type": {
           "value": "booking"
         },
"timing": {
           "value": "'.$notify_id.'"
         },
"title": {
           "value": "'.$title.'"
         },
 "title_seo": {
           "value": "'.$title_seo.'"
         }

      }
    }
  }
}';




$url ="$tg_url:9000/graph/$graph_db";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array("Authorization: Bearer $tg_accesstoken"));  
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_param2x);
//curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "GET");
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
$output = curl_exec($ch); 

$json = json_decode($output, true);
$msg = $json["message"];
if($msg !=''){
echo "<div style='background:red;color:white;padding:8px;border:none;'>Error Message: $msg</div>";
}

$resx = $json["results"][0]["accepted_vertices"];
if($resx == 1){

//echo "<div style='background:green;color:white;padding:8px;border:none;'>Notification Successfully sent..</div>";
}






}

$totalbooking = $final_count_bookings;
$return_arr = array("comment"=>$totalbooking,"comdesc"=>$comdesc,"comment_username"=>$uid,"comment_fullname"=>$fullname,"comment_photo"=>$userphoto,"comment_time"=>$timer);

echo json_encode($return_arr);
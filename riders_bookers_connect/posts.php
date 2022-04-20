<?php

error_reporting(0);
session_start();
include ('authenticate.php');

$uid = strip_tags($_SESSION['uid2p']);
$userid = $uid;
$fullname = strip_tags($_SESSION['fullname2p']);
$username =  strip_tags($_SESSION['username2p']);
$photo = strip_tags($_SESSION['photo2p']);
$email = strip_tags($_SESSION['email2p']);




$mt = microtime(true);
$timer = time();
include("time/now.fn");
$created_time=strip_tags($now);
$dt2=date("Y-m-d H:i:s");
$title = trim(strip_tags($_POST['title']));

//replace any space with hyphen
$sp ='-';
$tt = time();
$title_seo = str_replace(' ', '-', $title.$sp.$tt);


$messaging = trim(strip_tags($_POST['messaging']));
$file_content = strip_tags($_POST['file_fname']);

$price_amount = strip_tags($_POST['price_amount']);


$depature_time = $_POST['depature_time'];
$arrival_time = $_POST['arrival_time'];
$pickup_address = strip_tags($_POST['pickup_address']);
$destination_address = strip_tags($_POST['destination_address']);
$total_seat_capacity = strip_tags($_POST['total_seat_capacity']);
$total_seat_available = strip_tags($_POST['total_seat_available']);
$vehicle_plate_no = $tt;
$vehicle_type = strip_tags($_POST['vehicle_type']);
$total_booking = '0';







$upload_path = "uploads/";



$filename_string = strip_tags($_FILES['file_content']['name']);
// thus check files extension names before major validations

$allowed_formats = array("PNG", "png", "gif", "GIF", "jpeg", "JPEG", "BMP", "bmp","JPG","jpg");
$exts = explode(".",$filename_string);
$ext = end($exts);

if (!in_array($ext, $allowed_formats)) { 
echo "<div id='alertdata_uploadfiles' class='alerts alert-danger'>File Formats not allowed. Only Images are allowed.<br></div>";
exit();
}




 //validate file names, ensures directory tranversal attack is not possible.
//thus replace and allowe filenames with alphanumeric dash and hy

//allow alphanumeric,underscore and dash

$fname_1= preg_replace("/[^\w-]/", "", $filename_string);

// add a new extension name to the uploaded files after stripping out its dots extension name
$new_extension = ".png";
$fname = $fname_1.$new_extension;





// for security reasons, you migh want to avoid files with more than one dot extension name
//file like fred.exe.png might contain virus. only ask the user to rename files to eg fred.png before uploads

 $fname_dot_count = substr_count($fname,".");
if($fname_dot_count >1){
echo "<div id='alertdata_uploadfiles2' class='alerts alert-danger'>
Your files <b>$filename_string</b> has <b>($fname_dot_count dot extension names)</b>
File with more than one <b>dot(.) extension name are not allowed.
you can rename and ensure it has only one dot extension eg: <b>example.png</b>
</b></div>";
exit();

}


$fsize = $_FILES['file_content']['size']; 
$ftmp = $_FILES['file_content']['tmp_name'];

//give file a random names
$filecontent_name = $username.time();
//$filecontent_name = 'fred1';


if ($fsize > 5 * 1024 * 1024) { // allow file of less than 5 mb
echo "<div id='alertdata' class='alerts alert-danger'>File greater than 5mb not allowed<br></div>";
exit();
}

// Check if file already exists
if (file_exists($upload_path . $filecontent_name.'.'.$ext)) {
echo "<div id='alertdata_uploadfiles' class='alerts alert-danger'>This uploaded File <b>$filecontent_name.$ext</b> already exist<br></div>";
exit(); 
}


$allowed_types=array(
'application/json',
'application/octet-stream',
'text/plain',
'image/gif',
    'image/jpeg',
    'image/png',
'image/jpg',

'image/GIF',
    'image/JPEG',
    'image/PNG',
'image/JPG'
);



if ( ! ( in_array($_FILES["file_content"]["type"], $allowed_types) ) ) {
  echo "<div id='alertdata_uploadfiles' class='alerts alert-danger'>Only Images are allowed bro..<br><br></div>";
exit();
}



// Calling getimagesize() function 
//$image_info = getimagesize("team1.png"); 
//print_r($image_info); 

$image_info =getimagesize($_FILES['file_content']['tmp_name']);

    $width = $image_info[0];
    $height = $image_info[1];
    $mime_image = $image_info['mime'];
/*
//validate file dimension eg 400 by 250
if ($width > "400" || $height > "250") {
       echo "<div id='alertdata_uploadfiles' class='alerts alert-danger'>file upload dimension must not be more than 400(width) by 250(height)</div>";
exit();

}
*/


// check file validation using getimagesizes
 if ($image_info === FALSE) {
           echo "<div id='alertdata_uploadfiles' class='alerts alert-danger'>cannot determine the image type</div>";
exit();
        }



if ( ! ( in_array($mime_image, $allowed_types) ) ) {
  echo "<div id='alertdata_uploadfiles' class='alerts alert-danger'>Only Image types are allowed..<br><br></div>";
exit();
}



if (($image_info[2] !== IMAGETYPE_GIF) && ($image_info[2] !== IMAGETYPE_JPEG) && ($image_info[2] !== IMAGETYPE_PNG)) {
           echo "<div id='alertdata_uploadfiles' class='alerts alert-danger'>only image format gif,jpg, png are allowed..</div>";
exit();
        }





//validate image using file info  method
$finfo = finfo_open(FILEINFO_MIME_TYPE);
$mime = finfo_file($finfo, $_FILES['file_content']['tmp_name']);

if ( ! ( in_array($mime, $allowed_types) ) ) {
  echo "<div id='alertdata_uploadfiles' class='alerts alert-danger'>Only Images are allowed...<br></div>";
exit();
}
finfo_close($finfo);






// initialize settings parameters.
include('settings.php');

// Get Google Maps Geo-Cordinates API Calla
$geo_address = trim($_POST['pickup_address']);

$address = urlencode($geo_address);
// geocode geo location address to longitudes and latitudes

$call_url ="https://maps.googleapis.com/maps/api/geocode/json?key=$google_map_keys&address=$address&sensor=false";
 $res = file_get_contents($call_url);
 $json = json_decode($res, true);
//print_r($json);

        if($json['status']='OK'){

         $lat1 = $json['results'][0]['geometry']['location']['lat'];
         $lng1 = $json['results'][0]['geometry']['location']['lng'];
         $formatted_address = $json['results'][0]['formatted_address'];

}else{
echo "<div  style='background:red;color:white;padding:8px;border:none;' class='' id='alerts_reg'>Address Could not be Formatted via Google Map Reverse Geo-Codings. Please Try Again</div>";
exit();

}


// Get Google Maps Geo-Cordinates API Calla
$geo_address2 = trim($_POST['destination_address']);

$address2 = urlencode($geo_address2);
// geocode geo location address to longitudes and latitudes

$call_url2 ="https://maps.googleapis.com/maps/api/geocode/json?key=$google_map_keys&address=$address2&sensor=false";
 $res2 = file_get_contents($call_url2);
 $json2 = json_decode($res2, true);
//print_r($json);

        if($json2['status']='OK'){

         $lat2 = $json2['results'][0]['geometry']['location']['lat'];
         $lng2 = $json2['results'][0]['geometry']['location']['lng'];
         $formatted_address2 = $json2['results'][0]['formatted_address'];

}else{
echo "<div  style='background:red;color:white;padding:8px;border:none;' class='' id='alerts_reg'>Address Could not be Formatted via Google Map Reverse Geo-Codings. Please Try Again</div>";
exit();
}




        $lat1 = $json['results'][0]['geometry']['location']['lat'];
         $lng1 = $json['results'][0]['geometry']['location']['lng'];



        $lat2 = $json2['results'][0]['geometry']['location']['lat'];
         $lng2 = $json2['results'][0]['geometry']['location']['lng'];
		 




        //if($offering1 !=''){
          

if (move_uploaded_file($ftmp, $upload_path . $filecontent_name.'.'.$ext)) {


//insert into graph database
$final_filename =  $filecontent_name.'.'.$ext;
// Insert Into in Tigergraph Database

//include('settings.php');
         

$data_param='
{
  "vertices": {
    "'.$table_posts.'": {
      "'.$tt.'": {

 "title": {
           "value": "'.$title.'"
         },

 "title_seo": {
           "value": "'.$title_seo.'"
         },
 "content": {
           "value": "'.$messaging.'"
         },
 "userid": {
           "value": "'.$uid.'"
         },
 "fullname": {
           "value":  "'.$fullname.'"
         },
 "userphoto": {
           "value":  "'.$photo.'"
         },

 "total_comments": {
           "value":  "0"
         },

 "data_type": {
           "value":  "photo"
         },
 "timer": {
           "value": "'.$timer.'"
         },
"photo": {
           "value": "'.$final_filename.'"
         },
 "price_amount": {
           "value": "'.$price_amount.'"
         },
 "depature_time": {
           "value": "'.$depature_time.'"
         },
 "arrival_time": {
           "value": "'.$arrival_time.'"
         },
 "pickup_address": {
           "value": "'.$pickup_address.'"
         },
 "destination_address": {
           "value": "'.$destination_address.'"
         },
 "pickup_address_latitude": {
           "value": "'.$lat1.'"
         },
 "pickup_address_longitude": {
           "value": "'.$lng1.'"
         },
 "destination_address_latitude": {
           "value": "'.$lat2.'"
         },
 "destination_address_longitude": {
           "value": "'.$lng2.'"
         },
 "total_seat_capacity": {
           "value": "'.$total_seat_capacity.'"
         },
 "total_seat_available": {
           "value": "'.$total_seat_available.'"
         },
 "vehicle_plate_no": {
           "value": "'.$vehicle_plate_no.'"
         },
 "vehicle_type": {
           "value": "'.$vehicle_type.'"
         },
 "total_booking": {
           "value": "0"
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
 echo $output = curl_exec($ch); 


if($output ==''){
echo "<div style='background:red;color:white;padding:8px;border:none;'>Ensure there is Internet Connection and Try Again</div>";
exit();
}


$json = json_decode($output, true);
$msg = $json["message"];
if($msg !=''){
echo "<div style='background:red;color:white;padding:8px;border:none;'>Error Message: $msg</div>";
}

$res = $json["results"][0]["accepted_vertices"];
if($res == 1){

echo "<div style='background:green;color:white;padding:8px;border:none;'>Photo Successfully Uploaded</div>";
}












// Get Users Info from users table Vertex and then update the Posts Counts for the User in Tigergraph

$url ="$tg_url:9000/graph/$graph_db/vertices/$table_users/$email";
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
echo "<div style='background:red;color:white;padding:8px;border:none;'>Ensure there is Internet Connection and Try Again</div>";
exit();
}



$json = json_decode($output, true);
$msg = $json["message"];

$posts = $json["results"][0]["attributes"]["posts"];
$vertex_id = $json["results"][0]["v_id"];
$email_x = $vertex_id;

if($email !=$email_x){
echo "<div style='background:red;color:white;padding:8px;border:none;'>There is something wrong with Users Email Address...</div>";
exit();
}



$counter_posts=$posts;
$new_count_posts = 1;
$final_count_posts = $counter_posts + $new_count_posts;


//  update Users Table Vertex for Users posting Points


$data_param2='
{
  "vertices": {
    "'.$table_users.'": {
      "'.$email.'": {
 "posts": {
           "value": "'.$final_count_posts.'"
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

echo "<div style='background:green;color:white;padding:8px;border:none;'>Data Successfully Updated</div>";
}











// update notification table vertex to send notifications to all registered Users

$url1 ="$tg_url:9000/graph/$graph_db/vertices/$table_users";

$ch1 = curl_init();
curl_setopt($ch1, CURLOPT_URL, $url1);
//curl_setopt($ch1, CURLOPT_POST, TRUE);
curl_setopt($ch1, CURLOPT_HTTPHEADER, array("Authorization: Bearer $tg_accesstoken")); 
//curl_setopt($ch1, CURLOPT_HTTPHEADER, array("accept: application/json", 'Content-Type: application/json'));  
//curl_setopt($ch1, CURLOPT_POSTFIELDS, $data_param);
curl_setopt($ch1, CURLOPT_CUSTOMREQUEST, "GET");

//curl_setopt($ch1, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch1, CURLOPT_RETURNTRANSFER, TRUE);
 echo $output1 = curl_exec($ch1); 

if($output1 ==''){
echo "<div style='background:red;color:white;padding:8px;border:none;'>Ensure there is Internet Connection and Try Again</div>";
//exit();
}



$json1 = json_decode($output1, true);
$msg1 = $json1["message"];
$vertex_id1 = $json1["results"][0]["v_id"];
$email_x1 = $vertex_id1;

if($msg1 !=''){
echo "<div style='background:red;color:white;padding:8px;border:none;'>Error Message: ($msg1)</div>";
exit();
}


if($vertex_id1 ==''){
echo "<div style='background:red;color:white;padding:8px;border:none;'>No Records found  Tigergraph Database Yet..</div>";
exit();
}





foreach($json1["results"] as $row){

$vertex_id = $row["v_id"];
$vertex_type = $row["v_type"];
$id_email = $vertex_id;

$userid_x = $row["attributes"]["uid"];



$photo = htmlentities(htmlentities($row["attributes"]["photo"], ENT_QUOTES, "UTF-8"));

$timer = htmlentities(htmlentities($row["attributes"]["timer"], ENT_QUOTES, "UTF-8"));
$fullname = htmlentities(htmlentities($row["attributes"]["fullname"], ENT_QUOTES, "UTF-8"));
$points = htmlentities(htmlentities($row["attributes"]["points"], ENT_QUOTES, "UTF-8"));
$posts = htmlentities(htmlentities($row["attributes"]["posts"], ENT_QUOTES, "UTF-8"));
$comments = htmlentities(htmlentities($row["attributes"]["comments"], ENT_QUOTES, "UTF-8"));



// Insert into notification vertex


$notify_id = time();

$data_param2='
{
  "vertices": {
    "'.$table_notification.'": {
      "'.$notify_id.'": {
 "post_id": {
           "value": "'.$tt.'"
         },
"userid": {
           "value": "'.$uid.'"
         },
"fullname": {
           "value": "'.$fullname.'"
         },
"photo": {
           "value": "'.$photo.'"
         },
"reciever_id": {
           "value": "'.$userid_x.'"
         },
"status": {
           "value": "unread"
         },
"data_type": {
           "value": "post"
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

$resx = $json["results"][0]["accepted_vertices"];
if($resx == 1){

echo "<div style='background:green;color:white;padding:8px;border:none;'>Notification Successfully sent..</div>";
}





}






echo "<script>alert('Submission Successful');
window.location='dashboard.php'</script>";



//echo 1;	

}
else{
echo "<div style='background:red;color:white;padding:8px;border:none;'>Photo Submission Failed</div>";
//echo 2;
}




?>
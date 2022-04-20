<?php
error_reporting(0);
// <span data-livestamp="{{comment_new.timing}}" ==> data-livestamp="{{comment_new.timing}}" ></span>
// this if line statement below is important otherwise the progressbar will not work perfectly
if (isset($_POST) and $_SERVER['REQUEST_METHOD'] == "POST") {

$file_content = strip_tags($_POST['file_fname']);
//$username1 = strip_tags($_POST['username']);
//$username = str_replace(' ', '', $username1);

$username = 'good';
$password = strip_tags($_POST['password']);
$fullname = strip_tags($_POST['fullname']);
$email = strip_tags($_POST['email']);
$mt_id=rand(0000,9999);
$dt2=date("Y-m-d H:i:s");
$ipaddress = strip_tags($_SERVER['REMOTE_ADDR']);


// honey pot spambots
$emailaddress_pot =$_POST['emailaddress_pot'];
if($emailaddress_pot !=''){
//spamboot detected.
//Redirect the user to google site

echo "<script>
window.setTimeout(function() {
    window.location.href = 'https://google.com';
}, 1000);
</script><br><br>";

exit();
}


if ($file_content == ''){
echo "<div class='alert alert-danger' id='alerts_reg'><font color=red>Files Upload is empty</font></div>";
exit();
}


if ($password == ''){
echo "<div class='alert alert-danger' id='alerts_reg'><font color=red>password is empty</font></div>";
exit();
}

if ($fullname == ''){
echo "<div class='alert alert-danger' id='alerts_reg'><font color=red>fullname Name is empty</font></div>";
exit();
}

if ($email == ''){
echo "<div class='alert alert-danger' id='alerts_reg'><font color=red>Email Address is empty</font></div>";
exit();
}

$em= filter_var($email, FILTER_VALIDATE_EMAIL);
if (!$em){
echo "<div class='alert alert-danger' id='alerts_reg'><font color=red>Email Address is Invalid</font></div>";
exit();
}

$ip= filter_var($ipaddress, FILTER_VALIDATE_IP);
if (!$ip){
echo "<div class='alert alert-danger' id='alerts_reg'><font color=red>IP Address is Invalid</font></div>";
exit();
}



$upload_path = "uploads/";

/* validate file names, ensures directory tranversal attack is not possible.
thus allow only alphanumeric filenames and dots

//allow alphanumeric,underscore, dot and dash
$filename_string = '../../fred_09@#H$%.exe.-png';
$fnaming = preg_replace("/[^\w-.]/", "", $filename_string);
//echo $fnaming;



//validate to ensure that it contains only aphabets or dots or both
$fstring = 'fred.png';
$fresult = preg_match("/^[a-zA-Z. ]*$/",$fstring);

if ($fresult) {
echo "good. contains only aphabets and dots<br>";
}else{
echo "bad.";
exit();
}



//validate to ensure that it contains only alphanumerics or dots or both
$fstring1 = 'fred02324.png';
$fresult1 = preg_match("/^[a-zA-Z0-9. ]*$/",$fstring1);

if ($fresult1) {
echo "good. contains only aphanumerics, dots<br>";
}else{
echo "bad.";
exit();
}


$fname1 = strip_tags($_FILES['file_content']['name']); 
$filename_string = $fname1;
$fname = preg_match("/^[a-zA-Z0-9. ]*$/",$fname1);
echo $fname;
if ($fname1) {
//echo "good. contains only aphanumerics, dots<br>";
}else{
echo "<div id='alertdata_uploadfiles' class='alerts alert-danger'>Please Rename the file. File name can be numeric, alphabetic or alphanumeric</div>";
exit();
}


*/




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







// check if Users email already exist in Tigergraph Database

include('settings.php');


/*
echo " $tg_url
$tg_accesstoken
$table_users 
graph_db ";

*/

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
$code = $json["code"];

if($code=='601'){
echo "<div style='background:green;color:white;padding:8px;border:none;'>This Email Address is Available in Tigergraph Users Database</div>";
//exit();
}

/*
if($msg !=''){
echo "<div style='background:red;color:white;padding:8px;border:none;'>Error Message: $msg</div>";
//exit();
}
*/
//$email_x = $json["results"][0]["attributes"]["email"];

$vertex_id = $json["results"][0]["v_id"];
$email_x = $vertex_id;
if($email ==$email_x){
echo "<div style='background:red;color:white;padding:8px;border:none;'>This Email Address already Exist...</div>";
exit();
}






if (move_uploaded_file($ftmp, $upload_path . $filecontent_name.'.'.$ext)) {


//insert into graph database
$final_filename =  $filecontent_name.'.'.$ext;
$timer = time();
include("time/now.fn");
$created_time=strip_tags($now);
$dt2=date("Y-m-d H:i:s");


$token1= md5(uniqid());
$token2 = time();
$uid_token = $token1.$token2;





//hash password before sending it to database...
$options = array("cost"=>4);
$hashpass = password_hash($password,PASSWORD_BCRYPT,$options);

//insert or upsert into Users vertex table




$data_param='
{
  "vertices": {
    "'.$table_users.'": {
      "'.$email.'": {

 "password": {
           "value": "'.$hashpass.'"
         },

 "fullname": {
           "value": "'.$fullname.'"
         },
 "photo": {
           "value": "'.$final_filename.'"
         },
 "timer": {
           "value": "'.$timer.'"
         },
 "points": {
           "value": "100"
         },
        "posts": {
           "value": "0"
         },
 "uid": {
           "value": "'.$timer.'"
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

echo "<div style='background:green;color:white;padding:8px;border:none;'>Data Successfully Inserted</div>";
}


if($res){
echo "<div id='alertdata_uploadfiles_o' class='well alerts alert-success'>Data Created Successfully.
.Redirecting in a second to Login Section.....<img src='loader.gif'><br></div>";


echo "<script>
window.setTimeout(function() {
    window.location.href = 'login.php';
}, 1000);
</script><br><br>";


}

                } else {
echo "<div id='alertdata_uploadfiles' class='alerts alert-danger'>Your Data cannot be submitted to Tiger GRAPH Database.<br></div>";
                }


}


?>





<?php
error_reporting(0);
//header('Access-Control-Allow-Origin: *');
//header('Access-Control-Allow-Methods: GET, POST');
//header("Access-Control-Allow-Headers: Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
 

$email = strip_tags($_POST['email']);
$password = strip_tags($_POST['password']);




if ($email == ''){
echo "<div class='alert alert-danger' id='alerts_login'><font color=red>Email is empty</font></div>";
exit();
}


if ($password == ''){
echo "<div class='alert alert-danger' id='alerts_login'><font color=red>password is empty</font></div>";
exit();
}


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


// Athenticate Users with her registered details in Tigergraph database


include('settings.php');

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

$vertex_id = $json["results"][0]["v_id"];
 $email_x = $vertex_id;



$fname = $json["results"][0]["attributes"]["fullname"];
$fpass = $json["results"][0]["attributes"]["password"];
$fphoto = $json["results"][0]["attributes"]["photo"];
$fpoint = $json["results"][0]["attributes"]["points"];
$ftimer = $json["results"][0]["attributes"]["timer"];
$fuid = $json["results"][0]["attributes"]["uid"];

if($email ==$email_x){


//start hashed passwordless Security verify
if(password_verify($password,$fpass)){
            //echo "Password verified and ok";


// initialize session if things where ok.
session_start();

$_SESSION['uid2p'] = $fuid;
$_SESSION['fullname2p'] = $fname;
$_SESSION['username2p'] = $fuid;
$_SESSION['photo2p'] = $fphoto;
$_SESSION['points2p'] = $fpoint;
$_SESSION['created_time2p'] = $ftimer;
$_SESSION['email2p'] = $email_x;

echo "<div class='alert alert-success'>Login sucessful <img src='ajax-loader.gif'></div>";
echo "<script>window.location='dashboard.php'</script>";





}
else{
echo "<div class='alert alert-danger' id='alerts_login'><font color=red>Password Does not Matched</font></div>";

}



}
else {
echo "<div class='alert alert-danger' id='alerts_login'><font color=red>User with This Email does not exist..</font></div>";
}






?>

<?php ob_end_flush(); ?>

















<?php
error_reporting(0); 
?>



<?php
session_start();
include ('authenticate.php');


$userid_sess =  htmlentities(htmlentities($_SESSION['uid2p'], ENT_QUOTES, "UTF-8"));
$fullname_sess =  htmlentities(htmlentities($_SESSION['fullname2p'], ENT_QUOTES, "UTF-8"));
$username_sess =   htmlentities(htmlentities($_SESSION['username2p'], ENT_QUOTES, "UTF-8"));
$photo_sess =  htmlentities(htmlentities($_SESSION['photo2p'], ENT_QUOTES, "UTF-8"));
$email_sess =  htmlentities(htmlentities($_SESSION['email2p'], ENT_QUOTES, "UTF-8"));

?>


<!DOCTYPE html>
<html lang="en">

<head>
 <title><?php include('header_title.php'); echo $header_tit; ?> - Welcome <?php echo htmlentities(htmlentities($_SESSION['fullname2p'], ENT_QUOTES, "UTF-8")); ?> </title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="landing page, website design" />

  <link rel="stylesheet" href="bootstrap.min.css">
    <script src="jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>
<script src="moment.js"></script>
	<script src="livestamp.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">







<style>
.imagelogo_li_remove {
list-style-type: none;
margin: 0;
 padding: 0;
}

.imagelogo_data{
 width:120px;
 height:80px;
}
  .navbar {
    letter-spacing: 1px;
    font-size: 14px;
    border-radius: 0;
    margin-bottom: 0;
   background-color:#008080;

    z-index: 9999;
    border: 0;
    font-family: comic sans ms;
//color:white;
  }


.navbar-toggle {
background-color:orange;
  }

.navgate {
padding:16px;color:white;

}

.navgate:hover{
 color: black;
 background-color: orange;

}


.navbar-header{
height:60px;
}

.navbar-header-collapse-color {
background:white;
}

.dropdown_bgcolor{

background: #008080;
color:white;
}

.dropdown_dashedline{
 border-bottom: 2px dotted white;
}

.navgate101:hover{
background:purple;
color:white;

}



.invite_btn{
background-color: purple;
padding: 6px;
color:white;
font-size:14px;
//border-radius: 50%;
border: none;
cursor: pointer;
text-align: center;
}
.invite_btn:hover {
background: black;
color:white;
}


.course_btn{
background-color: red;
padding: 6px;
color:white;
font-size:14px;
//border-radius: 50%;
border: none;
cursor: pointer;
text-align: center;
}
.course_btn:hover {
background: black;
color:white;
}


.creator_imagelogo_data{
 width:60px;
 height:60px;
}

/* make modal appear at center of the page */
.modal-appear-center {
margin-top: 25%;
//width:40%;
}


/* make modal appear at center of the page */
.modal-appear-center1 {
margin-top: 15%;
//width:40%;
}


.modal_head_color{
background-color: #008080;
padding: 6px;
color:white;
}


.modal_footer_color{
background-color: #008080;
padding: 6px;
color:white;
}


/* footer */


  .navbar_footer {
letter-spacing: 1px;
    font-size: 14px;
    border-radius: 0;
    margin-bottom: 0;
    //background-color:#008080;
    color:white;
    padding:20px;
    border: 0;
    font-family: comic sans ms;
  }


.footer_bgcolor{
background: black;
}

.footer_text1{
color:white;
font-size:20px;
border:none;
cursor:pointer;
}

.footer_text2{
color:grey;
font-size:14px;
border:none;
cursor:pointer;
}

.footer_text1:hover{
color:grey;
}


.footer_text2:hover{
color:orange;
}


.footer_dashedline{
 border-top: 1px dashed white;
}








.e_search_form{
width: 38vw;
height:60px;
padding:10px;
cursor:pointer;
border:none;
border-radius:15%;
color:black;
font-size:16px;
background:white;

//transform: skew(-22deg);
margin-left:-90px;

}

.e_search_form:hover{

border-style: solid; border-width:4px; border-color: #824c4e;
background: #dddddd;
color: black;
}



@media screen and (max-width: 768px) {
  .e_search_form{

  width: 100%;
  padding: 20px;
margin-left:0px;
  }
}



@media screen and (max-width: 600px) {
  .e_search_form{
  width: 100%;
  padding: 20px 
margin-left:0px; 
  }
}





.readmore_btn{
background-color: #008080;
padding: 6px;
color:white;
font-size:14px;
border-radius: 10%;
border: none;
cursor: pointer;
text-align: center;
//width:100%;
z-index: -999;
}
.readmore_btn:hover {
background: black;
color:white;
}	


.category_post1x{
background-color: purple;
padding: 6px;
color:white;
font-size:14px;
border-radius: 15%;
border: none;
cursor: pointer;
text-align: center;
z-index: -999;
}
.category_post1:hover {
background: black;
color:white;
}



.category_post1xx{
background-color: #3b5998;
padding: 6px;
color:white;
font-size:14px;
border-radius: 15%;
border: none;
cursor: pointer;
text-align: center;
z-index: -999;
}
.category_post1:hover {
background: black;
color:white;
}


</style>





    </head>
    <body>

 
</head>
<body>




<?php

$token = '1';
$usern  = '1';

?>



<script>

// stopt all bootstrap drop down menu from closing on click inside
$(document).on('click', '.dropdown-menu', function (e) {
  e.stopPropagation();
});


</script>


<!--start left column all-->

    <div class="left-column-all left_shifting">

<!-- start column nav-->


<div class="text-center">
<nav class="navbar navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navgator">
        <span class="navbar-header-collapse-color icon-bar"></span>
        <span class="navbar-header-collapse-color icon-bar"></span>
        <span class="navbar-header-collapse-color icon-bar"></span> 
        <span class="navbar-header-collapse-color icon-bar"></span>                       
      </button>
     
<li class="navbar-brand home_click imagelogo_li_remove" ><img class="img-rounded imagelogo_data" src="logo1.png"></li>
    </div>
    <div class="collapse navbar-collapse" id="navgator">


      <ul class="nav navbar-nav navbar-right">



<!--start post comments notification-->

<style>

.notify_count { color: #FFF; display: block; float: right; border-radius: 12px; border: 1px solid #2E8E12; background: green; padding: 2px 6px;font-size:14px; }
.notify_count1 { color:#FFF; display: block; float: right; border-radius: 12px; border: 1px solid #2E8E12; background: purple; padding: 2px 6px;font-size:14px; }

</style>




<script>

$(document).ready(function(){

var userid_sess_data = '<?php echo $userid_sess; ?>';
$("#loader-notify_alert_posts").fadeIn(400).html('<br><div style="color:black;background:white;padding:10px;"><i class="fa fa-spinner fa-spin" style="font-size:20px"></i></div>');
var datasend = {userid_sess_data:userid_sess_data};

//alert(userid_sess_data);
	
		$.ajax({
			
			type:'POST',
			url:'notify_alert.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){

//alert(msg);

$("#loader-notify_alert_posts").hide();
$("#result-notify_alert_posts").html(msg);
//setTimeout(function(){ $('#result-notify_alert_posts').html(''); }, 5000);	


			
	
}
			
		});
		
		

});


</script>


<li>
<span style='color:white;' class="dropdown fa fa-bell">
  <a style="color:white;font-size:14px;cursor:pointer;" title='Posts, Comments and Like Alerts' class="btn1 btn-default1 dropdown-toggle"  data-toggle="dropdown">
  <span class="notify_count"><span id="loader-notify_alert_posts"></span><span id="result-notify_alert_posts"></span></span>
</a>

<ul class="dropdown-menu" style='width:350px;height: 400px;overflow-y : scroll;'>
<h4 style='color:blue;'>Posts Shares and Comments Alerts</h4>
<button class="btn btn-primary" id="refresh_notify" title="Refresh Notification">Refresh Notification</button>
<br>


<script>

$(document).ready(function(){


var userid_sess_data = '<?php echo $userid_sess; ?>';
var username_sess_data = '<?php echo $userid_sess; ?>';

var sender_id=userid_sess_data;
var sender_username=username_sess_data;


if(sender_id ==''){
alert('something is wrong with Senders Id');
}


else{


$("#loader-load-notify-post").fadeIn(400).html('<br><div style="color:white;background:#ec5574;padding:10px;"><i class="fa fa-spinner fa-spin" style="font-size:20px"></i>&nbsp;Please Wait,Loading Your Notification Alerts...</div>');
var datasend = {sender_id:sender_id, sender_username:sender_username};


	
		$.ajax({
			
			type:'POST',
			url:'notification_load.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){

$("#loader-load-notify-post").hide();
$("#result-load-notify-post").html(msg);
//setTimeout(function(){ $('#result-load-notify-post(''); }, 5000);				

//location.reload();	
}
			
		});
		
		}


});










$(document).ready(function(){

  $('#refresh_notify').click(function () {
var userid_sess_data = '<?php echo $userid_sess; ?>';
var username_sess_data = '<?php echo $userid_sess; ?>';

var sender_id=userid_sess_data;
var sender_username=username_sess_data;


if(sender_id ==''){
alert('something is wrong with Senders Id');
}


else{


$("#loader-load-notify-post").fadeIn(400).html('<br><div style="color:white;background:#ec5574;padding:10px;"><i class="fa fa-spinner fa-spin" style="font-size:20px"></i>&nbsp;Please Wait,Loading Your Notification Alerts...</div>');
var datasend = {sender_id:sender_id, sender_username:sender_username};


	
		$.ajax({
			
			type:'POST',
			url:'notification_load.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){

$("#loader-load-notify-post").hide();
$("#result-load-notify-post").html(msg);
//setTimeout(function(){ $('#result-load-notify-post(''); }, 5000);				

//location.reload();	
}
			
		});
		
		}





// start notify 1


var userid_sess_data = '<?php echo $userid_sess; ?>';
$("#loader-notify_alert_posts").fadeIn(400).html('<br><div style="color:black;background:white;padding:10px;"><i class="fa fa-spinner fa-spin" style="font-size:20px"></i></div>');
var datasend = {userid_sess_data:userid_sess_data};

//alert(userid_sess_data);
	
		$.ajax({
			
			type:'POST',
			url:'notify_alert.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){

//alert(msg);

$("#loader-notify_alert_posts").hide();
$("#result-notify_alert_posts").html(msg);
//setTimeout(function(){ $('#result-notify_alert_posts').html(''); }, 5000);	


			
	
}
			
		});
		


// end notify 1


});


});


</script>



<!-- form START-->
<div id="loader-load-notify-post"></div>
<div id="result-load-notify-post"></div>


<!--form ENDS-->

<p></p>

</ul></span>
&nbsp;&nbsp;
</li>


<!--end post comments notifications-->




             
 <li class="navgate"><a title='Create New Post' href="create_post.php" style="color:white;font-size:14px;">Create New <?php echo $poster; ?></a></li>       
<li class="navgate"><a title='View Dashboard' href="dashboard.php" style="color:white;font-size:14px;">Dashboard</a></li>


<li class="navgate"><img style="max-height:60px;max-width:60px;" class="img-circle" width="60px" height="60px" src="uploads/<?php echo htmlentities(htmlentities($_SESSION['photo2p'], ENT_QUOTES, "UTF-8")); ?>" width="80px" height="80px">


<span class="dropdown">
  <a style="color:white;font-size:14px;cursor:pointer;" title='View More Data' class="btn1 btn-default1 dropdown-toggle"  data-toggle="dropdown"><?php echo htmlentities(htmlentities($_SESSION['fullname2p'], ENT_QUOTES, "UTF-8")); ?>
  <span class="caret"></span></a>

<ul class="dropdown-menu col-sm-12">
<li><a title='My Profile' href="profile_base.php">My Profile/Posts</a></li>
<li><a title='Logout' href="logout.php">Logout</a></li>

</ul></span>

</li>



      </ul>




    </div>
  </div>



</nav>


    </div><br /><br />

<!-- end column nav-->








<div class='row'>
<br><br><br>

<!--Start Left-->
<div class='col-sm-3'>

//



</div>

<!--End Left-->










<!--Start Right-->
<div class='col-sm-12'>



<!--create profile form START here-->

<?php

$request_userid=strip_tags($_GET['id']);

?>
<?php







// Get Users Records from vertex Users in Tigergraph Database

include('settings.php');


//$url ="$tg_url:9000/graph/$graph_db/vertices/$table_users";

$url =''.$tg_url.':9000/graph/'.$graph_db.'/vertices/'.$table_users.'?filter=uid="'."$request_userid".'" ';

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
//exit();
}



$json = json_decode($output, true);
$msg = $json["message"];
$vertex_id = $json["results"][0]["v_id"];
$email_x = $vertex_id;

if($msg !=''){
echo "<div style='background:red;color:white;padding:8px;border:none;'>Error Message: ($msg)</div>";
exit();
}


if($vertex_id ==''){
echo "<div style='background:red;color:white;padding:8px;border:none;'>No Records posted to  Tigergraph Database Yet..</div>";
exit();
}





foreach($json["results"] as $row){

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




?>
<?php
if($request_userid == $userid_x){

?>

<div  class='col-sm-12' style='border-style: dashed; border-width:2px; border-color: orange;color:black;padding:10px;background:#eeeeee'>

<h3><center>Users Profiles/Posts</center></h3>
<div class='col-sm-6'>
<img style='max-height:200px;max-width:200px;' class='img-rounded' width='200px' height='200px' src='uploads/<?php echo htmlentities(htmlentities($photo, ENT_QUOTES, "UTF-8")); ?>'>
<br>
</div>
<div class='col-sm-6'>
<b> Name:</b> <?php echo htmlentities(htmlentities($fullname, ENT_QUOTES, "UTF-8")); ?>
<br>
<b style='font-size:20px;color:#800000'> This User has: <?php echo $posts; ?> Posts</b><br>
<b style='font-size:16px;display:none;'> Member Since:</b> <span data-livestamp="<?php echo $timer;?>"></span> 
<br>
<div style='background:green;color:white;padding:10px;border-radius:20%;font-size:16px;'><i  style='font-size:20px;' class='fa fa-check'></i> User Verified</div>
</div>

</div>

  <?php

                }
            ?>






            <?php

                }
            ?>


<div  class='col-sm-12' style='width:100%;'><br><br></div>






<!--create profile form ENDS-->




<!-- Main Post Database query starts here -->









<style>
.point_count { color: #fff; display: block; float: right; border-radius: 12px; border: 1px solid #2E8E12; background: #ec5574; padding: 2px 6px;font-size:20px; }
.point_count1 { color:#FFF; display: block; float: right; border-radius: 12px; border: 1px solid #2E8E12; background: purple; padding: 2px 6px;font-size:20px; }


</style>


        <div class="content">

            <?php



$id_url = strip_tags($_GET['id']);



// Get Posts Records from vertex Posts in Tigergraph Database

//include('settings.php');


//$url ="$tg_url:9000/graph/$graph_db/vertices/$table_posts?sort=-timer";


$url =''.$tg_url.':9000/graph/'.$graph_db.'/vertices/'.$table_posts.'?sort=-timer&filter=userid="'."$request_userid".'" ';


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
//exit();
}



$json = json_decode($output, true);
$msg = $json["message"];
$vertex_id = $json["results"][0]["v_id"];
$email_x = $vertex_id;

if($msg !=''){
echo "<div style='background:red;color:white;padding:8px;border:none;'>Error Message: ($msg)</div>";
exit();
}


if($vertex_id ==''){
echo "<div style='background:red;color:white;padding:8px;border:none;'>No Records posted to  Tigergraph Database Yet..</div>";
exit();
}


function getdistance($pickup_address_latitude, $pickup_address_longitude, $destination_address_latitude, $destination_address_longitude, $unit) {
  if (($pickup_address_latitude == $destination_address_latitude) && ($pickup_address_longitude == $destination_address_longitude)) {
    return 0;
  }
  else {
    $theta = $pickup_address_longitude - $destination_address_longitude;
    $distance = sin(deg2rad($pickup_address_latitude)) * sin(deg2rad($destination_address_latitude)) +  cos(deg2rad($pickup_address_latitude)) * cos(deg2rad($destination_address_latitude)) * cos(deg2rad($theta));
    $distance = acos($distance);
    $distance = rad2deg($distance);
    $miles = $distance * 60 * 1.1515;
    $unit = strtoupper($unit);

    if ($unit == "K") {
      return ($miles * 1.609344);
    } else if ($unit == "N") {
      return ($miles * 0.8684);
    } else {
      return $miles;
    }
  }
}




foreach($json["results"] as $row){

$vertex_id = $row["v_id"];
$vertex_type = $row["v_type"];
$id = $vertex_id;

$title = $row["attributes"]["title"];
$title_seo = $row["attributes"]["title_seo"];
$content = htmlentities(htmlentities($row["attributes"]["content"], ENT_QUOTES, "UTF-8"));

$username = htmlentities(htmlentities($row["attributes"]["userid"], ENT_QUOTES, "UTF-8"));
$fullname = htmlentities(htmlentities($row["attributes"]["fullname"], ENT_QUOTES, "UTF-8"));
$userphoto = htmlentities(htmlentities($row["attributes"]["userphoto"], ENT_QUOTES, "UTF-8"));
$timer1 = htmlentities(htmlentities($row["attributes"]["timer"], ENT_QUOTES, "UTF-8"));
$total_comment = htmlentities(htmlentities($row["attributes"]["total_comments"], ENT_QUOTES, "UTF-8"));
$data_type = htmlentities(htmlentities($row["attributes"]["data_type"], ENT_QUOTES, "UTF-8"));


$photo = htmlentities(htmlentities($row["attributes"]["photo"], ENT_QUOTES, "UTF-8"));
$price_amount=htmlentities(htmlentities($row["attributes"]["price_amount"], ENT_QUOTES, "UTF-8"));


$post_userid = htmlentities(htmlentities($row["attributes"]["userid"], ENT_QUOTES, "UTF-8")); 

$depature_time = htmlentities(htmlentities($row["attributes"]["depature_time"], ENT_QUOTES, "UTF-8")); 
$arrival_time = htmlentities(htmlentities($row["attributes"]["arrival_time"], ENT_QUOTES, "UTF-8"));
$pickup_address = htmlentities(htmlentities($row["attributes"]["pickup_address"], ENT_QUOTES, "UTF-8")); 
$destination_address = htmlentities(htmlentities($row["attributes"]["destination_address"], ENT_QUOTES, "UTF-8")); 
$pickup_address_latitude = htmlentities(htmlentities($row["attributes"]["pickup_address_latitude"], ENT_QUOTES, "UTF-8")); 
$pickup_address_longitude = htmlentities(htmlentities($row["attributes"]["pickup_address_longitude"], ENT_QUOTES, "UTF-8")); 
$destination_address_latitude = htmlentities(htmlentities($row["attributes"]["destination_address_latitude"], ENT_QUOTES, "UTF-8")); 
$destination_address_longitude = htmlentities(htmlentities($row["attributes"]["destination_address_longitude"], ENT_QUOTES, "UTF-8")); 
$total_seat_capacity = htmlentities(htmlentities($row["attributes"]["total_seat_capacity"], ENT_QUOTES, "UTF-8")); 
$total_seat_available = htmlentities(htmlentities($row["attributes"]["total_seat_available"], ENT_QUOTES, "UTF-8"));  
$vehicle_plate_no = htmlentities(htmlentities($row["attributes"]["vehicle_plate_no"], ENT_QUOTES, "UTF-8")); 
$vehicle_type = htmlentities(htmlentities($row["attributes"]["vehicle_type"], ENT_QUOTES, "UTF-8"));  
$total_booking = htmlentities(htmlentities($row["attributes"]["total_booking"], ENT_QUOTES, "UTF-8"));

if($price_amount !=''){
$amt = $price_amount;
$pc= 'Fare';
}





// round off data to 3 decimal places

$miles_x =  round(getdistance($pickup_address_latitude, $pickup_address_longitude, $destination_address_latitude, $destination_address_longitude, "M"),3);
$kilometer_x= round(getdistance($pickup_address_latitude, $pickup_address_longitude, $destination_address_latitude, $destination_address_longitude, "K"),3);
$nautical_miles_x= round(getdistance($pickup_address_latitude, $pickup_address_longitude, $destination_address_latitude, $destination_address_longitude, "N"),3);




            ?>

<?php
if($id_url == $username){

?>
                    <div class="post well">


<button class='readmore_btn'><a title='Click to access users Profile page' style='color:white;' href='profile.php?id=<?php echo $username; ?>'><span style='font-size:20px;color:white;' class='fa fa-user'></span> View Users Profile</a></button><br>

<h3>Vehicle Type: <?php echo $vehicle_type; ?>  </h3><br>

<div style=' color: #fff; display: block; max-width:150px;  border-radius: 48px; border: 1px solid #2E8E12; background: #008080; padding: 8px 24px;font-size:40px;float:right;'>
<b><?php echo $pc; ?></b> <span style='font-size:18px;'><?php echo $price_amount; ?> (USD)</span></div>




<img class='' style='border-style: solid; border-width:3px; border-color:#800000; width:80px;height:80px; 
max-width:80px;max-height:80px;border-radius: 50%;' src='uploads/<?php echo $userphoto; ?>'><br>
<b style='color:#800000;font-size:18px;' >Name: <?php echo $fullname; ?> </b><br>


<b class='title_css'> Title: <?php echo $title; ?></b><br>
<?php
if($data_type  == 'photo'){
?>
<img class='responsive_video' width='400' height='200' src='uploads/<?php echo $photo; ?>'>
<br><br>
<?php } ?>



<b class='title_css'>Vehicle Plates Number: <?php echo $vehicle_plate_no; ?></b><br>

<b >Descriptions:</b> <?php echo $content; ?> ....<br>
<b >Arrival Time:</b>  <?php echo $arrival_time; ?><br>
<b >Depature Time:</b>  <?php echo $depature_time; ?><br>

<b >Pickup/Startup Address:</b>  <?php echo $pickup_address; ?><br>
<b >Destination Address:</b>  <?php echo $destination_address; ?><br>

<b >Total Seat Capacity:</b>  <?php echo $total_seat_capacity; ?><br>
<b >Total Seat Available:</b>  <?php echo $total_seat_available; ?><br><br>


<b class='title_css'>Travel Distance from : (<?php echo $pickup_address; ?>) to (<?php echo $destination_address; ?>) </b><br>
<b >Miles:</b>  <?php echo $miles_x; ?> Miles<br>
<b >Kilo-meter:</b>  <?php echo $kilometer_x; ?> KM<br>
<b >Nautical Miles:</b>  <?php echo $nautical_miles_x; ?> Miles<br>

<?php
if($data_type  == 'address'){
?>
<b >Pickup Address Latitude:</b> <?php echo $pickup_address_latitude; ?><br>
<b >Pickup Address Longitude:</b> <?php echo $pickup_address_longitude; ?><br>
<b >Destination Address Latitude:</b> <?php echo $destination_address_latitude; ?><br>
<b >Destination Address Longitude:</b> <?php echo $destination_address_longitude; ?><br>

<?php } ?>
      
<span style='color:#800000;'><b> Time: </b> <span data-livestamp="<?php echo $timer1;?>"></span></span> <?php echo $timer1;?><br>


<span style="font-size:26px;color:#800000;" class="fa fa-comments"></span> 
&nbsp;<span id="<?php echo $postid; ?>"  style="color:#800000;cursor:pointer;" title="Comments" />Comments</span>
(<span><?php echo $total_comment; ?></span>)






&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<span style="font-size:26px;color:#800000;" class="fa fa-book"></span> 
&nbsp;<span id="<?php echo $postid; ?>"  style="color:#800000;cursor:pointer;" title="Book This Ride"   /><a style='color:fuchsia' href='ride_bookings.php?title=<?php echo $title_seo; ?>'><b>Book This Ride</b></a></span>
(<span><?php echo $total_booking; ?></span> <span style='color:#800000;'>Persons Booked the Ride</span>)



<br><br>

<button class='readmore_btn btn btn-warning'><a title='Click to Read More' style='color:white;' 
href='reply.php?title=<?php echo $title_seo; ?>'><span style="font-size:26px;color:white;" class="fa fa-comments"></span>  Read More & Reply/Comments</a></button>


&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<button title="	Traveling Directional Map Locations" data-toggle="modal" data-target="#myModal_map" class="category_post1x btn_action_map" 

data-lat1="<?php echo $pickup_address_latitude; ?>" data-lng1="<?php echo $pickup_address_longitude; ?>"

data-lat2="<?php echo $destination_address_latitude; ?>" data-lng2="<?php echo $destination_address_longitude; ?>"


data-pickup_address="<?php echo $pickup_address; ?>" data-destination_address="<?php echo $destination_address; ?>"

 data-id="<?php echo $id; ?>"  data-title="<?php echo $title; ?>" data-identity="<?php echo $timer1; ?>">


<span style="font-size:26px;color:white;" class="fa fa-map-marker" aria-hidden="true"></span>Travelings Directional Mapping..</button>



                 
                 
</div>


            <?php

                }
            ?>






            <?php

                }
            ?>



<!-- Main Post Database query ends here-->

</div>








</div>
<!--End Right-->

</div>
<!--Row-->








<style>

.title_css{
//background: green;
color:green;
cursor:pointer;
font-size:24px;

}


.title_css:hover{
//background: purple;
color:purple;

}



.seeking_css{
background: #800000;
color:white;
padding:6px;
cursor:pointer;
border:none;
border-radius:10%;
font-size:16px;
}

.seeking_css:hover{
background: black;
color:white;

}



.offering_css{
background: green;
color:white;
padding:10px;
cursor:pointer;
border:none;
border-radius:25%;
font-size:16px;
}

.offering_css:hover{
background: black;
color:white;

}



.cat_css{
background: #ec5574;
color:white;
padding:10px;
cursor:pointer;
border:none;
border-radius:25%;
font-size:16px;
}

.cat_css:hover{
background: black;
color:white;

}



</style>



<!--form START-->











<!-- footer Section start -->

<footer class=" navbar_footer text-center footer_bgcolor">

<div class="row">
        <div class="col-sm-12">

<p class="footer_text1"><?php echo $header_tit; ?></p>
<p class="footer_text2"><?php include('footer_title.php'); echo $footer_tit1; ?></p>
<br>

        </div>



        </div>

<br/>
  <p></p>
</footer>

<!-- footer Section ends -->







<!-- map  modal starts here -->

<!-- map  modal starts here -->


<div class="container_map">

  <div class="modal fade" id="myModal_map" role="dialog">
    <div class="modal-dialog modal-lg modal-appear-center pull-right1_no modaling_sizing1  full-screen-modal_no">
      <div class="modal-content">
        <div class="modal-header" style="color:black;background:#c1c1c1">
 <button type="button" class="pull-right btn btn-default" data-dismiss="modal">Close</button>
      <h4 class="modal-title">Traveling Directional Map Locations</h4>
        </div>
        <div class="modal-body">





      <h3>Traveling from (<span id='pickup_addressx'></span>) to (<span id='destination_addressx'></span>)</h3>

<!-- start map loading-->
<style>

 html, body {
          height: 100%;
          margin: 0;
          padding: 0;
      }


      #map-canvas {
          height: 100%;
          width: 100%;
      }


.res_center_css{
position:absolute;top:50%;left:50%;margin-top: -50px;margin-left -50px;width:100px;height:100px;
}

</style>

<div id="loader" class='res_center_css'></div>

    <div style='width:800px; height:600px;' id="map-canvas"></div>

   


<script>


function initMap() {

$('.btn_action_map').click(function(){
//$(document).on( 'click', '.btn_action_map', function(){ 

var postid = $(this).data('id');
var lat1 = $(this).data('lat1');
var lng1 = $(this).data('lng1');

var lat2 = $(this).data('lat2');
var lng2 = $(this).data('lng2');

var pickup_address = $(this).data('pickup_address');
var destination_address = $(this).data('destination_address');


$('#pickup_addressx').html(pickup_address);
$('#destination_addressx').html(destination_address);

//alert(postid);
//alert(pickup_address);
//alert(destination_address);


    var pointA = new google.maps.LatLng(lat1, lng1),
        pointB = new google.maps.LatLng(lat2, lng2),
        myOptions = {
            zoom: 7,
            center: pointA
        },
        map = new google.maps.Map(document.getElementById('map-canvas'), myOptions),
        // Instantiate a directions service.
        directionsService = new google.maps.DirectionsService,
        directionsDisplay = new google.maps.DirectionsRenderer({
            map: map
        }),
        markerA = new google.maps.Marker({
            position: pointA,
            title: "point A",
            label: "A",
            map: map
        }),
        markerB = new google.maps.Marker({
            position: pointB,
            title: "point B",
            label: "B",
            map: map
        });

    // get route from A to B
    calculateAndDisplayRoute(directionsService, directionsDisplay, pointA, pointB);

 });  // close jquery clickbutton

}



function calculateAndDisplayRoute(directionsService, directionsDisplay, pointA, pointB) {
    directionsService.route({
        origin: pointA,
        destination: pointB,
        avoidTolls: true,
        avoidHighways: false,
        travelMode: google.maps.TravelMode.DRIVING
    }, function (response, status) {
        if (status == google.maps.DirectionsStatus.OK) {
            directionsDisplay.setDirections(response);
        } else {
            window.alert('Directions request failed due to ' + status);
        }
    });
}

//initMap();

 $('#myModal_map').on('shown.bs.modal', function(){
    //init();
initMap();

    });


</script>
  


<!-- end map loading-->





        </div>
        <div class="modal-footer" style="color:black;background:#c1c1c1">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>



<!-- map modal ends here -->


    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=<?php echo $google_map_keys; ?>&callback=initMap">
    </script>




   
</body>
</html>




















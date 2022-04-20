<?php
error_reporting(0); 

header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: GET, POST');
header("Access-Control-Allow-Headers: GSQL-TIMEOUT, Content-Type, Access-Control-Allow-Headers, Authorization, X-Requested-With");
//add header GSQL-TIMEOUT
?>



<?php
session_start();
include ('authenticate.php');


$userid_sess =  htmlentities(htmlentities($_SESSION['uid2p'], ENT_QUOTES, "UTF-8"));
$fullname_sess =  htmlentities(htmlentities($_SESSION['fullname2p'], ENT_QUOTES, "UTF-8"));
$username_sess =   htmlentities(htmlentities($_SESSION['username2p'], ENT_QUOTES, "UTF-8"));
$photo_sess =  htmlentities(htmlentities($_SESSION['photo2p'], ENT_QUOTES, "UTF-8"));

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
background-color: #008080;
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
    //background-color:fuchsia;
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






.category_post1{
background-color: #008080;
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





 <li class="navgate_no"><a title='Create New Post' data-toggle='modal' data-target='#myModal_emp' style="color:white;font-size:14px;">
<button class="category_post1">Create New Post</button></a></li>



             
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



<center><h3>Welcome to Application Dashboard 
<b style='color:purple'> (<?php echo htmlentities(htmlentities($_SESSION['fullname2p'], ENT_QUOTES, "UTF-8")); ?>)</b></h3></center><br>


<!--Start Left-->
<div class='col-sm-3'>

<h2>Multi-modal Transportation Types</h2>





<li class='seeking_css'><a style='color:white;' href="dashboard_requset.php?data_type=Train">Train</a></li>
<li class='seeking_css'><a style='color:white;' href="dashboard_requset.php?data_type=Bus">Bus</a></li>
<li class='seeking_css'><a style='color:white;' href="dashboard_requset.php?data_type=Taxi">Taxi</a></li>
<li class='seeking_css'><a style='color:white;' href="dashboard_requset.php?data_type=Carpooling">Carpooling</a></li>
<li class='seeking_css'><a style='color:white;' href="dashboard_requset.php?data_type=Others">Others</a></li>



</div>

<!--End Left-->










<!--Start Right-->
<div class='col-sm-9'>






<!-- Main Post Database query starts here -->









<style>
.point_count { color: #fff; display: block; float: right; border-radius: 12px; border: 1px solid #2E8E12; background: #ec5574; padding: 2px 6px;font-size:20px; }
.point_count1 { color:#FFF; display: block; float: right; border-radius: 12px; border: 1px solid #2E8E12; background: purple; padding: 2px 6px;font-size:20px; }

.title_css{
//background:#800000;
color:purple;
font-size:16px;


}

.title_css:hover{
color:grey;
font-size:16px;


}


</style>

<script>
        
  

</script>


        <div class="content">

            <?php



//error_reporting(0);

/*
ini_set('max_execution_time', 300); //300 seconds = 5 minutes
// temporarly extend time limit
set_time_limit(300);
*/


//Tigergraph Params
/*
PARAMS
select=
attr1,attr2 | -attr1,-attr2 | -_
select=attr1,attr2 returns only attributes attr1 and attr2 select=-attr1,-attr2 returns all attributes except attributes attr1 andattr2 select=-_ returns no attribute at all

filter=  attr=x | attr!=x | attr>x | attr>= x | attr<x | attr>=x
limit= x
sort= attr1 | -attr1 | attr1, -attr2
*/





//https://docs-legacy.tigergraph.com/v/2.6/dev/restpp-api/built-in-endpoints
// sort records in descending order based on attributes timers
//$urlx ="$tg_url:9000/graph/$graph_db/vertices/$table_notification?'filter=reciever_id=1647435389'";
//?filter=reciever_id='1647435389'


//echo $urlx ='https://stansystem.i.tgcloud.io:9000/graph/mygraph_db/vertices/notification?filter=reciever_id="93017277b3b91f3eb15cbd436493657d1647435195"';
//echo $urlx ='https://stansystem.i.tgcloud.io:9000/graph/mygraph_db/vertices/notification?count_only=true&filter=reciever_id="93017277b3b91f3eb15cbd436493657d1647435195"';
//"http://localhost:9000/graph/{graph_name}/vertices/User?filter=age>=30"

//echo $urlx =''.$tg_url.':9000/graph/'.$graph_db.'/vertices/'.$table_notification.'?count_only=true&filter=reciever_id="93017277b3b91f3eb15cbd436493657d1647435195"';





// Get Posts Records from vertex Posts in Tigergraph Database

include('settings.php');

//$url ='https://stansystem.i.tgcloud.io:9000/graph/mygraph_db/vertices/Person?limit=1';

//$url ="$tg_url:9000/graph/$graph_db/vertices/$table_posts?limit=2";

//$url ="$tg_url:9000/graph/$graph_db/vertices/$table_posts?count_only=true";


// filter records where data_type = post
//$url ="$tg_url:9000/graph/$graph_db/vertices/$table_posts?'filter=data_type=post'";


// sort records in ascending order based on attributes timers
//$url ="$tg_url:9000/graph/$graph_db/vertices/$table_posts?sort=timer";

// sort in descending order by adding hyphen - infront of the attributes or column name
//$url ="$tg_url:9000/graph/$graph_db/vertices/$table_posts?sort=-timer";



// sort records in ascending order based on attributes timers
//$url ="$tg_url:9000/graph/$graph_db/vertices/$table_posts?sort=timer&limit=2";

// sort records in descending order based on attributes timers


$ps ='photo';
$url =''.$tg_url.':9000/graph/'.$graph_db.'/vertices/'.$table_posts.'?sort=-timer&filter=data_type="'."$ps".'" ';



//$url ="$tg_url:9000/graph/$graph_db/vertices/$table_posts?sort=-timer&'filter=data_type=post'";

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
//exit();
}



$json = json_decode($output, true);
$msg = $json["message"];
$vertex_id = $json["results"][0]["v_id"];
$email_x = $vertex_id;

if($msg !=''){
echo "<div style='background:red;color:white;padding:8px;border:none;'>Error Message: ($msg)</div>";
//exit();
}


if($vertex_id ==''){
echo "<div style='background:red;color:white;padding:8px;border:none;'>No Records posted to  Tigergraph Database Yet..</div>";
//exit();
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

                    <div class="post well" id="post_<?php echo $id; ?>">




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
background: #008080;
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







 <!-- Modal two Starts -->

<div class="container">
 
  <div class="modal fade" id="myModal_emp" role="dialog">
   <div class="full-screen modal-dialog modal-lg modal-appear-center1 modal_mobile_resize modaling_sizing">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style='color:black; background:#ddd'>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Contents & Photos</h4>
        </div>
        <div class="modal-body">
 <!-- Modal content starts-->




<!--start form-->

<script>





function imagePreview(e) 
{
 var readImage = new FileReader();
 readImage.onload = function()
 {
  var displayImage = document.getElementById('imageupload_preview');
  displayImage.src = readImage.result;
 }
 readImage.readAsDataURL(e.target.files[0]);
}


            $(function () {
                $('#save_btn').click(function () {
                   
		
var title = $('#title').val();
var messaging = $("#messaging").val();
var file_fname = $('#file_content').val();
var price_amount = $('#price_amount').val();
var depature_time = $('#depature_time').val();
var arrival_time = $('#arrival_time').val();
var pickup_address = $('#pickup_address').val();
var destination_address = $('#destination_address').val();
var vehicle_type = $('#vehicle_type').val();
var total_seat_capacity = $('#total_seat_capacity').val();
var total_seat_available = $('#total_seat_available').val();






 if(title==""){
alert('Post Title cannot be Empty');
//return false;
}


else if(messaging==""){
alert('Post Description cannot be Empty');
//return false;
}


// start if validate
else if(file_fname==""){
alert('please Select File to Upload');
}



// start if validate
else if(vehicle_type==""){
alert('vehicle_type cannot be empty');
}




// start if validate
else if(depature_time==""){
alert('depature_time cannot be empty');
}





// start if validate
else if(arrival_time==""){
alert('arrival_time cannot be empty');
}



else if(pickup_address==""){
alert('Pickup Location Address cannot be Empty');
//return false;
}

else if(destination_address==""){
alert('Destination Location Address cannot be Empty');
//return false;
}

else if(price_amount==""){
alert('Transport Fare Price cannot be Empty');
//return false;
}

else if(isNaN(price_amount)){
  alert("Transport Fare Price must be a number");
}


else if(isNaN(total_seat_capacity)){
  alert("total_seat_capacity must be a number");
}

else if(isNaN(total_seat_available)){
  alert("total_seat_available must be a number");
}

else{

var fname=  $('#file_content').val();
var ext = fname.split('.').pop();
//alert(ext);

// add double quotes around the variables
var fileExtention_quotes = ext;
fileExtention_quotes = "'"+fileExtention_quotes+"'";

 var allowedtypes = ["PNG", "png", "gif", "GIF", "jpeg", "JPEG", "BMP", "bmp","JPG","jpg"];
    if(allowedtypes.indexOf(ext) !== -1){
//alert('Good this is a valid Image');
}else{
alert("Please Upload a Valid image. Only Images Files are allowed");
return false;
    }

          var form_data = new FormData();
          form_data.append('file_content', $('#file_content')[0].files[0]);
          form_data.append('file_fname', file_fname);
          form_data.append('title', title);
          form_data.append('messaging', messaging);
          form_data.append('emailaddress_pot', emailaddress_pot);
          form_data.append('price_amount', price_amount);

form_data.append('depature_time', depature_time);
form_data.append('arrival_time', arrival_time);
form_data.append('pickup_address', pickup_address);
form_data.append('destination_address', destination_address);
form_data.append('total_seat_capacity', total_seat_capacity);
form_data.append('total_seat_available', total_seat_available);
form_data.append('vehicle_type', vehicle_type);



                    $('.upload_progress').css('width', '0');
                    $('#btn').attr('disabled', 'disabled');
                    $('#loader').fadeIn(400).html('<br><span class="well" style="color:black"><img src="ajax-loader.gif">&nbsp;Please Wait, Your Data is being Submitted to your Tigegraph Cloud Database</span>');
                    $.ajax({
                        url: 'posts.php',
                        data: form_data,
                        processData: false,
                        contentType: false,
                        ache: false,
                        type: 'POST',
                        xhr: function () {
                      //var xhr = new window.XMLHttpRequest();
                            var xhr = $.ajaxSettings.xhr();
                            xhr.upload.addEventListener("progress", function (event) {
                                var upload_percent = 0;
                                var upload_position = event.loaded;
                                var upload_total  = event.total;

                                if (event.lengthComputable) {
                                    var upload_percent = upload_position / upload_total;
                                    upload_percent = parseInt(upload_percent * 100);
                                  //upload_percent = Math.ceil(upload_position / upload_total * 100);
                                    $('.upload_progress').css('width', upload_percent + '%');
                                    $('.upload_progress').text(upload_percent + '%');
                                }
                            }, false);
                            return xhr;
                        },
                        success: function (msg) {
                                $('#box').val('');
				$('#loader').hide();
				$('.result_data').fadeIn('slow').prepend(msg);
				$('#alertdata_uploadfiles').delay(5000).fadeOut('slow');
                                $('#alerts_reg').delay(5000).fadeOut('slow');
                                $('#alertdata_uploadfiles2').delay(20000).fadeOut('slow');
                                $('#save_btn').removeAttr('disabled');


//strip all html elemnts using jquery
var html_stripped = jQuery(msg).text();
//alert(html_stripped);

//check occurrence of word (successfully) from backend output already html stripped.
var Frombackend = html_stripped;
var bcount = (Frombackend.match(/successfully/g) || []).length;
//alert(bcount);

if(bcount > 0){
$('#file_fname').val('');
$('#title').val('');
//$('#offering').val('');
$('#messaging').val('');
//$('#help_category').val('');
}




                        }
                    });
} // end if validate
                });
            });









</script>


<style>
.upload_progress{
padding:10px;
background:green;
color:white;
cursor:pointer;
min-width:30px;
}

#imageupload_preview
{
max-height:200px;
max-width:200px;
}
</style>



<br>
<div class="col-sm-12 form-group">
<label>Multimodal Transports Type</label>
<select class="form-control col-sm-12" id="vehicle_type" name="vehicle_type" required>
<option value="">-- Select Vehicle Type --</option>

<option value="Train">Train</option>
<option value="Bus">Bus</option>
<option value="Taxi">Taxi</option>
<option value="Carpooling">Carpooling</option>
<option value="Others">Others</option>


</select>
</div>



<div class="col-sm-12 form-group">
<label>Title</label>
<input  class="form-control contact_input_color" id="title" name="title" placeholder="Post Title" type="text" required>
</div>



<div class="col-sm-12 form-group">
<label>Description</label>
<textarea  class="form-control contact_input_color" id="messaging" name="messaging" placeholder="Post Description"  required></textarea>
</div>
<style>
.secured_pot{ display:none; } /* hide because is spam protection */
</style>
<input class="secured_pot" type="text" name="emailaddress_pot" id="emailaddress_pot" />


<div class="col-sm-12 form-group">
<label>Select  Photo of the Vehicle: </label>
<input style="background:#c1c1c1;" class="col-sm-12 form-control" type="file" id="file_content" name="file_content" accept="image/*" onchange="imagePreview(event)" />
 <img id="imageupload_preview"/>
</div>


<div class="col-sm-12 form-group">
<label>Transport Fare Eg: <span style='color:green;'>(USD)</span></label><br>
<input type="text" class="price_amount form-control" name="price_amount" id="price_amount" placeholder="Transport Fare in USD"/>
</div>



<div class='col-sm-12'>
<div class="col-sm-6 form-group">
<label>Depature Time</label><br>
<input type="datetime-local" class="depature_time form-control" name="depature_time" id="depature_time" placeholder="Depature Time" value="2022-04-17T08:30"/>
</div>


<div class="col-sm-6 form-group">
<label>Arrival Time</label><br>
<input type="datetime-local" class="destination_address form-control" name="arrival_time" id="arrival_time" placeholder="Arrival Time" value="2022-04-17T09:15"/>
</div>
</div>





<div class='col-sm-12'>
<div class="col-sm-6 form-group">
<label>Start/Pickup Location Address Eg.( chicago, il )</label><br>
<input type="text" class="pickup_address form-control" name="pickup_address" id="pickup_address" placeholder="Full Pickup Location Address with City and Country Name"/>
</div>


<div class="col-sm-6 form-group">
<label>Destination Location Address Eg. ( san bernardino, ca )</label><br>
<input type="text" class="destination_address form-control" name="destination_address" id="destination_address" placeholder="Full Destination Location Address with City and Country Name"/>
</div>
</div>





<div class='col-sm-12'>
<div class="col-sm-6 form-group">
<label>Total Seat Capacity</label><br>
<input type="text" class="total_seat_capacity form-control" name="total_seat_capacity" id="total_seat_capacity" placeholder="Total Seat Capacity"/>
</div>


<div class="col-sm-6 form-group">
<label>Total Seat Available</label><br>
<input type="text" class="total_seat_available form-control" name="total_seat_available" id="total_seat_available" placeholder="Total Seat Available"/>
</div>
</div>


<br>



                    <div class="form-group col-sm-12">
                            <div class="upload_progress" style="width:0%">0%</div>
  </div>

                        <div id="loader"></div>
                        <div class="result_data"></div>
                  

<br>
<button type="button" id="save_btn" class="category_post1 float-right"   /> Submit Now</button>
</div>







<!--end form-->


 <!-- Modal content ends-->
          
        </div>
        <div class="modal-footer" style='color:black; background:#ddd'>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
 <!-- Modal two ends-->








 <!-- Modal one Starts -->




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




















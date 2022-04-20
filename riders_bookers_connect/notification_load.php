<?php 
ob_start();
error_reporting(0);


 ?>
<script>
$(document).ready(function(){

$('.notify_delete_post_btn').click(function(){
// confirm start
 if(confirm("Are you sure you want to Delete This Notification Alerts: ")){
var id = $(this).data('id');
var rid = $(this).data('rid');

//var userid_sess_data = localStorage.getItem('useridsessdata');

$(".loader-notify-delete-post_"+id).fadeIn(400).html('<br><div style="color:black;background:white;padding:10px;"><i class="fa fa-spinner fa-spin" style="font-size:20px"></i>&nbsp;Please Wait, Notification Alerts is being deleted...</div>');
var datasend = {'id': id, 'rid': rid};
		$.ajax({
			
			type:'POST',
			url:'notify_delete_post.php',
			data:datasend,
                        crossDomain: true,
			cache:false,
			success:function(msg){


	if(msg == 1){
alert('Notification Alerts Successfully Deleted');
$(".loader-notify-delete-post_"+id).hide();

$(".result-notify-delete-postx_"+id).animate({'backgroundColor':'#fb6c6c'},300).animate({ opacity: 0.35 }, "slow");
$(".result-notify-delete-postx_"+id).slideUp('slow', function() {$(this).remove();});
//parent.slideUp('slow', function() {$(this).remove();});

$(".result-notify-delete-post_"+id).html("<div style='color:white;background:green;padding:10px;'>Notification Alerts Successfully Deleted</div>");
setTimeout(function(){ $(".result-notify-delete-post_"+id).html(''); }, 5000);
//location.reload();
}


	if(msg == 0){

alert('Notification Alerts could not be deleted. Please ensure you are connected to Internet.');
$(".loader-notify-delete-post_"+id).hide();
$(".result-notify-delete-post_"+id).html("<div style='color:white;background:red;padding:10px;'>Notification Alerts could not be deleted. Please ensure you are connected to Internet.</div>");
setTimeout(function(){ $(".result-notify-delete-post_"+id).html(''); }, 5000);

}

}
			
});
}

// confirm ends

                });










            });






</script>





<style>



.post-css2{
background:#ec5574;
border:none;
color:white;
padding:6px;
border-radius:20%;
}

.post-css2:hover{
background:orange;
color:black;
}




.post-css1{
background:red;
border:none;
color:white;
padding:6px;
}

.post-css1:hover{
background:orange;
color:black;
}


.post-css{
background:navy;
border:none;
color:white;
padding:6px;
text-align:center;
}

.post-css:hover{
background:orange;
color:black;
}

.notify_content_css{
display:inline-block;border-style: dashed; border-width:2px; border-color: 
orange;color:black;background:#eeeeee;padding:10px;
}


.notify_content_css:hover{
color:black;background:#ec5574;
}
</style>




<?php

$sender_id=strip_tags($_POST['sender_id']);
$userid_sess_data = $sender_id;


// Get notification from vertex notification in Tigergraph Database

include('settings.php');

$url =''.$tg_url.':9000/graph/'.$graph_db.'/vertices/'.$table_notification.'?sort=-timing&filter=reciever_id="'."$userid_sess_data".'" ';



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

$rec_List1 = $json["results"][0]["attributes"]["post_id"];



if($rec_List1  == 0){

echo "<div style='background:red;color:white;padding:10px;border:none'>No New Posts or Comments Alerts Yet.</div>";
}



foreach($json["results"] as $row){

$vertex_id = $row["v_id"];
$vertex_type = $row["v_type"];
$id = $vertex_id;

$sender_photo = htmlentities(htmlentities($row["attributes"]["photo"], ENT_QUOTES, "UTF-8"));
$post_id = htmlentities(htmlentities($row["attributes"]["post_id"], ENT_QUOTES, "UTF-8"));
$sender_userid = htmlentities(htmlentities($row["attributes"]["userid"], ENT_QUOTES, "UTF-8"));
$sender_fullname1 = htmlentities(htmlentities($row["attributes"]["fullname"], ENT_QUOTES, "UTF-8"));
$rid = htmlentities(htmlentities($row["attributes"]["reciever_id"], ENT_QUOTES, "UTF-8"));
$status = htmlentities(htmlentities($row["attributes"]["status"], ENT_QUOTES, "UTF-8"));
$type = htmlentities(htmlentities($row["attributes"]["data_type"], ENT_QUOTES, "UTF-8"));
$timing = htmlentities(htmlentities($row["attributes"]["timing"], ENT_QUOTES, "UTF-8"));
$title = htmlentities(htmlentities($row["attributes"]["title"], ENT_QUOTES, "UTF-8"));
$title1 = htmlentities(htmlentities($row["attributes"]["title_seo"], ENT_QUOTES, "UTF-8"));

$microtitle = $title;
// replace empty space with hyphen
$sender_fullname = str_replace(' ', '-', $sender_fullname1);
$description = $title;


?>





<div class="col-sm-12 notify_content_css result-notify-delete-postx_<?php echo $id; ?>" >
<?php 
if($type == 'post'){
?>


<div  style="color:black;padding:10px;background:#ddd">

<img style='max-height:60px;max-width:60px;' class='img-circle' src='uploads/<?php echo $sender_photo; ?>' alt='User Image'>


<span style='font-size:20px;color:navy;' class="fa fa-edit"></span><b style='color:navy'>Post (<span style='color:#800000;font-size:24px;'><?php echo $status;?></span>) </b>


<?php 
if($status == 'unread'){
?>
<span style='font-size:20px;color:green;' class="fa fa-check"></span>
<?php } ?>


<?php 
if($status == 'read'){
?>
<span style='font-size:20px;color:#800000;' class="fa fa-check"></span><span style='font-size:20px;color:#800000;' class="fa fa-check"></span>
<?php } ?>

<br><b><?php echo $sender_fullname1; ?></b> Just Shared a Posts Status Updates<br>
<b>Title:</b> <?php echo $microtitle; ?><br>
<span style='color:#800000;'><b> Time: </b> <span data-livestamp="<?php echo $timing;?>"></span></span> 


<br>

<p>
 
<a href='reply1.php?title=<?php echo $title1; ?>&notifyId=<?php echo $id; ?>' class='pull-left col-sm-5 post-css' title='View Posts'>View Posts</a>
<button class='pull-right col-sm-6 post-css1 notify_delete_post_btn' data-id='<?php echo $id; ?>' data-rid='<?php echo $rid; ?>' title='Delete Alerts'>Delete Alerts</button>
   <div class="loader-notify-delete-post_<?php echo $id; ?>"></div>
   <div class="result-notify-delete-post_<?php echo $id; ?>"></div>
</p>
<br>
</div>
<?php
}
?>










<?php 
if($type == 'comment'){
?>


<div  style="color:black;padding:10px;background:#ddd">

<img style='max-height:60px;max-width:60px;' class='img-circle' src='uploads/<?php echo $sender_photo; ?>' alt='User Image'>


<span style='font-size:20px;color:navy;' class="fa fa-comments-o"></span><b style='color:navy'>Comment (<span style='color:#800000;font-size:24px;'><?php echo $status;?></span>)</b>
<?php 
if($status == 'read'){
?>
<span style='font-size:20px;color:green;' class="fa fa-check"></span><span style='font-size:20px;color:green;' class="fa fa-check"></span>
<?php } ?>
<?php 
if($status == 'unread'){
?>
<span style='font-size:20px;color:green;' class="fa fa-check"></span>
<?php } ?>


<br><b><?php echo $sender_fullname1; ?></b> Commented on your Posts<br>
<b>Title:</b> <?php echo $microtitle; ?><br>
<span style='color:#800000;'><b> Time: </b> <span data-livestamp="<?php echo $timing;?>"></span></span> 






<br>

<p>
<a href='reply1.php?title=<?php echo $title1; ?>&notifyId=<?php echo $id; ?>' class='pull-left col-sm-5 post-css' title='View Posts'>View Comments</a>
<button class='pull-right col-sm-6 post-css1 notify_delete_post_btn' data-id='<?php echo $id; ?>' data-rid='<?php echo $rid; ?>' title='Delete Alerts'>Delete Alerts</button>
   <div class="loader-notify-delete-post_<?php echo $id; ?>"></div>
   <div class="result-notify-delete-post_<?php echo $id; ?>"></div>
</p>
<br>
</div>
<?php
}
?>






<?php 
if($type == 'booking'){
?>


<div  style="color:black;padding:10px;background:#ddd">

<img style='max-height:60px;max-width:60px;' class='img-circle' src='uploads/<?php echo $sender_photo; ?>' alt='User Image'>


<span style='font-size:20px;color:navy;' class="fa fa-book"></span><b style='color:navy'>Bookings (<span style='color:#800000;font-size:24px;'><?php echo $status;?></span>)</b>
<?php 
if($status == 'read'){
?>
<span style='font-size:20px;color:green;' class="fa fa-check"></span><span style='font-size:20px;color:green;' class="fa fa-check"></span>
<?php } ?>
<?php 
if($status == 'unread'){
?>
<span style='font-size:20px;color:green;' class="fa fa-check"></span>
<?php } ?>


<br><b><?php echo $sender_fullname1; ?></b> Booked Your Vehicle<br>
<b>Title:</b> <?php echo $microtitle; ?><br>
<span style='color:#800000;'><b> Time: </b> <span data-livestamp="<?php echo $timing;?>"></span></span> 






<br>

<p>
<a href='ride_bookings1.php?title=<?php echo $title1; ?>&notifyId=<?php echo $id; ?>' class='pull-left col-sm-5 post-css' title='View Posts'>View Booking</a>
<button class='pull-right col-sm-6 post-css1 notify_delete_post_btn' data-id='<?php echo $id; ?>' data-rid='<?php echo $rid; ?>' title='Delete Alerts'>Delete Alerts</button>
   <div class="loader-notify-delete-post_<?php echo $id; ?>"></div>
   <div class="result-notify-delete-post_<?php echo $id; ?>"></div>
</p>
<br>
</div>
<?php
}
?>















</div>



<?php
}
?>

<?php
ob_flush();
?>



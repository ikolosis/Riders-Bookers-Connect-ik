<!DOCTYPE html>
<html lang="en">

<head>

 <title><?php include('header_title.php'); echo $header_tit; ?></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="" />
  <link rel="stylesheet" href="bootstrap.min.css">
    <script src="jquery.min.js"></script>
    <script src="bootstrap.min.js"></script>


<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>







.register_btn{

background: #008080;
color:white;
cursor: pointer;
padding:16px;
border-radius: 10%;

}
.register_btn:hover{
background: orange;
color:black;

}

/* navigation */


.left-column-all {
    overflow-x: hidden;
    position: fixed;
    z-index: 9999;
    width:50vw;
    height: 100vh;
    background: url(home1.png) center no-repeat #008080;
    background-size: cover;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -ms-background-size: cover;
    -o-background-size: cover;

/*
    margin-top: 0px;
    margin-left: 0px;
    */
}



@media screen and (max-width: 1440px) {
.left-column-all {
width:100vw;
width:100vh;

}

}
	
.right-column-all {
 margin-left:40vw;
/*
margin-left:47vw;
*/
}

@media screen and (max-width: 800px) {
.left-column-all {
    width: 100vw;
    position: inherit;
    background-position: inherit;
}

.right-column-all {
    margin-top: 0px;
margin-left: 0px;

}
}




/*ensure that category button does not jam about us or event section when on mobile start here. you can remove it if you
like. this will make product contain maximum of 8 categories button*/
@media screen and (max-width: 768px) {
.left-column-all {
   padding-bottom:700px;
}
}

@media screen and (max-width: 600px) {
.left-column-all {
   padding-bottom:700px;

}
}

/*ensure that category button does not jam about us or product section when on mobile ends here.*/




.section_padding {
padding: 60px 40px;
}

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





/* home starts */
  
.home_image {	
width:100%;
/*
height:500px;
max-height:500px;
*/
height:100vh;
max-height:100vh;
       
        
}

.home_content_head {
        color: white;
        font-size:40px;
        font-weight:bold;
	font-family:comic sans ms; 
width:40vw;
margin-left:-110px;
  
}

.home_content_text {
        color: white;
        font-size:20px;
        font-weight:bold;
	box-sizing: border-box;
      //position: relative;
        
}

.home{
background:#008080;
}

.home:hover{
box-shadow: inset 0 0 0 25px fuchsia;

}


.home_text_transparent_home {
border-style: solid; border-width:1px; border-color: orange;
  width: 100%;
  padding: 90px;
  position: absolute;
  bottom: 0px;
  background: rgba( 0, 0, 0, 0.50);

  color: white;
  height:100%;
text-align: center;

}



@media screen and (max-width: 768px) {
  .home_text_transparent_home{

  width: 100%;
  padding: 20px;
  }
}



@media screen and (max-width: 600px) {
  .home_content_home{
  width: 100%;
  padding: 20px  
  }
}










/* tee */

.te_head{
background:#008080;
color:white;
padding:10px;
border-radius:25%;

}

.te_head:hover{
background:orange;
color:black;

}


.te_img_bg {
        background: url(home1.png) center no-repeat #008080;
        background-size: cover;
	position: relative;
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-ms-background-size: cover;
        -o-background-size: cover;
//max-height:600px;
        
}


.te:hover{
box-shadow: inset 0 0 0 3px orange;

}

.hey_carosel_testimony{
width:60%;
}
.hey_carosel_testimony2{
width:40%;
padding-top:100px;
color:white;
font-size:40px;
font-weight:700;
background: rgba( 0, 0, 0, 0.50);


}

@media screen and (max-width: 700px) {
  .hey_carosel_testimony{
  width: 100%;
  padding: 20px  
  }
}

@media screen and (max-width: 600px) {
  .hey_carosel_testimony{
  width: 100%;
  padding: 20px; 
  }
}


@media screen and (max-width: 700px) {
  .hey_carosel_testimony2{
  width: 100%;
  padding: 20px; 
  }
}

@media screen and (max-width: 600px) {
  .hey_carosel_testimony2{
  width: 100%;
  padding: 20px  
  }
}







.carousel_button {
font-weight: bold;
font-family: comic sans ms;
border-radius: 50%;
height: 50px;
width: 50px;
border: none;
color: white;
padding-top: 70px;
font-size: 28px;
cursor: pointer;
text-align: center;
margin: auto;
margin-top:190px;

border-style: solid; border-width:3px; border-color: orange;

}

.carouselNextPrevious{
background-color: #008080;
} 
.carouselNextPrevious:hover {
background-color: #ec5574;
-moz-transform: scale(1.1);
-webkit-transform: scale(1.1);
transform: scale(1.5);
}





.img_inside_carousel_testimony{ 
width:200px;height:200px;
border-radius: 50%;
border-style: solid; border-width:5px; border-color: orange;
margin-top: 5%;
display: block;
  margin-left: auto;
  margin-right: auto;
}


.carousel_h3_inside {
font-size: 30px;
font-weight: bold;
color:white;
}
.carousel_text_inside {
color: white;
font-size: 16px;
cursor: pointer;
text-align: center;
margin: auto;
background:#ec5574;
//background: rgba(0, 0, 0, 0.58);
}








.marquee_button{
background-color: f#008080;
padding: 6px;
color:white;
font-size:14px;
//border-radius: 50%;
transform: skew(15deg);
border: none;
cursor: pointer;
text-align: center;



}
.marquee_button:hover {
background: black;
color:white;
}


.marquee_image{ 
width:60px;height:60px;
border-radius: 50%;
border-style: solid; border-width:2px; border-color: fuchsia;
}




.btn_copyright{
//background: orange;
color:orange;
//padding:2px;
font-weight:200;
}


.btn_copyright:hover {
background: black;
color:pink;
font-weight:700;
}



.contact_name_color{
color: #ff3800;
font-weight:200px;
}



.img_te_height_width{ 
width:300px;
height:300px;

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


.contact_info{
#008080;
color:white;
cursor: pointer;
padding:16px;
border-radius: 10%;

}
.contact_info:hover{
background: orange;
color:black;

}


.contact_info_dashedline{
  border-bottom: 5px dashed #008080;

}




.left_shifting{

width:40%;
}

@media screen and (max-width: 768px) {
.left-column-all {
width:100%;

}

.home_resize_padding {
padding-top:100px;
}


}



@media screen and (max-width: 600px) {
.left-column-all {
width:100%;

}

.home_resize_padding {
padding-top:100px;
}

}

.home_content_head {       
margin-left:0px; 
padding-top:10px;
width:100%;
text-align:center;
}


}

@media screen and (max-width: 600px) {
.modaling_sizing {
width:99%;
}

.home_content_head {       
margin-left:0px; 
padding-top:10px;
width:100%;
text-align:center; 
}



}

.category_post{
background-color: #008080;
padding: 16px;
color:white;
font-size:14px;
border-radius: 15%;
border: none;
cursor: pointer;
text-align: center;
width:100%;
z-index: -999;
}
.category_post:hover {
background: black;
color:white;
}	


</style>







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
                    //var username = $('#username').val();
                    var email = $('#email').val();
                   // var phone_no = $('#phone_no').val();
                    var password = $('#password').val();
                    var confirm_password =$('#confirm-password').val();
                    var fullname = $('#fullname').val();
                    var file_fname = $('#file_content').val();
                    //var country = $('#country').val();
                    var emailaddress_pot = $('#emailaddress_pot').val();

                    //preparing Email for validations
                    var atemail = email.indexOf("@");
                    var dotemail = email.lastIndexOf(".");



if(password != confirm_password){
alert('Password Does not Match');
return false;
}

// start if validate
if(file_fname==""){
alert('please Select File to Upload');
}

else if(email==""){
alert('please Enter Email Address');
}

else  if (atemail < 1 || ( dotemail - atemail < 2 )){
alert("Please enter valid email Address")
}

else if(password==""){
alert('please Enter Password');
}

else if(fullname==""){
alert('please Enter Your Fullname');
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
          form_data.append('email', email);
          form_data.append('fullname', fullname);
          form_data.append('password', password);
          form_data.append('emailaddress_pot', emailaddress_pot);
                    $('.upload_progress').css('width', '0');
                    $('#btn').attr('disabled', 'disabled');
                    $('#loader').fadeIn(400).html('<br><span class="well" style="color:black"><img src="ajax-loader.gif">&nbsp;Please Wait, Your Data is being Submitted to your Tigegraph Cloud Database</span>');
                    $.ajax({
                        url: 'signup_action.php',
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
$('#email').val('');
$('#fullname').val('');
$('#password').val('');
$('#confirm-password').val('');
}




                        }
                    });
} // end if validate
                });
            });



/*
// start checking for email availability
$(document).ready(function(){
    $('#email').keyup(function(){ 
       var email = $('#email').val();
 if(email.length < 2) {
// ensure that user must type something first at least 2 characters before fetching database records
return false;
}
       var token = 101201;
        var ShowResult1 = $('#email_check');
            ShowResult1.html('<font color=green>Checking Email Availability...</font> <img src="loader.gif" align="absmiddle"> '); // you can use loading animation here
           var datasend = "email="+ email + "&token=" + token;
            $.ajax({
            type : 'POST',
            data : datasend,
            url  : 'email_check.php',
            success: function(data){

                if(data == 0){
  ShowResult1.html('<br><span class="well alert alert-success"><font color=green>This Email Address <b>('+email+')</b> is Available</font></span>');
                }
                else if(data > 0){
  ShowResult1.html('<br><span class="well alert alert-warning"><font color=red>This Email Address <b>('+email+')</b> is Taken....</font></span>');
                }
                else{
  ShowResult1.html('<br><span class="well alert alert-warning"><font color=red>We have problem with your Query.</font></span>');
                }
            }

            });
    });
});

// end checking for email availability
*/
        </script>
    </head>
    <body>
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
 
</head>
<body>







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
     
<li class="navbar-brand home_click imagelogo_li_remove" ><img class="img-rounded imagelogo_data" src="logo.png"></li>
    </div>
    <div class="collapse navbar-collapse" id="navgator">


      <ul class="nav navbar-nav navbar-right">



        <li class="navgate"><a  href="index.php" style="color:white;font-size:20px;">Home</a></li>
       
        
      </ul>




    </div>
  </div>



</nav>


    </div><br /><br />

<!-- end column nav-->





<div class="home_text_transparent_home" >
<div class="home_resize_padding"> 


<p class="home_content_head pull-left"><?php include('header_title.php'); echo $header_tit; ?></p>


<marquee> <p class=""><button class="contact_click marquee_button"><img class="marquee_image" src="environment1.jpg" />
 <?php include('header_title.php'); echo $header_tit; ?></button> </p></marquee>

                        <p class="home_content_text">Accessibility</p>


<style>


.dropdown_color:hover{
background: black;
color:white;

}
</style>



<p>

<a  class="category_post" href="signup.php">Signup</a>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<a  class="category_post" href="login.php">Login</a>

</p>

<br>
</div> 
</div>


    </div>
<!--end left column all-->












<!--start right column all-->
    <div class="right-column-all">
<br><br>
<!-- Te Section -->
<div  class="te te_img_bg section_padding">

  <div class="row">

 <div class="col-sm-12">
      <h2 style="text-align:center;" class="te_head">Signup Form</h2><br>

<!--start form-->
<form id="" method="post">

<div class="form-group">
<label style="padding:6px;color:white;background:#008080;text-align:left;font-size:16px;">Select Profile Photo: </label>
<input style="background:#c1c1c1;" class="col-sm-12 form-control" type="file" id="file_content" name="file_content" accept="image/*" onchange="imagePreview(event)" />
 <img id="imageupload_preview"/>
</div>


 <div class="form-group">
              <label style="padding:6px;color:white;background:#008080;text-align:left;font-size:16px;" for="email">
<span class="fa fa-envelope-o"></span>Email</label>
              <input type="text" class="col-sm-12 form-control" id="email" name="email" placeholder="Enter email">
<div class="result1" id="email_check"></div>
            </div>


 <div class="form-group">
              <label style="padding:6px;color:white;background:#008080;text-align:left;font-size:16px;" for="psw">
<span class="fa fa-eye"></span> Password</label>
              <input type="password" class="col-sm-12 form-control" id="password" name="password" placeholder="Enter password">
            </div>

 <div class="form-group">
              <label style="padding:6px;color:white;background:#008080;text-align:left;font-size:16px;" for="psw">
<span class="fa fa-eye"></span> Confirm Password</label>
              <input type="password" class="col-sm-12 form-control" id="confirm-password" name="confirm-password" placeholder=" Confirm Password">
            </div>


<style>
.secured_pot{ display:none; } /* hide because is spam protection */
</style>
<input class="secured_pot" type="text" name="emailaddress_pot" id="emailaddress_pot" />




<div class="form-group">
              <label style="padding:6px;color:white;background:#008080;text-align:left;font-size:16px;" for="fullname">
<span class="fa fa-male"></span> FullName</label>
              <input type="text" class="col-sm-12 form-control" id="fullname" name="fullname" placeholder="Enter Full Name">
            </div>


                    <div class="form-group">
                            <div class="upload_progress" style="width:0%">0%</div>

                        <div id="loader"></div>
                        <div class="result_data"></div>
                    </div>

                    <input type="button" id="save_btn" class="pull-right register_btn" value="Register" />
                </form>

<!--end form-->





    </div>

    <div class="col-sm-5v">



    </div>
  </div>

</div>


<!--end te-->









<!-- footer Section start -->

<footer class=" navbar_footer text-center footer_bgcolor">

<div class="row">
        <div class="col-sm-12">

<p class="footer_text1"><?php echo $header_tit; ?></p>
<p class="footer_text2"><?php include('footer_title.php'); echo $footer_tit1; ?></p>
<br>

<p><?php echo $footer_tit2; ?><a class="btn_copyright" href="<?php echo $footer_tit3; ?>"><?php echo $footer_tit3; ?></a></p>

        </div>



        </div>

<br/>
  <p></p>
</footer>

<!-- footer Section ends -->
	




<div>
  <!--end right column all-->    







   
</body>
</html>






















<?php
	
//set session
if(!isset($_SESSION['uid2p']) || (trim($_SESSION['uid2p']) == '')) {
//$username=strip_tags($_GET['username']);
		header("location: index.php");
		exit();
	}


?>
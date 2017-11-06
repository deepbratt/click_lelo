<?php
	include("connection.php");
	if(isset($_POST['gmid']) && $_POST['gmid'] != '')
	{
		$fbid = $_POST['gmid'];                 
 	    $fbuname = "";  
 	    $fbfullname = $_POST['name'];
	    $femail = $_POST['email'];
		$imgz = $_POST['img'];
		$logtype= "gm";
		$regdate = time();
		$ip = $_SERVER["REMOTE_ADDR"];



	}
?>
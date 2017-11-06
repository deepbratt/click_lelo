<?php
require 'src/facebook.php';  // Include facebook SDK file
require 'connection.php';  // Include functions
$facebook = new Facebook(array(
  'appId'  => '1919346365054132',   // Facebook App ID 
  'secret' => 'ee252fa492a939e5b66664ff99c6bc6c',  // Facebook App Secret
  'cookie' => true,	
));
$user = $facebook->getUser();

if ($user) {
  try {
		$user_profile = $facebook->api('/me?fields=id,name,email,location');
  	    $fbid = $user_profile['id'];                 // To Get Facebook ID
 	    $fbuname = $user_profile['username'];  // To Get Facebook Username
 	    $fbfullname = $user_profile['name']; // To Get Facebook full name
	    $femail = $user_profile['email'];    // To Get Facebook email ID
		$imgz = "https://graph.facebook.com/".$fbid."/picture/";
		$logtype= "fb";
		$regdate = time();
		$ip = $_SERVER["REMOTE_ADDR"];

		/* get users country */
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, "http://www.geoplugin.net/json.gp?ip=".$ip);
		curl_setopt($ch, CURLOPT_HEADER, 0);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
		$ip_data_in = curl_exec($ch); // string
		curl_close($ch);

		$ip_data = json_decode($ip_data_in,true);
		$ip_data = str_replace('&quot;', '"', $ip_data);

		if($ip_data && $ip_data['geoplugin_countryName'] != null) {
			$country = $ip_data['geoplugin_countryName'];
		}

		/* get users country ends */
		

		/* check user have app installed or not*/
		$checkuserz_c = mysqli_query($mysqli,"select email from (select coachind_email as email from ez_coach_ind UNION select coachorg_email as email from ez_coach_org) a where email='".$femail."'");

		if(mysqli_num_rows($checkuserz_c) > 0)
		{
			echo "<script>window.location.href='login.php?data=error'</script>";
		}
		else{

		$checkuser = mysqli_query($mysqli,"select * from ez_student where std_email='".$femail."'");
		$get_rows = mysqli_num_rows($checkuser);
		$fetch_rows = mysqli_fetch_array($checkuser);
		if($get_rows > 0)
		{
			$last_id = $fetch_rows['student_id'];
			$save_user = mysqli_query($mysqli,"UPDATE  `eazycoach`.`ez_student` SET  `std_email` =  '$femail',`std_image` =  '$imgz',`std_name` =  '$fbfullname' WHERE  `ez_student`.`student_id` = '$last_id'");
			

			if($save_user)
			{
				/*device check*/
				function userAgent($ua){
					$iphone = strstr(strtolower($ua), 'mobile'); //Search for 'mobile' in user-agent (iPhone have that)
					$android = strstr(strtolower($ua), 'android'); //Search for 'android' in user-agent
					$windowsPhone = strstr(strtolower($ua), 'phone'); //Search for 'phone' in user-agent (Windows Phone uses that)
					 
					 
					function androidTablet($ua){ //Find out if it is a tablet
						if(strstr(strtolower($ua), 'android') ){//Search for android in user-agent
							if(!strstr(strtolower($ua), 'mobile')){ //If there is no ''mobile' in user-agent (Android have that on their phones, but not tablets)
								return true;
							}
						}
					}
					$androidTablet = androidTablet($ua); //Do androidTablet function
					$ipad = strstr(strtolower($ua), 'ipad'); //Search for iPad in user-agent
				   $kindle = strstr(strtolower($ua), 'kindle'); //Search for iPad in user-agent
					 
					if($androidTablet || $ipad || $kindle){ //If it's a tablet (iPad / Android / Kindly)
						return 'tablet';
					}
					elseif($iphone || $android || $windowsPhone){ //If it's a phone and NOT a tablet
						return 'mobile';
					}
					else{ //If it's not a mobile device
						return 'desktop';
					}    
				}
				$http_user_agent = userAgent($_SERVER['HTTP_USER_AGENT']);
				$browzr = $_SERVER['HTTP_USER_AGENT'];

				/*device check ends */
				$save_log = mysqli_query($mysqli,"INSERT INTO  `eazycoach`.`ez_login_log` (`login_id` ,`log_IP` ,`log_usertype` ,`log_userid` ,`log_datetime` ,`log_device` ,`log_browser`)VALUES (NULL ,  '$ip',  'student',  '$last_id',  '$regdate',  '$http_user_agent',  '$browzr')");
			}
		}else{
			$save_user = mysqli_query($mysqli,"INSERT INTO  `eazycoach`.`ez_student` (`student_id` ,`std_email` ,`std_socialID` ,`std_username`,`std_pass` ,`std_image` ,`std_name` ,`std_log_type` ,`std_onlinestat` ,`std_msg_notify` ,`std_coachrply_notify` ,`std_dispute_notify` ,`std_msg_emailnotify` ,`std_coachrply_emailnotify` ,`std_dispute_emailnotify` ,`std_registration_date` ,`std_IP` ,`std_country`)VALUES (NULL ,  '$femail',  '$fbid','$fbuname' ,'',  '$imgz',  '$fbfullname',  'fb',  '1',  '1',  '1',  '1',  '1',  '1',  '1',  '$regdate',  '$ip',  '$country')");
			$last_id = mysqli_insert_id($mysqli);
			if($save_user)
			{
				/*device check*/
				function userAgent($ua){
					$iphone = strstr(strtolower($ua), 'mobile'); //Search for 'mobile' in user-agent (iPhone have that)
					$android = strstr(strtolower($ua), 'android'); //Search for 'android' in user-agent
					$windowsPhone = strstr(strtolower($ua), 'phone'); //Search for 'phone' in user-agent (Windows Phone uses that)
					 
					 
					function androidTablet($ua){ //Find out if it is a tablet
						if(strstr(strtolower($ua), 'android') ){//Search for android in user-agent
							if(!strstr(strtolower($ua), 'mobile')){ //If there is no ''mobile' in user-agent (Android have that on their phones, but not tablets)
								return true;
							}
						}
					}
					$androidTablet = androidTablet($ua); //Do androidTablet function
					$ipad = strstr(strtolower($ua), 'ipad'); //Search for iPad in user-agent
				   $kindle = strstr(strtolower($ua), 'kindle'); //Search for iPad in user-agent
					 
					if($androidTablet || $ipad || $kindle){ //If it's a tablet (iPad / Android / Kindly)
						return 'tablet';
					}
					elseif($iphone || $android || $windowsPhone){ //If it's a phone and NOT a tablet
						return 'mobile';
					}
					else{ //If it's not a mobile device
						return 'desktop';
					}    
				}
				$http_user_agent = userAgent($_SERVER['HTTP_USER_AGENT']);
				$browzr = $_SERVER['HTTP_USER_AGENT'];

				/*device check ends */
				$save_log = mysqli_query($mysqli,"INSERT INTO  `eazycoach`.`ez_login_log` (`login_id` ,`log_IP` ,`log_usertype` ,`log_userid` ,`log_datetime` ,`log_device` ,`log_browser`)VALUES (NULL ,  '$ip',  'student',  '$last_id',  '$regdate',  '$http_user_agent',  '$browzr')");
			}
		}
		}
  } catch (FacebookApiException $e) {
    error_log($e);
    $user = null;
  }
}
if ($user) {
	$_SESSION['USERID'] = $last_id;
	header("Location: dashboard.php");
} else {
 $loginUrl = $facebook->getLoginUrl(array(
		'scope'		=> 'email,public_profile', // Permissions to request from the user
		));
 header("Location: ".$loginUrl);
}
?>

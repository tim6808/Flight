<!DOCTYPE html>
<html>
<body>

<?php

	$fb = new Facebook\Facebook([
	  'app_id' => '1040220929356305',
	  'app_secret' => '1e4e9008d02d078f1864f887a51aa81d',
	  'default_graph_version' => 'v2.4',
	]);

	$helper = $fb->getRedirectLoginHelper();

	$permissions = ['tim6808@gmail.com']; // Optional permissions
	$loginUrl = $helper->getLoginUrl('http://filght.greennoah.com/fb-callback.php', $permissions);
	//http://filght.greennoah.com/login.php
	//echo '</br>';
	echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>'; 


?>

</body>
</html>
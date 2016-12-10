<?php
require_once __DIR__ . '/vendor/autoload.php'; 
if(!session_id()){
	session_start();
}
	$fb = new Facebook\Facebook([
  'app_id' => '354289538258474', // Replace {app-id} with your app id
  'app_secret' => '6fe346f151e421231b9f8b0625518e76',
  'default_graph_version' => 'v2.8',
  ]);

$helper = $fb->getRedirectLoginHelper();

$permissions = ['email']; // Optional permissions
$loginUrl = $helper->getLoginUrl('http://www.magicweaponcompany.com/fb-callback.php', $permissions);

echo '<a href="' . htmlspecialchars($loginUrl) . '">Log in with Facebook!</a>';
?>

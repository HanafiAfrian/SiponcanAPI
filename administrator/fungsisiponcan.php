<?php
define('FCM_AUTH_KEY', 'AAAA0MTxxSw:APA91bGtO6NbWkKvQRHUUH8vfGMcxpZ5LNKktSXhGDt6IpXtxCkfrjGNLx5Dt72URC5AENBvXgVz8vCaiCsFKVaRbKlcp9h9oCewOs9uTY-WON6eHmwW1wHhSmBOP5okelnMRWucE2Mo');
function kirimPesan($to, $title, $body, $icon, $url) {
	$postdata = json_encode(
	    [
	        'notification' => 
	        	[
	        		'title' => $title,
	        		'body' => $body,
	        		'icon' => $icon,
	        		'click_action' => $url,
					'priority'  => 'high',
					'vibration' =>true,
					'sound'  => 'Enabled',
					'badge' =>1,
					'requireInteraction'  => true,
	        	]
	        ,
	        'to' => $to
	    ]
	);

	$opts = array('http' =>
	    array(
	        'method'  => 'POST',
	        'header'  => 'Content-type: application/json'."\r\n"
	        			.'Authorization: key='.FCM_AUTH_KEY."\r\n",
	        'content' => $postdata
	    )
	);

	$context  = stream_context_create($opts);

	$result = file_get_contents('https://fcm.googleapis.com/fcm/send', false, $context);
	if($result) {
		return json_decode($result);
	} else return false;
}

?>
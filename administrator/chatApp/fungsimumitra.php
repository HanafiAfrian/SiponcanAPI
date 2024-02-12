<?php
define('FCM_AUTH_KEY', 'AAAA3SfxAk0:APA91bFRMRbabo_IsbEDKLrqnClHM-c4Oye2BPuhGQxYlfha4Psv-JotDWuRm96LAThMMAuY9mxQzrwGMZS8u9YA3DyVIxMCwb3hQp3D40cL70KiF82FaW8PNlY3oi1jzP2dM6OXAFIA');
function kirimPesan($to, $title, $body, $icon, $url) {
	$postdata = json_encode(
	    [
	        'notification' => 
	        	[
	        		'title' => $title,
	        		'body' => $body,
	        		'icon' => $icon,
	        		'click_action' => $url
					
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
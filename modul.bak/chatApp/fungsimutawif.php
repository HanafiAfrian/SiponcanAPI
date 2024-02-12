<?php
define('FCM_AUTH_KEY', 'AAAAPsxfVQQ:APA91bEbqYn0iYbgsFb5Q_YyN3LdYuo0RNVI5qt50Bwg3RKthizaj2y_QcG92343Ocl3on2jUke86Ka_YP4Zm2MNs3ix5Qae5l7R_EU52DOn4-G43nLoZYhslFh5Msy_QOuKXtG00bKg');
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
<?php

	$year = date('Y');
	$month = date('m');

	echo json_encode(array(
	
		array(
			'id' => 111,
            'image' => "http://cdn.farecompare.com/resources/fcblogs/2011/03/garden-victoria-bc2-50x50.jpg",
			'title' => "Event1",
			'date' => array("year" => $year, "month" => $month, "day" => 10),
			'url' => "http://yahoo.com/"
		),
		
		array(
			'id' => 222,
            'image' => "http://profile.ak.fbcdn.net/hprofile-ak-snc4/27526_107553529273044_210_q.jpg",
			'title' => "Event2",
			'date' => array("year" => $year, "month" => $month, "day" => 20),
			'url' => "http://yahoo.com/"
		)
	
	));

?>

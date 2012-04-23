<?php

	$year = date('Y');
	$month = date('m');

	echo json_encode(array(
	        
        array(
                'id' => 333,
                'image' => "calendar-img-1.jpg",
                'title' => "Next Month 1",
                'date' => array("year" => $year, "month" => $month+1, "day" => 1),
                'url' => "http://yahoo.com/"
        ),
	
		array(
			'id' => 111,
            'image' => "calendar-img-1.jpg",
			'title' => "Event1",
			'date' => array("year" => $year, "month" => $month, "day" => 10),
			'url' => "http://yahoo.com/"
		),
		
		array(
			'id' => 222,
            'image' => "calendar-img-11.jpg",
			'title' => "Event2",
			'date' => array("year" => $year, "month" => $month, "day" => 20),
			'url' => "http://yahoo.com/"
		),
	    
        array(
                'id' => 222,
                'image' => "calendar-img-11.jpg",
                'title' => "Event2",
                'date' => array("year" => $year, "month" => $month, "day" => 1),
                'url' => "http://yahoo.com/"
        )
	
	));

?>

<?php 

	// echo time();
	//  echo '<br>';
	// // echo mktime(20,27,0,5,20,2015);

	// echo (strtotime('+1 month') - 24*60*60);
	// $user_timestamp = 125867;
	// if (time()> $user_timestamp + 7*24*60*60){

	// }
	$rodj = '20 May 2115';
	$timestamp = strtotime($rodj);
	//echo date('l',$timestamp);

	$datum = getdate($timestamp);

	var_dump($datum);
	

 ?>
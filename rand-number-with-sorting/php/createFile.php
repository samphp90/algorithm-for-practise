<?php
$error = '';
$success = false;
if(!empty($_POST)) {
	$number = isset($_POST['number'])? $_POST['number'] : '';
	$file_name = isset($_POST['file_name'])? $_POST['file_name'] : '';;

	if($number == '' || $file_name == '' ){
		$error = 'Number or file name is missing.';
	}
	if($number < 0 ){
		$error = 'Please enter the positive number.';
	}
	// path to files/
	$file_path = $this_dir.'/files/'.$file_name.'.csv';

	$file = fopen($file_path, 'w') or die('Cannot open file:  '.$file_path);
	if($error == '') {
		for($i = 0; $i < $number; $i++)
		{
			fputcsv($file, array(rand(1, $number)));
		}

		$success = true;
	}
}
?>
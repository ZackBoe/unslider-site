<?php 

include_once 'jsmin.php';

$type = filter_input(INPUT_GET, 'type', FILTER_SANITIZE_STRING);
$mode = filter_input(INPUT_GET, 'mode', FILTER_SANITIZE_STRING);

//  No options, no service.
if(!$type) {
	header('location: ../');
}

if($type) {
	$base = '../unslider/src/';
	$file = 'unslider';
	$contents = '';
	
	if($type !== 'standard') {
		$base .= 'extras/';
		$file .= '.' . $type;
		
		$contents = @file_get_contents($base . $file . '.js');
	}
	
	$file = $base . $file . '.js';
	
	if(!@file_exists($file)) {
		header('location: /');		
	}
	
	header('Content-Type: text/javascript');
	
	$contents .= file_get_contents($file);
	
	if($mode == 'min') {
		$contents = JSMin::minify($contents);
	}
	
	echo $contents;
	exit;
}
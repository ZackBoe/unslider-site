<?php 

//include_once 'jsmin.php';
include_once 'packer.php';

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
		$contents = @file_get_contents($base . 'unslider.js') . "\n\n";
		$base .= 'extras/';
		$file .= '.' . $type;
		
	}
	
	$file = $base . $file . '.js';
	
	if(!@file_exists($file)) {
		header('location: /');		
	}
	
	header('Content-Type: text/javascript');
	
	$contents .= file_get_contents($file);
	
	if($mode == 'min') {
		$min = (new JavaScriptPacker($contents))->pack();
		$contents = '/*unslider.com*/' . $min;//JSMin::minify($contents);
	}
	
	if($mode == 'size' or isset($_GET['size'])) {
		//  round to 1dp
		$contents = round(strlen($contents) / 100) / 10 . 'kb';
	}
	
	echo $contents;
	exit;
}
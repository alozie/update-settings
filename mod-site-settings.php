#!/usr/bin/php
<?php
	// settings files to include
	require_once('./modsettings.php');
	require_once('./settings.php');
	require_once('./sites.php');
	
	// default variables
	$debug = 1;
	$results = array (
		'success' => 0,
		'fail' => 0
	);
	
	// test values and modification values
	$dbsettings = array('target'=>'dbprefix');
	
	// test 1 - target settings file defines $db_prefix
	$test[0] = array(
		'type' => 'variable',
		'target' => 'db_prefix',
	);
	
	// test 2 - target settings file defines users and sessions (keys) for $db_prefix
	$test[1] = array(
		'type' => 'array_key',
		'target' => 'users, sessions',
		'parent' => 'db_prefix',
	);
	
	// test 3 - target settings file does not define authmap and shib_authmap (keys) for $db_prefix
	$test[2] = array(
		'type' => 'array_key',
		'target' => 'authmap, shib_authmap',
		'parent' => 'db_prefix',
		'not' => 1,
	);
	
	// test settings file size in kb
	$test4 = array(
		'type' => 'size',
		'target' => 100,
		'comparison' => 'GT', 
	);
		
	foreach ($subdirs as $subdir){
		// Update settings file with proper database info
		if($debug){
			echo "Attempting to update settings file for " . $subdir . ".\n";
		}
		
		
		$settings_edit = brownsites_update_settings($dbsettings, $drupalcore . "/sites/". $subdir . "/settings.php", $debug);
		if (!$settings_edit['value']){
			if($debug){
				echo $settings_edit['msg'] . "Couldn't edit settings. So much FAIL!\n";
			}
			++$results['fail'];
			//return false;
		}else{
			// settings file updated. woohoo!!!
			if($debug){
				echo "Success!!! Settings file is updated.\n";
			}
			++$results['success'];
		}
	}
	echo "Attempts: " . $results['fail'] + $results['success'] . "\nSucceeded: " . $results['success'] . "\nFailed: " . $results['fail'] . "\n";
	
	// get settings variables for given site - load file's variables
	function get_site_file($targetfile='NULL') {
		// ensure target directory and file exist
		if (!file_exists($thisfile)){ // no file
				echo "Fail!  No file supplied. \n";
				return false;
		}
		else{
			$thisfile = file_get_contents($thisfile);
			echo "Success!!! Settings file retrieved.\n";
			return $thisfile;			
		}
	}

	// get settings variables for given site - load file's variables
	function get_site_vars($thisfile='NULL') {
		if(empty($thisfile)){
				echo "Fail!  No file supplied. \n";
				return false;
		}
		else{
			$thisvars = parse_ini_file($thisfile);
			echo "Success!!! Settings variables retrieved.\n";
			return $thisvars;			
		}
	}
	
	// run test on settings file contents - based on test array
	function test_settings($thisvars='NULL',$thistest='NULL') {
		$result = false;
		if(empty($thisvars) || !is_array($thistest) || empty($thistest)){
				echo "Fail!  Variables or test not supplied. \n";
				return false;
		}
		else{
			switch($thistest['type']){
				case 'variable':
					
				case 'array_key':
					
				default:
					return $result;
			}
			return $result;			
		}
	}
	
	
?>

<?php

$myarr = array(
	"test 1",
	"test 2",
	"test 3",
	"test 4"
	);

#print_r($myarr);
@$myarr['key1']+=1;
@$myarr['key1']++;
@$myarr['key2']++;

$myfile = file_get_contents('./exclude.txt');
$myfile = str_replace("\n",' -',$myfile);
print '-'.$myfile;
$options = getopt("",array("debugmode"));
$debugmode=(array_key_exists('debugmode',$options))?true:false;
var_dump((bool) $debugmode);
?>

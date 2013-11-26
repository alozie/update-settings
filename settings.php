<?php
/*
 * User 1
 */
 $userone = "webservices@brown.edu";
 $useronemail = "webservices@brown.edu";
 
/* 
 * database installer info - work desktop and laptop
 */
/*
$dbinfo = array(
	"server" => "localhost",
	"instname" => "adminuser",
	"instpass" => "adminpass",	
);
*/

//declare spinup process variables
/* 
 * 
 * work desktop
 */ 
$drushpath = "/usr/local/bin/drush";
$sitehost = "localhost";
$webroot = "/var/www";
$drupalcore = $webroot . "/cms/core/d6/drupal-6.28";
$scriptroot = "/var/www/sbsi";


/* 
 * work laptop
 *
$drushpath = "/usr/local/bin/drush";
$sitehost = "localhost";
$webroot = "/var/www";
$drupalcore = $webroot . "/drupal/students/current";
$scriptroot = "/var/www/sbsi";
*/

/* 
 * viper/students
$drushpath = "/usr/local/bin/drush";
$sitehost = "students.brown.edu";
$webroot = "/www/data/httpd/htdocs/Students";
$drupalcore = $webroot . "/cms/core/current";
$scriptroot = "/opt/local/sbsi";
 */

/* 
 * webpub
 */
/*
$drushpath = "/opt/local/drush/drush";
$sitehost = "www.brown.edu";
$webroot = "/www/data/httpd/htdocs/";
$drupalcore = $webroot . "/cms/drupal-cms-shib";
$scriptroot = "/opt/local/brownsites/mod-site-settings";
*/
// request system feed address
$reqfeed = "http://students.brown.edu/request/approved-requests-data";
?>

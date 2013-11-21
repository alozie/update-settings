update-settings
===============

bulk update settings.php files for Drupal multi-site installation

check sites folder for selected core for valid sites

check for valid settings.php file

check settings.php file for target variable

if array check variable for target array key

update variable or skip file according to selection logic


Specific Example - $db_prefix - authmap and shib_authmap db prefix
------------------------------------------------------------------
1) Check each sites folder for settings.php file.
2) Check that settings.php file is greater than 5K.
3) Read in settings.php file.
4) Load variables from settings.php file.
5) Check whether $db_prefix has values defined.
	a. If not, skip to next directory.
	b. If so, check for authmap and shib_authmap keys.
6) If keys not defined, append key definitions to bottom of settings.php file:
	- $db_prefix['authmap'] = 'drupal_bruin_people.';
	- $db_prefix['shib_authmap'] = 'drupal_bruin_people.';
 


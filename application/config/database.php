<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------
| DATABASE CONNECTIVITY SETTINGS
| -------------------------------------------------------------------
| This file will contain the settings needed to access your database.
|
| For complete instructions please consult the "Database Connection"
| page of the User Guide.
|
| -------------------------------------------------------------------
| EXPLANATION OF VARIABLES
| -------------------------------------------------------------------
|
|	['hostname'] The hostname of your database server.
|	['username'] The username used to connect to the database
|	['password'] The password used to connect to the database
|	['database'] The name of the database you want to connect to
|	['dbdriver'] The database type. ie: mysql.  Currently supported:
				 mysql, mysqli, postgre, odbc, mssql, sqlite, oci8
|	['dbprefix'] You can add an optional prefix, which will be added
|				 to the table name when using the  Active Record class
|	['pconnect'] TRUE/FALSE - Whether to use a persistent connection
|	['db_debug'] TRUE/FALSE - Whether database errors should be displayed.
|	['cache_on'] TRUE/FALSE - Enables/disables query caching
|	['cachedir'] The path to the folder where cache files should be stored
|	['char_set'] The character set used in communicating with the database
|	['dbcollat'] The character collation used in communicating with the database
|
| The $active_group variable lets you choose which connection group to
| make active.  By default there is only one group (the "default" group).
|
| The $active_record variables lets you determine whether or not to load
| the active record class
*/

//Heroku cleardb_mysql url
//mysql://b0512c9695a76f:ab578de8@us-cdbr-east-02.cleardb.com/heroku_92c55fe1fb98a23?reconnect=true

// The following values will probably need to be changed.
/*
 * Altered configurations to run on heroku
*/
// $db['default']['username'] = 'b0512c9695a76f';
// $db['default']['password'] = 'ab578de8';
// $db['default']['database'] = 'heroku_92c55fe1fb98a23';
// $db['default']['hostname'] = 'us-cdbr-east-02.cleardb.com';
/*
 * Orignal configurations to run on localhost
*/
$db['default']['username'] = "root";
$db['default']['password'] = "";
$db['default']['database'] = "accufy";
$db['default']['hostname'] = "localhost";

// The following values can probably stay the same.
$db['default']['dbdriver'] = "mysqli"; //Updated to latest driver.
$db['default']['dbprefix'] = "";
$db['default']['pconnect'] = FALSE;
$db['default']['db_debug'] = TRUE;
$db['default']['cache_on'] = FALSE;
$db['default']['cachedir'] = "application/cache/db";
$db['default']['char_set'] = "utf8";
$db['default']['dbcollat'] = "utf8_general_ci";

$active_group = "default";
$active_record = TRUE;

/* End of file database.php */
/* Location: ./application/config/database.php */


  // echo '<pre>';
  // echo 'mysql://b0512c9695a76f:ab578de8@us-cdbr-east-02.cleardb.com/heroku_92c55fe1fb98a23?reconnect=true';
  // print_r($db['default']);
  // print_r([getenv('mysql://b0512c9695a76f:ab578de8@us-cdbr-east-02.cleardb.com/heroku_92c55fe1fb98a23?reconnect=true')]);
  // print_r([parse_url(getenv('mysql://b0512c9695a76f:ab578de8@us-cdbr-east-02.cleardb.com/heroku_92c55fe1fb98a23?reconnect=true'))]);
  // print_r($clearDBURL);
  // echo '</pre>';
  //
  // echo 'Connecting to database: ' .$db['default']['database'];
  // $dbh=mysql_connect
  // (
  //   $db['default']['hostname'],
  //   $db['default']['username'],
  //   $db['default']['password'])
  //   or die('Cannot connect to the database because: ' . mysql_error());
  //   mysql_select_db ($db['default']['database']);
  //
  //   echo '<br />   Connected OK:'  ;
  //   die( 'file: ' .__FILE__ . ' Line: ' .__LINE__);

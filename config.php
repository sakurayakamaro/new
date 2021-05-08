<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mariadb';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'localhost';
$CFG->dbname    = 'snael';
$CFG->dbuser    = 'root';
$CFG->dbpass    = '';	
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => '3306',
  'dbsocket' => '',
);


$CFG->wwwroot   = 'http://localhost/MayyaddahTesting';
$CFG->dataroot  = 'C:\\xampp\\SNAELdata';
$CFG->admin     = 'admin';




$CFG->directorypermissions = 0777;

require_once(dirname(__FILE__) . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!

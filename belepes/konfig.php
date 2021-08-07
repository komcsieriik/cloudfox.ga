<?php
mysql_connect('DB_SERVER', 'DB_USERNAME', 'DB_PASSWORD', 'DB_NAME') or die('Could not connect the database : Username or password incorrect');
mysql_select_db('db_name') or die ('No database found');
echo 'Database Connected successfully';
?>
<?php
/* Adatbázis kezelés, Ranglista a dashboardra */
define('DB_SERVER', '127.0.0.1');
define('DB_USERNAME', 'felhasznalo1');
define('DB_PASSWORD', 'jelszoX');
define('DB_NAME', 'authme');
 
// FOR ANY OTHER IMPLEMENTS CONTACT ME!
$link = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Ellenorzes
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
<?php
require_once('../common.php');


header('Content-Type: text/plain');
try
{
  $db = new DBUsers();
  $db->admin_create_all_structures();
  echo "Finished creating DB.\n";
}
catch (Exception $e)
{
  echo "EXCEPTION: ".$e->getMessage();
}

$hash = password_hash('password', PASSWORD_DEFAULT); 
?>

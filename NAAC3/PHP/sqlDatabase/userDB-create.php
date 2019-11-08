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

$db->insert('test1@test.com', 'Test1', 'Test1', $hash, 'admin');
$db->insert('test2@test.com', 'Test2', 'Test2', $hash, 'user');
$db->insert('test3@test.com', 'Test3', 'Test3', $hash, 'user');

?>

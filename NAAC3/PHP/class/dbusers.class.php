<?php

final class DBUsers extends DB
{

  public function __construct()
  {
    parent::__construct();
  }

  public function admin_create_all_structures()
  {
    if ($this->admin_prohibit_create_drop())
      throw new Exception('Database CREATEs are prohibited by admin.');

    $sql = <<<ZZEOF
CREATE TABLE UserInfoDatabase(
  Email VARCHAR(50) PRIMARY KEY,
  FirstName VARCHAR(25) NOT NULL,
  LastName VARCHAR(25),
  Password VARCHAR(60),
  privilegeLevel VARCHAR(15)
)
ZZEOF;
    return $this->db_handle()->exec($sql);
  }


  public function admin_destroy_all_structures()
  {
    if ($this->admin_prohibit_create_drop())
      throw new Exception('Database DROPs are prohibited by admin.');

    $sql = "DROP TABLE IF EXISTS userInfoDatabase";
    return $this->db_handle()->exec($sql);
  }

  public function insert($email, $firstName, $lastName, $password, $privilegeLevel)
  {
    // Create the entry to add...
	$input = array(':email' => $email, ':firstName' => $firstName, ':lastName' => $lastName, ':password' =>  $password, ':privilegeLevel' => $privilegeLevel);
    // Create the SQL prepared statement and insert the entry...
    
    $sql = 'INSERT INTO UserInfoDatabase VALUES (:email , :firstName , :lastName , :password, :privilegeLevel)';
    $stmt = $this->db_handle()->prepare($sql);
    return $stmt->execute($input);  
 }


  public function delete($email)
  {
    // Create the entry to add...
	$input = array(':email' => $email);
    // Create the SQL prepared statement and delete the entry...
    
    $sql = 'DELETE FROM UserInfoDatabase WHERE email = :email';
    $stmt = $this->db_handle()->prepare($sql); 
    return $stmt->execute($input);  }

  public function modify($email){
    // Create the entry to add...
    $input = array(':email' => $email);
    // Create the SQL prepared statement and delete the entry...
      
    $sql = "UPDATE UserInfoDatabase SET privilegeLevel = 'admin' WHERE email = :email";
    $stmt = $this->db_handle()->prepare($sql); 
    return $stmt->execute($input);  }

  public function lookup($email)
  {
    // Create the entry to add...
    $entry = array(':email' => $email);

    // Create the SQL prepared statement and insert the entry...
    try
    {
      $sql = 'SELECT * FROM UserInfoDatabase WHERE email = :email';
      $stmt = $this->db_handle()->prepare($sql);
      $stmt->execute($entry);
      $result = $stmt->fetchAll();
      if (count($result) < 1)
        return FALSE;
      else
        return $result;
    }
    catch (PDOException $e)
    {
      return FALSE;
    }
  }

  public function checkLogin($email, $password){
    $loginInfo = array(":email" => $email);
    $sql = "SELECT * FROM UserInfoDatabase WHERE Email = :email";
    $stmt = $this->db_handle()->prepare($sql);
    $stmt->execute($loginInfo);

    $userInfo = $stmt->fetchAll();
    if($userInfo[0][0] == $email && password_verify($password, $userInfo[0][3])){
      return $userInfo[0][4]; //return user account
    }
    else{
      return NULL; 
    }
  }
  
  public function lookup_all()
  {
    // Create the SQL prepared statement and insert the entry...
    $sql = 'SELECT * FROM UserInfoDatabase';
    $stmt = $this->db_handle()->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll();
  }
  
  public function userQuery($email, $firstName, $lastName, $password, $privilegeLevel){
	
	$email          = "%$email%";
	$firstName      = "%$firstName%";
  $lastName       = "%$lastName%";
  $password       = "%$password";
  $privilegeLevel = "%$privilegeLevel";

	
	$input = array(':email' => $email, ':firstName' => $firstName, ':lastName' => $lastName, ':password' =>  $password, ':privilegeLevel' => $privilegeLevel);
	
	
	$sql = 'SELECT * FROM userInfoDatabase WHERE email LIKE :email AND firstName LIKE :firstName AND lastName LIKE :lastName AND password LIKE :password AND privilegeLevel LIKE :privilegeLevel';

	$stmt = $this->db_handle()->prepare($sql);
	$stmt->execute($input);	
	
	return $stmt->fetchAll();
  } 
}
?>

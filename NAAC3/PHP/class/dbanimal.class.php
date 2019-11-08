<?php

final class DBAnimal extends DB
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
CREATE TABLE animals (
  name VARCHAR(20) PRIMARY KEY,
  type VARCHAR(20),
  age VARCHAR(20),
  gender VARCHAR(1),
  Picture VARCHAR(200),
  Bio VARCHAR(1000)
)
ZZEOF;
    return $this->db_handle()->exec($sql);
  }


  public function admin_destroy_all_structures()
  {
    if ($this->admin_prohibit_create_drop())
      throw new Exception('Database DROPs are prohibited by admin.');

    $sql = "DROP TABLE IF EXISTS users";
    return $this->db_handle()->exec($sql);
  }

  public function insert($name, $type, $age, $gender, $picture, $bio)
  {
    // Create the entry to add...
	$input = array( ':name' => $name, ':type' => $type, ':age' => $age, ':gender' => $gender, ':picture' => $picture, ':bio' => $bio);

    // Create the SQL prepared statement and insert the entry...
    $sql = 'INSERT INTO animals VALUES (:name, :type, :age, :gender, :picture, :bio)';
    $stmt = $this->db_handle()->prepare($sql);
    return $stmt->execute($input);  
	}

  
  public function animalQuery($type, $age, $gender){
	
	$type = "%$type%";
	$age = "%$age%";
	$gender = "%$gender%";
	
	$input = array( ':type' => $type, ':age' => $age, ':gender' => $gender);
	
	
	$sql = 'SELECT * FROM animals WHERE type LIKE :type AND age LIKE :age AND gender LIKE :gender';

	$stmt = $this->db_handle()->prepare($sql);
	$stmt->execute($input);	
	
	return $stmt->fetchAll();
  } 
}
?>

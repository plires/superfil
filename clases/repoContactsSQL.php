<?php

require_once("repoContacts.php");

class RepoContactsSQL extends repoContacts
{
  protected $conexion;

  public function __construct($conexion) 
  {
    $this->conexion = $conexion;
  }

  public function saveInBDD($post)
  {

    $sql = "INSERT INTO contacts values(default, :name, :email, :phone, :city, :comments, :origin, :date)";
        $stmt = $this->conexion->prepare($sql);
        $stmt->bindValue(":name", $post['name'], PDO::PARAM_STR);
        $stmt->bindValue(":email", $post['email'], PDO::PARAM_STR);
        $stmt->bindValue(":phone", $post['phone'], PDO::PARAM_STR);
        $stmt->bindValue(":city", $post['city'], PDO::PARAM_STR);
        $stmt->bindValue(":comments", $post['comments'], PDO::PARAM_STR);
        $stmt->bindValue(":origin", $post['origin'], PDO::PARAM_STR);
        $stmt->bindValue(":date", date("F j, Y, g:i a"), PDO::PARAM_STR);
        
    $save = $stmt->execute();

    return $save;

  }

}

?>

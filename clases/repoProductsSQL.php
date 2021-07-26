<?php

require_once("repoProducts.php");

class RepoProductsSQL extends repoProducts
{
  protected $conexion;

  public function __construct($conexion) 
  {
    $this->conexion = $conexion;
  }

  public function getProductsByLine($line)
  {
    $sql = "
      SELECT * FROM products 
      WHERE line_rs= '$line' 
      ORDER BY code ASC
    ";

    $stmt = $this->conexion->prepare($sql);
    $stmt->execute();
    $products = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $products;

  }

  public function getExtraDataFromTheLines($id)
  {

    $sql = "SELECT * FROM lines_extra WHERE id= '$id' ";
    $stmt = $this->conexion->prepare($sql);
    $stmt->execute();
    $img_header = $stmt->fetch(PDO::FETCH_ASSOC);

    return $img_header;
  }

  public function getGaleryImagesFromTheLines($id)
  {

    $sql = "SELECT * FROM img_galeries WHERE lines_extra_id= '$id' ";
    $stmt = $this->conexion->prepare($sql);
    $stmt->execute();
    $images = $stmt->fetchAll(PDO::FETCH_ASSOC);

    return $images;
  }

  public function getProductByCode($code) 
  {

    $sql = "
      SELECT * FROM products 
      WHERE code= '$code' 
    ";

    $stmt = $this->conexion->prepare($sql);
    $stmt->execute();
    $product = $stmt->fetch(PDO::FETCH_ASSOC);

    return $product;

  }

}

?>

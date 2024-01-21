<?php


try {
  $conn = new PDO("mysql:host=localhost;dbname=mahara",'root','');
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}

$sql = $conn->prepare("SELECT * FROM products");
$sql->execute();
$sql = $sql->fetchAll();
print_r($sql);
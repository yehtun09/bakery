<?php
include_once __DIR__ . "/../include/db.php";
class Feedbacks
{
  private $pdo;
  public function getFeedbacks()
  {
    $this->pdo = Database::connection();
    // var_dump($this->pdo);
    $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = ("SELECT * FROM `feedbacks` 
      where rating=5 or rating=4");
    $statement = $this->pdo->prepare($sql);
    $statement->execute();
    $products = $statement->fetchALL(pdo::FETCH_ASSOC);
    return $products;
  }
}

?>
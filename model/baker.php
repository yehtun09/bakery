<?php
include_once __DIR__ . "/../include/db.php";
class Baker
{
    private $pdo;
    public function bakerInfo()
    {
        //1. get connection
        $this->pdo = Database::connect();
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        //2. write sql
        $sql = "Select * from bakers where position like 'certified%'";

        //3. prepare sql
        $statement = $this->pdo->prepare($sql);

        //4. execute statement
        $statement->execute();

        //5. result
        $result = $statement->fetchAll(pdo::FETCH_ASSOC);
        return $result;
    }

    public function getAllBakerInfo()
    {
        $this->pdo = Database::connect();
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "Select * from bakers";
        $statement = $this->pdo->prepare($sql);
        $statement->execute();
        $result = $statement->fetchAll(pdo::FETCH_ASSOC);
        return $result;
    }

    public function newBaker($name, $position, $note, $photo)
    {
        $this->pdo = Database::connect();
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $sql = "insert into bakers(name, position, note, image) values (:name, :position, :note, :image)";
        $statement = $this->pdo->prepare($sql);
        //binding parameters
        $statement->bindParam(":name", $name);
        $statement->bindParam(":position", $position);
        $statement->bindParam(":note", $note);
        $statement->bindParam(":image", $photo);
        //$statement->execute();

        if ($statement->execute()) {
            return true;
        } else {
            return false;
        }
    }
}

?>
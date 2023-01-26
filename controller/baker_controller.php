<?php
include_once __DIR__ . '/../model/baker.php';

class BakerController extends Baker
{
    public function getBakers()
    {
        $baker = $this->bakerInfo();
        return $baker;
    }

    public function getAllBakers()
    {
        $result = $this->getAllBakerInfo();
        return $result;
    }

    public function addBaker($name, $position, $note, $photo)
    {
        $result = $this->newBaker($name, $position, $note, $photo);
        return $result;
    }
}
?>
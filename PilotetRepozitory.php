<?php
include_once 'LidhjaBileta.php';

class PilotetRepository {
    private $connection;

    public function __construct()
    {
        $conn = new DatabaseConnectionii;
        $this->connection = $conn->startConnection();
    }

    public function getAllPilotet() {
        $query = "SELECT * FROM pilotet";
        $result = $this->connection->query($query);

        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
   

    public function insertPilotet($pilotet) {
        $conn = $this->connection;

        $id = $pilotet->getId();
        $emri = $pilotet->getEmri();
        $mbiemri = $pilotet->getMbimeri();
        $vitiLindjes =$pilotet->getVitiLindjes();
        $img=$pilotet->getImg();

        $sql = "INSERT INTO pilotet(id, Emri, Mbiemri, Viti_Lindjes,Img) VALUES (?, ?, ?, ?, ?)";
        $statement = $conn->prepare($sql);
        $statement->execute([null, $emri, $mbiemri,$vitiLindjes, $img]);

        echo "<script>alert('U shtua me sukses!')</script>";
    }
    function deletePiloti($id){
        $conn = $this->connection;
        $sql = "DELETE FROM pilotet WHERE id=?";
        $statement = $conn->prepare($sql);
        $statement->execute([$id]);
    }
}
?>
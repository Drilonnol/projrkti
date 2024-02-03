<?php
include_once 'LidhjaBileta.php';

class FluturimetRepository {
    private $connection;

    public function __construct()
    {
        $conn = new DatabaseConnectionii;
        $this->connection = $conn->startConnection();
    }

    public function getAllFluturimet() {
        $query = "SELECT * FROM fluturimet";
        $result = $this->connection->query($query);

        return $result->fetchAll(PDO::FETCH_ASSOC);
    }
   

    public function insertFluturimet($fluturimet) {
        $conn = $this->connection;

        $bileta = $fluturimet->getBiletaID();
        $emri = $fluturimet->getEmri();
        $destinacioni = $fluturimet->getDestinacioni();
        $data = $fluturimet->getData();

        $sql = "INSERT INTO fluturimet(id, Emri, Destinacioni, Data) VALUES (?, ?, ?, ?)";
        $statement = $conn->prepare($sql);
        $statement->execute([$bileta, $emri, $destinacioni, $data]);

        echo "<script>alert('U shtua me sukses!')</script>";
    }
    function deleteFluturimi($id){
        $conn = $this->connection;
        $sql = "DELETE FROM fluturimet WHERE id=?";
        $statement = $conn->prepare($sql);
        $statement->execute([$id]);
    }
}
?>
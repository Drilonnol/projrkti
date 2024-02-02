<?php
include_once 'LidhjaBileta.php';

class BiletaRepository {
    private $connection;

    public function __construct()
    {
        $conn = new DatabaseConnectionii;
        $this->connection = $conn->startConnection();
    }

    public function getAllBileta(){
        $conn = $this->connection;

        $sql = "SELECT * FROM biletateshtypura";
        $statement = $conn->query($sql);

        $demolog = $statement->fetchAll();
        return $demolog;
    }

    /*public function getAllBileta() {
        $query = "SELECT * FROM biletateshtypura";
        $result = $this->connection->query($query);

        return $result->fetchAll(PDO::FETCH_ASSOC);
    }*/
    public function getHotelById($biletaID) {
        $query = "SELECT * FROM biletat WHERE id = :biletaID";
        $stmt = $this->connection->prepare($query);
        $stmt->bindParam(':biletaID', $biletaID);
        $stmt->execute();

        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
    public function editHotel($biletaID,  $emriBiletes,$nga, $deri, $dataa) {
        $conn = $this->connection;
        $query = "UPDATE biletat SET Emri=?, Nga=?, Deri=?, Dataa=?, WHERE id=?";
        $stmt = $this->$conn->prepare($query);
        $stmt->execute([ $biletaID,  $emriBiletes,$nga, $deri, $dataa]);
    
        echo "<script>alert('U ndryshua me sukses!')</script>";
    }
    //delete
    
    public function insertBileta($bileta) {
        $conn = $this->connection;

        $emri = $bileta->getEmriBiletes();
        $nga = $bileta->getNga();
        $deri = $bileta->getDeri();
        $data = $bileta->getDataa();
        $nrPass=$bileta->getNumriPasagjerve();

        $sql = "INSERT INTO biletat_shtohen(EmriBiletes, Nga, Deri, Dataa,NumriPasagjerve) VALUES (?, ?, ?, ?, ?)";
        $statement = $conn->prepare($sql);
        $statement->execute([$emri, $nga, $deri, $data,$nrPass]);

        echo "<script>alert('U shtua me sukses!')</script>";
    }
}
?>
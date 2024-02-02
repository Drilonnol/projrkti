<?php


include_once 'hotelsRepozitory.php';
include_once 'lidhjaBiletat.php';
class BiletaRepository extends HotelsRepository {
    private $connection;

    public function __construct()
    {
        $conn = new DatabaseConnectioniii;
        $this->connection = $conn->startConnection();
    }

    public function getAllBileta() {
        $conn = $this->connection;
        $sql = "SELECT * FROM bilet";
        $statement = $conn->query($sql);
        $biletaList = $statement->fetchAll();
        return $biletaList;
    }

    public function deleteBileta($id) {
        $conn = $this->connection;
        $sql = "DELETE FROM bilet WHERE id=?";
        $statement = $conn->prepare($sql);
        $statement->execute([$id]);
    }

    public function getBiletaById($biletaId) {
        $conn = $this->connection;
        $sql = "SELECT * FROM bilet WHERE id=?";
        $statement = $conn->prepare($sql);
        $statement->execute([$biletaId]);
        $bileta = $statement->fetch();
        return $bileta;
    }

    public function insertBileta($bileta) {
        $conn = $this->connection;

        $emri = $bileta->getEmri();
        $vendi = $bileta->getVendi();
        $vendimberritjes = $bileta->getVendimberritjes(); 
        $kohaQendrimit = $bileta->getKohaQendrimit();
        $qmimi = $bileta->getQmimi();
        $nrPersona = $bileta->getNrpersona();
        $img = $bileta->getImg();

        $sql = " INSERT INTO bilet(Emri, Vendinis, Kohezgjatja, Qmimi, Nrpersonav, img, Vendimb) VALUES (?, ?, ?, ?, ?, ?, ?)";
        $statement = $conn->prepare($sql);
        $statement->execute([$emri, $vendi, $kohaQendrimit, $qmimi, $nrPersona, $img, $vendimberritjes]);

        echo "<script>alert('U shtua me sukses!')</script>";
    }
    public function isBiletaNameUnique($emri) {
        $conn = $this->connection;
        $sql = "SELECT COUNT(*) FROM bilet WHERE Emri=?";
        $statement = $conn->prepare($sql);
        $statement->execute([$emri]);
        $count = $statement->fetchColumn();
        return $count == 0;
    }
}
?>
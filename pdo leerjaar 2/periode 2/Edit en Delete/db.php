<?php
class Database {
    public $pdo;

    public function __construct($db = "kpn", $host = "localhost", $user = "root", $pass = "") {
        try {
            $this->pdo = new PDO("mysql:host=$host; dbname=$db", $user, $pass);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }

    }

    public function selectData($id) {
    }

    public function updateData($id, $naam, $email, $telefoonnummer) {
        try {
            $query = "UPDATE klanten SET naam = :naam, Email = :email, Telefoonnummer = :telefoonnummer WHERE id = :id";
            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->bindParam(':naam', $naam, PDO::PARAM_STR);
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->bindParam(':telefoonnummer', $telefoonnummer, PDO::PARAM_STR);
            $stmt->execute();
            echo "Data is geupdate";

            header("edit.php");
            exit();
        } catch (PDOException $e) {
            echo "Update failed: " . $e->getMessage();
        }
    }

    public function deleteData($id) {
        $query = "DELETE FROM klanten WHERE id = :id";

        try {
            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);

            if ($stmt->execute()) {
                echo "Data is succesvol verwijderd.";
            } else {
                echo "Fout bij het verwijderen van data: " . $stmt->errorInfo()[2];
            }

            $stmt->closeCursor();
        } catch (PDOException $e) {
            echo "Fout bij het verwijderen van data: " . $e->getMessage();
        }
    }

    function select($id = null) {

        $query = "SELECT * FROM klanten";


        if ($id !== null) {
            $query .= " WHERE id = :id";
        }

        $stmt = $this->pdo->prepare($query);

        if ($id !== null) {
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        }

        $stmt->execute();
        $resultaat = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($resultaat as $row) {
            echo '<div>';
            echo '<p>ID: ' . $row['id'] . '</p>';
            echo '<p>Name: ' . $row['naam'] . '</p>';
            echo '<p>Email: ' . $row['Email'] . '</p>';
            echo '<p>Telefoonnummer: ' . $row['Telefoonnummer'] . '</p>';
            echo '<a href="edit.php"><button>Edit</button></a>';
            echo '<a href="delete.php"><button>Delete</button></a>';
            echo '</div>';
        }

        return $resultaat;
    }
}

$database = new Database();

$database->select();
?>

<?php
class Database {
    private $servername = 'localhost';
    private $username = 'root';
    private $database = 'ferry';
    private $password = '';
    private $connection;
    public $message = '';

    public function __construct($servername, $username, $database, $password) {
        $this->username = $username;
        $this->servername = $servername;
        $this->database = $database;
        $this->password = $password;
        $this->connection = $this->connectToDatabase();
    }
    public function prepare($sql) {
        return $this->connection->prepare($sql);
    }
    public function getOrigins() {
        $originQuery = "SELECT * FROM origins";
        $originResult = $this->connection->query($originQuery);
        $origins = $originResult->fetch_all(MYSQLI_ASSOC);
        return $origins;
    }
    public function getDestinations() {
        $destinationQuery = "SELECT * FROM destinations";
        $destinationResult = $this->connection->query($destinationQuery);
        $destinations = $destinationResult->fetch_all(MYSQLI_ASSOC);
        return $destinations;
    }
    public function connectToDatabase() {
        $connection = new mysqli($this->servername, $this->username, $this->password, $this->database);
        if ($connection->connect_error) {
            $this->message = "Connection failed: " . $connection->connect_error;
        } else {
            $this->message = "Connected!";
        }
        return $connection;
    }
    public function insertPassenger($name, $email, $dob, $phoneNumber, $gender) {
        $insertQuery = "INSERT INTO passenger (name, email, DOB, Phone_number, gender) VALUES (?, ?, ?, ?, ?)";
        $statement = $this->connection->prepare($insertQuery);
        $statement->bind_param("sssss", $name, $email, $dob, $phoneNumber, $gender);
        if ($statement->execute()) {
            // Retrieve the last inserted ID (PassengerID)
            $passengerID = $this->connection->insert_id;
            return $passengerID;
        } else {
            return false; // Return false if insertion fails
        }
    }
    public function getCabinTypes() {
        $cabinTypes = [];
    
        $sql = "SELECT * FROM cabin";
        $result = $this->connection->query($sql);
    
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $cabinTypes[] = array(
                    'CabinNumber' => $row['CabinNumber'],
                    'CabinType' => $row['CabinType'],
                    'Price' => $row['Price']

                );
            }
        }
    
        return $cabinTypes;
    }
    public function getShips() {
        $ships = [];
    
        $sql = "SELECT * FROM cruise";
        $result = $this->connection->query($sql);
    
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $ships[] = $row['CruiseName'];
            }
        }
    
        return $ships;
    }
    
    public function getAllShips() {
        $ships = [];
    
        $sql = "SELECT * FROM cruise";
        $result = $this->connection->query($sql);
    
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $ships[] = $row;
            }
        }
    
        return $ships;
    }
    
    
    private function getShipsForCruise($cruiseID) {
        $ships = [];
    
        $sql = "SELECT * FROM cruise WHERE cruiseID = ?";
        $statement = $this->connection->prepare($sql);
        $statement->bind_param("i", $cruiseID);
        $statement->execute();
        $result = $statement->get_result();
    
        while ($row = $result->fetch_assoc()) {
            $ships[] = array(
                'ShipID' => $row['cruiseID'],
                'ShipName' => $row['CruiseName'],
            );
        }
    
        return $ships;
    }
    public function insertReservation($passengerID, $cabinType, $reservationDate, $totalPrice, $tripType, $departureDate, $returnDate, $cruiseID, $returnCruise) {
        $insertQuery = "INSERT INTO reservation (PassengerID, CabinType, ReservationDate, TotalPrice, TripType, DepartureDate, ReturnDate, CruiseID, ReturnCruise) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $statement = $this->connection->prepare($insertQuery);
        $statement->bind_param("ssdsdsddd", $passengerID, $cabinType, $reservationDate, $totalPrice, $tripType, $departureDate, $returnDate, $cruiseID, $returnCruise);
        if ($statement->execute()) {
            return true;
        } else {
            return "Error: " . $this->connection->error;
        }
    }
    public function insertPayment($paymentMethod, $amount, $passengerID) {
        $insertQuery = "INSERT INTO payment (PaymentMethod, Amount, PassengerID) VALUES (?, ?, ?)";
        $statement = $this->connection->prepare($insertQuery);
        $statement->bind_param("sdi", $paymentMethod, $amount, $passengerID);
        if ($statement->execute()) {
            return "Payment data saved successfully!";
        } else {
            return "Error: " . $this->connection->error;
        }
    }
}

// Instantiate Database object
$db = new Database('localhost', 'root', 'ferry', '');

// Fetch origin and destination data
$origins = $db->getOrigins();
$destinations = $db->getDestinations();
$cabins = $db->getCabinTypes();
?>
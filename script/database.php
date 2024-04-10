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

    public function connectToDatabase() {
        $connection = new mysqli($this->servername, $this->username, $this->password, $this->database);
        if ($connection->connect_error) {
            $this->message = "Connection failed: " . $connection->connect_error;
        } else {
            $this->message = "Connected!";
        }
        return $connection;
    }
}

$db = new Database('localhost', 'root', 'ferry', '');

?>


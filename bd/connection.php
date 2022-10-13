<?php

include_once("../utils.php");

class Connection {

    use Getters;

    private $conn;

    public function __construct() {
        $this->conn = new mysqli("localhost", "php_user1", "php_user1", "php_test1");

        if ($this->conn->connect_errno) {
            echo "Connection failure: " . $conn->connect_errno;
        }
    }

    public function query($q) {
        return $this->conn->query($q);
    }

    public function prepare($q) {
        return $this->conn->prepare($q);
    }

}

$conn = new mysqli("localhost", "php_user1", "php_user1", "php_test1");

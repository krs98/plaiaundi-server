<?php

require_once("connection.php");
require_once("model/User.php");

class UserRepository {

    private $conn;

    public function __construct() {
        $this->conn = new Connection();
    }

    public function getByUsername($username) {
        $statement = $this->conn->prepare("select * from user where name = ?");
        $statement->bind_param("s", $username);
        $statement->execute();
        $result = $statement->get_result()->fetch_row();

        return $result ? new User(...$result) : false;
    }
}

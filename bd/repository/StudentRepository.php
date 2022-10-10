<?php

include "connection.php";
include "model/Student.php";

class StudentRepository {

    private $conn;

    public function __construct() {
        $this->conn = new Connection();
    }

    public function getById($id) {
        $query = "select * from student join person on student.person_id = person.id where student.id = $id";
        $result = $this->conn->query($query);

        return $result ? new Student(...$result->fetch_assoc()) : null;
    }

    public function getAll() {
        $query = "select * from student join person on student.person_id = person.id";
        $result = $this->conn->query($query); 

        return map(
            fn($student) => new Student(...$student),
            $result ? $result->fetch_all() : []
        );
    }

    public function updateById($id, $name, $dni, $email, $enroll_code, $course) {
        $student = $this->getById($id);
        $studentId = $student->person->id;

        $statement = $this->conn->prepare("update person set name=?, dni=?, email=? where id=?");
        $statement->bind_param("sssi", $name, $dni, $email, $studentId);
        $statement->execute();

        $statement = $this->conn->prepare("update student set enroll_code=?, course=? where id=?");
        $statement->bind_param("ssi", $enroll_code, $course, $id);
        $statement->execute();
    }

    public function deleteById($id) {
        $student = $this->getById($id);
        $personId = $student->person->id;

        $statement = $this->conn->prepare("delete from person where id=?");
        $statement->bind_param("i", $personId);
        $statement->execute();

        $statement = $this->conn->prepare("delete from student where id=?");
        $statement->bind_param("i", $student->id);
        $statement->execute();
    }

}

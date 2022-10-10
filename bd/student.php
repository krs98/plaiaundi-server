
<?php

include "repository/StudentRepository.php";

$id = $_GET['id'];

$studentRepo = new StudentRepository();
$student = $studentRepo->getById($id);

?>

    <form action="put-student.php?id=<?php echo $id ?>" method="POST">
    <div>
        <label>Name</label>
        <input type="text" name="name" value="<?php echo $student->person->name ?>" required>
    </div>

    <div>
        <label>Dni</label>
        <input type="text" name="dni" value="<?php echo $student->person->dni ?>" required>
    </div>

    <div>
        <label>Email</label>
        <input type="email" name="email" value="<?php echo $student->person->email ?>" required>

    <div>
        <label>Enroll code</label>
        <input type="text" name="enroll_code" value="<?php echo $student->enroll_code ?>" required>
    </div>

    <div>
        <label>Course</label>
        <input type="text" name="course" value="<?php echo $student->course ?>" required>

    <button type="submit">Save</button>
</form>

<?php

include_once("../utils.php");

checkSession('username', fn() => redirect('login.php'));

?>

<ul>

<?php

include "repository/StudentRepository.php";

$studentRepo = new StudentRepository();
$students = $studentRepo->getAll();

function listItem($student) {
    $id = $student->id;
    return "
<li>
    <a style=\"cursor: pointer\" href=\"student.php?id=$id\">$student</a>
    <button><a href=\"del-student.php?id=$id\">Delete</a></button>
</li>
";
}

$items = map(fn($student) => listItem($student), $students);

echo isEmpty($items) ? 'No hay estudiantes.' : implode('<br>', $items);

?>

<button><a href="logout.php">Logout</a></button>

</ul>

<?php
$data = file_get_contents('./students.json');
$students = json_decode($data, true);

foreach ($students as $key => $student) {
    if ($student['id'] == $_GET['id']) {
        unset($students[$key]);
        break;
    }
}


$data = json_encode($students, JSON_PRETTY_PRINT);
file_put_contents('./students.json', $data);


echo "
        <script>
        window.location.href = '../students.php';
        </script>
    ";
?>
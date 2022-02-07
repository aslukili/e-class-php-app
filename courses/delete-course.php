<?php
include '../includes/dbh.inc.php';
if (isset($_GET['deleteid']))
    $delete_id = $_GET['deleteid'];
$sql = "DELETE FROM courses WHERE id = $delete_id";
$result = mysqli_query($conn, $sql);

if (!$result) {
    echo 'something went wrong';
}else{
    echo "
        <script>
        window.location.href = '../courses.php';
        </script>
    ";
}

?>
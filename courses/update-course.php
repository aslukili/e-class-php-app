<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
<h1>update course</h1>
<form class="container" style="max-width: 500px" method="POST">
    <div class="input-group mb-3">
        <label class="form-label">title</label>
        <input class="form-control" type="text" placeholder="title of course" name="title" required>
    </div>
    <div class="input-group mb-3">
        <label class="form-label">instructor name</label>
        <input class="form-control" type="text" placeholder="e.g. Youssef Ouadid" name="instructor" required>
    </div>
    <div class="input-group mb-3">
        <label class="form-label">course duration</label>
        <input class="form-control" type="text" placeholder="2h 30m" name="length" required>
    </div>
    <div class="input-group mb-3">
        <label class="form-label">data of release</label>
        <input class="form-control" type="date" placeholder="number" name="release_date" required>
    </div>
    <div class="input-group">
        <input class="btn btn-primary" type="submit" value="save" name="save">
    </div>
</form>
</body>
</html>
<?php
include '../includes/dbh.inc.php';  //connection to the database;
$id = $_GET['id'];

//form submitting
if (isset($_POST['save'])) {
    $title = $_POST['title'];
    $instructor = $_POST['instructor'];
    $length = $_POST['length'];
    $release_date = $_POST['release_date'];

    $sql = "UPDATE courses SET title = '$title', instructor = '$instructor', length = '$length', release_date = '$release_date' WHERE id = $id";
    $result = mysqli_query($conn, $sql);


    if ($result) {
        echo "course record is successfully updated!";
    } else {
        echo "something went wrong!";
    }


    echo "
        <script>
        window.location.href = '../students.php';
        </script>
    ";
}
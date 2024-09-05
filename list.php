<?php
require "config.php";

$sql = "SELECT * FROM contactdata";
$result = [];
if (mysqli_query($conn, $sql)) {
    $result = mysqli_query($conn, $sql);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <section>
        <?php foreach ($result as $data): ?>
            <div class="container bg-red">
                <h5>Firstname : <?= $data['firstname']; ?></h5>
                <h5>Lastname : <?= $data['lastname']; ?></h5>
                <h5>Phone : <?= $data['phone']; ?></h5>
                <h5>Email : <?= $data['email']; ?></h5>
                <h5>Message : <?= $data['message']; ?></h5>
            </div>
        <?php endforeach; ?>
    </section>
    <a href="index.php"><input type="button" class="btn btn-success" value="Back"></a>
</body>

</html>
<?php
require_once "config.php";

// Mengamankan data input dari form menggunakan prepared statements
if (isset($_POST['submit'])) {
    $firstname = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['firstname']));
    $lastname = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['lastname']));
    $phone = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['phone']));
    $email = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['email']));
    $message = htmlspecialchars(mysqli_real_escape_string($conn, $_POST['message']));

    $sql = "INSERT INTO `contactdata` (`firstname`, `lastname`, `phone`, `email`, `message`) VALUES ('$firstname', '$lastname', '$phone', '$email', '$message')";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        echo "<script>alert('Data berhasil ditambahkan');</script>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Angger Abed</title>
    <link rel="stylesheet"          
     href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
     <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono:wght@700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">       
</head>

<body>
    <div class="container">
        <h3>Contact Form ~ bedvyy</h3>
        <form action="" method="POST">
            <div class="form-group">
                <label for="nama">Firstname</label>
                <input type="text" name="firstname" id="nama" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="nama">Lastname</label>
                <input type="text" name="lastname" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="nim">Phone</label>
                <input type="tel" name="phone" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="fakultas">Email</label>
                <input type="text" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="message">Message</label>
                <textarea name="message" id="message" class="form-control" required></textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-success" name="submit" type="submit">Submit</button>
                <a href="list.php" class="btn btn-danger" type="reset">List</a>
            </div>
        </form>
    </div>
</body>

</html>
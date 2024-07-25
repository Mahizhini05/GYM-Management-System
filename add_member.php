<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $join_date = $_POST['join_date'];

    $sql = "INSERT INTO members (name, email, age, join_date) VALUES ('$name', '$email', $age, '$join_date')";

    if ($conn->query($sql) === TRUE) {
        echo "New member added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Member</title>
</head>
<body>
    <h2>Add New Member</h2>
    <form method="post" action="">
        Name: <input type="text" name="name" required><br><br>
        Email: <input type="email" name="email" required><br><br>
        Age: <input type="number" name="age" required><br><br>
        Join Date: <input type="date" name="join_date" required><br><br>
        <input type="submit" value="Add Member">
    </form>
</body>
</html>

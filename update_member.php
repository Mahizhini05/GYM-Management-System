<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $age = $_POST['age'];
    $join_date = $_POST['join_date'];

    $sql = "UPDATE members SET name='$name', email='$email', age=$age, join_date='$join_date' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Member updated successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} else {
    $id = $_GET['id'];
    $sql = "SELECT * FROM members WHERE id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Update Member</title>
</head>
<body>
    <h2>Update Member</h2>
    <form method="post" action="">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        Name: <input type="text" name="name" value="<?php echo $row['name']; ?>" required><br><br>
        Email: <input type="email" name="email" value="<?php echo $row['email']; ?>" required><br><br>
        Age: <input type="number" name="age" value="<?php echo $row['age']; ?>" required><br><br>
        Join Date: <input type="date" name="join_date" value="<?php echo $row['join_date']; ?>" required><br><br>
        <input type="submit" value="Update Member">
    </form>
</body>
</html>

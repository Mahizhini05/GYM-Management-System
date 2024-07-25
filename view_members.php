<?php
include 'db.php';

$sql = "SELECT * FROM members";
$result = $conn->query($sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Member List</title>
</head>
<body>
    <h2>Member List</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Age</th>
            <th>Join Date</th>
        </tr>
        <?php
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row["id"] . "</td>";
                echo "<td>" . $row["name"] . "</td>";
                echo "<td>" . $row["email"] . "</td>";
                echo "<td>" . $row["age"] . "</td>";
                echo "<td>" . $row["join_date"] . "</td>";
                echo "</tr>";
            }
        } else {
            echo "<tr><td colspan='5'>No members found</td></tr>";
        }
        ?>
    </table>
</body>
</html>

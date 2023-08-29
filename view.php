<?php
include 'database.php';
$searchId = $_POST['search_id'];
$query = "SELECT * FROM management WHERE id = ?";
$stmt = $conn->prepare($query);
$stmt->bind_param("i", $searchId);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "Name: " . $row['name'] . "<br>";
    echo "Number: " . $row['number'] . "<br>";
    echo "Email: " . $row['email'] . "<br>";
    echo "ID: " . $row['id'] . "<br>";
} else {
    echo "No data found for the given ID.";
}
$stmt->close();
$conn->close();
?>
<html>
    <body>
<a href="update.php">Update</a>
    </body>
</html>
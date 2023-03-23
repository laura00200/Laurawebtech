<?php
// Include the database connection file
include_once("config.php");

// Retrieve data from the register table
$sql = "SELECT ALL name FROM register";
$result = $conn->query($sql);
echo "<th>Name</th>";
if ($result->num_rows > 0) {
    // Output data of each row in a list
    echo "<ul>";
    while($row = $result->fetch_assoc()) {
        echo "<li>" . $row["name"]. "</li>";
    }
    echo "</ul>";
} else {
    echo "No results found";
}

$conn->close();
?>

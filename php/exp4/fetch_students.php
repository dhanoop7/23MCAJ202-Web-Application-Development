<!DOCTYPE html>
<html>
<head>
    <title>Student Records</title>
    <style>
        table {
            width: 60%;
            margin: 20px auto;
            border-collapse: collapse;
            font-family: Arial;
        }
        th, td {
            padding: 10px;
            border: 1px solid #333;
            text-align: center;
        }
        th {
            background-color: #28a745;
            color: white;
        }
    </style>
</head>
<body>

<?php
// Database configuration
$servername = "localhost";
$username = "dhanoop";        // default username for WAMP/XAMPP
$password = "123";            // default password is empty
$database = "school";

// Create connection
$conn = new mysqli($servername, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("❌ Connection failed: " . $conn->connect_error);
}

// SQL query
$sql = "SELECT id, name, grade FROM students";
$result = $conn->query($sql);

// Display in HTML table
if ($result->num_rows > 0) {
    echo "<h2 style='text-align:center;'>Student List</h2>";
    echo "<table>";
    echo "<tr><th>ID</th><th>Name</th><th>Grade</th></tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>" . $row["id"] . "</td>
                <td>" . $row["name"] . "</td>
                <td>" . $row["grade"] . "</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "<p style='text-align:center;'>No student data found.</p>";
}

$conn->close();
?>

</body>
</html>

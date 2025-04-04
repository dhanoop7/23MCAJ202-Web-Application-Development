<!DOCTYPE html>
<html>
<head>
    <title>Indian Cricket Players</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px auto;
            font-family: Arial, sans-serif;
        }
        th, td {
            border: 1px solid #333;
            padding: 10px;
            text-align: center;
        }
        th {
            background-color: #007BFF;
            color: white;
        }
    </style>
</head>
<body>

<?php
// Step 1: Store names in an array
$players = array("Virat Kohli", "Rohit Sharma", "Jasprit Bumrah", "Ravindra Jadeja", "KL Rahul", "Shubman Gill", "Hardik Pandya");

// Step 2: Display in an HTML table
echo "<table>";
echo "<tr><th>S.No</th><th>Player Name</th></tr>";

foreach ($players as $index => $name) {
    $serial = $index + 1;
    echo "<tr><td>$serial</td><td>$name</td></tr>";
}

echo "</table>";
?>

</body>
</html>

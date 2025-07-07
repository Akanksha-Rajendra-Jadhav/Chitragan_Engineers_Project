<?php
// Step 1: Connect to the database
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'CE';

$conn = mysqli_connect($host, $user, $password, $database);

if (!$conn) {
    die('Connection failed: ' . mysqli_connect_error());
}

// Step 2: Write a SQL query to select the data
$sql = 'SELECT * FROM CE';

// Step 3: Execute the query and fetch the results
$result = mysqli_query($conn, $sql);

if (!$result) {
    die('Query failed: ' . mysqli_error($conn));
}

// Step 4: Output the necessary headers
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename= # ');

// Step 5: Loop through the array and output each row
$firstRow = true;
while ($row = mysqli_fetch_assoc($result)) {
    if ($firstRow) {
        // Output the column headers as the first row
        echo implode(',', array_keys($row)) . "\n";
        $firstRow = false;
    }
    // Output each row as a comma-separated line
    echo implode(',', array_values($row)) . "\n";
}

// Step 6: Close the database connection
mysqli_close($conn);
?>
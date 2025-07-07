<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "chitragan";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// The SQL query to select all data from the table
$sql = "SELECT * FROM contacts";
$result = $conn->query($sql);

// The table to display the data
echo "<table border='5'>
<tr>
<th>name</th>
<th>phone</th>
<th>email</yh>
<th>address</th>
<th>services</th>
</tr>";

if ($result->num_rows > 0) {
    // Output each row from the result
    while($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["name"]. "</td>";
        echo "<td>" . $row["phone"]. "</td>";
        echo "<td>" . $row["email"]. "</td>";
        echo "<td>" . $row["address"]. "</td>";
        echo "<td>" . $row["services"]. "</td>";
        echo "</tr>";
    }
} else {
    echo "<tr><td colspan='3'>No results found</td></tr>";
}
echo "</table>";

// Close the connection
$conn->close();

?>
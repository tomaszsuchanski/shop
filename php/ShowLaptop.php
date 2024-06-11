<?php
global $conn;
include '../php/Config.php';

$sql = "SELECT * FROM Laptop";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<table border='1'>";
    echo "<tr><th>ID</th><th>Brand</th><th>Cpu</th><th>Memory</th><th>Storage</th><th>Gpu</th><th>Screen</th><th>System</th></tr>";

    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        echo "<td>" . $row["laptop_id"]. "</td>";
        echo "<td>" . $row["brand"]. "</td>";
        echo "<td>" . $row["cpu"]. "</td>";
        echo "<td>" . $row["memory"]. "</td>";
        echo "<td>" . $row["storage"]. "</td>";
        echo "<td>" . $row["gpu"]. "</td>";
        echo "<td>" . $row["screen"]. "</td>";
        echo "<td>" . $row["system"]. "</td>";
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "0 results";
}

mysqli_close($conn);


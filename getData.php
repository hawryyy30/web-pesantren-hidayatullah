<?php
$conn = mysqli_connect("localhost", "root", "", "pesantren");
$sql = "SELECT * FROM clients";
$result = mysqli_query($conn, $sql);

$clients = [];
while ($row = mysqli_fetch_assoc($result)) {
    $clients[] = $row;
}
header('Content-Type: application/json');
echo json_encode($clients);

?>
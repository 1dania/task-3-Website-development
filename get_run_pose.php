<?php
$conn = new mysqli("localhost", "root", "", "robot_db");
$result = $conn->query("SELECT * FROM run_pose");
$rows = array();
while($row = $result->fetch_assoc()) {
    $rows[] = $row;
}
echo json_encode($rows);
$conn->close();
?>

<?php
if (isset($_GET['id'])) {
    $conn = new mysqli("localhost", "root", "", "robot_db");
    $id = intval($_GET['id']);
    $conn->query("UPDATE run_pose SET status = 0 WHERE id = $id");
    $conn->close();
}
?>

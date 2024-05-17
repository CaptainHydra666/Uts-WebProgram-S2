<?php
require_once "app.php";

$id = $_GET["id"];
$sql = "DELETE FROM `gunung` WHERE id = $id";
$result = mysqli_query($conn, $sql);

if ($result) {
    header("Location: gunung.php?msg=Data deleted successfully");
} else {
    echo "Failed: " . mysqli_error($conn);
}
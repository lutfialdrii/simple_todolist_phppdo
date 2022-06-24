<?php
require "conn.php";
if (isset($_POST['submit'])) {
    $task = $_POST['myTask'];

    $insert = $connection->prepare("INSERT INTO tasks (name) VALUES (:name)");
    $insert -> execute([':name' => $task]);

    header("location: index.php");

} else {

}
?>
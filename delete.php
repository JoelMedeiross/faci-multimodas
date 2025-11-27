<?php
session_start();
include 'database.php';

if (!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit();
}

$id = $_GET['id'];
$conn->query("DELETE FROM produtos WHERE id=$id");

header("Location: index.php");

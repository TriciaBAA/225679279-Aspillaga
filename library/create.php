<?php
include 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['title'];
    $author = $_POST['author'];
    $genre = $_POST['genre'];
    $published_year = $_POST['published_year'];

    $stmt = $conn->prepare("INSERT INTO books (title, author, genre, published_year) VALUES (?, ?, ?, ?)");
    $stmt->execute([$title, $author, $genre, $published_year]);

    header("Location: index.php");
}
?>

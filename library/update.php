<?php
include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $conn->prepare("SELECT * FROM books WHERE id = ?");
    $stmt->execute([$id]);
    $book = $stmt->fetch(PDO::FETCH_ASSOC);
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $author = $_POST['author'];
    $genre = $_POST['genre'];
    $published_year = $_POST['published_year'];

    $stmt = $conn->prepare("UPDATE books SET title = ?, author = ?, genre = ?, published_year = ? WHERE id = ?");
    $stmt->execute([$title, $author, $genre, $published_year, $id]);

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Edit Book</title>
</head>
<body>
    <h1>Edit Book</h1>
    <form action="update.php" method="post">
        <input type="hidden" name="id" value="<?php echo $book['id']; ?>">
        <input type="text" name="title" value="<?php echo $book['title']; ?>" required>
        <input type="text" name="author" value="<?php echo $book['author']; ?>" required>
        <input type="text" name="genre" value="<?php echo $book['genre']; ?>">
        <input type="number" name="published_year" value="<?php echo $book['published_year']; ?>">
        <button type="submit">Update Book</button>
    </form>
</body>
</html>

<?php
include 'config.php';

// Fetch all books
$stmt = $conn->query("SELECT * FROM books");
$books = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Library Management</title>
</head>
<body>
    <h1>Library Management</h1>

    <!-- Add New Book Form -->
    <form action="create.php" method="post">
        <input type="text" name="title" placeholder="Book Title" required>
        <input type="text" name="author" placeholder="Author" required>
        <input type="text" name="genre" placeholder="Genre">
        <input type="number" name="published_year" placeholder="Published Year">
        <button type="submit">Add Book</button>
    </form>

    <!-- Display All Books -->
    <h2>Book List</h2>
    <table border="1">
        <tr>
            <th>Title</th>
            <th>Author</th>
            <th>Genre</th>
            <th>Year</th>
            <th>Actions</th>
        </tr>
        <?php foreach ($books as $book): ?>
        <tr>
            <td><?php echo $book['title']; ?></td>
            <td><?php echo $book['author']; ?></td>
            <td><?php echo $book['genre']; ?></td>
            <td><?php echo $book['published_year']; ?></td>
            <td>
                <a href="update.php?id=<?php echo $book['id']; ?>">Edit</a>
                <a href="delete.php?id=<?php echo $book['id']; ?>">Delete</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>

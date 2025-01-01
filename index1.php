<?php include 'includes/db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Case Study Tool</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <div class="container">
        <h1>Search Case Studies</h1>
        <form method="GET" action="index1.php">
            <input type="text" name="search" placeholder="Search by title or tags">
            <button type="submit">Search</button>
        </form>

        <h2>Results</h2>
        <ul>
            <?php
            $query = "SELECT * FROM case_studies";
            if (isset($_GET['search']) && !empty($_GET['search'])) {
                $search = $conn->real_escape_string($_GET['search']);
                $query .= " WHERE title LIKE '%$search%' OR tags LIKE '%$search%'";
            }
            $result = $conn->query($query);
            while ($row = $result->fetch_assoc()) {
                echo "<li><a href='view.php?id=" . $row['id'] . "'>" . $row['title'] . "</a></li>";
            }
            ?>
        </ul>
    </div>
</body>
</html>

<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    $query = "SELECT * FROM case_studies WHERE id = $id";
    $result = $conn->query($query);
    $caseStudy = $result->fetch_assoc();
} else {
    die("Invalid request.");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Case Study</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <div class="container">
        <h1><?php echo $caseStudy['title']; ?></h1>
        <p><strong>Category:</strong> <?php echo $caseStudy['category']; ?></p>
        <p><strong>Tags:</strong> <?php echo $caseStudy['tags']; ?></p>
        <a href="<?php echo $caseStudy['file_path']; ?>" download>Download File</a>
    </div>
</body>
</html>

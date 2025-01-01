<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $conn->real_escape_string($_POST['title']);
    $category = $conn->real_escape_string($_POST['category']);
    $tags = $conn->real_escape_string($_POST['tags']);

    $file = $_FILES['file'];
    $filePath = 'uploads/' . basename($file['name']);

    if (move_uploaded_file($file['tmp_name'], $filePath)) {
        $query = "INSERT INTO case_studies (title, category, tags, file_path, uploaded_at) VALUES ('$title', '$category', '$tags', '$filePath', NOW())";
        if ($conn->query($query)) {
            echo "File uploaded successfully!";
        } else {
            echo "Database error: " . $conn->error;
        }
    } else {
        echo "Failed to upload file.";
    }
}
?>

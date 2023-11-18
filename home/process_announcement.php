<?php
// process_announcement.php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get form data
    $title = $_POST['title'];
    $content = $_POST['content'];

    // Insert the new announcement into the database (replace with your database connection logic)
    $conn = new mysqli("localhost", "root", "", "aietclub");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO announcements (title, content, created_at) VALUES ('$title', '$content', NOW())";

    $response = array();

    if ($conn->query($sql) === TRUE) {
        $response['status'] = 'success';
    } else {
        $response['status'] = 'error';
        $response['message'] = $conn->error;
    }

    $conn->close();

    header('Content-Type: application/json');
    echo json_encode($response);
}
?>

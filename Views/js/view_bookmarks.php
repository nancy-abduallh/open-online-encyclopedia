<?php session_start();
 require_once'../controls/dbcon.php'; 
//  require_once 'index.php';
 ?>
 <?php
session_start();

if (isset($_SESSION['user_id'])) {
    $userId = $_SESSION['user_id'];

    // TODO: Establish database connection
    // Example: $conn = new mysqli($servername, $username, $password, $dbname);

    // Fetch bookmarks for the user
    $stmt = $con->prepare("SELECT id, page_url, page_title FROM bookmark WHERE user_id = ?");
    $stmt->bind_param("i", $userId);
    $stmt->execute();
    $result = $stmt->get_result();

    $bookmarks = [];
    while ($row = $result->fetch_assoc()) {
        $bookmarks[] = $row;
    }

    $stmt->close();

    // Display bookmarks as JSON response
    echo json_encode($bookmarks);
} else {
    echo json_encode(['error' => 'Unauthorized']);
}
?>

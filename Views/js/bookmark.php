<?php session_start();
 require_once'../controls/dbcon.php'; 
//  require_once 'index.php';
 ?>
<?php
session_start();

if (isset($_SESSION['user_id']) && isset($_POST['page_url']) && isset($_POST['page_title'])) {
    $userId = $_SESSION['user_id'];
    $pageUrl = $_POST['page_url'];
    $pageTitle = $_POST['page_title'];

    // TODO: Establish database connection
    // Example: $conn = new mysqli($servername, $username, $password, $dbname);

    // Insert bookmark into database
    $stmt = $con->prepare("INSERT INTO bookmarks (user_id, page_url, page_title) VALUES (?, ?, ?)");
    $stmt->bind_param("iss", $userId, $pageUrl, $pageTitle);
    $stmt->execute();
    $stmt->close();

    echo json_encode(['success' => true]);
} else {
    echo json_encode(['error' => 'Unauthorized']);
}
?>


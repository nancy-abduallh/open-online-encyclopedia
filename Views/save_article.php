<?php
// Check if the content parameter is received via POST request
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['content'])) {
    $editedContent = $_POST['content'];
    
    // Replace database connection details with your actual database credentials
    $servername = "localhost";
$username = "root";
$password = "";
$dbname = "encyclopedia";
$con = new mysqli($servername, $username, $password, $dbname);
if ($con->connect_error) {
die("Connection failed: " . $con->connect_error);
    }

    // Prepare SQL statement to update the article content in the database
    $sql = "UPDATE article SET content = '" . $con->real_escape_string($editedContent) . "' WHERE id = 11"; // Modify the WHERE clause as needed

    if ($conn->query($sql) === TRUE) {
        echo "Changes saved successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }

    $con->close();
} else {
    echo "Invalid request.";
}
?>

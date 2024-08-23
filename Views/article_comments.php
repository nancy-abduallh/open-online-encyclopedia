
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Display Comments</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin-bottom: 20px;
        }
        .comment {
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 30px;
        }
        .comment p {
            margin-bottom: 30px;
            margin: 5px 0;
        }
        #username,#comment{
            color:cornflowerblue;


        }
    </style>
</head>
<body>
<?php
//  session_start();
 require_once'../controls/dbcon.php'; 
//  require_once 'index.php';

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "encyclopedia";
$con = new mysqli($servername, $username, $password, $dbname);
if ($con->connect_error) {
die("Connection failed: " . $con->connect_error);
    }



    if (isset($_GET['page_id'])) {
        $pageId = $_GET['page_id'];
    }
        // $pageId = 1;

    //     $sql1 = "SELECT page_id FROM page";
    //  $pageId = $con->query($sql1);

    //  $qry = "SELECT article_id FROM article";
    //  $articleId = $con->query($qry);

    $articleId = 1;

    // $user_id = $_SESSION['user_id'];

    

// SQL query to retrieve comments of the logged-in user
$sql = "SELECT comments.comment_text, user.username
        FROM comments 
        INNER JOIN user ON comments.user_id = user.user_id 
        WHERE comments.page_id =$pageId AND comments.article_id=$articleId ";
$result = $con->query($sql);

// Display comments
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo '<div class="comment" >';
        echo "<p id='username'><strong> <u>Username:</u> </strong></p>" . $row["username"] . "<br> " ;
        echo"<p id='comment'> <strong><u>Comment:</u></strong></p>". $row["comment_text"] ."<br> ";
        echo '</div>';
    }
} else {
    echo "No comments yet.";
}

// Close connection
$con->close();
    

 ?>
 </body>
</html>
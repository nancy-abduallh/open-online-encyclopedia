<?php
session_start();
 require_once'../controls/dbcon.php';





 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "encyclopedia";
 $con = new mysqli($servername, $username, $password, $dbname);
 if ($con->connect_error) {
 die("Connection failed: " . $con->connect_error);
     }


    //  $sql = "SELECT page_id FROM page";
    //  $pageId = $con->query($sql);

    //  $qry = "SELECT article_id FROM article";
    //  $articleId = $con->query($qry);

     
     if ($_SERVER["REQUEST_METHOD"] == "POST") {
     $pageId = $_POST["page_id"];
     $articleId = $_POST['article_id'];
     $user_id = $_SESSION['user_id'];
     $comment_text = $_POST['comment_text'];
     
     // Insert comment into database
     $sql = "INSERT INTO comments (page_id,user_id,article_id, comment_text) VALUES ('$pageId','$user_id','$articleId', '$comment_text')";
     
     if ($con->query($sql) === TRUE) {
         echo "Comment posted successfully!";

     } else {
         echo "Error: " . $sql . "<br>" . $con->error;
     }
     
     // Close connection
     $con->close();

    }

?>
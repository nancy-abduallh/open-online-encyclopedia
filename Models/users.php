
<?php 
 require_once'../controls/dbcon.php'; 

require_once 'Bookmark.php';
require_once 'Page.php';
require_once 'Device.php';
require_once 'Article.php';
require_once 'person.php';



class Users extends person{
    private $userid;
    private $username;
    private $bookmarks = [];
    private $history = [];
    
    public function __construct($userid, $username) {
        $this->userid = $userid;
        $this->username = $username;
    }
    public function getUserId() {
        return $this->userid;
    }
    public function getUsername(){
        return $this->username;
    }
    

    public function setUsername($username){
        $this->username=$username;
    }
    public function bookmarkPage($page) {
        $this->bookmarks[] = $page;
        echo "Page bookmarked successfully.\n";
    }
    public function organizeBookmarks($device) {
        echo "Bookmarks organized for device: $device\n";
    }

    public function viewHistory($history) {
        echo "Viewing search history:\n";
        foreach ($history as $article) {
            echo "- " . $article . "\n";
        }
    }

    public function readArticle($article) {
        echo "Reading article: $article\n";
    }
}
    
?>
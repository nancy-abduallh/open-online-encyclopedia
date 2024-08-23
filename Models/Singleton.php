<?php
 require_once'../Controls/dbcon.php'; 
 
 // Singleton Class
class Singleton {
    private static $instance;
    

    // Get the singleton instance
    public static function getInstance(): Singleton {
        if (!self::$instance) {
            self::$instance = new Singleton();
        }
        return self::$instance;
    }
    private function _clone(){}

    private $connection= null;

    // Private constructor to prevent instantiation
    private function __construct() 
    {  
          require_once'../Controls/dbcon.php'; 

 $this -> connection=mysqli_connect('localhost','root','');
   if($this->connection ) {
    mysqli_select_db($con,'encyclopedia');
   }

    }
    

    // Method to get collaborative editing system instance
    public function collaborativeEditingSystem(): EditingSystem {
        return new EditingSystem(); // Placeholder for actual implementation
    }

    // Method to get article management system instance
    public function articleManagementSystem(): ArticleManagementSystem {
        return new ArticleManagementSystem(); // Placeholder for actual implementation
    }

    // Method to get bookmark and list management system instance
    public function bookmarkAndListManagement(): BookmarkManagementSystem {
        return new BookmarkManagementSystem(); // Placeholder for actual implementation
    }

    // Method to get explore feed customization system instance
    public function exploreFeedCustomization(): FeedCustomizationSystem {
        return new FeedCustomizationSystem(); // Placeholder for actual implementation
    }

    // Method to get search history system instance
    public function searchHistory(): SearchHistorySystem {
        return new SearchHistorySystem(); // Placeholder for actual implementation
    }
}

// Placeholder classes for different systems/modules
class EditingSystem {}
class ArticleManagementSystem {}
class BookmarkManagementSystem {}
class FeedCustomizationSystem {}
class SearchHistorySystem {}


?>

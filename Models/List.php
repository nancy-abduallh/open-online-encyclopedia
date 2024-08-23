
<?php
class ListClass {
    private $listId;
    private $name;
    private $pages = []; // Array to store instances of Page

    public function __construct($listId, $name) {
        $this->listId = $listId;
        $this->name = $name;
    }

    // Setters and Getters for listId
    

    public function getListId() {
        return $this->listId;
    }

    // Setters and Getters for name
    public function setName($name) {
        $this->name = $name;
    }

    public function getName() {
        return $this->name;
    }

    // Method to add a page to the list
    public function addPage(Page $page) {
        $this->pages[] = $page;
    }

    // Method to remove a page from the list
    public function removePage(Page $page) {
        $key = array_search($page, $this->pages, true);
        if ($key !== false) {
            unset($this->pages[$key]);
            return true;
        }
        return false;
    }

    // Method to search pages by keyword
    public function searchPages($keyword) {
        $result = [];
        foreach ($this->pages as $page) {
            if (stripos($page->getTitle(), $keyword) !== false) {
                $result[] = $page;
            }
        }
        return $result;
    }

    // Method to reorganize pages offline (e.g., sorting, reordering)
    public function reorganizeOffline() {
        // Implementation for reorganizing pages offline (e.g., sorting by title)
        usort($this->pages, function($a, $b) {
            return strcasecmp($a->getTitle(), $b->getTitle());
        });
    }

    // Method to sort pages by title
    public function sort() {
        // Implementation for sorting pages by title
        usort($this->pages, function($a, $b) {
            return strcasecmp($a->getTitle(), $b->getTitle());
        });
    }
}
?>
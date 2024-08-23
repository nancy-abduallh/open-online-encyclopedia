<?php

class Bookmark {
    private $bookmarkId;
    private $page;

    // Constructor
    public function __construct($bookmarkId, $page) {
        $this->bookmarkId = $bookmarkId;
        $this->page = $page;
    }

    // Method to view the bookmarked page
    public function viewPage() {
        return $this->page;
    }
}






?>
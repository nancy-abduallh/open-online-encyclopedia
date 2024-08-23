<?php


class History {
    private $historyId;
    private $searchDate;
    private $users = [];
    private $articlesViewed = [];

    // Constructor to initialize attributes
    public function __construct($historyId, $searchDate) {
        $this->historyId = $historyId;
        $this->searchDate = $searchDate;
    }

    // Setter for historyId
    public function setHistoryId($historyId) {
        $this->historyId = $historyId;
    }

    // Getter for historyId
    public function getHistoryId() {
        return $this->historyId;
    }

    // Setter for searchDate
    public function setSearchDate($searchDate) {
        $this->searchDate = $searchDate;
    }

    // Getter for searchDate
    public function getSearchDate() {
        return $this->searchDate;
    }

    // Method to save viewed article
    public function saveArticleViewed(Article $article) {
        $this->articlesViewed[] = $article;
        echo "Article '{$article->getTitle()}' viewed on '{$this->searchDate}' saved to history.\n";
    }

    // Method to get previous articles viewed
    public function getPreviousArticles() {
        $list = new ListClass(1, 'Previous Articles');
        foreach ($this->articlesViewed as $article) {
            $list->addPage($article); // Assuming List has method addPage to add articles
        }
        return $list;
    }
}












?>
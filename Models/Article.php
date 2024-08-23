<?php

class Article {
    private $articleId;
    private $title;
    private $content;
    private $language;
    private $creationDate;

    // Constructor
    public function __construct($articleId, $title, $content, $language, $creationDate) {
        $this->articleId = $articleId;
        $this->title = $title;
        $this->content = $content;
        $this->language = $language;
        $this->creationDate = $creationDate;
    }

    public function setContent($content) {
        $this->content = $content;
    }

    // Getter method to retrieve article content
    public function getContent() {
        return $this->content;
    }
    public function setTitle($title) {
        $this->title = $title;
    }

    // Getter method to retrieve article title
    public function getTitle() {
        return $this->title;
    }
    public function setLanguage($language) {
        $this->language = $language;
    }

    // Getter method to retrieve article language
    public function getLanguage() {
        return $this->language;
    }

    // Getter method to retrieve article creation date
    public function getCreationDate() {
        return $this->creationDate;
    }
}

?>

<?php

require_once 'Editor.php';

class Page {
    private $pageId;
    private $title;
    private $content;
    private $language;
    private $contributors;

    // Constructor
    public function __construct($pageId, $title, $content, $language) {
        $this->pageId = $pageId;
        $this->title = $title;
        $this->content = $content;
        $this->language = $language;
        $this->contributors = [];
    }

    // Getter for pageId
    public function getPageId() {
        return $this->pageId;
    }
    public function setTitle($title) {
        $this->title = $title;
    }

    // Getter for title
    public function getTitle() {
        return $this->title;
    }

    public function setContent($content) {
        $this->content = $content;
    }

    // Getter for content
    public function getContent() {
        return $this->content;
    }

    public function setLanguage($language) {
        $this->language = $language;
    }

    // Getter for language
    public function getLanguage() {
        return $this->language;
    }

    // Method to add a contributor
    public function addContributor($editor) {
        // Check if the editor is not already a contributor
        if (!$this->isContributor($editor)) {
            $this->contributors[] = $editor;
            echo "Editor {$editor->getUsername()} added as a contributor to {$this->title}.\n";
        } else {
            echo "Editor {$editor->getUsername()} is already a contributor to {$this->title}.\n";
        }
    }

    // Method to remove a contributor
    public function removeContributor($editor) {
        // Find and remove the editor from contributors list
        foreach ($this->contributors as $key => $contributor) {
            if ($contributor === $editor) {
                unset($this->contributors[$key]);
                echo "Editor {$editor->getUsername()} removed from contributors of {$this->title}.\n";
                return true;
            }
        }
        echo "Editor {$editor->getUsername()} is not a contributor to {$this->title}.\n";
        return false;
    }

    // Method to check if an editor is a contributor
    private function isContributor($editor) {
        foreach ($this->contributors as $contributor) {
            if ($contributor === $editor) {
                return true;
            }
        }
        return false;
    }

    // Method to edit the content of the page
    public function editContent($newContent) {
        // Update the content of the page
        $this->content = $newContent;
        echo "Content of {$this->title} updated.\n";
        return true;
    }
}

?>

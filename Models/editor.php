<?php

require_once('Page.php');
require_once('Article.php');

class Editor {
    private $editorId;
    private $username;

    // Constructor
    public function __construct($editorId, $username) {
        $this->editorId = $editorId;
        $this->username = $username;
    }

 public function getEditorId() {
        return $this->editorId;
    }

    public function setEditorId($editorId) {
        $this->editorId = $editorId;
    }

    public function getUsername() {
        return $this->username;
    }

    public function setUsername($username) {
        $this->username = $username;
    }

    public function createPage($pageId,$title, $content , $language) {
        return new Page($pageId,$title, $content,  $language);
    }

    public function editPage($page, $newContent) {
        $page->setContent($newContent);
    }

    public function removePage($page) {
        return true;
    }

    public function writeArticle($articleId,$title, $content, $language,$creationDate) {
        return new Article($articleId,$title, $content, $language,$creationDate);
    }

    public function editArticle($article, $newContent) {
        $article->setContent($newContent);
    }

   
}

?>

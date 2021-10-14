<?php

class CCaisse {

    private $_id;
    private $_row;
    private $_col;
    private $_article;

    public function __construct($id, $col = null, $row = null, $article = null) {
        $this->_id = $id;
        $this->_row = $row;
        $this->_col = $col;
        $this->_article = $article;
    }

    public function setId($id) {
        $this->_id = $id;
    }

    public function setRow($row) {
        $this->_row = $row;
    }

    public function setCol($col) {
        $this->_col = $col;
    }

    public function setArticle(CArticle $article) {
        $this->_article = $article;
    }

    public function getId() {
        return $this->_id;
    }

    public function getRow() {
        return $this->_row;
    }

    public function getCol() {
        return $this->_col;
    }

    public function getArticle() {
        return $this->_article;
    }
}

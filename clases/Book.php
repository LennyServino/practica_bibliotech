<?php
class Book{
    private $id_book;
    private $isbn;
    private $title;
    private $year_publication;
    private Category $category;
    private Author $author;
    private $status;

    public function __construct($id_book, $isbn, $title, $year_publication, Category $category, Author $author, $status) {
        $this->id_book = $id_book;
        $this->isbn = $isbn;
        $this->title = $title;
        $this->year_publication = $year_publication;
        $this->category = $category;
        $this->author = $author;
        $this->status = $status;
    }

    public function getDetails(){
        return array(
            'id_book' => $this->id_book,
            'isbn' => $this->isbn,
            'title' => $this->title,
            'year_publication' => $this->year_publication,
            'id_category' => $this->category->getName(),
            'id_author' => $this->author->getDetails(),
            'status' => $this->status
        );
    }

    public function setStatus($status){
        $this->status = $status;
    }
}
?>
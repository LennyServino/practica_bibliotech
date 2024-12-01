<?php
class Book{
    private $id_book;
    private $isbn;
    private $title;
    private $year_publication;
    private $id_category;
    private $id_author;
    private $status;

    public function __construct($id_book, $isbn, $title, $year_publication, $id_category, $id_author, $status){
        $this->id_book = $id_book;
        $this->isbn = $isbn;
        $this->title = $title;
        $this->year_publication = $year_publication;
        $this->id_category = $id_category;
        $this->id_author = $id_author;
        $this->status = $status;
    }

    public function getDetails(){
        return array(
            'id_book' => $this->id_book,
            'isbn' => $this->isbn,
            'title' => $this->title,
            'year_publication' => $this->year_publication,
            'id_category' => $this->id_category,
            'id_author' => $this->id_author,
            'status' => $this->status
        );
    }

    public function setStatus($status){
        $this->status = $status;
    }
}
?>
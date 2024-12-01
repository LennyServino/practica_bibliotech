<?php
interface BookManager{
    public function addBook($id_book, $title, $author, $category, $editorial, $year, $pages, $isbn, $quantity);

    public function updateBook($id_book, $title, $author, $category, $editorial, $year, $pages, $isbn, $quantity);

    public function deleteBook($id_book);
}

interface searchBook{
    public function searchBook($id_book);
}
?>
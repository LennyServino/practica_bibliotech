<?php
interface BookManager {
    public function addBook($id_book, $isbn, $title, $year_publication, $categoryName, $authorName, $status);
    public function updateBook($id_book, $isbn, $title, $year_publication, $categoryName, $authorName, $status);
    public function deleteBook($id_book);
}

interface searchBook{
    public function searchBook($id_book);
}
?>
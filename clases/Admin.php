<?php

require_once 'User.php';
require_once 'ServiceBook.php';
require_once 'Book.php';
require_once 'Category.php';
require_once 'Author.php';

class Administrador extends User implements BookManager, searchBook {
    public function __construct($id_user, $email, $password) {
        parent::__construct($id_user, $email, $password);
    }

    public function addBook($id_book, $isbn, $title, $year_publication, $categoryName, $authorName, $status) {
        $category = new Category(1, $categoryName); // Crea un objeto Category
        $author = new Author(1, $authorName, ''); // Crea un objeto Author
        $book = new Book($id_book, $isbn, $title, $year_publication, $category, $author, $status);
        return $book;
    }

    public function updateBook($id_book, $isbn, $title, $year_publication, $categoryName, $authorName, $status) {
        $category = new Category(1, $categoryName); // Crea un objeto Category
        $author = new Author(1, $authorName, ''); // Crea un objeto Author
        $book = new Book($id_book, $isbn, $title, $year_publication, $category, $author, $status);
        return $book;
    }

    public function deleteBook($id_book) {
        return $id_book;
    }

    public function searchBook($id_book) {
        return $id_book;
    }
}
?>
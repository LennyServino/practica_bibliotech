<?php
class BookLoanManager{
    private $id_book_loan;
    private $date_loan;
    private $date_devolution;
    private Book $book;
    private $name_client;
    private $number_id_client;

    public function registerLoan($id_book_loan, $date_loan, $date_devolution, Book $book, $name_client, $number_id_client){
        $this->id_book_loan = $id_book_loan;
        $this->date_loan = $date_loan;
        $this->date_devolution = $date_devolution;
        $this->book = $book;
        $this->name_client = $name_client;
        $this->number_id_client = $number_id_client;
    }

    public function updateBookStatus($book){
        $book->setStatus('Prestado');
    }
}
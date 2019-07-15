<?php
class BookBorrower {
    private $borrowedBook;
    private $haveBook = false;

    function __construct() {
    }

    function getAuthorAndTitle() {
        if (TRUE == $this->haveBook) {
            return $this->borrowedBook->getAuthorAndTitle();
        }
        else {
            return "I don't have the book";
        }
    }

    function borrowBook() {
        $this->borrowedBook = BookSingleton::borrowBook();
        if ($this->borrowedBook == null) {
            $this->haveBook = false;
        }
        else {
            $this->haveBook = true;
        }
    }

    function returnBook() {
        $this->borrowedBook->returnBook($this->borrowedBook);
    }
}
?>
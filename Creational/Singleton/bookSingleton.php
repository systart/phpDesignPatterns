<?php
class BookSingleton {
    private $author = 'Gamma, Helm, Johnson, and Vlissides';
    private $title  = 'Design Patterns';
    private static $book = null;
    private static $isLoanedOut = false;

    private function __construct() {
    }

    static function borrowBook() {
        if (false == self::$isLoanedOut) {
            if (null == self::$book) {
                self::$book = new BookSingleton();
            }
            self::$isLoanedOut = TRUE;
            return self::$book;
        }
        else {
            return null;
        }
    }

    function returnBook(BookSingleton $bookReturned) {
        self::$isLoanedOut = false;
    }

    function getAuthor() {
        return $this->author;
    }

    function getTitle() {
        return $this->title;
    }

    function getAuthorAndTitle() {
      return $this->getTitle() . ' by ' . $this->getAuthor();
    }
}
?>
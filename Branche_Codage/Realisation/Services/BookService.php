<?php
require("../DataAccess/BookDAO.php");

class BookService
{
  public function getBooks()
  {
    $dataBase = new BookDAO();
    return $dataBase->getBooks();
  }

  public function setBook($book)
  {
    $bookDAO = new BookDAO();
    $bookDAO->setBook($book);
  }
   public function deleteBook($id)
  {
    $bookDAO = new BookDAO();
    $bookDAO->deleteBook($id);
  }
}
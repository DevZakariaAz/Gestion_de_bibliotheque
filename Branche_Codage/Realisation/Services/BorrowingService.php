<?php
require("../DataAccess/BorrowingDAO.php");

class BorrowingService
{
  public function viewBorrowings()
  {
    $borrowingDAO = new BorrowingDAO();
    return $borrowingDAO->viewBorrowings();
  }
  public function addBorrowing($borrowing)
  {
    $borrowingDAO = new BorrowingDAO();
    $borrowingDAO->addBorrowing($borrowing);
  }
  public function deleteBorrowing($id)
  {
    $borrowingDAO = new BorrowingDAO();
    $borrowingDAO->deleteBorrowing($id);
  }
}
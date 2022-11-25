<?php

class ReservationController
{
    public function ListReservation()
    {

    }
}



class BookController
{
    private BookRepository $bookRepository;

    private AuthorRepository $authorRepository;

    public function __construct($dbh)
    {
        $this->bookRepository = new BookRepository($dbh);

        $this->authorRepository = new AuthorRepository($dbh);
    }

    public function list(): void
    {
        $title = 'Liste des livres';

        $authors  = $this->authorRepository->getList();
        $books = $this->bookRepository->getBooks($_POST);

        include BASE_PATH . '/View/head.html.php';
        include BASE_PATH . '/View/book/list.html.php';
        include BASE_PATH . '/View/footer.html.php';
    }



?>


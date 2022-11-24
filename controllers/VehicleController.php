<?php

class VehicleController
{
    private VehicleRepository $vehicleRepository;

    private ModelRepository $modelRepository;

    public function __construct($dbh)
    {
        $this->VehicleRepository = new VehicleRepository($dbh);

        $this->authorRepository = new AuthorRepository($dbh);
    }

    public function list(): void
    {
        $title = 'Liste des voitures';

        $authors  = $this->authorRepository->getList();
        $books = $this->VehicleRepository->getBooks($_POST);

        include BASE_PATH . '/View/head.html.php';
        include BASE_PATH . '/View/vehicle/list.html.php';
        include BASE_PATH . '/View/footer.html.php';
    }

}

?>

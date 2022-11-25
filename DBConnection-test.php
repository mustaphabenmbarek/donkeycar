<?php
// l'idée est de créer une class permettra de se connecter à la bdd et ainsi de faire des requetes

//namespace database;

//use PDO;

class DBConnection
{
    // private pour réutilser les variables stockées à l'interieur de cette classe
    private $dbname;
    private $host;
    private $username;
    private $password;
    private $pdo;

    // construction de la classe DBConnection
    public function __construct(string $dbname, string $host, string $username, string $password)
    {
        // this->dbname est stocké dans $dbname et idem pour les autres
        $this->dbname = $dbname;
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
    }

    // cette methode nous renvoie une instance de pdo
    public function getPDO(): PDO
    {
        return $this->pdo ?? $this->pdo = new PDO("mysql:dbname={$this->dbname}; host={$this->host}", 
        $this->username, $this->password);
        // PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
        // PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);
    }

}

?>
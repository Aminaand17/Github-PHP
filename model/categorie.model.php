<?php
require_once("../core/Model.php");
class CategorieModel extends Model{
    public function __construct() {
        $this->ouvrirConnexion();
        $this->table="categorie";
    }

    public function findAll(): array
{
    
    return $this->executeSelect("SELECT * FROM categorie");
        
        
}


public function save(array $type): int
{
   

        extract($type);
        $sql="INSERT INTO `categorie` (`nomCategorie`) VALUES ('$nomCategorie')";
            return $this->executeUpdate($sql);
    }

}


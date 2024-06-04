<?php
require_once("../core/Model.php");
class TypeModel extends Model{
    public function __construct() {
        $this->ouvrirConnexion();
        $this->table="type";
    }

    public function findAll(): array
{
    
    return $this->executeSelect("SELECT * FROM type");
        
        
}

public function save(array $type): int
{
   

        extract($type);
        $sql="INSERT INTO `type` (`nomType`) VALUES ('$nomType')";
            return $this->executeUpdate($sql);
    }

}
       
?>
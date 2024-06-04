<?php
require_once("../core/Model.php");
class ArticleModele extends Model {

    public function __construct() {
        $this->ouvrirConnexion();
        $this->table="article";
    }

public function findAll(): array
{
    
    return $this->executeSelect("SELECT * FROM `article` a , categorie c, `TYPE` t WHERE a.id_type=t.id and a.id_categorie=c.id;");
        
        
}

public function save(array $type): int
{
  

        extract($type); 
        $sql="INSERT INTO `article` ( `nomArticle`, `prixAppro`, `qteStock`, `id_type`, `id_categorie`) VALUES ( '$nomArticle', '$prixAppro', '$qteStock', '$id_type',$id_categorie);";
            return $this->executeUpdate($sql);
   

}
}

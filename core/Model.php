<?php 
    class Model{
        protected string $dsn = 'mysql:host=localhost:3306;dbname=cours_php_ism_2024';
        protected $username = 'root';
        protected $password = 'nouveau_mot_de_passe';
        protected ?PDO $pdo=null;
        protected string $table;
        public function ouvrirConnexion():void
        {
        
            try {
                if ( $this->pdo==null) {
                    $this->pdo = new PDO($this->dsn, $this->username, $this->password);
                }
  
            
            } catch (PDOException $e) {
                // Gestion des erreurs de connexion
                echo "Erreur de connexion : " . $e->getMessage();

            }

        }
        public function fermerConnexion():void
        {
        
                if ( $this->pdo!=null) {
                  $this->pdo=null;  
         
        }
        }
    
protected function executeSelect(string $sql,bool $fetch=false):array {
    try {
        
       
        $stm = $this->pdo->query( $sql);
        return $fetch? $stm->fetch(PDO::FETCH_ASSOC): $stm->fetchAll(PDO::FETCH_ASSOC);
        
 
    
    } catch (PDOException $e) {
        // Gestion des erreurs de connexion
        echo "Erreur de connexion : " . $e->getMessage();

    }
}

public function executeUpdate(string $sql): int
{
  
    try {
            return $this->pdo->exec($sql);
    } catch (PDOException $e) {
        // Gestion des erreurs de connexion
        echo "Erreur de connexion : " . $e->getMessage();
    }
}
public function findAll(): array

{
        return $this->executeSelect("SELECT * FROM $this->table ");

}
}





    
?>
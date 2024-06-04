<?php
require_once("../model/categorie.model.php");
require_once("../core/Controller.php");
class CategorieController extends Controller {

    
    private CategorieModel $categorieModel;
    
  
      public function __construct() {
        
          $this->categorieModel= new CategorieModel();

          $this->load();
      }
    public function load(){
        $this->layout="base";
        if (isset($_REQUEST['action'])){
            if ($_REQUEST['action'] == "add-categorie"){
                unset($_POST['action']);
                unset($_POST['controller']);
                $this->ajouterCategorie($_POST);

            } elseif ($_REQUEST['action'] == "liste-categorie"){
                $this->listerCategorie();
            }
        }else{
            $this->listerCategorie();
          }
    }

function ajouterCategorie(array $data): void {
    $this->categorieModel->save($data);
        header("location:".WEBROOT."/?controller=categorie&action=liste-categorie");

}

function listerCategorie(): void {
    // $categories = $this->categorieModel->findAll();
    $this-> renderView("categorie/liste",["categories"=>$this->categorieModel->findAll()]); 
}

}
?>
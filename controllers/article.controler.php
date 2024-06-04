<?php
require_once("../model/article.model.php");
require_once("../model/categorie.model.php");
require_once("../model/type.model.php");
require_once("../core/Controller.php");
class ArticleController extends Controller { 
  private ArticleModele $articleModel;
  private CategorieModel $categorieModel;
  private TypeModel $typeModel;

    public function __construct() {
        $this->articleModel= new ArticleModele();
        $this->categorieModel= new CategorieModel();
        $this->typeModel= new TypeModel();
        $this->load();
    }
  private function load(){
    $this->layout="base";
    if (isset($_REQUEST['action'])){
      if ($_REQUEST['action']=="liste-article"){
        $this->listerArticle();
      }elseif($_REQUEST['action']=="form-article") {
        $this->chargerFormulaire();
      }
    
      elseif($_REQUEST['action']=="add-article") {
        unset($_POST['action']);
        unset($_POST['controller']);
        $this->ajouterArticle($_POST);
      }
      
    
    }else{
      $this->listerArticle();
    }
    
  }

  

public function listerArticle(): void{
  // $articles = $this->typeModel->findAll();
  $this->renderView("article/liste",["articles"=>$this->articleModel->findAll()]);     
 
     
  }

   
    public function chargerFormulaire():void{

      $this->renderView("article/form",[
        "categories"=>$this->categorieModel->findAll(),
        "types"=>$this->articleModel->findAll()]);     
     
  
    }
 
   public function ajouterArticle(array $data):void{
    $this->articleModel->save($data);
      header("location:".WEBROOT."/?controller=article&action=liste-article");
    }
        
  }  
    
    ?>
 
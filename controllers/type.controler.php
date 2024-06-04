<?php

require_once("../model/type.model.php");
require_once("../core/Controller.php");
class TypeController extends Controller{ 
   
    private TypeModel $typeModel;
    public function __construct() {

        //   parent::__construct();
          $this->typeModel= new TypeModel();
          $this->load();
      }
      private function load(){
        $this->layout="base";
        if (isset($_REQUEST['action'])){
            if ($_REQUEST['action'] == "add-type"){
                unset($_POST['action']);
                unset($_POST['controller']);
                $this->ajouterType($_POST);

            } elseif ($_REQUEST['action'] == "liste-type"){
                $this->listerType();
            }
        }else{
            $this->listerType();
          }
        }

public function ajouterType(array $data): void {
    $this->typeModel->save($data);
        header("location:".WEBROOT."/?controller=type&action=liste-type");
    }
    public function listerType(): void {
        // $datas = $this->typeModel->findAll();
        $this->renderView("type/liste",["types"=>$this->typeModel->findAll()]); 
        
    }
}




?>
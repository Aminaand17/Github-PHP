<?php
class Router {
    public static function run(){
        
        if (isset($_REQUEST['controller'])) {
            if ($_REQUEST['controller'] == "article") {
                require_once("../controllers/article.controler.php");
                $controller=new ArticleController();
    
            } elseif ($_REQUEST['controller'] == "type") {
                require_once("../controllers/type.controler.php");
                $controller=new TypeController();
                
            } elseif ($_REQUEST['controller'] == "categorie") {
                require_once("../controllers/categorie.controler.php");
                $controller=new CategorieController();
            }
        }
    }
   

}

?>
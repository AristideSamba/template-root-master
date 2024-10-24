<?php
    class Views{
        static function root(){
            if(isset($_GET['page'])){
                print "numero de page: ".$_GET['page'];

                # condition imbriquée 
                $views = $_GET['page'];
                if($views == 1){
                    include_once './views/presentation.html';
                }if($views == 2){
                    include_once './views/formation.html';
                }if($views == 3){
                    include_once './views/about.html';
                }else if($views >= 3 || $views <= 0){
                    print "<p> Erreur : la page demandé n'exsite pas !!";
                }
            }
            else{
                include_once './views/presentation.html';
            }
        }
    }
    #appel de la fonction
    Views::root();
?>
<?php
    $link='mysql:host=localhost;dbname=1146313';
    $usuario='1146313';
    $pass='kawasakiwa03';
 /*
 auciliar
    $link='mysql:host=fdb33.awardspace.net;dbname=sql5509674';
    $usuario='sql5509674';
    $pass='k5ZSKrpe2V-';
       */
      /*
      local
    $link='mysql:host=localhost;dbname=redsocial';
    $usuario='root';
    $pass='';
      */ 
    try{
          $conexion = new PDO($link,$usuario,$pass);

    }catch(PDOException$e){
          print"¡Error!: " .$e->getMessage()."<br/>";
          die();
        }
?>
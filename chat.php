<?php
 include_once 'conexion.php';
 session_start();
    //eliminar
    if ($_GET) {
        $id = $_GET['id'];
        $nombre = $_SESSION['nombre'];
    
         //Leer datos necesatios
         $sql_sta = 'SELECT nombre FROM mensajes WHERE id = ?';
         $gsent = $conexion->prepare($sql_sta);
         $gsent -> execute(array($id));
         $nombreTemp = $gsent -> fetch();
    
        if ($nombreTemp['nombre'] == $nombre) {
            $sql_sen = 'DELETE FROM mensajes WHERE id = ?';
            $sentencia_sen = $conexion -> prepare($sql_sen);
            $sentencia_sen -> execute(array($id));
            header('Location:chat.php'); 
        } else {
            echo '<div class="alert alert-danger" role="alert"> El nombre de usted no coinciden con quien escribió el mensaje. </div>';
            
        }
    }

     //agregar
     if ($_POST) {
        $nombre = htmlentities($_POST['nombre']);
        include 'mensaje.php';
        
    
        $error = 0;
        //validacion
        if (empty($nombre) || $nombre == "") {
            echo '<div class="alert alert-danger" role="alert"> El nombre no ha sido colocado </div>';
            $error = 1;
            
        };
        
        if (empty($mensajeTXT) || $mensajeTXT == "") {
            echo '<div class="alert alert-danger" role="alert"> El mesaje no se ha colocado </div>';
            $error = 2;
        };

        //agregar el mensaje
        if ($error == 0 ) {
            $objFecha = new DateTime();  
            $fecha = $objFecha->format("h:iA d-M-Y "); 
            $urlMG = $_POST['urlIMG'];
            //sentencia 
            $sql_agregar = 'INSERT INTO mensajes (nombre, mensaje, urlIMG, fecha) VALUE (?, ?, ?, ?)';
            $_SESSION['nombre']=$nombre;
            $sentencia_agregar = $conexion->prepare($sql_agregar);
            $sentencia_agregar ->execute(array($nombre,$mensajeTXT,$urlMG,$fecha));  
            header('Location:chat.php');          
        }
     };
     
?>
<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css">
   
    <link rel="stylesheet" href="chat.css">
    <script src="chat.js"></script>
    <script src="push.min.js"></script>
    <script src="notificar.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <title>chat</title>
</head>
<body onload="ajax();">
    <div class="areaChat container col-3 mt-5">
        <br>
<div class="areaResivir" id="chat">
</div>
     <!-- Area de input de escriber -->

<div class="areaEscribir">
        <form action="" method="post">
        <input type="text" name="nombre" class="input k3 m-3"   placeholder="Escribe un nombre" <?php if (!empty ($_SESSION['nombre']) ) {echo 'value="'. $_SESSION['nombre'].'"'; } ?>>
        <textarea type="text" name="mensaje" class="input k2 m-3" rows="2"  placeholder="Escribe un mensaje"></textarea> 
        <input type="text" name="urlIMG" class="input k3 m-3" placeholder="URL de imagen">
         
        <button>
            <div class="svg-wrapper-1">
                <div class="svg-wrapper">
                      <a name="escribir"></a>
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="24" height="24">
                    <path fill="none" d="M0 0h24v24H0z"></path>
                    <path fill="currentColor" d="M1.946 9.315c-.522-.174-.527-.455.01-.634l19.087-6.362c.529-.176.832.12.684.638l-5.454 19.086c-.15.529-.455.547-.679.045L12 14l6-8-8 6-8.054-2.685z"></path>
                </svg>
                </div>
            </div>
            <span>Enviar</span>
         </button>
         <br>
    </form>
    <div class="al container">
    <a href="https://postimages.org/es/" target="_blank" class="row m-2">Ir a pagina para subir foto</a>
    <a href="https://docs.google.com/spreadsheets/d/1t9d9vA_rJfA7LWRwdboVtS6U4Wq6sEquNrxv0CjvTw8/edit?usp=sharing" class="row m-2" target="_blank">Lista de emoji</a>
    <a href="imagenesInfo.php"class="row m-2">Como subir imagenes?</a>
    <a href="emojiInfo.php" class="row m-2">Como poner emoji?</a>
    </div>
    <br>
     </div>

</div>
<script src="!doblePost.js"></script>
</body>
</html>
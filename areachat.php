<?php
 include_once 'conexion.php';
 session_start();


     //Leer
     $sql_sta = 'SELECT * FROM mensajes';
     $gsent = $conexion->prepare($sql_sta);
     $gsent -> execute();
     $resultado = $gsent -> fetchAll();
     ?>

<section > 
        <?php foreach($resultado as $mensaje): ?>
        <hr>
        <h4><?php echo $mensaje['nombre'] ?></h4> 
        <p><?php echo $mensaje['mensaje'] ?></p>
        <?php if (!empty($mensaje['urlIMG'])):?>
        <img class="img" <?php echo 'src="'.$mensaje['urlIMG'].'"' ?>>
        <?php endif ?>
        <samp style="float:right"><?php echo $mensaje['fecha']?></samp>
        <a href="chat.php?id=<?php echo $mensaje['id']; ?>" >
         <i class="bi bi-trash"></i>
        </a>
        <div class="espacio"></div>
        <?php endforeach ?>
        <hr>
    </section>

    </section></div>
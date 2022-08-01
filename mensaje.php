<?php
//Emoji
    $mensajeTXT = htmlentities($_POST['mensaje']);
    $mensajeTXT = str_replace(':risa:','<img src="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/72/apple/325/face-with-tears-of-joy_1f602.png" />',$mensajeTXT);
    $mensajeTXT = str_replace(':triste:','<img src="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/72/apple/325/upside-down-face_1f643.png" />', $mensajeTXT);
    $mensajeTXT = str_replace(':enojado:','<img src="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/72/apple/325/face-with-steam-from-nose_1f624.png" />',$mensajeTXT);
    $mensajeTXT = str_replace(':enojado2:','<img src="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/72/apple/325/pouting-face_1f621.png" />',$mensajeTXT);
    $mensajeTXT = str_replace(':corazon:','<img src="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/72/apple/325/red-heart_2764-fe0f.png" />',$mensajeTXT);
    $mensajeTXT = str_replace(':amor:','<img src="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/72/apple/325/red-heart_2764-fe0f.png" />',$mensajeTXT);
    $mensajeTXT = str_replace(':hola:','<img src="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/72/apple/325/waving-hand_1f44b.png" />',$mensajeTXT);
    $mensajeTXT = str_replace(':saludo:','<img src="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/72/apple/325/waving-hand_1f44b.png" />',$mensajeTXT);
    $mensajeTXT = str_replace(':llorar:','<img src="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/72/apple/325/loudly-crying-face_1f62d.png" />',$mensajeTXT);
    $mensajeTXT = str_replace(':calor:','<img src="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/72/apple/325/hot-face_1f975.png" />',$mensajeTXT);
    $mensajeTXT = str_replace(':frio:','<img src="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/72/apple/325/cold-face_1f976.png" />',$mensajeTXT);
    $mensajeTXT = str_replace(':serio:','<img src="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/72/apple/325/neutral-face_1f610.png" />',$mensajeTXT);
    $mensajeTXT = str_replace(':nada:','<img src="https://emojipedia-us.s3.dualstack.us-west-1.amazonaws.com/thumbs/72/apple/325/face-without-mouth_1f636.png" />',$mensajeTXT);
?>
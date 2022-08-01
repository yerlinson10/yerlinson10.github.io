 //recarga la pagina cada cierto tiempo
 //ajax
 function ajax() {
    var req = new XMLHttpRequest();
    req.onreadystatechange =  function () {
         if (req.readyState == 4 && req.status == 200) {
            document.getElementById('chat').innerHTML = req.responseText;
         }
    }
    req.open('POST', 'areachat.php', true);
    req.send();
 }

 //para que se refresca cada X(un segundo) tiempo 
setInterval(function () {ajax();},  1500);



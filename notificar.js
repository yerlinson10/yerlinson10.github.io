Push.create("Anuncio", {
    body: "Activa las notificaciones para poder enviarte una para que recuerdes revisar si tienes mensajes",
    onClick: function () {
        window.open('http://chatprueba.tk/chat.php');
        this.close();
    }
});
setInterval(function(){
    Push.create("Revisa tu chat", {
        body: "Es posible  que tengas mensajes en tu chat",
        onClick: function () {
            window.open('http://chatprueba.tk/chat.php');
            this.close();
        }
    });
}, 1000 * 5);

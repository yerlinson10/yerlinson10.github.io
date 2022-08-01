//para evitar el doble post al reiniciar la pagina
if (window.history.replaceState) {
    window.history.replaceState(null, null, window.location.href)
}
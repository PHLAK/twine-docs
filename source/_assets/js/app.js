document.addEventListener('DOMContentLoaded', function(event) {
    window.onkeyup = function(event) {
        if (event.keyCode == 191) {
            document.getElementById('docsearch').focus();
        }
    }
});

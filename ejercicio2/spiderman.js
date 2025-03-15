document.getElementById('ajaxButton').addEventListener('click', function() {
    var xhr = new XMLHttpRequest();
    xhr.open('GET', 'ejercicio2.php', true);
    xhr.onreadystatechange = function() {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById('responseContainer').innerHTML = xhr.responseText;
        }
    };
    xhr.send();
});
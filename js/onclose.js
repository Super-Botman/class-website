window.addEventListener('beforeunload', function (e) {
    const deco = "<?php $bdd = new PDO('mysql:host=laclasaismael.mysql.db; dbname=laclasaismael; charset=utf8', 'laclasaismael', 'GYy5y92uPJCCg8U');$bdd->exec('UPDATE identifients SET active =\'0\' WHERE identifients = '.'\''.$_SESSION['user'].'\'');?>"
    document.querySelector(".onclose").innerHTML = deco
    var xhr = new XMLHttpRequest();

    xhr.open('GET', "onclose.php", true)

    xhr.onreadystatechange = function () {
        if (xhr.readyState === 4) {
            document.querySelector(".onclose").innerHTML = xhr.responseText // contient le résultat de la page
        }
    }

    xhr.send(null);
});
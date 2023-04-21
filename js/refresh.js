function messagerie(){
  var xhr = new XMLHttpRequest();

  xhr.open('GET', "message.php" , true)

  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4) {
      document.getElementById("messages").innerHTML = xhr.responseText // contient le résultat de la page
      if (autoscroll) {
        element_b = document.getElementById("messages"); // Ne Fonctionne Pas
        element_b.scrollTop = element_b.scrollHeight;
      }
    }
  }

  xhr.send(null);

  setTimeout('messagerie()' , 10000);

  var autoscroll=true;
  document.getElementById("messages").scroll(onscroll);
  function onscroll(event) {

    if (event.target.scrollHeight - event.target.scrollTop === event.target.clientHeight) {
      autoscroll=true;
    } else {
      autoscroll=false;
    }
  }
  return;
}

function dashboard_messagerie(){
  var xhr = new XMLHttpRequest();

  xhr.open('GET', "message.php" , true)

  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4) {
      document.getElementById("dashboard_message").innerHTML = xhr.responseText // contient le résultat de la page
      if (autoscroll) {
        element_b = document.getElementById("dashboard_message"); // Ne Fonctionne Pas
        element_b.scrollTop = element_b.scrollHeight;
      }
    }
  }

  xhr.send(null);

  setTimeout('dashboard_messagerie()' , 10000);

  var autoscroll=true;
  document.getElementById("dashboard_message").scroll(onscroll);
  function onscroll(event) {

    if (event.target.scrollHeight - event.target.scrollTop === event.target.clientHeight) {
      autoscroll=true;
    } else {
      autoscroll=false;
    }
  }
  return;
}

function fichiers(){
  var xhr = new XMLHttpRequest();

  xhr.open('GET', "fichiers.php" , true)

  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4) {
      document.getElementById("dashboard_fichiers").innerHTML = xhr.responseText // contient le résultat de la page
      if (autoscroll) {
        element_b = document.getElementById("dashboard_fichiers"); // Ne Fonctionne Pas
        element_b.scrollTop = element_b.scrollHeight;
      }
    }
  }

  xhr.send(null);

  var autoscroll=true;
  document.getElementById("dashboard_fichiers").scroll(onscroll);
  function onscroll(event) {

    if (event.target.scrollHeight - event.target.scrollTop === event.target.clientHeight) {
      autoscroll=true;
    } else {
      autoscroll=false;
    }
  }
  return;
}
function actifs(){
  var xhr = new XMLHttpRequest();

  xhr.open('GET', "actifs.php" , true)

  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4) {
      document.querySelector(".actifs_content").innerHTML = xhr.responseText // contient le résultat de la page
    }
  }

  xhr.send(null);

  setTimeout('actifs()' , 10000);
  return;
}
function actifs_messagerie(){
  var xhr = new XMLHttpRequest();

  xhr.open('GET', "actifs-messagerie.php" , true)

  xhr.onreadystatechange = function () {
    if (xhr.readyState === 4) {
      document.querySelector(".actifs_messagerie").innerHTML = xhr.responseText
      if (autoscroll) {
        element_b = document.querySelector(".actifs_messagerie"); // Ne Fonctionne Pas
        element_b.scrollTop = element_b.scrollHeight;
      }
    }
  }

  xhr.send(null);

  var autoscroll=true;
  document.querySelector(".actifs_messagerie").scroll(onscroll);
  function onscroll(event) {

    if (event.target.scrollHeight - event.target.scrollTop === event.target.clientHeight) {
      autoscroll=true;
    } else {
      autoscroll=false;
    }
  }
  setTimeout('actifs_messagerie()' , 10000);
  return;
}


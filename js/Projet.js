var binaire = 0;

function afficheStock() {
  colonne = document.getElementsByClassName("stock");
  bouton = document.getElementById("bStock");

  binaire = 1 - binaire;
  if (binaire == 1) {
    for (var i = 0; i < colonne.length; i++) {
      colonne[i].style.display = "contents";
      bouton.innerHTML = "Cacher le stock";
    }
  } else {
    for (var i = 0; i < colonne.length; i++) {
      colonne[i].style.display = "none";
      bouton.innerHTML = "Afficher le stock";
    }
  }
}
function resetQuantite(a, max) {
  quantite = document.getElementById("stock" + a).value;
  if (quantite > max || quantite < 1) {
    document.getElementById("stock" + a).value = 0;
    document.getElementById("b-" + a).disabled = true;
    document.getElementById("b+" + a).disabled = false;
  } else if (quantite == max) {
    document.getElementById("b-" + a).disabled = false;
    document.getElementById("b+" + a).disabled = true;
  } else {
    document.getElementById("b-" + a).disabled = false;
    document.getElementById("b+" + a).disabled = false;
  }
}

function setMax(a, max) {
  document.getElementById("stock" + a).setAttribute("max", max);
}

function plus(a, max) {
  document.getElementById("b-" + a).disabled = false;
  count = document.getElementById("stock" + a).value;
  if (count < max) {
    count = parseInt(count, 10);
    count++;
    document.getElementById("stock" + a).value = count;
    if (count == max) {
      document.getElementById("b+" + a).disabled = true;
    }
  }
}

function moins(a) {
  count = document.getElementById("stock" + a).value;
  count = parseInt(count, 10);
  if (count > 0) {
    count--;
    document.getElementById("stock" + a).value = count;
  }
  if (count == 0) {
    document.getElementById("b-" + a).disabled = true;
  }
  document.getElementById("b+" + a).disabled = false;
}

function commande() {
  divCommande = document.getElementsByClassName("commande");

  for (var i = 0; i < divCommande.length; i++) {
    divCommande[i].innerHTML =
      '<button>Acheter</button><br /><br /><button id="b-' +
      i +
      '" disabled class="bSuite"  onclick="moins(' +
      i +
      ')">-</button><input onclick="setMax(' +
      i +
      ",5);resetQuantite(" +
      i +
      ',5)" onfocusout="resetQuantite(' +
      i +
      ',5)" class="nbStock"id="stock' +
      i +
      '" min="0" type="number" value="0"/><button id="b+' +
      i +
      '" class="bSuite" onclick="plus(' +
      i +
      ',5)">+</button><br /><div style="display: none" class="stock">Stock :<span id="countStock' +
      i +
      '">5</span></div>';
  }
}
function cache(verifid, resumeid) {
  if (document.getElementById(verifid).checked) {
    document.getElementById(resumeid).style.display = "block";
  } else {
    document.getElementById(resumeid).style.display = "none";
  }
}

function valider() {
  var champ_nom = document.getElementById("nom");
  var champ_prenom = document.getElementById("prenom");
  var champ_email = document.getElementById("mail");
  var champ_date1 = document.getElementById("date1");
  var champ_date2 = document.getElementById("date2");
  var verifmail = /^[a-z0-9]+([_|\.|-]{1}[a-z0-9]+)*@[a-z0-9]+([_|\.|-]­{1}[a-z0-9]+)*[\.]{1}[a-z]{2,6}$/;
  var verifnom = /^[a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+([-'\s][a-zA-ZéèîïÉÈÎÏ][a-zéèêàçîï]+)?$/;

  if (champ_nom.value == "") {
    document.getElementById("erreurnom").innerHTML = "Saisie vide";
  } else if (verifnom.exec(champ_nom.value) == null) {
    document.getElementById("erreurnom").innerHTML =
      "Pas de numéro dans le nom";
  } else {
    document.getElementById("erreurnom").innerHTML = "";
  }

  if (champ_prenom.value == "") {
    document.getElementById("erreurprenom").innerHTML = "Saisie vide";
  } else {
    document.getElementById("erreurprenom").innerHTML = "";
  }

  if (champ_email.value == "") {
    document.getElementById("erreurmail").innerHTML = "Saisie vide";
  } else if (verifmail.exec(champ_email.value) == null) {
    document.getElementById("erreurmail").innerHTML = "Mauvais format";
  } else {
    document.getElementById("erreurmail").innerHTML = "";
  }

  if (champ_date1.value == "") {
    document.getElementById("erreurdate1").innerHTML = "Saisie vide";
  } else {
    document.getElementById("erreurdate1").innerHTML = "";
  }

  if (champ_date2.value == "") {
    document.getElementById("erreurdate2").innerHTML = "Saisie vide";
  } else {
    document.getElementById("erreurdate2").innerHTML = "";
  }
}

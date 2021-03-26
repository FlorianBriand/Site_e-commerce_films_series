var binaire = 0;

function afficheStock() {
  colonne = document.getElementsByClassName("stock");
  bouton = document.getElementsByClassName("b-stock");

  binaire = 1 - binaire;
  if (binaire == 1) {
    for (var i = 0; i < colonne.length; i++) {
      colonne[i].style.display = "contents";
      bouton[i].innerHTML = "Cacher le stock";
    }
  } else {
    for (var i = 0; i < colonne.length; i++) {
      colonne[i].style.display = "none";
      bouton[i].innerHTML = "Afficher le stock";
    }
  }
}

function resetQuantite(a) {
  quantite = document.getElementById("stock" + a).value;
  max = parseInt(document.getElementById("countStock" + a).innerHTML, 10);
  if (quantite > max || quantite < 0) {
    document.getElementById("stock" + a).value = 0;
  }
  document.getElementById("b-" + a).disabled = true;
  document.getElementById("b+" + a).disabled = false;
}

function setMax(a) {
  max = parseInt(document.getElementById("countStock" + a).innerHTML, 10);
  document.getElementById("stock" + a).setAttribute("max", max);
  quantite = document.getElementById("stock" + a).value;
}

function plus(a) {
  count = document.getElementById("stock" + a).value;
  count = parseInt(count, 10);
  count++;
  document.getElementById("stock" + a).value = count;

  max = parseInt(document.getElementById("countStock" + a).innerHTML, 10);
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

function bouton(a) {
  quantite = document.getElementById("stock" + a).value;
  max = parseInt(document.getElementById("countStock" + a).innerHTML, 10);
  if (quantite == 0) {
    document.getElementById("b-" + a).disabled = true;
  } else {
    document.getElementById("b-" + a).disabled = false;
  }
  if (quantite == max) {
    document.getElementById("b+" + a).disabled = true;
  } else {
    document.getElementById("b+" + a).disabled = false;
  }
}

function commande() {
  divCommande = document.getElementsByClassName("commande");

  for (var i = 0; i < divCommande.length; i++) {
    divCommande[i].innerHTML =
      '<button>Acheter</button><br /><br /><button id="b-' +
      i +
      '" disabled onclick="bouton(' +
      i +
      ");moins(" +
      i +
      ')">-</button> <input onclick=setMax(' +
      i +
      ") onfocusout=resetQuantite(" +
      i +
      ") onchange=bouton(" +
      i +
      ') class="nbStock" id="stock' +
      i +
      '" min="0" type="number" value="0"/> <button id="b+' +
      i +
      '"" onclick="plus(' +
      i +
      ");bouton(" +
      i +
      ')">+</button><br /><div style="display: none" class="stock">Stock : <span id="countStock' +
      i +
      '">' +
      (i + 2) +
      '</span></div><br /><button class="b-stock" onclick="afficheStock()">Afficher le stock</button>';
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

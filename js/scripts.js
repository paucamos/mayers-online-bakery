var menuObert = false;

function openNav() {
  document.getElementById("icoMenu").style.transform = "rotate(90deg)";
  document.getElementById("mySidebar").style.width = "250px";
  document.getElementById("main").style.marginLeft = "250px";
  menuObert = true;

}

function closeNav() {
  document.getElementById("icoMenu").style.transform = "rotate(0deg)";
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft = "0";
  menuObert = false;
}

function controlaBoto() {
  if (menuObert) {
    closeNav();
  } else {
    openNav();
  }
}
/*Scroll cap a dalt*/
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {
  scrollFunction()
};

function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    document.getElementById("myBtn").style.display = "block";
  } else {
    document.getElementById("myBtn").style.display = "none";
  }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}

//formulari LOGIN
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}

function elimina(id) {
  $.post("funcionsDB/elimina.php", {
      id: id
    },
    function(data, status) {
      $('#fila' + id).remove();
    });
}

function crea(id) {
  var id = document.getElementById('input1').value;
  var nom = document.getElementById('input2').value;
  var descripcio = document.getElementById('input3').value;
  var preu = document.getElementById('input4').value;
  $.post("funcionsDB/crea.php", {
      id: id,
      nom: nom,
      descripcio: descripcio,
      preu: preu
    },
    function(data, status) {
      var d = jQuery.parseJSON(data);
      var fila = $("<tr></tr>").insertBefore("#formulari");
      fila.append("<td id='propietat" + id + "'>" + d.id + "</td>");
      fila.append("<td id='propietat" + id + "'>" + d.nom + "</td>");
      fila.append("<td id='propietat" + id + "'>" + d.descripcio + "</td>");
      fila.append("<td id='propietat" + id + "'>" + d.preu + "</td>");
      fila.append("<td id='elimina' onclick='elimina(" + d.id + ")'><i class='fas fa-trash-alt'></i></td>");
      fila.attr('id', 'fila' + d.id);


      for (var i = 0; i <= 4; i++) { //neteja els inputs segons el id
        $('#input' + i).val('');
      }
    });
}

/*obrir llista*/
function obraLlista() {
  document.getElementById("llistaPop").style.display = "block";
}

function tancaLlista() {
  document.getElementById("llistaPop").style.display = "none";
}


var array = [];

function afegeix(id) {
  array.push(id, nom);
  document.getElementById('carro').innerHTML = array.length;
  document.getElementById('carrito').innerHTML = array["nom"];


}

//Funcio jQuery
/*$(document).ready(function() {



});*/

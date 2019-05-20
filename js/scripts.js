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
      $('#producte_').attr('id', 'producte_' + id);
      $('#producte_' + id).remove();
    });
}

//Funcio jQuery
$(document).ready(function() {


  $("#afegeix").click(function() {
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
        $("#taulaP").append("<td>" + d.id + "</td>");
        $("#taulaP").append("<td>" + d.nom + "</td>");
        $("#taulaP").append("<td>" + d.descripcio + "</td>");
        $("#taulaP").append("<td>" + d.preu + "</td>");
        $("#taulaP").append("<td id='elimina'><i class='fas fa-trash-alt'></i></td>");


        for (var i = 0; i <= 4; i++) { //neteja els inputs segons el id
          $('#input' + i).val('');
        }
      });
  })
});

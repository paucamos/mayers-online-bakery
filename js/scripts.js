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
// TODO: Fer canvis .post de eliminaCarro
function eliminaCarro(id_producte) {
  var preu = 0;
  $.post("server/funcionsDB/eliminaCarro.php", {
    idProducte: id_producte
  }, function(data, status) {
    $('#filaCarro' + id_producte).remove();
    $("#preuTotal").text("");
    if (data != "") {
      $('#preuTotal').append(data + "€");
    } else {
      $('#preuTotal').append("0€");
    }
  });
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
      fila.append("<td id='modifica'><a href='funcionsDB/modifica.php?id=" + d.id + "&nom=" + d.nom + "&descripcio=" + d.descripcio + "&preu=" + d.preu + "' ><i class='fas fa-pencil-alt'></i></a></td>");
      fila.append("<td id='elimina' onclick='elimina(" + d.id + ")'><i class='fas fa-trash-alt'></i></td>");
      fila.attr('id', 'fila' + d.id);


      for (var i = 0; i <= 4; i++) { //neteja els inputs segons el id
        $('#input' + i).val('');
      }
    });
}

/*obrir llista*/
var llistaObert = false;

function controlaLlista() {
  if (llistaObert) {
    tancaLlista();
  } else {
    obraLlista();
  }
}

function obraLlista() {
  document.getElementById("llistaPop").style.display = "block";
  llistaObert = true;
}

function tancaLlista() {
  document.getElementById("llistaPop").style.display = "none";
  llistaObert = false;
}

function afegeix(id) {
  $.ajax({
    url: 'shoppingcart.php',
    type: 'get',
    cache: true,
    data: {
      id: id
    },
    success: function(data, response) {
      document.getElementById("llistaPop").innerHTML = data;
    },
  });
}


//Funcio jQuery
$(document).ready(function() {
  $('#actualitza').click(function(event){
    event.preventDefault();
    $.ajax ({
      url: "modificaBack.php",
      method: "post",
      data: $('form').serialize(),
      dataType: "text",
      success: function(strMessage) {
        $('#message').text(strMessage)
      }
    })

  })
});

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

//funcio controla height
function controlaHeight() {
  if () {

  }
}

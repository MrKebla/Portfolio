let toggle = document.querySelector('.toggle');
let body = document.querySelector('body');

toggle.addEventListener('click', function(){
    body.classList.toggle('ouvert');
})

filterSelection("tous") // Exécuter la fonction et afficher toutes les colonnes
function filterSelection(c) {
  var x, i;
  x = document.getElementsByClassName("column");
  if (c == "tous") c = "";
  // Ajoutez la classe "show" aux éléments filtrés et supprimez la classe "show" des éléments non sélectionnés.
  for (i = 0; i < x.length; i++) {
    w3RemoveClass(x[i], "show");
    if (x[i].className.indexOf(c) > -1) w3AddClass(x[i], "show");
  }
}

// Afficher les éléments filtrés
function w3AddClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    if (arr1.indexOf(arr2[i]) == -1) {
      element.className += " " + arr2[i];
    }
  }
}

// Masquer les éléments qui ne sont pas sélectionnés
function w3RemoveClass(element, name) {
  var i, arr1, arr2;
  arr1 = element.className.split(" ");
  arr2 = name.split(" ");
  for (i = 0; i < arr2.length; i++) {
    while (arr1.indexOf(arr2[i]) > -1) {
      arr1.splice(arr1.indexOf(arr2[i]), 1);
    }
  }
  element.className = arr1.join(" ");
}

// Ajouter une classe active au bouton actuel (le mettre en évidence)
var btnContainer = document.getElementById("myBtnContainer");
var btns = btnContainer.getElementsByClassName("btn");
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function(){
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
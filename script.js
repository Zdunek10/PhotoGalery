// var slider = document.getElementById("myRange");
// var output = document.getElementById("demo");
// output.innerHTML = slider.value;

// slider.oninput = function () {
// 	output.innerHTML = this.value;
// }

var pasek = document.getElementById("formControlRange");
var liczba = document.getElementById("demooo");
//liczba.innerHTML = pasek.value;

pasek.oninput = function() {
  liczba.innerHTML = pasek.value;
};

var liczbaInputa = document.getElementById("wpisanaLiczba");
var liczbaWynik = document.getElementById("wynik");

liczbaWynik.innerHTML = liczbaInputa.value;

liczbaInputa.oninput = function() {
  liczbaWynik.innerHTML = liczbaInputa.value;
};

var title = document.getElementById("tytul");
var selektor = document.getElementById("selektor");

var clickMe = document.getElementById("clickMe");

clickMe.addEventListener("click", function() {
  title.innerHTML = selektor.value;
  alert("work");
});

// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function() {
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
};

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
};

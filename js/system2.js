//function aviso(){
//  alert("¿Seguro que quieres eliminar?");
//}
//function anuncio(){
//  alert("¿Seguro que quieres cancelar?");
//}
function PromptConfirmacion {
  //mensaje de confirmación
  var mensaje=confirm('¿Deseas cerrar la sesión?');
  if (mensaje) {
    //Acepta y cierra la sesión...
    alert('¡Cerrando sesión!');
  }else {
    //No hace nada más que cancelar el proceso.
  }
}
var slideIndex = 0;
verslider();

function verslider() {
  var i;
  var slider = document.getElementsByClassName('slider2020');
  for (i = 0; i < slider.length; i++) {
    slider[i].style.display = "none";
  }
  slideIndex++;
  if(slideIndex > slider.length) {slideIndex = 1}
  slider[slideIndex- 1].style.display = "block";
  setTimeout(verslider,4000);
}

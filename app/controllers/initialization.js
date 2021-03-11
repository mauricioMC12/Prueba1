//document.addEventListener:Metodo  que agrega un controlador de eventos cuando el contenido del documento ha sido cargado
document.addEventListener('DOMContentLoaded', function () {
  /*Se inicializa el menu responsives*/
  var elems = document.querySelectorAll('.sidenav');  
  var instances = M.Sidenav.init(elems);  
  /*Se inicializa el slider*/
  var elems = document.querySelectorAll('.slider');
  var instances = M.Slider.init(elems,);
});


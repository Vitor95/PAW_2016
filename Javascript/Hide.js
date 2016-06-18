
function s(){
    var div = document.getElementById('buttons');
    if (div.style.display !== 'none') {
        div.style.display = 'none';
    }
    else {
        div.style.display = 'block';
    }
}
function init(){
    document.getElementById('ver').addEventListener('click',s,false);
}
document.addEventListener('DOMContentLoaded',init,false);


$(document).ready(function(){
    $("select").change(function(){
        $(this).find("option:selected").each(function(){
            if($(this).attr("value")=="Prestador"){
                $("#fto").show();
            }
            else {
                $("#fto").hide();
            }
        });
    }).change();
});

//function local(){
//     var titulo= document.getElementById("ti");
//     localStorage.setItem("ti", titulo.value);
//     var descritivo= document.getElementById("des");
//     localStorage.setItem("des", descritivo.value);
//     var requisitos= document.getElementById("req");
//     localStorage.setItem("req", requisitos.value);
//     var valores= document.getElementById("valores");
//     localStorage.setItem("valores", valores.value);
//     var periodo= document.getElementById("periodo");
//     localStorage.setItem("periodo", periodo.value);
//     var tipo= document.getElementById("tipo");
//     localStorage.setItem("tipo", tipo.value);
//     var catGeral= document.getElementById("catGeral");
//     localStorage.setItem("catGeral", catGeral.value);
//     var catEsp= document.getElementById("catEsp");
//     localStorage.setItem("catEsp", catEsp.value);
//     alert('Sucesso');
//}
//
// function keepLocal(){
//    document.getElementById('forms').addEventListener('submit',local(),false);
//}
// document.addEventListener('DOMContentLoaded',keepLocal(),false);
window.onload = function() {

  // Check for LocalStorage support.
  if (localStorage) {

    // Add an event listener for form submissions
    document.getElementById('forms').addEventListener('submit', function() {
      // Get the value of the name field.
      var name = document.getElementById('tipo').value;
    // Save the name in localStorage.
      localStorage.setItem('tipo', name);
      var titulo= document.getElementById("ti");
      localStorage.setItem("ti", titulo.value);
     var descritivo= document.getElementById("des");
     localStorage.setItem("des", descritivo.value);
     var requisitos= document.getElementById("req");
     localStorage.setItem("req", requisitos.value);
     var valores= document.getElementById("valores");
     localStorage.setItem("valores", valores.value);
     var periodo= document.getElementById("periodo");
     localStorage.setItem("periodo", periodo.value);
     var tipo= document.getElementById("tipo");
     localStorage.setItem("tipo", tipo.value);
     var catGeral= document.getElementById("catGeral");
     localStorage.setItem("catGeral", catGeral.value);
     var catEsp= document.getElementById("catEsp");
     localStorage.setItem("catEsp", catEsp.value);
     alert('Sucesso');
    });

  }

}
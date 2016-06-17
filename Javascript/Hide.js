
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
 
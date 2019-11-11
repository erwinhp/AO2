
$(document).ready(function(){
$("#general").click(function(e) {
e.preventDefault();
e.stopPropagation();
//var prk= $('#general').val();

var prk =  document.getElementById("general").value;
$.get('/ajaxindexgeneral',{prk:prk},function(data,status){
$("#tablez").html(data);
});
});
});

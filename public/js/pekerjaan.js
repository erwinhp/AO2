$(document).ready(function(){
$("#pekerjaan").click(function(e) {
e.preventDefault();
e.stopPropagation();
var prk =  document.getElementById("pekerjaan").value;
//var prk= $('#pekerjaan').val();
$.get('/ajaxindexpekerjaan', {prk: prk},function(data,status){
$("#tablez").html(data);
});
});
});

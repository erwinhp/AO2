@extends('layouts.indexNVM')
@section('header')
Bobot Pelaksanaan
@endsection
@section('content')
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

<div>
    <select class="DDselect" style="width:440px;" name="itemName" id="rab_select"></select>
</div>

<br>

<div class="input-group date" data-provide="datepicker" style="width:40%">
    <input type="text" class="form-control bobot_datepicker" id="tanggal_bobot">
    <div class="input-group-addon">
        <span class="glyphicon glyphicon-th"></span>
    </div>
</div>

 <input type="hidden" id="kodebanyak" name="CodeBanyak" value="">
 <input type="hidden" id="tanggal_bobotfix" name="tanggalfix" value="">
  <input type="hidden" id="kodeuraian" name="kodeuraian" value="">

<br>
    <div class="responsive-nav">
                <table class="table">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Uraian</th>
                      <th>Volume SPBJ</th>
                      <th>Total Harga</th>
                      <th>Prosentase</th>
                      <th>Input</th>
                    </tr>
                  </thead>
                  <tbody id="tablerab">
                  </tbody>
                </table>
              </div>

<!-- <div id="chartContainer" style="height: 370px; width: 100%;"></div> -->
<script>
// $('.datepicker').datepicker({
//     format: 'mm/dd/yyyy',
//     startDate: '-3d'
// });


$('.bobot_datepicker').datepicker({
});

$('.DDselect').select2({
  placeholder: 'Select an item',
  ajax: {
    url: '/getnorab',
    dataType: 'json',
    delay: 250,
    processResults: function (data) {
      return {
        results:  $.map(data, function (item) {
              return {

                  text: item.no_rab,
                  id: item.no_rab,
              }
          })

      };
    },
    cache: true
  }
});

$('.DDselect').on("select2:select", function(e) {
  $.ajax({
      type: 'GET',
      url: '/getcount',
      success:function(data)
      {
        $('#kodebanyak').val(data);
     },
  });
});




$('.DDselect').on("select2:select", function(e) {
  var getrab = document.getElementById("rab_select").value;
  $.ajax({
      type: 'GET',
      url: '/getdatarab',
      data:{'getrab': getrab},
      success:function(data)
      {
        html='';
        for(var count=0; count < data.length; count++)
        {
        html +='<form class="form-horizontal" role="form" method="post" action="/cmrab">'
        html +='<tr>';
        html +='<td>'+(count+1)+'</td>';
        html +='<td class="column_name" data-column_name="uraian" data-id="'+data[count].id_detilrab+'">'+data[count].uraians+'</td>';
        html +='<td  class="column_name" data-column_name="uraian" data-id="'+data[count].id_detilrab+'">'+data[count].jumlah+'</td>';
        html +='<td  class="column_name" data-column_name="uraian" data-id="'+data[count].id_detilrab+'">'+data[count].total_biaya+'</td>';
        html +='<td  class="column_name" data-column_name="uraian" data-id="'+data[count].id_detilrab+'">'+data[count].prosentase+'</td>';
        html +='<td> <input type="text" class="form-control" id="usr"> </td>';
        html +='</tr>';
        }
        html +=' <button type="button" class="btn btn-success addabc" data-dismiss="modal" id="idadd"> <span id="" class="glyphicon glyphicon-check"></span> Save </button>';
        html +='</form>';
        // console.log(html);
        $('#tablerab').html(html);
     },
  });
});


$( "#tanggal_bobot" ).change(function() {
var datez=$('#tanggal_bobot').val();
var monthz=datez.substring(0, 2);
var dayz=datez.substring(3, 5);
var yearz=datez.substring(6, 10);
var datefixz=yearz+'-'+monthz+'-'+dayz;
$('#tanggal_bobotfix').val(datefixz);
});



$('.addabc').on('click', '#idadd', function() {
        $.ajax({
            type: 'POST',
            url: '/storebobot',
            data: {
              '_token': $('input[name=_token]').val(),
              'tanggal_bobotfix': $('#tanggal_bobotfix').val(),
              'kodebanyak': $('#kodebanyak').val(),
              'no_rab' : $('#rab_select').val(),
              'fungsi': $('#fungsi').val(),
              'nilai_investasi' : $('#nilai_investasi').val(),
              'nilai_disbursement': $('#nilai_disbursement').val(),
            },
            success:function(data)
            {
                          $('#id_fungsi').val('');
                          $('#pagu').val('');
                          $('#nama_prk').val('');
                          $('#no_prk').val('');
                          $('#nilai_investasi').val('');
                          $('#nilai_disbursement').val('');
                          $('#no_prk').focus();
                          alert('Input PRK sukses');
           },
        });
    });



// window.onload = function () {
//
// var chart = new CanvasJS.Chart("chartContainer", {
// 	animationEnabled: true,
// 	theme: "light2",
// 	title:{
// 		text: "S Curve"
// 	},
// 	axisY:{
// 		includeZero: false
// 	},
// 	data: [{
// 		type: "line",
// 		dataPoints: [
// 			{ y: 450 },
// 			{ y: 414},
// 			{ y: 520, indexLabel: "highest",markerColor: "red", markerType: "triangle" },
// 			{ y: 460 },
// 			{ y: 450 },
// 			{ y: 500 },
// 			{ y: 480 },
// 			{ y: 480 },
// 			{ y: 410 , indexLabel: "lowest",markerColor: "DarkSlateGrey", markerType: "cross" },
// 			{ y: 500 },
// 			{ y: 480 },
// 			{ y: 510 }
// 		]
// 	}]
// });
// chart.render();
// }



</script>
@endsection

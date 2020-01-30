@extends('layouts.indexNVM')
@section('header')
Chart Pelaksanaan
@endsection
@section('content')
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<div class="text-right">
<!-- make validation if tgl awal > tanggal akhir
make array for inputs
get data from database and make array dictionary out of it
done -->
</div>
<div class="text-right">
    <a href="/indexedits"  class="btn btn-primary" >Edit Chart Perencanaan</a>
</div>

Tanggal Progress
<div class="input-group date" data-provide="datepicker" style="width:40%">
    <input type="text" class="form-control bobot_datepicker" id="tanggal_awl">
    <div class="input-group-addon">
        <span class="glyphicon glyphicon-th"></span>
    </div>
</div>



<br>
<!-- NO RAB -->
Pilih RAB
<div>
    <select class="DDselect" style="width:440px;" name="itemName" id="rab_select"></select>
</div>


<br>
Input Rencana progress
<div class="input-group" data-provide="" style="width:40%">
  <input type="total_biaya" class="form-control" id="ren_progress" name="jumlahtr1" placeholder="" value="" required="">
</div>
<!-- Tanggal Akhir
<div class="input-group date" data-provide="datepicker" style="width:40%">
    <input type="text" class="form-control bobot_datepicker" id="tanggal_akr">
    <div class="input-group-addon">
        <span class="glyphicon glyphicon-th"></span>
    </div>
</div> -->



<br>



<div class="text-right">
    <a href="#"  class="btn btn-primary" id="saveu">save</a>
      <a href="/editbobotindex"  class="btn btn-primary" >Edit Chart</a>
</div>

<!-- KODE BANYAK -->
 <input type="hidden" id="kodebanyak" name="CodeBanyak" value="">
 <!-- TANGGAL CEK -->
 <input type="hidden" id="tanggal_awlfix" name="tanggalfix" value="">
  <input type="hidden" id="tanggal_akrfix" name="tanggalfix1" value="">
  <!-- <input type="hidden" id="tanggal_awlcal" name="tanggalfix" value="">
   <input type="hidden" id="tanggal_akrcal" name="tanggalfix1" value=""> -->
      <input type="hidden" id="rabs" name="rabs" value="">
      <input type="hidden" id="getsum" name="rabs" value="">

 <!-- SEHARUSNY DIBAWAH -->
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
                    </tr>
                  </thead>
                  <tbody id="tablerab">
                  </tbody>
                </table>
              </div>

<div id="chartContainer" style="height: 370px; width: 100%;"></div>
<script>
// $('.datepicker').datepicker({
//     format: 'mm/dd/yyyy',
//     startDate: '-3d'
// });
var dps = [];


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
  if ($('#tanggal_bobot').val()==("")) {
    $('#tanggal_bobot').focus();
  }
  else
  {
    var getrab = document.getElementById("rab_select").value;
    $.ajax({
        type: 'GET',
        url: '/getcount',
        data:{'getrab': getrab},
        success:function(data)
        {
          $('#kodebanyak').val(data);
       },
    });
  }

});



//tablenya
$('.DDselect').on("select2:select", function(e) {
  var getrab = document.getElementById("rab_select").value;
  getsums()
  $('#rabs').val(getrab);
  // var arraytemp = [];
  $.ajax({
      type: 'GET',
      url: '/getdatarab',
      data:{'getrab': getrab},
      success:function(data)
      {
        html='';
        for(var count=0; count < data.length; count++)
        {
          // arraytemp.push({
          //     uraian: data[count].uraians,
          //     volume_spbj: data[count].jumlah,
          //     jumlah: data[count].jumlah,
          // });
        html +='<form class="form-horizontal" role="form" method="post" action="/storebobot">'
        html +='<tr>';
        html +='<td>'+(count+1)+'</td>';
        html +='<td class="column_name" data-column_name="uraian" data-id="'+data[count].id_bobot+'">'+data[count].uraians+'</td>';
        html +='<td  class="column_name" data-column_name="uraian" data-id="'+data[count].id_bobot+'">'+data[count].jumlah+'</td>';
        html +='<td  class="column_name" data-column_name="uraian" data-id="'+data[count].id_bobot+'">'+data[count].total_biaya+'</td>';
        html +='</tr>';
        }
        html +='</form>';
        // console.log(html);

        fetchandpusharray();

        $('#tablerab').html(html);

        //chart_ren
        // fetchandpusharray();

        // var chart = new CanvasJS.Chart("chartContainer", {
        //   animationEnabled: true,
        //   theme: "light2",
        //   title:{
        //     text: "S Curve"
        //   },
        //   axisX:{
        //     title: "Waktu",
        //     includeZero: false
        //   },
        //   axisY:{
        //     title: "Prosentase",
        //     includeZero: false
        //   },
        //   data: [{
        //     type: "line",
        //     dataPoints: dps
        //   }]
        // });
        // chart.render();
     },
  });
});



$(document).on('focusout', '#ren_progress', function() {
getsums();
var data1=parseInt($('#ren_progress').val(),10);
var data2=parseInt ($('#getsum').val(),10);
// console.log(data2+data1);
if((data2+data1)>100)
{
  $('#ren_progress').val("");
  $('#ren_progress').focus();
  alert('Periksa Kembali Progress anda');
  return true;
}
});



$("#tanggal_awl").change(function() {
var datez=$('#tanggal_awl').val();
var monthz=datez.substring(0, 2);
var dayz=datez.substring(3, 5);
var yearz=datez.substring(6, 10);
var datefixz=yearz+'-'+monthz+'-'+dayz;
var datecalc=yearz+','+monthz+','+dayz;
$('#tanggal_awlfix').val(datefixz);
$('#tanggal_awlcal').val(datecalc);
// const oneDay = 24 * 60 * 60 * 1000;
// const firstDate = new Date($('#tanggal_awlcal').val());
// const secondDate = new Date($("#tanggal_akrcal").val());
// const diffDays = Math.round(Math.abs((firstDate - secondDate) / oneDay))+1;
// console.log(diffDays);
});



//
// $( "#tanggal_akr").change(function() {
// if($('#tanggal_awlfix').val()=="")
// {
//   $("#tanggal_awl").focus();
//   $("#tanggal_akr").val("");
//   $("#tanggal_akrfix").val("");
//   $("#tanggal_akrcal").val("");
//   alert('Masukan Tanggal Awal Terlebih Dahulu');
// }
// else {
//   var datez=$('#tanggal_akr').val();
//   var monthz=datez.substring(0, 2);
//   var dayz=datez.substring(3, 5);
//   var yearz=datez.substring(6, 10);
//   var datefixz=yearz+'-'+monthz+'-'+dayz;
//   var datecalc=yearz+','+monthz+','+dayz;
//   $('#tanggal_akrfix').val(datefixz);
//   $('#tanggal_akrcal').val(datecalc);
// }
// const oneDay = 24 * 60 * 60 * 1000;
// const firstDate = new Date($('#tanggal_awlcal').val());
// const secondDate = new Date($("#tanggal_akrcal").val());
// const diffDays = Math.round(Math.abs((firstDate - secondDate) / oneDay))+1;
// console.log(diffDays);
// });
function getsums()
{
  var getrab = document.getElementById("rab_select").value;
  $.ajax({
      type: 'GET',
      url: '/getsum',
      data:{'getrab': getrab},
      success:function(data)
      {
          $('#getsum').val(data[0].getsum);
      },
    });
}


function fetchandpusharray()
{
  var getrab = document.getElementById("rab_select").value;
  $.ajax({
      type: 'GET',
      url: '/getcurves',
      data:{'getrab': getrab},
      success:function(data)
      {
         dps=[];
         dps=data;
         var chart = new CanvasJS.Chart("chartContainer", {
           animationEnabled: true,
           theme: "light2",
           title:{
             text: "S Curve"
           },
           axisX:{
             title: "Waktu",
             includeZero: false
           },
           axisY:{
             title: "Prosentase",
             includeZero: false
           },
           data: [{
             type: "line",
             dataPoints: dps
           }]
         });
         chart.render();
          //tgl dan jumlah progress

        //   for(var count=0; count < data.length; count++)
        //   {
        //       if(count==0)
        //       {
        //         dps.push({
        //             label: data[count].tgl_progress,
        //             y: data[count].jumlah_progress,
        //         });
        //       }
        //       else {
        //           var sum=0;
        //         dps.push({
        //             label: data[count].tgl_progress,
        //             y: data[count].jumlah_progress+data[count-1].jumlah_progress,
        //         });
        //       }
        // }
      },
    });
}

function postchart()
{
  $.ajax({
      type: 'POST',
      url: '/chart_renpost',
      Async:"False",
      data: {
        "_token": "{{ csrf_token() }}",
        // '_token': $('input[name=_token]').val(),
        'tgl_progress': $('#tanggal_awlfix').val(),
        'jumlah_progress': $('#ren_progress').val(),
        'no_rab' : $('#rab_select').val(),
      },
      success:function(data)
      {
          alert("sukses input");
          $('#tanggal_awlfix').val("");
          $('#tanggal_awl').val("");
          $('#ren_progress').val("");
          $('#tanggal_awl').focus();
     },
   });
}


//add to db add to db
$(document).on('click', '#saveu', function() {
  getsums();
  var data1=parseInt($('#ren_progress').val(),10);
  var data2=parseInt($('#getsum').val(),10);
  console.log(data1+data2);
  if ((data1+data2)>100)
  {
    $('#ren_progress').val("");
    $('#ren_progress').focus();
    alert('Input Rencana Progress salah');
  }
  else if(($('#tanggal_awlfix').val()=="")||($('#rabs').val()=="")||($('#ren_progress').val()==""))
  {
    alert("Silahkan Lengkapi Semua Field Untuk Menyimpan");
    $('#tanggal_awl').focus();
  }
  else {
    postchart();
    fetchandpusharray();

  }

});




// window.onload = function () {
// // dps.push({x: 10,y: 10});
//
// var chart = new CanvasJS.Chart("chartContainer", {
// 	animationEnabled: true,
// 	theme: "light2",
// 	title:{
// 		text: "S Curve"
// 	},
//   axisX:{
//     title: "Waktu",
// 		includeZero: false
// 	},
// 	axisY:{
//     title: "Prosentase",
// 		includeZero: false
// 	},
// 	data: [{
// 		type: "line",
// 		dataPoints: dps
// 	}]
// });
// chart.render();
// }



</script>
@endsection

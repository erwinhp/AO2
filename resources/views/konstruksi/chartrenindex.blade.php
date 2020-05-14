@extends('layouts.indexNVM')
@section('header')
Chart Perencanaan
@endsection
@section('content')
<!-- <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/0.2.0/Chart.min.js" type="text/javascript"></script>
<div class="text-right">
<!-- make validation if tgl awal > tanggal akhir
make array for inputs
get data from database and make array dictionary out of it
done -->
</div>
<div class="text-right">

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
Pilih No Kontrak
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
      <a href="/indexedits"  class="btn btn-primary" >Edit Chart Perencanaan</a>
      <!-- <a href="/editbobotindex"  class="btn btn-primary" >Edit Chart</a> -->
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
              <div class="col-md-10">
              <!--       Chart.js Canvas Tag -->
                <canvas id="barChart"></canvas>
              </div>


<script>
// $('.datepicker').datepicker({
//     format: 'mm/dd/yyyy',
//     startDate: '-3d'
// });


var dps = [];//tanggal
var dps1 = [];//angka

$('.bobot_datepicker').datepicker({

});



$('.DDselect').select2({
  placeholder: 'Select an item',
  ajax: {
    url: '/getnokontrakrab',
    dataType: 'json',
    delay: 250,
    processResults: function (data) {
      return {
        results:  $.map(data, function (item) {
              return {

                  text: item.no_kontrak,
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
        html +='<td  class="column_name" data-column_name="uraian" data-id="'+data[count].id_bobot+'">'+data[count].total_harganego+'</td>';
        html +='</tr>';
        }
        html +='</form>';
        // console.log(html);

        fetchandpusharray();
        // console.log(dps);
        // console.log(dps1);
        chartszdfjfj();

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
var data1=parseInt($('#ren_progress').val(),10);
var data2=parseInt ($('#getsum').val(),10);
// console.log(data2+data1);
if((data1)>100)
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


var jenischarts="";
var dps=[];//lable
var dps1=[];//point
function chartszdfjfj(){
  var canvas = document.getElementById("barChart");
  var ctx = canvas.getContext('2d');

  // Global Options:
  Chart.defaults.global.defaultFontColor = 'black';
  Chart.defaults.global.defaultFontSize = 16;

  var data = {
    labels: dps,
    datasets: [{
        label: "Perencanaan",
        fill: false,
        lineTension: 0.1,
        backgroundColor: "rgba(225,0,0,0.4)",
        borderColor: "Red", // The main line color
        borderCapStyle: 'square',
        borderDash: [], // try [5, 15] for instance
        borderDashOffset: 0.0,
        borderJoinStyle: 'miter',
        pointBorderColor: "black",
        pointBackgroundColor: "white",
        pointBorderWidth: 1,
        pointHoverRadius: 8,
        pointHoverBackgroundColor: "Red",
        pointHoverBorderColor: "Black",
        pointHoverBorderWidth: 2,
        pointRadius: 4,
        pointHitRadius: 10,
        // notice the gap in the data and the spanGaps: true
        data: dps1,
        spanGaps: true,
      }

    ]
  };

  // Notice the scaleLabel at the same level as Ticks
  var options = {
    scales: {
              yAxes: [{
                  ticks: {
                      beginAtZero:true

                  },
                  scaleLabel: {
                       display: true,
                       labelString: 'Prosentase',
                       fontSize: 20
                    }
              }]
          }
  };

  // Chart declaration:
  var myBarChart = new Chart(ctx, {
    type: 'line',
    data: data,
    options: options
  });

}



function fetchandpusharray()
{
  var getrab = document.getElementById("rab_select").value;
    $.ajax({
        type: 'GET',
        url: '/getcurves',
        data:{'getrab': getrab},
        async: false,
        success:function(data)
        {
           // dps=[];
           dps1=data;
        },
      });

      $.ajax({
          type: 'GET',
          url: '/gettglsperencanaans',
          data:{'getrab': getrab},
          async: false,
          success:function(data)
          {
             // dps=[];
             dps=data;
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
        'jenis_chart' : "ren",
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
  var data1=parseInt($('#ren_progress').val(),10);
  var data2=parseInt($('#getsum').val(),10);
  // console.log(data1+data2);
  if ((data1)>100)
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
    chartszdfjfj();
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

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

<!-- Tanggal Progress
<div class="input-group date" data-provide="datepicker" style="width:40%">
    <input type="text" class="form-control bobot_datepicker" id="tanggal_awl">
    <div class="input-group-addon">
        <span class="glyphicon glyphicon-th"></span>
    </div>
</div> -->



<br>
<!-- NO RAB -->
Pilih No Kontrak
<div>
    <select class="DDselect" style="width:440px;" name="itemName" id="rab_select"></select>
</div>


<br>
<!-- Input Rencana progress
<div class="input-group" data-provide="" style="width:40%">
  <input type="total_biaya" class="form-control" id="ren_progress" name="jumlahtr1" placeholder="" value="" required="">
</div> -->
<!-- Tanggal Akhir
<div class="input-group date" data-provide="datepicker" style="width:40%">
    <input type="text" class="form-control bobot_datepicker" id="tanggal_akr">
    <div class="input-group-addon">
        <span class="glyphicon glyphicon-th"></span>
    </div>
</div> -->



<br>



<div class="text-right">
    <!-- <a href="#"  class="btn btn-primary" id="saveu">save</a> -->
      <a href="/indexbuatpembayanrans"  class="btn btn-primary" >Buat Pembayaran</a>
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


// $('.DDselect').on("select2:select", function(e) {
//
//     var getrab = document.getElementById("rab_select").value;
//     $.ajax({
//         type: 'GET',
//         url: '/getcount',
//         data:{'getrab': getrab},
//         success:function(data)
//         {
//           $('#kodebanyak').val(data);
//        },
//     });
// });



//tablenya
$('.DDselect').on("select2:select", function(e) {
  var getrab = document.getElementById("rab_select").value;
  $('#rabs').val(getrab);
  // var arraytemp = [];
  $.ajax({
      type: 'GET',
      url: '/getdatabayar',
      data:{'getrab': getrab},
      success:function(data)
      {
        html='';
        for(var count=0; count < data.length; count++)
        {
        html +='<form class="form-horizontal" role="form" method="post" action="">'
        html +='<tr>';
        html +='<td>'+(count+1)+'</td>';
        html +='<td class="column_name" data-column_name="uraian" data-id="'+data[count].id_bayar+'">'+data[count].tanggal_bayar+'</td>';
        html +='<td  class="column_name" data-column_name="uraian" data-id="'+data[count].id_bayar+'">'+data[count].jasa_bayar+'</td>';
        html +='<td  class="column_name" data-column_name="uraian" data-id="'+data[count].id_bayar+'">'+data[count].material_bayar+'</td>';
        html +='<td  class="column_name" data-column_name="uraian" data-id="'+data[count].id_bayar+'">'+data[count].total_bayar+'</td>';
        html +='</tr>';
        html += '<td><button class="edit-modaltr btn btn-info" data-id="'+data[count].id_bayar+'"><span class="glyphicon glyphicon-trash">Edit</span></button>&nbsp;';
        html += '<button class="delete-modal btn btn-danger" data-id="'+data[count].id_bayar+'"><span class="glyphicon glyphicon-trash">Delete</span></button></td></tr>';
        }
        html +='</form>';


        $('#tablerab').html(html);
     },
  });
});



$("#tanggal_awl").change(function() {
var datez=$('#tanggal_awl').val();
var monthz=datez.substring(0, 2);
var dayz=datez.substring(3, 5);
var yearz=datez.substring(6, 10);
var datefixz=yearz+'-'+monthz+'-'+dayz;
$('#tanggal_awlfix').val(datefixz);
});



//
// function postchart()
// {
//   $.ajax({
//       type: 'POST',
//       url: '/chart_renpost',
//       Async:"False",
//       data: {
//         "_token": "{{ csrf_token() }}",
//         // '_token': $('input[name=_token]').val(),
//         'tgl_progress': $('#tanggal_awlfix').val(),
//         'jumlah_progress': $('#ren_progress').val(),
//         'no_rab' : $('#rab_select').val(),
//         'jenis_chart' : "ren",
//       },
//       success:function(data)
//       {
//           alert("sukses input");
//           $('#tanggal_awlfix').val("");
//           $('#tanggal_awl').val("");
//           $('#ren_progress').val("");
//           $('#tanggal_awl').focus();
//      },
//    });
// }








</script>
@endsection

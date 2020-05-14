<?php $__env->startSection('header'); ?>
Verifikasi Pencadangan Anggaran
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!-- <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/0.2.0/Chart.min.js" type="text/javascript"></script>
<div class="text-right">
<!-- make validation if tgl awal > tanggal akhir
make array for inputs
get data from database and make array dictionary out of it
done -->
</div>

<!-- Tanggal Progress
<div class="input-group date" data-provide="datepicker" style="width:40%">
    <input type="text" class="form-control bobot_datepicker" id="tanggal_awl">
    <div class="input-group-addon">
        <span class="glyphicon glyphicon-th"></span>
    </div>
</div> -->


<!-- NO RAB -->

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


<div class="row m-b-3">
<div class="col-xs-4">
  <h4 class="demo-sub-title">Nomor RAB</h4>
    <select class="DDselect" style="width:440px;" name="itemName" id="rab_select"></select>
</div>
</div>


 <input type="hidden" id="idmasterrabs" name="idmasterrabs" value="">
 <input type="hidden" id="tanggal_awlfix" name="tanggalfix" value="">

<div class="row m-b-3">
<div class="col-xs-4">
  <label for="ex1">Nomor WBS</label>
  <input class="form-control" id="wbs" type="text">
</div>


<div class="col-xs-4">
  <label for="ex1">GL Account</label>
  <input class="form-control" id="glaccount" type="text">
</div>


<div class="col-xs-4">
  <label for="ex1">Cost Center</label>
  <input class="form-control" id="costcenter" type="text">
</div>
</div>



<br>
    <div class="responsive-nav">
                <table class="table">
                  <thead>
                    <tr>
                      <th>Nomor PRK</th>
                      <th>Uraian</th>
                      <th>Tanggal</th>
                      <th>PAGU</th>
                      <th>Total Terkontrak</th>
                      <th>Sisa PAGU</th>
                      <th>Total RAB</th>
                      <th>Prosentase RAB-Sisa PAGU</th>
                      <th>Keterangan</th>
                    </tr>
                  </thead>
                  <tbody id="tablerab">
                  </tbody>
                </table>
              </div>


              <div class="text-right">
                  <a href="#"  class="btn btn-primary" id="saveu">Verifikasi</a>
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


var bisa='';
var sisa=0;
//tablenya
$('.DDselect').on("select2:select", function(e) {
  var getrab = document.getElementById("rab_select").value;
  // console.log(getrab);
  var dateo = ((new Date()).toISOString());
  var datefix= (dateo.substring(0, 10));
  $('#tanggal_awlfix').val(datefix);
  $('#rabs').val(getrab);
  // var arraytemp = [];
  $.ajax({
      type: 'GET',
      url: '/getdataverifikasi',
      data:{'getrab': getrab},
      success:function(data)
      {
        $('#idmasterrabs').val(data[0][0].id_master_rab);
        // console.log(data[1][0]);
        // console.log(data[2][0].totals);
        // console.log(data[0][0].no_prk);
        // var sisa=(data[1][0].pagu-data[2][0].totals)-data[0][0].total_rab;

        var sisa=(data[1][0].pagu-data[2][0].totals);
        var prosentase=(data[0][0].total_rab/sisa)*100;
        // if (sisa>=0)
        // {var bisa="Bisa diverifikasi"}
        // else
        // {var bisa="Tidak Bisa diverifikasi"}
         if (data[0][0].tanggal_verifikasi===null)
        { bisa= 'Belum Diverifikasi';}
        else {
           bisa= 'Telah Diverifikasi';
        }
        html='';

        html +='<form class="form-horizontal" role="form" method="post" action="">'
        html +='<tr>';
        html +='<td class="column_name" data-column_name="uraian" data-id="'+data[0][0].id_master_rab+'">'+data[0][0].no_prk+'</td>';
        html +='<td class="column_name" data-column_name="uraian" data-id="'+data[0][0].id_master_rab+'">'+data[0][0].judul+'</td>';
        html +='<td  class="column_name" data-column_name="uraian" data-id="'+data[0][0].id_master_rab+'">'+data[0][0].tgl_rab+'</td>';
        html +='<td  class="column_name" data-column_name="uraian" data-id="'+data[0][0].id_master_rab+'">'+data[1][0].pagu+'</td>';
        html +='<td  class="column_name" data-column_name="uraian" data-id="'+data[0][0].id_master_rab+'">'+data[2][0].totals+'</td>';
        html +='<td  class="column_name" data-column_name="uraian" data-id="'+data[0][0].id_master_rab+'">'+sisa+'</td>';
        html +='<td  class="column_name" data-column_name="uraian" data-id="'+data[0][0].id_master_rab+'">'+data[0][0].total_rab+'</td>';
        html +='<td  class="column_name" data-column_name="uraian" data-id="'+data[0][0].id_master_rab+'">'+Math.round(prosentase)+'%</td>';
        html +='<td  class="column_name" data-column_name="uraian" id="bizass" data-id="'+data[0][0].id_master_rab+'">'+bisa+'</td>';
        html +='</tr>';
        html +='</form>';
        // // fetchandpusharray();
        // chartszdfjfj();
        $('#tablerab').html(html);
     },
  });
});



//
// $("#tanggal_awl").change(function() {
// var datez=$('#tanggal_awl').val();
// var monthz=datez.substring(0, 2);
// var dayz=datez.substring(3, 5);
// var yearz=datez.substring(6, 10);
// var datefixz=yearz+'-'+monthz+'-'+dayz;
// $('#tanggal_awlfix').val(datefixz);
// });


// function postchart()
// {
//   $.ajax({
//       type: 'POST',
//       url: '/chart_renpost',
//       Async:"False",
//       data: {
//         "_token": "<?php echo e(csrf_token()); ?>",
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


// edit  to db add to db click save
$(document).on('click', '#saveu', function() {
  var id = $('#idmasterrabs').val();
  // alert($("#tanggal_awlfix").val());
if (sisa>=0)
{
  if (($("#wbs").val()=="") || ($("#glaccount").val()=="" && $("#costcenter").val()==""))
  {
    alert('Masukan data dengan benar');
  }
  else {
    $.ajax({
      type: 'put',
      url: '/updateverifikasirab/'+id,
        data: {
          "_token": "<?php echo e(csrf_token()); ?>",
          'tanggal_verifikasi': $("#tanggal_awlfix").val(),
          'wbs' : $("#wbs").val(),
          'glaccount' : $("#glaccount").val(),
          'costcenter' : $("#costcenter").val(),
        },
        success:function(data)
        {
          alert("suksess");
          document.getElementById("bizass").innerHTML = "Telah Diverifikasi";
          html='';
          $('#tablerab').html(html);
          $('#rab_select').val(null).trigger('change');
          $("#wbs").val("");
          $("#glaccount").val("");
          $("#costcenter").val("");
       },
    });
  }
}
else
{
  alert('tidak bisa diverifikasi PAGU tidak cukup');
}
});




</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.indexNVM', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\git\AO2\resources\views/keuangan/verifikasirab.blade.php ENDPATH**/ ?>
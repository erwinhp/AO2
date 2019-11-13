<?php $__env->startSection('content'); ?>


<!-- Inline Form-->


<!-- table madude-->
<?php
// dd($prk);
// ?>
<section class="table table-bordered">
  <div class="col-lg-12">
    <div class="articles card">
      <div class="card-close">
        <!-- <div class="dropdown">
          <button type="button" id="closeCard4" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
          <div aria-labelledby="closeCard4" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
        </div> -->
      </div>
      <div class="card-header d-flex align-items-center">
        <h4 class="h4">Nomor PRK : <?php echo e($prk); ?></h4>
        <!-- <div class="badge badge-rounded bg-green">      </div> -->
      </div>
      <div class="card-body no-padding" >

        <div class="card text-center">
          <div class="card-header">
            <!-- <div class="wrapper">
              <ul class="tabs">
                  <li><a href="javascript:void(0); return false;" class="tab active">TAB 1</a></li>
                  <li><a href="javascript:void(0); return false;" class="tab ">TAB 1</a></li>
              </ul>
            </div> -->
            <ul class="nav nav-tabs card-header-tabs">
              <li class="nav-item">
                <button class="nav-link active" id="general" value="<?php echo $prk; ?>">General</button>
              </li>

              <li class="nav-item">
                <button class="nav-link active" id="pekerjaan" value="<?php echo $prk; ?>">Pekerjaan</button>
              </li>

            </ul>
          </div>
          <div class="card-body">


            <table id="tablez" class="table table-striped table-bordered" style="width:100%">
            </table>
          </div>
        </div>

      </div>
    </div>
  </div>

</section>
<script>


   $(document).ready( function () {
var prktake=("<?php echo $prk; ?>");
 $.ajax({
 type: "GET",
 data:{'prk':prktake},
  url:"MAdetilgenfetch",
  dataType:"json",
  success:function(data)
  {
   // console.log(data);
   html='';
   html +='<thead>';
   html +='<tr>';
   html +='<td> No </td>';
   html +='<td> No SPBJ </td>';
   html +='<td> No SKK </td>';
   html +='<td> Tanggal SPBJ </td>';
   html +='<td> Tanggal Akhir </td> </tr><thead>';
   for(var count=0; count < data.length; count++)
   {
  html +='<tbody>';
   html +='<tr>';
   html +='<td>'+(count+1)+'</td>';
   html +='<td>'+data[count].no_kontrak+'</td>';
   html += '<td>'+data[count].no_skk+'</td>';
   html += '<td>'+data[count].tanggal_spbj+'</td>';
   html += '<td>'+data[count].tanggal_akhir+'</td></tr><tbody>';
   }
   // console.log(html);
   $('#tablez').html(html);
 }//success
});//ajax
 });


 $(document).on('click', '#pekerjaan', function() {
 var prktake=("<?php echo $prk; ?>");
 $.ajax({
 type: "GET",
 data:{'prk':prktake},
  url:"MAdetilpekfetch",
  dataType:"json",
  success:function(data)
  {
   // console.log(data);
   html='';
   html +='<thead>';
   html +='<tr>';
   html +='<td> No </td>';
   html +='<td> Pekerjaan </td>';
   html +='<td> Material Kontrak </td>';
   html +='<td> Jasa Kontrak </td>';
   html +='<td> Total Kontrak </td>';
   html +='<td> Material Bayar </td>';
   html +='<td> Jasa Bayar </td>';
   html +='<td> Total Bayar </td> </tr><thead>';
   for(var count=0; count < data.length; count++)
   {
  html +='<tbody>';
   html +='<tr>';
   html +='<td>'+(count+1)+'</td>';
   html +='<td>'+data[count].pekerjaan+'</td>';
   html += '<td>'+data[count].material_kontrak+'</td>';
   html += '<td>'+data[count].jasa_kontrak+'</td>';
   html += '<td>'+data[count].total_kontrak+'</td>';
   html += '<td>'+data[count].material_bayar+'</td>';
   html += '<td>'+data[count].jasa_bayar+'</td>';
   html += '<td>'+data[count].total_bayar+'</td></tr><tbody>';
   }
   // console.log(html);
   $('#tablez').html(html);
 }//success
 });//ajax
});



//general a general j general g
 $(document).on('click', '#general', function() {
 var prktake=("<?php echo $prk; ?>");
 $.ajax({
 type: "GET",
 data:{'prk':prktake},
  url:"MAdetilgenfetch",
  dataType:"json",
  success:function(data)
  {
   // console.log(data);
   html='';
   html +='<thead>';
   html +='<tr>';
   html +='<td> No </td>';
   html +='<td> No SPBJ </td>';
   html +='<td> No SKK </td>';
   html +='<td> Tanggal SPBJ </td>';
   html +='<td> Tanggal Akhir </td> </tr><thead>';
   for(var count=0; count < data.length; count++)
   {
  html +='<tbody>';
   html +='<tr>';
   html +='<td>'+(count+1)+'</td>';
   html +='<td>'+data[count].no_kontrak+'</td>';
   html += '<td>'+data[count].no_skk+'</td>';
   html += '<td>'+data[count].tanggal_spbj+'</td>';
   html += '<td>'+data[count].tanggal_akhir+'</td></tr><tbody>';
   }
   // console.log(html);
   $('#tablez').html(html);
 }//success
});//ajax
 });
 function addCommas(nStr)
 {
     nStr += '';
     var x = nStr.split('.');
     var x1 = x[0];
     var x2 = x.length > 1 ? '.' + x[1] : '';
     var rgx = /(\d+)(\d{3})/;
     while (rgx.test(x1)) {
         x1 = x1.replace(rgx, '$1' + ',' + '$2');
     }
     return x1 + x2;
 }

 $(document).on('click', '#pekerjaan', function() {
 var prktake=("<?php echo $prk; ?>");
 $.ajax({
 type: "GET",
 data:{'prk':prktake},
  url:"MAdetilpekfetch",
  dataType:"json",
  success:function(data)
  {
   // console.log(data);
   html='';
   html +='<thead>';
   html +='<tr>';
   html +='<td> No </td>';
   html +='<td> Pekerjaan </td>';
   html +='<td> Material Kontrak </td>';
   html +='<td> Jasa Kontrak </td>';
   html +='<td> Total Kontrak </td>';
   html +='<td> Material Bayar </td>';
   html +='<td> Jasa Bayar </td>';
   html +='<td> Total Bayar </td> </tr><thead>';
   for(var count=0; count < data.length; count++)
   {
  html +='<tbody>';
   html +='<tr>';
   html +='<td>'+(count+1)+'</td>';
   html +='<td>'+data[count].pekerjaan+'</td>';
   html += '<td>'+addCommas(data[count].material_kontrak)+'</td>';
   html += '<td>'+addCommas(data[count].jasa_kontrak)+'</td>';
   html += '<td>'+addCommas(data[count].total_kontrak)+'</td>';
   html += '<td>'+addCommas(data[count].material_bayar)+'</td>';
   html += '<td>'+addCommas(data[count].jasa_bayar)+'</td>';
   html += '<td>'+addCommas(data[count].total_bayar)+'</td></tr><tbody>';
   }
   // console.log(html);
   $('#tablez').html(html);
 }//success
 });//ajax
 });

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\etc\PEMBELAJARAN\project\AO2\resources\views/MAdetil.blade.php ENDPATH**/ ?>
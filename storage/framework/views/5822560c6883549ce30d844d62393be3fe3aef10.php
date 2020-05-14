<?php $__env->startSection('header'); ?>
Input RAB Master KHS
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<form class="form-horizontal" role="form" method="post" action="/cmrab">
  <?php echo csrf_field(); ?>
<?php
// $getvals='';
$vals=[];
$getstr="";
foreach ($no_rab as $key => $gets) {
foreach ($gets as $key => $getval) {
$getint=substr($getval, 0, -17);
$getstr=substr($getval,-17);
array_push($vals,$getint);
}
}
$fixint=max($vals)+1;
$no_rab=$fixint.$getstr;
?>



      <form class="form-horizontal">

        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Nomor RAB</label>
          <div class="col-sm-9">
            <input type="text" placeholder="<?php echo e($no_rab); ?>" class="form-control" name="no_rab"  value="<?php echo e($no_rab); ?>" disabled>
            <!-- yg value= gak harus -->
          </div>
        </div>

        <!-- <div class="line"></div>


        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Tanggal </label>
          <div class="col-sm-9">
            <input class="date form-control" type="text" name="tgl_prk"  value="<?php echo e(old('tgl_prk')); ?>">
          </div>
          <script type="text/javascript">

              $('.date').datepicker({

                 format: 'mm-dd-yyyy'

               });

          </script>
        </div> -->


 <input type="hidden" id="id_fungsis" name="fungsi" value="">

        <div class="line"></div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Nomor PRK</label>
          <div class="col-sm-9">
              <select class="DDselectprk" style="width:440px;" name="no_prk" id="uraianprk"></select>
          </div>
        </div>


        <div class="line"></div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Program</label>
          <div class="col-sm-9">
            <input type="text" placeholder="program" class="form-control" name="program"  value="<?php echo e(old('program')); ?>">
            <!-- yg value= gak harus -->
          </div>
        </div>


        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Fungsi</label>
          <div class="col-sm-9">
            <input type="text" placeholder="" class="form-control" name="asdfasdf"  value="" id="fungsis" disabled>
          </div>
        </div>

        <div class="line"></div>

        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Judul</label>
          <div class="col-sm-9">
            <input type="text" placeholder="Judul" class="form-control" name="judul"  value="<?php echo e(old('judul')); ?>">
          </div>
        </div>


        <div class="line"></div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Lokasi</label>
          <div class="col-sm-9">
            <select  class="form-control mb-3" name="kode_lokasi"  value="<?php echo e(old('kode_lokasi')); ?>">
              <option>Lokasi</option>
              <?php $__currentLoopData = $lokasi; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $l): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo e($l->kode_lokasi); ?>"><?php echo e($l->nama_lokasi); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </select>
          </div>
        </div>


        <div class="line"></div>

        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Triwulan</label>
          <div class="col-sm-9">
            <input type="text" placeholder="Triwulan (Contoh: 1)" class="form-control" name="triwulan"  value="<?php echo e(old('triwulan')); ?>" onkeypress="return isNumber(event)" >
          </div>
        </div>


        <div class="line"></div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Surveyor 1</label>
          <div class="col-sm-9">
            <select class="form-control mb-3" name="surveyor_1"  value="<?php echo e(old('surveyor_1')); ?>">
              <option>Surveyor 1</option>
              <?php $__currentLoopData = $surveyor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sur): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo e($sur->kode_surveyor); ?>"><?php echo e($sur->nama_surveyor); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
          </div>
        </div>



        <div class="line"></div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Surveyor 2</label>
          <div class="col-sm-9">
            <select class="form-control mb-3" name="surveyor_2"  value="<?php echo e(old('surveyor_2')); ?>">
              <option>Surveyor 2</option>
              <?php $__currentLoopData = $surveyor; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sur): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <option value="<?php echo e($sur->kode_surveyor); ?>"><?php echo e($sur->nama_surveyor); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
          </div>
        </div>

<!-- <input type="hidden" id="custId" name="custId" value="3487"> -->


<div class="form-group row">
<input type="hidden" id="tgl_rab" name="tgl_rab" value="<?php echo e(now()->toDateTimeString('Y-m-d')); ?>" >
</div>

<div class="form-group row">
<input type="hidden" id="no_rab" name="no_rab" value="<?php echo e($no_rab); ?>" >
</div>

<div class="form-group row">
<input type="hidden" id="khs" name="khs" value="1" >
</div>

<div class="form-group row">
<input type="hidden" id="authname" name="rab_nama" value="<?php echo e($user); ?>" >
</div>
        <div class="line"></div>
        <div class="form-group row">
          <div class="col-sm-4 offset-sm-3">
            <button type="submit" class="btn btn-secondary">Cancel</button>
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
        </div>
      </form>




</form>


<script>
var id_fungsis="";
$('.DDselectprk').select2({
  placeholder: 'Select an item',
  ajax: {
    url: '/getprkszz',
    dataType: 'json',
    delay: 250,
    processResults: function (data) {
      return {
        results:  $.map(data, function (item) {
              return {

                  text: item.no_prk,
                  id: item.no_prk,
              }
          })
      };
    },
    cache: true
  }
});


$('.DDselectprk').on("select2:select", function(e) {
  var getprk=$('#uraianprk').val();
  $.ajax({
      type: 'GET',
      url: '/getprkszzz',
      data:{'getprk': getprk},
      success:function(data)
      {
        $('#id_fungsis').val(data[0].id_fungsi);
        $('#fungsis').val(data[0].nama_fungsi);
      }
    });
});

function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}

</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.indexNVM', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\git\AO2\resources\views/input/inputMasterRAB.blade.php ENDPATH**/ ?>
<?php $__env->startSection('header'); ?>
Input Data Vendor
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<form class="form-horizontal" role="form" method="post" action="">
  <?php echo csrf_field(); ?>
<?php

?>
<!-- <a href="#" class="add-modal"><li>Tambah PRK</li></a> -->
<!-- <a href="/inputPRK" class=""><li>Tambah PRK</li></a> -->
<!-- <a href="#" class="add-modaladendum"><li>Tambah Adendum</li></a> -->
<br>

      <form class="form-horizontal">

        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Nama Perusahaan</label>
          <div class="col-sm-9">
            <input type="text" placeholder="Input Nama Perusahaan" class="form-control" name="nama_perusahaan" id="nama_perusahaan"  value="<?php echo e(old('nama_perusahaan')); ?>">
            <!-- yg value= gak harus -->
          </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Nama Direktur</label>
          <div class="col-sm-9">
            <input type="text" placeholder="Input Nama Direktur" class="form-control" name="direktur" id="direktur"  value="<?php echo e(old('nama_perusahaan')); ?>">
            <!-- yg value= gak harus -->
          </div>
        </div>


        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Alamat Perusahaan</label>
          <div class="col-sm-9">
            <input type="text" placeholder="Input Alamat Perusahaan" class="form-control" name="alamat" id="alamat"  value="<?php echo e(old('alamat')); ?>">
            <!-- yg value= gak harus -->
          </div>
        </div>


        <div class="line"></div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Nomor Kontak</label>
          <div class="col-sm-9">
            <input type="text" placeholder="Input Nomor Kontak" class="form-control" name="nomor_kontak" id="nomor_kontak"  value="<?php echo e(old('nomor_kontak')); ?>">
            <!-- yg value= gak harus -->
          </div>
        </div>

        <div class="line"></div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">NPWP</label>
          <div class="col-sm-9">
            <input type="text" placeholder="Input NPWP" class="form-control" name="npwp" id="npwp" value="<?php echo e(old('npwp')); ?>">
            <!-- yg value= gak harus -->
          </div>
        </div>




        <div class="line"></div>
        <div class="form-group row">
          <div class="col-sm-4 offset-sm-3 addkontrak">
            <button type="button" id="cancle" class="btn btn-secondary">Cancel</button>
            <button type="button" class="btn btn-success add" id="addkont">save</button>
          </div>
        </div>
      </form>




</form>

<script>
// $('.datepicker').datepicker({
//     format: 'mm/dd/yyyy',
//     startDate: '-3d'
// });




$('.addkontrak').on('click', '#cancle', function() {
  $('#no_kontrak').val("");
  $('#nama_perusahaan').val("");
  $('#alamat').val("");
  $('#nomor_kontak').val("");
  $('#npwp').val("");
});


//open modal adendum


      //INI ADD Kontrak
      $('.addkontrak').on('click', '#addkont', function() {
        // alert('madude');
              $.ajax({
                  type: 'POST',
                  url: '/storevendor',
                  data: {
                    '_token': $('input[name=_token]').val(),
                    'nama_perusahaan': $('#nama_perusahaan').val(),
                    'alamat': $('#alamat').val(),
                    'nomor_kontak' : $('#nomor_kontak').val(),
                    'npwp': $('#npwp').val(),
                    'direktur': $('#direktur').val(),


                  },
                  success:function(data)
                  {
                    $('#no_kontrak').val(""),
                    $('#nama_perusahaan').val(""),
                    $('#alamat').val(""),
                    $('#nomor_kontak').val(""),
                    $('#npwp').val(""),
                    $('#direktur').val(""),
                    alert("input sukses");
                 },
              });
          });


</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.indexNVM', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\git\AO2\resources\views/Pengadaan/inputvendor.blade.php ENDPATH**/ ?>
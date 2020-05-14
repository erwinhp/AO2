<?php $__env->startSection('header'); ?>
Input Pengawas mungkin nanti nama dan jabatan di ambil dari table user
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
          <label class="col-sm-3 form-control-label">Nomor Kontrak</label>
          <div class="col-sm-9">
            <select class="DDselect" style="width:440px;" name="itemName" id="rab_select"></select>            <!-- yg value= gak harus -->
          </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Nama</label>
          <div class="col-sm-9">
            <input type="text" placeholder="Input Nama" class="form-control" name="direktur" id="Nama"  value="<?php echo e(old('nama_perusahaan')); ?>">
            <!-- yg value= gak harus -->
          </div>
        </div>


        <!-- <div class="form-group row">
          <label class="col-sm-3 form-control-label">Jabatan</label>
          <div class="col-sm-9">
            <input type="text" placeholder="Input Jabatan" class="form-control" name="jabatan" id="jabatan"  value="<?php echo e(old('alamat')); ?>">

          </div>
        </div> -->

        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Jabatan</label>
          <div class="col-sm-9">
            <select class="form-control mb-3" name="surveyor_1" id="jabatan" value="<?php echo e(old('surveyor_1')); ?>">
              <option value="pengawas">Pengawas</option>
              <option value="direksi">Direksi</option>

            </select>
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
  $('#rab_select').val(null).trigger('change');
  $('#Nama').val("");
  $('#jabatan').val("");

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

//open modal adendum

function storemadude()
{
  $.ajax({
      type: 'POST',
      url: '/storepdd',
      data: {
        '_token': $('input[name=_token]').val(),
        'no_rab': $('#rab_select').val(),
        'nama': $('#Nama').val(),
        'jabatan' : $('#jabatan').val(),
      },
      success:function(data)
      {
        $('#rab_select').val(null).trigger('change');
        $('#Nama').val("");
        $('#jabatan').val("");
        alert('sukses input');
     },
  });
}
      //INI ADD Kontrak
      $('.addkontrak').on('click', '#addkont', function() {
        // alert('madude');
        if(($("#rab_select").val()=="")||($("#Nama").val()=="")||($("#jabatan")==""))
        {
          alert("isi data dengan benar!");
          
        }
        else {
          storemadude();
            }
          });


</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.indexNVM', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\git\AO2\resources\views/Pengadaan/pengawas_dan_direksi.blade.php ENDPATH**/ ?>
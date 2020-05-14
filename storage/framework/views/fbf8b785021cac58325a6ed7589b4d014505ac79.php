<?php $__env->startSection('header'); ?>
Input Master spbj
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<form class="form-horizontal" role="form" method="post" action="/cspbj">
  <?php echo csrf_field(); ?>


  <form class="form-horizontal">


        <div class="line"></div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">No SPBJ</label>
          <div class="col-sm-9">
            <input type="text" placeholder="NO SPBJ" class="form-control" name="no_spbj"  value="<?php echo e(old('no_spbj')); ?>">
            <!-- yg value= gak harus -->
          </div>
        </div>

        <div class="line"></div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Judul</label>
          <div class="col-sm-9">
            <input type="text" placeholder="program" class="form-control" name="judul"  value="<?php echo e(old('program')); ?>">
            <!-- yg value= gak harus -->
          </div>
        </div>

        <div class="line"></div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Nilai</label>
          <div class="col-sm-9">
            <input type="text" placeholder="Nilai SPBJ" class="form-control" name="nilai"  value="<?php echo e(old('program')); ?>">
            <!-- yg value= gak harus -->
          </div>
        </div>


        <div class="line"></div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Nama Vendor</label>
          <div class="col-sm-9">
            <select class="DDselectvendor" style="width:440px;" name="vendor" id="vendor"></select>
            <!-- yg value= gak harus -->
          </div>
        </div>


        <div class="form-group row">
          <label class="col-sm-3 form-control-label">No PRK</label>
          <div class="col-sm-9">
            <select class="DDprks" style="width:440px;" name="no_prk" id="no_prk"></select>
            <!-- yg value= gak harus -->
          </div>
        </div>

<!-- <input type="hidden" id="custId" name="custId" value="3487"> -->



        <div class="line"></div>
        <div class="form-group row">
          <div class="col-sm-4 offset-sm-3">
            <button type="submit" class="btn btn-secondary">Cancel</button>
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>

</form>
<script>

$('.DDselectvendor').select2({
  placeholder: 'Select an item',
  ajax: {
    url: '/getvendor',
    dataType: 'json',
    delay: 250,
    processResults: function (data) {
      return {
        results:  $.map(data, function (item) {
              return {

                  text: item.nama_perusahaan,
                  id: item.id_vendor,
              }
          })
      };
    },
    cache: true
  }
});

$('.DDprks').select2({
  placeholder: 'Select an item',
  ajax: {
    url: '/getprksz',
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


</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.indexNVM', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\git\AO2\resources\views/input/inputMasterspbj.blade.php ENDPATH**/ ?>
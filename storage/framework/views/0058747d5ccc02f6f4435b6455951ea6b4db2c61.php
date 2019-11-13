<?php $__env->startSection('content'); ?>
<form class="form-horizontal" role="form" method="post" action="/cmrabpayung">
  <?php echo csrf_field(); ?>

<section class="forms">

<div class="col-lg-12">
  <div class="card">
    <div class="card-close">

    </div>
    <div class="card-header d-flex align-items-center">
      <h3 class="h4">Input Master Kontrak</h3>
    </div>
    <div class="card-body">
      <form class="form-horizontal">


        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Nomor Kontrak</label>
          <div class="col-sm-9">
            <input type="text" placeholder="Nomor Kontrak" class="form-control" name="no_kontrak"  value="<?php echo e(old('no_kontrak')); ?>" >
            <!-- yg value= gak harus -->
          </div>
        </div>



        <div class="line"></div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Program</label>
          <div class="col-sm-9">
            <input type="text" placeholder="pekerjaan" class="form-control" name="pekerjaan"  value="<?php echo e(old('pekerjaan')); ?>">
            <!-- yg value= gak harus -->
          </div>
        </div>

        <div class="line"></div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Vendor</label>
          <div class="col-sm-9">
            <input type="text" placeholder="vendor" class="form-control" name="vendor"  value="<?php echo e(old('vendor')); ?>">
            <!-- yg value= gak harus -->
          </div>
        </div>


<div class="form-group row">
<input type="hidden" id="tanggal_spbj" name="tanggal_spbj" value="<?php echo e(now()->toDateTimeString('Y-m-d')); ?>" >
</div>


<div class="form-group row">
<input type="hidden" id="flag_kontrak" name="flag_kontrak" value="PK" >
</div>


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
</div>
</div>
</section>
</form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\etc\PEMBELAJARAN\project\AO2\resources\views/input/inputMasterRABpayung.blade.php ENDPATH**/ ?>
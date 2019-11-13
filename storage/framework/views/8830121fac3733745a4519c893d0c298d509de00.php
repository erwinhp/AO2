<?php $__env->startSection('content'); ?>
<?php
//dd($prk);
// if ($prk=="")
// {
//   $prk=[];
// }
?>

<!-- Inline Form-->

<!-- table madude-->
<section class="table table-bordered">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-close">
            <div class="dropdown">
            </div>
          </div>
          <div class="card-header d-flex align-items-center">
            <h3 class="h4">Table Deksripsi</h3>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>No PRK</th>
                    <th>Nama PRK</th>
                    <th>PAGU</th>
                    <th>Terkontrak</th>
                    <th>Terkontrak %</th>
                    <th>Terbayar</th>
                    <th>Terbayar %</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $nomor=1;?>
                    <?php $__currentLoopData = $prk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $prkview): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                      <th><?php echo e($nomor); ?></th>
                      <?php $nomor++; ?>
                      <form method="get" action="/detilindex">
                      <input type="hidden" name="no_prk" value="<?php echo e($prkview->no_prk); ?>">
                      <th><input type="submit" value="<?php echo e($prkview->no_prk); ?>" class="btn btn-primary btn-lg active col-md-12" role="button" aria-pressed="true"></th>

                      </form>
                      <th><?php echo e($prkview->namaprk); ?></th>
                      <th><?php echo e($prkview->pagu); ?></th>
                      <th><?php echo e($prkview->totalkontrak); ?></th>
                      <th><?php echo e($prkview->persenkontrak); ?>%</th>
                      <th><?php echo e($prkview->totalbayar); ?></th>
                      <th><?php echo e($prkview->persenbayar); ?>%</th>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.index', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\etc\PEMBELAJARAN\project\AO2\resources\views/welcome.blade.php ENDPATH**/ ?>
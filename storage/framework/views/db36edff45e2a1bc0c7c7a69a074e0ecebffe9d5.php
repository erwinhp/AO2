<?php $__env->startSection('header'); ?>
Monitor Anggaran
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<?php
//dd($prk);
// if ($prk=="")
// {
//   $prk=[];
// }
?>

<a class="btn btn-primary" href="/inputMA" role="button">Input Monitoring Anggaran</a>

<!-- table madude-->

<div class="container-fluid">
        <div class="panel-wrapper">
          <div class="panel">
              <div class="responsive-nav">
                <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>No PRK</th>
                    <th>Nama PRK</th>
                    <th>PAGU</th>
                    <th>Kontrak</th>
                    <th>Kontrak %</th>
                    <th>Bayar</th>
                    <th>Bayar %</th>
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

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.indexNVM', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\git\AO2\resources\views/MA.blade.php ENDPATH**/ ?>
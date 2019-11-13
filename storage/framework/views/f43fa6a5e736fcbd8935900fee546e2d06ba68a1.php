<?php $__env->startSection('content'); ?>

<script src="<?php echo e(asset('js/pekerjaan.js?1500')); ?>"></script>
<?php
$prk="";
if (isset($_GET['prk'])) {$prk=$_GET['prk'];}
    $general = DB::select('SELECT pekerjaan,material_kontrak,jasa_kontrak,total_kontrak,material_bayar,jasa_bayar,total_bayar FROM kontrak WHERE (no_prk)=:j', ['j' => $prk]);
?>
<table id="example4" class="table table-striped table-bordered" style="width:100%">
                      <thead>
                          <tr>
                              <th>No</th>
                              <th>Pekerjaan</th>
                              <th>Material Kontrak</th>
                              <th>Jasa Kontrak</th>
                              <th>Total Kontrak </th>
                              <th>Material Bayar</th>
                              <th>Jasa Bayar</th>
                              <th>Total Bayar </th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php
                          $num=0;
                          ?>
                          <?php $__currentLoopData = $general; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $k): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                      <th>
                        <?php
                        $num=$num+1;
                        echo $num;
                        ?>
                      </th>

                      <th><?php echo e($k->pekerjaan); ?></th>
                      <th><?php echo e($k->material_kontrak); ?></th>
                      <th><?php echo e($k->jasa_kontrak); ?></th>
                      <th><?php echo e($k->total_kontrak); ?></th>
                      <th><?php echo e($k->material_bayar); ?></th>
                      <th><?php echo e($k->jasa_bayar); ?></th>
                      <th><?php echo e($k->total_bayar); ?></th>


                        </tbody>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </table>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.indexajax', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\etc\PEMBELAJARAN\project\AO2\resources\views/ajax/ajaxpekerjaan.blade.php ENDPATH**/ ?>
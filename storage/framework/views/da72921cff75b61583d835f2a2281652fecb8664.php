 

 <?php $__env->startSection('header'); ?>
Upload Excel RAB PK
 <?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<meta name="_token" content="<?php echo e(csrf_token()); ?>">
<br>
  <div class="container">
     <h3 align="center">Import Excel File RAB PK</h3>
      <br />
     <?php if(count($errors) > 0): ?>
      <div class="alert alert-danger">
       Upload Validation Error<br><br>
       <ul>
        <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($error); ?></li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
       </ul>
      </div>
     <?php endif; ?>

     <?php if($message = Session::get('success')): ?>
     <div class="alert alert-success alert-block">
      <button type="button" class="close" data-dismiss="alert">×</button>
             <strong><?php echo e($message); ?></strong>
     </div>
     <?php endif; ?>
     <form method="post" enctype="multipart/form-data" action="<?php echo e(url('/storeexcelpk')); ?>">
      <?php echo e(csrf_field()); ?>

      <div class="form-group">
       <table class="table">
        <tr>
         <td width="40%" align="right"><label>Select File for Upload</label></td>
         <td width="30">
          <input type="file" name="select_file" />
         </td>
         <td width="30%" align="left">
          <input type="submit" name="upload" class="btn btn-primary" value="Upload">
         </td>
        </tr>
        <tr>
         <td width="40%" align="right"></td>
         <td width="30"><span class="text-muted">.xls, .xslx</span></td>
         <td width="30%" align="left"></td>
        </tr>
       </table>
      </div>
     </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.indexNVM', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\git\AO2\resources\views/import_excelrabpk.blade.php ENDPATH**/ ?>
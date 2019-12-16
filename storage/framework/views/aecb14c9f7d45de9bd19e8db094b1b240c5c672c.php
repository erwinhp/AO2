<?php $__env->startSection('content'); ?>
<meta name="_token" content="<?php echo e(csrf_token()); ?>">


<?php
$no_kontrak="";
if (isset($_GET["no_kontrak"])) {
  $no_kontrak=$_GET["no_kontrak"];
}
else {
  $no_kontrak="";
  ?>
  <!-- <script>
  $(document).ready(function(){
  var val = "<?php //echo $no_kontrak ?>";
  alert(val);
});
</script>-->
  <?php
}
?>



<div class="container-fluid">
        <div class="panel-wrapper">
          <div class="panel">
<div class="table-bar">
  <div class="form-inline">
    <div class="form-group">
      <label class="form-control-label">CARI RAB</label>
      <div class="form-group form-control-search">
          <input class="form-control" type="text" placeholder="Cari RAB" id="sss">
      </div>
    </div>

    <div class="pull-sm-right">
      <div class="form-group">
          <a href="/cmasterabpayungs"  class="btn btn-primary" > Buat RAB</a>
      </div>
    </div>
  </div>
</div>

<!-- THIS IS THE TABLE -->
  <div class="responsive-nav">
              <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>no_rab</th>
                    <th>judul</th>
                    <th>program</th>
                    <th>Total Nilai</th>
                    <th>Detil</th>
                  </tr>
                </thead>
                <tbody>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

<script>
$(document).ready(function(){
$("#sss").keyup(function(e) {
$value=$(this).val();
$val2="<?php echo $no_kontrak?>";
// alert('dudes');
$.ajax({
type : 'get',
url : '<?php echo e(URL::to('cmasterabpayungsearch')); ?>',
data:{'search':$value,'no_kontrak':$val2},
success:function(data){
$('tbody').html(data);
}
});
});
});



</script>


</script>
<script type="text/javascript">
$.ajaxSetup({ headers: { 'csrftoken' : '<?php echo e(csrf_token()); ?>' } });
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.indexNVM', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\etc\PEMBELAJARAN\project\AO2\resources\views/indexMasterabpayungs.blade.php ENDPATH**/ ?>
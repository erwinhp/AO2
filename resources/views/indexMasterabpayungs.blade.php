@extends('layouts.index')
@section('content')
<meta name="_token" content="{{ csrf_token() }}">


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



<section class="table table-bordered">

  <div class="col-lg-6">
    <div class="card">
      <div class="card-close">
      </div>
      <div class="card-header d-flex align-items-center">
        <h3 class="h4">Form RAB</h3>
      </div>
      <div class="card-body">
        <form class="form-inline">
          <div class="form-group">
            <label for="inlineFormInput" class="sr-only">Nomor RAB</label>
            <input id="sss" type="text" placeholder="CARI RAB" class="mr-3 form-control">
          </div>
&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
          <div class="form-group">
            <a href="/cmasterabpayungs?no_kontrak=<?php echo $no_kontrak ?>"  class="btn btn-primary" >Buat RAB</a>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- <div class="form-group">
  <input type="text" class="form-controller" id="sss" name="search"></input>
  </div> -->
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-close">
            <div class="dropdown">
            </div>
          </div>
          <div class="card-header d-flex align-items-center">
            <h3 class="h4">Table RAB</h3>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped">
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

    </div>
  </div>
</section>
<script>
$(document).ready(function(){
$("#sss").keyup(function(e) {
$value=$(this).val();
$val2="<?php echo $no_kontrak?>";
// alert('dudes');
$.ajax({
type : 'get',
url : '{{URL::to('cmasterabpayungsearch')}}',
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
$.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
</script>

@stop

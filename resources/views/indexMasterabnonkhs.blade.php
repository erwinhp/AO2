@extends('layouts.indexNVM')
@section('content')
<meta name="_token" content="{{ csrf_token() }}">


<?php
//dd($prk);
// if ($prk=="")
// {
//   $prk=[];
// }
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
          <a href="/cmrabnon"  class="btn btn-primary" > Buat RAB</a>
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
// alert('dudes');
$.ajax({
type : 'get',
url : '{{URL::to('searchnon')}}',
data:{'search':$value},
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

@extends('layouts.indexNVM')
@section('header')
Buat Master RAB SPBJ
@endsection
@section('content')
<meta name="_token" content="{{ csrf_token() }}">


<?php
//dd($prk);
// if ($prk=="")
// {
//   $prk=[];
// }
?>




<!--
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
            <a href="/cmrab"  class="btn btn-primary" > Buat RAB</a>
          </div>
        </form>
      </div>
    </div>
  </div> -->
  <!-- <div class="form-group">
  <input type="text" class="form-controller" id="sss" name="search"></input>
  </div> -->
<!-- THIS IS THE SEARCH BAR AND ADD BUTTON -->
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
          <a href="/cmrab"  class="btn btn-primary" > Buat RAB</a>
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
url : '{{URL::to('search')}}',
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

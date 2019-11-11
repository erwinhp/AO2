@extends('layouts.index')
@section('content')
<meta name="_token" content="{{ csrf_token() }}">






<section class="table table-bordered">

  <div class="col-lg-6">
    <div class="card">
      <div class="card-close">
      </div>
      <div class="card-header d-flex align-items-center">
        <h3 class="h4">Form SPBJ</h3>
      </div>
      <div class="card-body">
        <form class="form-inline">
          <div class="form-group">
            <label for="inlineFormInput" class="sr-only">Nomor SPBJ</label>
            <input id="sss" type="text" placeholder="CARI SPBJ" class="mr-3 form-control">
          </div>

          <div class="form-group">
            <a href="/cspbj"  class="btn btn-primary" >Buat SPBJ</a>
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
            <h3 class="h4">Table SPBJ</h3>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>No SPBJ</th>
                    <th>Judul</th>
                    <th>Nilai</th>
                    <th>Vendor</th>
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
// alert('dudes');
$.ajax({
type : 'get',
url : '{{URL::to('mspbjsearch')}}',
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

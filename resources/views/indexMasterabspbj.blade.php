@extends('layouts.indexNVM')
@section('header')
Master SPBJ
@endsection
@section('content')
<meta name="_token" content="{{ csrf_token() }}">






<div class="container-fluid">
        <div class="panel-wrapper">
          <div class="panel">
<div class="table-bar">
  <div class="form-inline">
    <div class="form-group">
      <label class="form-control-label">CARI SPBJ</label>
      <div class="form-group form-control-search">
          <input class="form-control" type="text" placeholder="Cari SPBJ" id="sss">
      </div>
    </div>

    <div class="pull-sm-right">
      <div class="form-group">
          <a href="/cspbj"  class="btn btn-primary" > Buat SPBJ</a>
      </div>
    </div>
  </div>
</div>
  <!-- <div class="form-group">
  <input type="text" class="form-controller" id="sss" name="search"></input>
  </div> -->
  <div class="responsive-nav">
              <table class="table">
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

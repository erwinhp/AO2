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



            <form class="form-horizontal">


@csrf


              <div class="form-group row">
                <label class="col-sm-3 form-control-label">Nomor RAB</label>
                <div class="col-sm-9">
                      <select class="DDrabs" style="width:440px;" name="itemName" id="DDrab"></select>
                  </div>
              </div>


              <div class="line"></div>
              <div class="form-group row">
                <label class="col-sm-3 form-control-label">No PK</label>
                <div class="col-sm-9">
                  <input type="text" placeholder="No PK" class="form-control" name="no_skk" id="no_pk"  value="{{ old('no_skk') }}">
                  <!-- yg value= gak harus -->
                </div>
              </div>

              <div class="line"></div>
              <div class="form-group row">
                <label class="col-sm-3 form-control-label">Tanggal Awal</label>
                <div class="col-sm-9">
              <div class="input-group date" data-provide="datepicker" style="width:40%">
                  <input type="text" class="form-control bobot_datepicker" id="tanggal_awal" >
                  <div class="input-group-addon">
                      <span class="glyphicon glyphicon-th"></span>
                  </div>
              </div>
            </div>
          </div>



              <div class="line"></div>

              <div class="form-group row">
                <label class="col-sm-3 form-control-label">Tanggal Akhir</label>
                <div class="col-sm-9">
              <div class="input-group date" data-provide="datepicker" style="width:40%">
                  <input type="text" class="form-control bobot_datepicker" id="tanggal_akhir">
                  <div class="input-group-addon">
                      <span class="glyphicon glyphicon-th"></span>
                  </div>
              </div>
            </div>
          </div>


              <div class="line"></div>
              <div class="form-group row">
                <label class="col-sm-3 form-control-label">Judul</label>
                <div class="col-sm-9">
                  <input type="text" placeholder="Judul" class="form-control" name="pekerjaan" id="judul" value="{{ old('pekerjaan') }}" disabled>
                  <!-- yg value= gak harus -->
                </div>
              </div>

              <div class="line"></div>
              <div class="form-group row">
                <label class="col-sm-3 form-control-label">NO SPBJ</label>
                <div class="col-sm-9">
                  <input type="text" placeholder="No SPBJ" class="form-control" name="pekerjaan" id="no_spbj" value="{{ old('pekerjaan') }}" disabled>
                  <!-- yg value= gak harus -->
                </div>
              </div>

              <div class="line"></div>
              <div class="form-group row">
                <label class="col-sm-3 form-control-label">Nama Vendor</label>
                <div class="col-sm-9">
                  <input type="text" placeholder="Nama Vendor" class="form-control" name="pekerjaan" id="vendor" value="{{ old('pekerjaan') }}" disabled>
                  <!-- yg value= gak harus -->
                </div>
              </div>

              <div class="line"></div>
              <div class="form-group row">
                <label class="col-sm-3 form-control-label">Nilai</label>
                <div class="col-sm-9">
                  <input type="text" placeholder="Nilai" class="form-control" name="pekerjaan" id="nilai" value="{{ old('pekerjaan') }}" disabled>
                  <!-- yg value= gak harus -->
                </div>
              </div>






      <!-- <input type="hidden" id="custId" name="custId" value="3487"> -->


       <input type="hidden" id="tanggal_spbjedit" name="spbjedit" value="">
        <input type="hidden" id="tanggal_akhiredit" name="tanggaldit" value="">






              <div class="form-group row">
                <div class="col-sm-4 offset-sm-3 addpksmadude">
                  <!-- <button  class="btn btn-secondary" id="clear">Cancel</button> -->
                    <button type="button" class="btn btn-secondary" id="clear">Cancel</button>
                  <button type="button" class="btn btn-success add" id="addpks">save</button>
                </div>
              </div>
            </form>




      </form>

<script>
var tglawl="";
var tglakr="";
var vendor="";

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

$('.bobot_datepicker').datepicker({
format: 'dd-mm-yyyy'
});


$('.DDrabs').select2({
  placeholder: 'Select an item',
  ajax: {
    url: '/getnorab',
    dataType: 'json',
    delay: 250,
    processResults: function (data) {
      return {
        results:  $.map(data, function (item) {
              return {

                  text: item.no_rab,
                  id: item.no_rab,
              }
          })
      };
    },
    cache: true
  }

});



$('.DDrabs').on("select2:select", function(e) {

    var getrab = document.getElementById("DDrab").value;
    // console.log(getrab);
    $.ajax({
        type: 'GET',
        url: '/getspbjdata',
        data:{'getrab': getrab},
        success:function(data)
        {
          // console.log(data);
          vendor=data[0].id_vendor;
          $("#vendor").val(data[0].vendor);
          $("#judul").val(data[0].judul);
          $("#nilai").val(data[0].nilai);
          $("#no_spbj").val(data[0].no_spbj);
        },
    });
});



$( "#tanggal_awal" ).change(function() {
  var date1=$('#tanggal_awal').val();
  var month1=date1.substring(0, 2);
  var day1=date1.substring(3, 5);
  var year1=date1.substring(6, 10);
  var datefix1=year1+'-'+month1+'-'+day1;
tglawl=datefix1;
});


$( "#tanggal_akhir" ).change(function() {
  var date1=$('#tanggal_akhir').val();
  var month1=date1.substring(0, 2);
  var day1=date1.substring(3, 5);
  var year1=date1.substring(6, 10);
  var datefix2=year1+'-'+month1+'-'+day1;
tglakr=datefix2;
});


$('.addpksmadude').on('click', '#clear', function() {
$('#DDrab').val(null).trigger('change'),
$('#tanggal_awal').val("");
$('#tanggal_akhir').val("");
$('#no_pk').val("");

$('#judul').val("");
$('#no_spbj').val("");
$('#vendor').val("");
$('#nilai').val("");
});


$('.addpksmadude').on('click', '#addpks', function() {
  // alert('madude');
        $.ajax({
            type: 'POST',
            url: '/storepks',
            data: {
              '_token': $('input[name=_token]').val(),
              'no_pk': $('#no_pk').val(),
              'tgl_awal': tglawl,
              'tgl_akhir' : tglakr,
              'no_rab': document.getElementById("DDrab").value,
              'vendor':vendor,
              // 'tanggal_adendum': $('#tanggal_adendumsedit').val(),

            },
            success:function(data)
            {
              alert('Input PK Sukses');
              // $('#tanggal_awal').val("");
              // $('#tanggal_akhir').val("");
              // $('#no_pk').val("");
           },
        });
    });


</script>





</script>
<!-- <script type="text/javascript">
$.ajaxSetup({ headers: { 'csrftoken' : '{{ csrf_token() }}' } });
</script> -->

@stop

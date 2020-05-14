@extends('layouts.indexNVM')
@section('header')
Input RAB Master PK
@endsection
@section('content')
<form class="form-horizontal" role="form" method="post" action="/cmasterabpayungs">
  @csrf
<?php
$vals=[];
$getstr="";
foreach ($no_rab as $key => $gets) {
foreach ($gets as $key => $getval) {
$getint=substr($getval, 0, -17);
$getstr=substr($getval,-17);
array_push($vals,$getint);
}
}
$fixint=max($vals)+1;
$no_rab=$fixint.$getstr;
?>
      <form class="form-horizontal">
<!-- commentttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttttt -->


        <div class="line"></div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">No SPBJ</label>
          <div class="col-sm-9">
            <select class="DDselect" style="width:440px;" name="no_spbj" id="uraian"></select>
          </div>
        </div>



        <div class="line"></div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Nomor RAB</label>
          <div class="col-sm-9">
            <input type="text" placeholder="{{$no_rab}}" class="form-control" name="no_rab"  value="{{$no_rab}}" disabled>
            <!-- yg value= gak harus -->
          </div>
        </div>

        <!-- <div class="line"></div>


        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Tanggal </label>
          <div class="col-sm-9">
            <input class="date form-control" type="text" name="tgl_prk"  value="{{ old('tgl_prk') }}">
          </div>
          <script type="text/javascript">

              $('.date').datepicker({

                 format: 'mm-dd-yyyy'

               });

          </script>
        </div> -->




        <div class="line"></div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Nomor PRK</label>
          <div class="col-sm-9">
            <input type="text" placeholder="Nomor PRK" class="form-control" name="no_prk"  value="" id="no_prksks" disabled>
          </div>
        </div>




        <div class="line"></div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Program</label>
          <div class="col-sm-9">
            <input type="text" placeholder="program" class="form-control" name="program"  value="{{ old('program') }}">
            <!-- yg value= gak harus -->
          </div>
        </div>



        <div class="line"></div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Fungsi</label>
          <div class="col-sm-9">
            <select  class="form-control input-sm mb-3"  name="fungsi"  value="{{ old('fungsi') }}">
              <option>Fungsi</option>
              @foreach($fungsi as $fungsi)
              <option value="{{$fungsi->id_fungsi}}">{{$fungsi->nama_fungsi}}</option>
              @endforeach
            </select>
          </div>
        </div>


        <div class="line"></div>

        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Judul</label>
          <div class="col-sm-9">
            <input type="text" placeholder="Judul" class="form-control" name="judul"  value="{{ old('judul') }}">
          </div>
        </div>


        <div class="line"></div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Lokasi</label>
          <div class="col-sm-9">
            <select  class="form-control mb-3" name="kode_lokasi"  value="{{ old('kode_lokasi') }}">
              <option>Lokasi</option>
              @foreach($lokasi as $l)
              <option value="{{$l->kode_lokasi}}">{{$l->nama_lokasi}}</option>
              @endforeach

            </select>
          </div>
        </div>


        <div class="line"></div>

        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Triwulan</label>
          <div class="col-sm-9">
            <input type="text" placeholder="Triwulan (Contoh: 1)" class="form-control" name="triwulan"  value="{{ old('triwulan') }}" onkeypress="return isNumber(event)">
          </div>
        </div>


        <!-- <div class="line"></div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Surveyor 1</label>
          <div class="col-sm-9">
            <select class="form-control mb-3" name="surveyor_1"  value="{{ old('surveyor_1') }}">
              <option>Surveyor 1</option>
              @foreach($surveyor as $sur)
              <option value="{{$sur->kode_surveyor}}">{{$sur->nama_surveyor}}</option>
              @endforeach
            </select>
          </div>
        </div>



        <div class="line"></div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Surveyor 2</label>
          <div class="col-sm-9">
            <select class="form-control mb-3" name="surveyor_2"  value="{{ old('surveyor_2') }}">
              <option>Surveyor 2</option>
              @foreach($surveyor as $sur)
              <option value="{{$sur->kode_surveyor}}">{{$sur->nama_surveyor}}</option>
              @endforeach
            </select>
          </div>
        </div> -->

<!-- <input type="hidden" id="custId" name="custId" value="3487"> -->
<input type="hidden" id="no_prkabc" name="no_prkabc" value="" >

<div class="form-group row">
<input type="hidden" id="tgl_rab" name="tgl_rab" value="{{ now()->toDatestring('Y-m-d') }}" >
</div>

<div class="form-group row">
<input type="hidden" id="no_rab" name="no_rab" value="{{$no_rab}}" >
</div>

<!-- <div class="form-group row">
<input type="hidden" id="no_spbj" name="no_spbj" value="" >
</div> -->


<div class="form-group row">
<input type="hidden" id="khs" name="khs" value="1" >
</div>

<div class="form-group row">
<input type="hidden" id="authname" name="rab_nama" value="{{$user}}" >
</div>

<div class="form-group row">
<input type="hidden" id="flag_rab" name="flag_rab" value="pk" >
</div>

        <div class="line"></div>
        <div class="form-group row">
          <div class="col-sm-4 offset-sm-3">
            <button type="submit" class="btn btn-secondary">Cancel</button>
            <button type="submit" class="btn btn-primary" id="savez">Save</button>
          </div>
        </div>
      </form>
</form>

<script>
$('.DDselect').select2({
  placeholder: 'Select an item',
  ajax: {
    url: '/getnospbj',
    dataType: 'json',
    delay: 250,
    processResults: function (data) {
      return {
        results:  $.map(data, function (item) {
              return {
                  text: item.no_spbj,
                  id: item.no_spbj,
              }
          })

      };
    },
    cache: true
  }
});


$('.DDselect').on("select2:select", function(e) {
  var getspbjs = document.getElementById("uraian").value;
  // console.log(getrab);
  $.ajax({
      type: 'GET',
      url: '/getprkspbj',
      data:{'getspbjs': getspbjs},
      success:function(data)
      {
        // $('#no_prksks').val("ajg kenapagk mau");
        document.getElementById("no_prksks").value = data[0].no_prk;
        document.getElementById("no_prkabc").value = data[0].no_prk;


        // alert($('#no_prksks').val());
        // data[0].no_prk
      },
  });
});



$('.DDselectprk').select2({
  placeholder: 'Select an item',
  ajax: {
    url: '/getprkszz',
    dataType: 'json',
    delay: 250,
    processResults: function (data) {
      return {
        results:  $.map(data, function (item) {
              return {

                  text: item.no_prk,
                  id: item.no_prk,
              }
          })
      };
    },
    cache: true
  }
});

// $('.DDselect').on("select2:select", function(e) {
//   var idmat = document.getElementById("uraian").value;
//   var hrg = document.getElementById("jumlah").value;
//   $.ajax({
//       type: 'GET',
//       url: '/rgetmat',
//       data:{'idmat': idmat},
//       success:function(data)
//       {
//         $('#id_spbj').val(a.no_spbj);
//      },
//   });
// });

function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode > 31 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}


</script>
@endsection

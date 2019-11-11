@extends('layouts.index')
@section('content')
<form class="form-horizontal" role="form" method="post" action="/cmrabnon">
  @csrf
<?php
$getvals='';
foreach ($no_rab as $key => $gets) {
foreach ($gets as $key => $getval) {
$getvals=$getval;
}
}

$getint=substr($getvals, 0, -17);
$getint=$getint+1;
$getstr=substr($getvals,-17);
$no_rab=$getint.$getstr;
?>
<section class="forms">

<div class="col-lg-12">
  <div class="card">
    <div class="card-close">

    </div>
    <div class="card-header d-flex align-items-center">
      <h3 class="h4">Input Master RAB</h3>
    </div>
    <div class="card-body">
      <form class="form-horizontal">


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
            <select  class="form-control mb-3" name="no_prk"  value="{{ old('no_prk') }}">
              <option>Nomor PRK</option>
              @foreach($prk as $no_prk)
              <option value="{{$no_prk->no_prk}}">{{$no_prk->no_prk}}</option>
              @endforeach
            </select>
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
            <input type="text" placeholder="Triwulan" class="form-control" name="triwulan"  value="{{ old('triwulan') }}">
          </div>
        </div>


        <div class="line"></div>
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
        </div>

<!-- <input type="hidden" id="custId" name="custId" value="3487"> -->


<div class="form-group row">
<input type="hidden" id="tgl_rab" name="tgl_rab" value="{{ now()->toDateTimeString('Y-m-d') }}" >
</div>

<div class="form-group row">
<input type="hidden" id="no_rab" name="no_rab" value="{{$no_rab}}" >
</div>

<div class="form-group row">
<input type="hidden" id="khs" name="khs" value="0" >
</div>

<div class="form-group row">
<input type="hidden" id="authname" name="rab_nama" value="{{$user}}" >
</div>
        <div class="line"></div>
        <div class="form-group row">
          <div class="col-sm-4 offset-sm-3">
            <button type="submit" class="btn btn-secondary">Cancel</button>
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
</div>
</section>
</form>
@endsection

@extends('layouts.index')
@section('content')
<form class="form-horizontal" role="form" method="post" action="/cmrabpayung">
  @csrf

<section class="forms">

<div class="col-lg-12">
  <div class="card">
    <div class="card-close">

    </div>
    <div class="card-header d-flex align-items-center">
      <h3 class="h4">Input Master Kontrak</h3>
    </div>
    <div class="card-body">
      <form class="form-horizontal">


        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Nomor Kontrak</label>
          <div class="col-sm-9">
            <input type="text" placeholder="Nomor Kontrak" class="form-control" name="no_kontrak"  value="{{ old('no_kontrak') }}" >
            <!-- yg value= gak harus -->
          </div>
        </div>



        <div class="line"></div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Program</label>
          <div class="col-sm-9">
            <input type="text" placeholder="pekerjaan" class="form-control" name="pekerjaan"  value="{{ old('pekerjaan') }}">
            <!-- yg value= gak harus -->
          </div>
        </div>

        <div class="line"></div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Vendor</label>
          <div class="col-sm-9">
            <input type="text" placeholder="vendor" class="form-control" name="vendor"  value="{{ old('vendor') }}">
            <!-- yg value= gak harus -->
          </div>
        </div>


<div class="form-group row">
<input type="hidden" id="tanggal_spbj" name="tanggal_spbj" value="{{ now()->toDateString('Y-m-d') }}" >
</div>


<div class="form-group row">
<input type="hidden" id="flag_kontrak" name="flag_kontrak" value="PK" >
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

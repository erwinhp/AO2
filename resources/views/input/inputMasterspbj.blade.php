@extends('layouts.index')
@section('content')
<form class="form-horizontal" role="form" method="post" action="/cspbj">
  @csrf
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


        <div class="line"></div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">No SPBJ</label>
          <div class="col-sm-9">
            <input type="text" placeholder="NO SPBJ" class="form-control" name="no_spbj"  value="{{ old('no_spbj') }}">
            <!-- yg value= gak harus -->
          </div>
        </div>

        <div class="line"></div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Judul</label>
          <div class="col-sm-9">
            <input type="text" placeholder="program" class="form-control" name="judul"  value="{{ old('program') }}">
            <!-- yg value= gak harus -->
          </div>
        </div>

        <div class="line"></div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Nilai</label>
          <div class="col-sm-9">
            <input type="text" placeholder="program" class="form-control" name="nilai"  value="{{ old('program') }}">
            <!-- yg value= gak harus -->
          </div>
        </div>


        <div class="line"></div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Vendor</label>
          <div class="col-sm-9">
            <input type="text" placeholder="program" class="form-control" name="vendor"  value="{{ old('program') }}">
            <!-- yg value= gak harus -->
          </div>
        </div>


<!-- <input type="hidden" id="custId" name="custId" value="3487"> -->



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

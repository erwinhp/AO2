@extends('layouts.indexNVM')
@section('header')
Input PRK
@endsection
@section('content')
<form class="form-horizontal" role="form" method="post" action="/cmrab">
  @csrf
<?php

?>

<br>

<div class="modal-body">
      <form class="form-horizontal">
      @csrf

      <div class="form-group row">
        <label class="col-sm-3 form-control-label">Nomor PRK</label>
        <div class="col-sm-9">
                <input type="jumlah" class="form-control" id="no_prk" name="no_prk" placeholder="No PRK" value="" required="">
            </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Nama PRK</label>
          <div class="col-sm-9">
                <input type="satuan" class="form-control" id="nama_prk" name="nama_prk" placeholder="Nama PRK" value="" required="">
            </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-3 form-control-label">PAGU</label>
          <div class="col-sm-9">
                <input type="harga_satuan" class="form-control" id="pagu" name="pagu" placeholder="PAGU" value="" required="">
            </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Nilai Investasi</label>
          <div class="col-sm-9">
                <input type="Nilai Investasi" class="form-control" id="nilai_investasi" name="nilai_investasi" placeholder="Nilai Investasi" value="" required="">
            </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Nilai Disbursement</label>
          <div class="col-sm-9">
                <input type="harga_satuan" class="form-control" id="nilai_disbursement" name="nilai_disbursement" placeholder="Nilai Disbursement" value="" required="">
            </div>
        </div>


        <div class="form-group row">
          <label class="col-sm-3 form-control-label">FUNGSI</label>
          <div class="col-sm-9">
            <select  class="form-control mb-3" name="fungsi" id="fungsi"  value="{{ old('fungsi') }}">
             <option>Option</option>
              <?php foreach ($fungsi as $key => $f) { ?>
                <option value=<?php echo $f->id_fungsi ?>>{{$f->nama_fungsi}}</option>
                <?php
              } ?>
            </select>
          </div>
        </div>


      </div>

        <div class="modal-footer">
         <button type="button" class="btn btn-success" data-dismiss="modal" id="idadd">
        <span id="" class='glyphicon glyphicon-check'></span> Add
        </button>
      <button type="button" class="btn btn-warning" data-dismiss="modal" id="clears">
        <span class='glyphicon glyphicon-remove'></span> Clear
      </button>

      </form>

<script>
  $('.modal-footer').on('click', '#clears', function() {
    $('#id_fungsi').val('');
    $('#pagu').val('');
    $('#nama_prk').val('');
    $('#no_prk').val('');
    $('#nilai_investasi').val('');
    $('#nilai_disbursement').val('');
    $('#no_prk').focus();
  });

  //INI ADD PRK
  $('.modal-footer').on('click', '#idadd', function() {
          $.ajax({
              type: 'POST',
              url: '/storeprk',
              data: {
                '_token': $('input[name=_token]').val(),
                'no_prk': $('#no_prk').val(),
                'nama_prk': $('#nama_prk').val(),
                'pagu' : $('#pagu').val(),
                'fungsi': $('#fungsi').val(),
                'nilai_investasi' : $('#nilai_investasi').val(),
                'nilai_disbursement': $('#nilai_disbursement').val(),
              },
              success:function(data)
              {
                            $('#id_fungsi').val('');
                            $('#pagu').val('');
                            $('#nama_prk').val('');
                            $('#no_prk').val('');
                            $('#nilai_investasi').val('');
                            $('#nilai_disbursement').val('');
                            $('#no_prk').focus();
                            alert('Input PRK sukses');
             },
          });
      });


</script>
@endsection

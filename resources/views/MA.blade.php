@extends('layouts.indexNVM')
@section('header')
Monitor Anggaran
@endsection

@section('content')
<?php
//dd($prk);
// if ($prk=="")
// {
//   $prk=[];
// }
?>

<!-- <a class="btn btn-primary" href="/inputMA" role="button">Input Monitoring Anggaran</a> -->

<!-- table madude-->
<button type="button" class="btn btn-primary" id="cetakexcel">CETAK EXCEL</button>
<div class="container-fluid">
        <div class="panel-wrapper">
          <div class="panel">
              <div class="responsive-nav">
                <table class="table" id="export-content">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>No SKK</th>
                    <th>No PRK</th>
                    <th>Nama PRK</th>
                    <th>PAGU</th>
                    <th>Kontrak</th>
                    <th>Kontrak %</th>
                    <th>Bayar</th>
                    <th>Bayar %</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $nomor=1;?>
                    @foreach($prk as $prkview)
                    <tr>
                      <th>{{$nomor}}</th>
                      <?php $nomor++; ?>
                      <th>{{$prkview->no_skk}}</th>
                      <form method="get" action="/detilindex">
                      <input type="hidden" name="no_prk" value="{{$prkview->no_prk}}">
                      <th><input type="submit" value="{{$prkview->no_prk}}" class="btn btn-primary btn-lg active col-md-12" role="button" aria-pressed="true"></th>
                      </form>
                      <th>{{$prkview->namaprk}}</th>
                      <th>{{$prkview->pagu}}</th>
                      <th>{{$prkview->totalkontrak}}</th>
                      <th>{{$prkview->persenkontrak}}%</th>
                      <th>{{$prkview->totalbayar}}</th>
                      <th>{{$prkview->persenbayar}}%</th>
                    </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

<script>
$(document).on('click', '#cetakexcel', function() {
$("#export-content").table2excel({
  name: "WorksheetName",
  filename: "Monitoring Anggaran", //do not include extension
  fileext: ".xls" // file extension
});
});
</script>
@stop

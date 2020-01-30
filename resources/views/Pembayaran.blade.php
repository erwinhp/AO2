@extends('layouts.indexNVM')
@section('header')
Monitor Pembayaran
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

<div class="container-fluid">
        <div class="panel-wrapper">
          <div class="panel">
              <div class="responsive-nav">
                <table class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>No Kontrak</th>
                    <th>Vendor</th>
                    <th>Uraian Pekerjaan</th>
                    <th>No/SKK/SKKO/RUTIN</th>
                    <th>No PRK</th>
                    <th>Noreg SAP</th>
                    <!-- <th>Invoice PO</th>
                    <th>Invoice NON PO</th>
                    <th>No Denda</th> -->
                    <th>Jumlah Tagihan</th>
                    <!-- <th>Dasar Pengenaan pajak</th>
                    <th>PPN</th>
                    <th>PPH Ps.22</th>
                    <th>PPH Ps.23</th>
                    <th>RP Denda</th>
                    <th>Denda Lainnya</th> -->
                    <th>Jumlah Bayar</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $nomor=1;?>
                    @foreach($pekerjaan as $prkview)
                    <tr>
                      <th>{{$nomor}}</th>
                      <?php $nomor++; ?>
                      <form method="get" action="/DetilPembayaran">
                      <input type="hidden" name="no_kontrak" value="{{$prkview->no_kontrak}}">
                      <th><input type="submit" value="{{$prkview->no_kontrak}}" class="btn btn-primary btn-lg active col-md-12" role="button" aria-pressed="true"></th>
                      <th>{{$prkview->vendor}}</th>
                      <th>{{$prkview->pekerjaan}}</th>
                      <th>{{$prkview->no_skk}}</th>
                      <th>{{$prkview->no_prk}}</th>
                      <th>{{$prkview->no_register_sipat}}</th>
                      <!-- <th>{{$prkview->invoice_po}}</th>
                      <th>{{$prkview->invoice_nonpo}}</th>
                      <th>{{$prkview->no_denda}}</th> -->
                      <th>{{$prkview->total_kontrak}}</th>
                      <!-- <th>{{$prkview->dasar_pengenaan_pajak}}</th>
                      <th>{{$prkview->ppn}}</th>
                      <th>{{$prkview->pph22}}</th>
                      <th>{{$prkview->pph23}}</th>
                      <th>{{$prkview->rpdenda_lainnya}}</th> -->
                      <th>{{$prkview->total_bayar}}</th>
                    </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

@stop

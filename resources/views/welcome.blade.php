@extends('layouts.index')
@section('content')
<?php
//dd($prk);
// if ($prk=="")
// {
//   $prk=[];
// }
?>

<!-- Inline Form-->

<!-- table madude-->
<section class="table table-bordered">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-close">
            <div class="dropdown">
            </div>
          </div>
          <div class="card-header d-flex align-items-center">
            <h3 class="h4">Table Deksripsi</h3>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>No PRK</th>
                    <th>Nama PRK</th>
                    <th>PAGU</th>
                    <th>Terkontrak</th>
                    <th>Terkontrak %</th>
                    <th>Terbayar</th>
                    <th>Terbayar %</th>
                  </tr>
                </thead>
                <tbody>
                  <?php $nomor=1;?>
                    @foreach($prk as $prkview)
                    <tr>
                      <th>{{$nomor}}</th>
                      <?php $nomor++; ?>
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

    </div>
  </div>
</section>

@stop

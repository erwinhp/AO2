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
<section class="dashboard-counts no-padding-bottom">
<div class="container-fluid">
<div class="col-lg-5">
  <div class="card">
    <div class="card-close">
      <div class="dropdown">
        <button type="button" id="closeCard3" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="dropdown-toggle"><i class="fa fa-ellipsis-v"></i></button>
        <div aria-labelledby="closeCard3" class="dropdown-menu dropdown-menu-right has-shadow"><a href="#" class="dropdown-item remove"> <i class="fa fa-times"></i>Close</a><a href="#" class="dropdown-item edit"> <i class="fa fa-gear"></i>Edit</a></div>
      </div>
    </div>
    <div class="card-header d-flex align-items-center">
      <h3 class="h4">PRK Form</h3>
    </div>
    <div class="card-body">
      <form class="form-inline" action="" method="get">
        <div class="form-group">
          <label for="inlineFormInput" class="sr-only">Name</label>
          <input id="inlineFormInput" type="text" placeholder="No PRK" class="mr-3 form-control" name="noprk">
        </div>
        <div class="form-group">
          <button type="submit" class="btn btn-primary">Submit</button>
        </div>
      </form>
    </div>
  </div>
</div>
</div>
</section>

<!-- table madude-->
<section class="tables">
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
                  </tr>
                </thead>
                <tbody>
                  <?php $nomor=1;?>
                    @foreach($prk as $prkview)
                    <tr>
                      <th>{{$nomor}}</th>
                      <?php $nomor++; ?>
                      <th>{{$prkview->no_prk}}</th>
                      <th>{{$prkview->nama_prk}}</th>
                      <th>{{$prkview->pagu}}</th>
                    </th><th>
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

<section class="tables">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-close">
            <div class="dropdown">
            </div>
          </div>
          <div class="card-header d-flex align-items-center">
            <h3 class="h4">Table RAB</h3>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Material RAB</th>
                    <th>Jasa RAB</th>
                    <th>Total RAB</th>
                  </tr>
                </thead>
                <tbody>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="tables">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-close">
            <div class="dropdown">
            </div>
          </div>
          <div class="card-header d-flex align-items-center">
            <h3 class="h4">Table SPBJ</h3>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>No SPBJ</th>
                    <th>Tanggal SPBJ</th>
                    <th>Tanggal Akhir</th>
                    <th>Akhir Pemeliharaan</th>
                    <th>Aktif SPBJ</th>
                    <th>Vendor</th>
                  </tr>

                </thead>
                <tbody>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="tables">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-close">
            <div class="dropdown">
            </div>
          </div>
          <div class="card-header d-flex align-items-center">
            <h3 class="h4">Table Terkontrak</h3>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Material Kontrak</th>
                    <th>jasa Kontrak</th>
                    <th>Total Kontrak</th>
                  </tr>
                </thead>
                <tbody>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="tables">
  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-close">
            <div class="dropdown">
            </div>
          </div>
          <div class="card-header d-flex align-items-center">
            <h3 class="h4">Table Terbayar</h3>
          </div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Material Bayar</th>
                    <th>Jasa Bayar</th>
                    <th>Total Bayar</th>
                    <th>Aktif BASTP</th>
                    <th>Aktif BYR</th>
                  </tr>
                </thead>
                <tbody>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

@endsection

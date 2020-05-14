@extends('layouts.indexNVM')
@section('header')
Input Rencana Pembayaran
@endsection
@section('content')
<form class="form-horizontal" role="form" method="post" action="/cmrab">
  @csrf
<?php
//CONTROLLERNY DI INPUTMA.PHP
?>
<!-- <a href="#" class="add-modal"><li>Tambah PRK</li></a> -->
<!-- <a href="/inputPRK" class=""><li>Tambah PRK</li></a> -->
<!-- <a href="#" class="add-modaladendum"><li>Tambah Adendum</li></a> -->
<br>




      <form class="form-horizontal">

        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Nomor Kontrak</label>
          <div class="col-sm-9">
            <select class="DDselect" style="width:440px;" name="itemName" id="rab_select"></select>
            <!-- yg value= gak harus -->
          </div>
        </div>


        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Nomor PRK</label>
          <div class="col-sm-9">
                <input type="text" placeholder="No PRK" class="form-control" name="no_skk" id="no_prk"  value="" readonly>
            </div>
        </div>


        <div class="line"></div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">No SKK</label>
          <div class="col-sm-9">
            <input type="text" placeholder="No SKK" class="form-control" name="no_skk" id="no_skk"  value="" readonly>
            <!-- yg value= gak harus -->
          </div>
        </div>


                <div class="form-group row">
                  <label class="col-sm-3 form-control-label">Vendor</label>
                  <div class="col-sm-9">
                        <input type="text" placeholder="Vendor" class="form-control" name="no_skk" id="vendor"  value="" readonly>
                    </div>
                </div>


        <div class="line"></div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Pekerjaan</label>
          <div class="col-sm-9">
            <input type="text" placeholder="pekerjaan" class="form-control" name="pekerjaan" id="pekerjaan" value="" readonly>
            <!-- yg value= gak harus -->
          </div>
        </div>


        <div class="line"></div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Tanggal selesai kontrak</label>
          <div class="col-sm-9">
        <div class="input-group date" data-provide="datepicker" style="width:40%">
            <input type="text" class="form-control bobot_datepicker" id="tanggal_akhir_kontrak" value="" disabled>
            <div class="input-group-addon">
                <span class="glyphicon glyphicon-th"></span>
            </div>
        </div>
      </div>
    </div>

    <div class="line"></div>
    <div class="form-group row">
      <label class="col-sm-3 form-control-label">Nilai Kontrak</label>
      <div class="col-sm-9">
        <input type="text" placeholder="Nilai Kontrak" class="form-control" name="pekerjaan" id="total_kontrak" value="" readonly>
        <!-- yg value= gak harus -->
      </div>
    </div>



        <div class="line"></div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Nilai Pembayaran</label>
          <div class="col-sm-9">
            <input type="text" placeholder="Nilai pembayaran" class="form-control" name="nilai_pembayaran" id="nilai_pembayaran" value="">
            <!-- yg value= gak harus -->
          </div>
        </div>


        <div class="line"></div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Bulan</label>
          <div class="col-sm-9">
            <input type="text" placeholder="Ex: 202001 (YYYYMM)" class="form-control" name="akhir_pemeliharaan" id="bulan"  value="">
            <!-- yg value= gak harus -->
          </div>
        </div>


        <div class="line"></div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Minggu</label>
          <div class="col-sm-9">
            <select class="form-control" id="minggu">
              <option>Pilih Minggu</option>
              <option value="1">Minggu 1</option>
              <option value="2">Minggu 2</option>
              <option value="3">Minggu 3</option>
              <option value="4">Minggu 4</option>
            </select>
            <!-- yg value= gak harus -->
          </div>
        </div>


        <div class="line"></div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">No BASTP</label>
          <div class="col-sm-9">
            <input type="text" placeholder="Nomor BASTP" class="form-control" name="jasa_kontrak" id="no_bastp"  value="">
            <!-- yg value= gak harus -->
          </div>
        </div>

<!-- <input type="hidden" id="custId" name="custId" value="3487"> -->


 <input type="hidden" id="tanggal_spbjedit" name="spbjedit" value="">
  <input type="hidden" id="tanggal_akhiredit" name="tanggaldit" value="">






        <div class="line"></div>
        <div class="form-group row">
          <div class="col-sm-4 offset-sm-3 addkontrak">
            <button type="" class="btn btn-secondary">Cancel</button>
            <button type="button" class="btn btn-success add" id="addkont">save</button>
          </div>
        </div>
      </form>




</form>

<script>
// $('.datepicker').datepicker({
//     format: 'mm/dd/yyyy',
//     startDate: '-3d'
// });
$('.DDselect').select2({
  placeholder: 'Select an item',
  ajax: {
    url: '/getnokontrakrab',
    dataType: 'json',
    delay: 250,
    processResults: function (data) {
      return {
        results:  $.map(data, function (item) {
              return {

                  text: item.no_kontrak,
                  id: item.no_kontrak,
              }
          })
      };
    },
    cache: true
  }
});

var no_prk="";
var vendor="";
var pekerjaan="";
var tanggal_akhir_kontrak="";
var total_kontrak="";
var no_skk="";
var datefixsz="";
var no_rab="";
$('.DDselect').on("select2:select", function(e) {
    var getkontrak = document.getElementById("rab_select").value;
    $.ajax({
        type: 'GET',
        url: '/getdatarencanabayar',
        data:{'getkontrak': getkontrak},
        success:function(data)
        {
          console.log(data);
          no_rab=data[0].no_rab;
          $('#no_prk').val(data[0].no_prk);
          no_prk=data[0].no_prk;
          $('#vendor').val(data[0].vendors);
          vendor=data[0].vendor;
          $('#pekerjaan').val(data[0].pekerjaan);
          pekerjaan=data[0].pekerjaan;
          $('#tanggal_akhir_kontrak').val(data[0].tanggal_akhir);
          tanggal_akhir_kontrak=data[0].tanggal_akhir;
          // $('#pekerjaan').val(data[0].pekerjaan);
          $('#total_kontrak').val(data[0].total_kontrak);
          total_kontrak=data[0].total_kontrak;
          $('#no_skk').val(data[0].no_skk);
          no_skk=data[0].no_skk;

       },
    });

});



$(document).ready( function () {
  $('#tanggal_now').val($.datepicker.formatDate('yy-mm-dd', new Date()));

});



// $( "#tanggal_akhir_kontrak" ).change(function() {
//   var date2=$('#tanggal_akhir_kontrak').val();
//   var month2=date2.substring(0, 2);
//   var day2=date2.substring(3, 5);
//   var year2=date2.substring(6, 10);
//   var datefix2=year2+'-'+month2+'-'+day2;
//   datefixsz=datefix2;
// // $('#tanggal_adendumedit').val(datefix2);
// });




$(document).on('click', '.add-modal', function() {
            // Empty input fields
            // document.getElementById("no_rab").value;
            $('#id_fungsi').val('');
            $('#nama_fungsi').val('');
            $('#pagu').val('');
            $('.modal-title').text('Tambah PRK');
            $('#addModal').appendTo("body").modal('show');
  });



//open modal adendum


      //INI ADD Kontrak
      $('.addkontrak').on('click', '#addkont', function() {
        // alert('madude');
              $.ajax({
                  type: 'POST',
                  url: '/storerpbyr',
                  data: {
                    '_token': $('input[name=_token]').val(),
                    'no_kontrak': no_kontrak,
                    'no_prk': no_prk,
                    'no_skk' : no_skk,
                    'vendor': vendor,
                    'uraian_pekerjaan': pekerjaan,
                    'tgl_selesai_kontrak': tanggal_akhir_kontrak,
                    'nilai_kontrak': total_kontrak,
                    'no_rab': no_rab,
                    'nilai_pembayaran': $('#nilai_pembayaran').val(),
                    'bulan': $('#bulan').val(),
                    'minggu': $('#minggu').val(),
                    'no_bastp': $('#no_bastp').val(),
                  },
                  success:function(data)
                  {
                    $('#rab_select').val(null).trigger('change'),
                    $('#no_prk').val(""),
                    $('#no_skk').val(""),
                    $('#vendor').val(""),
                    $('#pekerjaan').val(""),
                    $('#tanggal_akhir_kontrak').val(""),
                    $('#total_kontrak').val(""),
                    $('#nilai_pembayaran').val(""),
                    $('#bulan').val(""),
                    $('#no_bastp').val(""),
                    alert("input sukses");
                 },
              });
          });

$('.bobot_datepicker').datepicker({
format: 'dd-mm-yyyy'
});

$('.bobot_datepicker1').datepicker({
format: 'dd-mm-yyyy'
});

</script>
@endsection

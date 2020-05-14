<?php $__env->startSection('header'); ?>
Input Rencana Pembayaran
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<form class="form-horizontal" role="form" method="post" action="/cmrab">
  <?php echo csrf_field(); ?>
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

        <div class="line"></div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Tanggal Pembayaran</label>
          <div class="col-sm-9">
        <div class="input-group date" data-provide="datepicker" style="width:40%">
            <input type="text" class="form-control bobot_datepicker" id="tanggal_bayar" value="">
            <div class="input-group-addon">
                <span class="glyphicon glyphicon-th"></span>
            </div>
        </div>
      </div>
    </div>



        <div class="line"></div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Material Bayar</label>
          <div class="col-sm-9">
            <input type="text" placeholder="Material Bayar" class="form-control" name="material_bayar" id="material_bayar" value="" >
            <!-- yg value= gak harus -->
          </div>
        </div>

        <div class="line"></div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Jasa Bayar</label>
          <div class="col-sm-9">
            <input type="text" placeholder="Jasa Bayar" class="form-control" name="jasa_bayar" id="jasa_bayar" value="">
            <!-- yg value= gak harus -->
          </div>
        </div>

        <div class="line"></div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Total Bayar</label>
          <div class="col-sm-9">
            <input type="text" placeholder="Total Bayar" class="form-control" name="total_bayar" id="total_bayar" value="" readonly>
            <!-- yg value= gak harus -->
          </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-3 form-control-label">No Register SIPAT</label>
          <div class="col-sm-9">
                <input type="text" placeholder="No Register SIPAT" class="form-control" name="no_register_sipat" id="no_register_sipat"  value="">
            </div>
        </div>
                <div class="form-group row">
                  <label class="col-sm-3 form-control-label">Invoice PO</label>
                  <div class="col-sm-9">
                        <input type="text" placeholder="Invoice PO" class="form-control" name="invoice_po" id="invoice_po"  value="">
                    </div>
                </div>


        <div class="line"></div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Invoice Non PO</label>
          <div class="col-sm-9">
            <input type="text" placeholder="Invoice Non PO" class="form-control" name="invoice_nonpo" id="invoice_nonpo" value="">
            <!-- yg value= gak harus -->
          </div>
        </div>


        <div class="line"></div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">No denda</label>
          <div class="col-sm-9">
            <input type="text" placeholder="No denda" class="form-control" name="no_denda" id="no_denda" value="">
            <!-- yg value= gak harus -->
          </div>
        </div>


        <div class="line"></div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Nilai Denda Lainnya</label>
          <div class="col-sm-9">
            <input type="text" placeholder="Nilai Denda Lainnya" class="form-control" name="rpdenda_lainnya" id="rpdenda_lainnya" value="">
            <!-- yg value= gak harus -->
          </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Dasar Pengenaan Pajak</label>
          <div class="col-sm-9">
            <input type="text" placeholder="Dasar Pengenaan Pajak" class="form-control" name="dasar_pengenaan_pajak" id="dasar_pengenaan_pajak" value="">
            <!-- yg value= gak harus -->
          </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-3 form-control-label">PPN</label>
          <div class="col-sm-9">
            <input type="text" placeholder="PPN" class="form-control" name="ppn" id="ppn" value="" readonly>
            <!-- yg value= gak harus -->
          </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-3 form-control-label">PPH22</label>
          <div class="col-sm-9">
            <input type="text" placeholder="PPH22" class="form-control" name="pph22" id="pph22" value="" readonly>
            <!-- yg value= gak harus -->
          </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-3 form-control-label">PPH23</label>
          <div class="col-sm-9">
            <input type="text" placeholder="PPH23" class="form-control" name="pph23" id="pph23" value="" readonly>
            <!-- yg value= gak harus -->
          </div>
        </div>





<!-- <input type="hidden" id="custId" name="custId" value="3487"> -->







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
var tanggal_akhir_kontrak="";
var total_kontrak="";
var no_skk="";
var datefixsz="";
var no_rab="";
var id_kontrak="";
var summat=0;
var sumjas=0;
var sumtot=0;
// var total_bayar=0;
// var material_bayar=0;
// var jasa_bayar=0;


$('.DDselect').on("select2:select", function(e) {
    var getkontrak = document.getElementById("rab_select").value;
    $.ajax({
        type: 'GET',
        url: '/getdatarencanabayar',
        data:{'getkontrak': getkontrak},
        success:function(data)
        {
          no_prk=data[0].no_prk;
          no_skk=data[0].no_skk;
          no_rab=data[0].no_rab;
          id_kontrak=data[0].id_kontrak;
          $('#no_prk').val(no_prk);
          $('#no_skk').val(no_skk);
       },
    });

});



$(document).ready( function () {
  $('#tanggal_now').val($.datepicker.formatDate('yy-mm-dd', new Date()));

});



$( "#tanggal_bayar" ).change(function() {
  var date2=$('#tanggal_bayar').val();
  var month2=date2.substring(0, 2);
  var day2=date2.substring(3, 5);
  var year2=date2.substring(6, 10);
  var datefix2=year2+'-'+month2+'-'+day2;
  datefixsz=datefix2;
// $('#tanggal_adendumedit').val(datefix2);
});




     $("#material_bayar").keyup(function(e) {
       if($("#jasa_bayar").val()=="")
       {
         $("#jasa_bayar").val(0)
       }
       $("#total_bayar").val(parseInt($('#jasa_bayar').val())+parseInt($('#material_bayar').val()));
        // total_bayar=$("#total_bayar").val();
     });


          $("#jasa_bayar").keyup(function(e) {
            if($("#material_bayar").val()=="")
            {
              $("#material_bayar").val(0)
            }
       $("#total_bayar").val(parseInt($('#jasa_bayar').val())+parseInt($('#material_bayar').val()));
          });

//open modal adendum


      //INI ADD Kontrak
      $('.addkontrak').on('click', '#addkont', function() {
        // alert('madude');
              $.ajax({
                  type: 'POST',
                  url: '/storebyr',
                  async:false,
                  data: {
                    '_token': $('input[name=_token]').val(),
                    'tanggal_bayar': datefixsz,
                    'jasa_bayar': $('#jasa_bayar').val(),
                    'material_bayar' : $('#material_bayar').val(),
                    'total_bayar': $('#total_bayar').val(),
                    'no_rab': no_rab,
                    'no_prk': no_prk,
                  },
                  success:function(data)
                  {
                    alert('sukses post')
                    // $('#rab_select').val(null).trigger('change'),
                    // $('#no_prk').val(""),
                    // $('#no_skk').val(""),
                    // $('#tanggal_bayar').val(""),
                    // $('#jasa_bayar').val(""),
                    // $('#material_bayar').val(""),
                    // $('#jasa_bayar').val(""),
                    // $('#total_bayar').val(""),
                    // $('#invoice_po').val(""),
                    // $('#invoice_nonpo').val(""),
                    // $('#no_denda').val(""),
                    // $('#rpdenda_lainnya').val(""),
                    // $('#dasar_pengenaan_pajak').val(""),
                    // $('#ppn').val(""),
                    // $('#pph22').val(""),
                    // $('#pph23').val(""),
                    // alert("input sukses");
                $.ajax({
                    type: 'GET',
                    url: '/getsumsbyrs',
                    data:{'getkontrak': no_rab},
                    async:false,
                    success:function(data)
                    {
                      summat=data[0].material_bayarsz;
                      sumjas=data[0].jasa_bayarsz;
                      sumtot=data[0].total_bayarsz;
                      alert('suksesz get');
                    },
                  });
                 },
              });




              $.ajax({
                  type: 'PUT',
                  url: '/updatebyrkontrak/'+ id_kontrak,
                  async:false,
                  data: {
                      '_token': $('input[name=_token]').val(),
                      'material_bayar':summat,
                      'jasa_bayar': sumjas,
                      'total_bayar': sumtot,
                      'no_register_sipat': $('#no_register_sipat').val(),
                      'invoice_po': $("#invoice_po").val(),
                      'invoice_nonpo': $('#invoice_nonpo').val(),
                      'no_denda': $("#no_denda").val(),
                      'rpdenda_lainnya': $('#rpdenda_lainnya').val(),
                      'dasar_pengenaan_pajak': $("#dasar_pengenaan_pajak").val(),
                      'ppn': $('#ppn').val(),
                      'pph22': $("#pph22").val(),
                      'pph23': $("#pph23").val(),
                  },
                  success:function(data)
                  {
                    alert('sukses update');
                 },
              });
          });

$('.bobot_datepicker').datepicker({
format: 'dd-mm-yyyy'
});


</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.indexNVM', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\git\AO2\resources\views/keuangan/buat_pembayaran.blade.php ENDPATH**/ ?>
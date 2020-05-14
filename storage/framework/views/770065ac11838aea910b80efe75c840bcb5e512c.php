<?php $__env->startSection('header'); ?>
Input Kontrak
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
<div class="modal" id="addModal" aria-hidden="true">

<div class="modal-content">
   <div class="modal-header">
       <h4 class="modal-title"</h4>
   </div>
   <div class="modal-body">
       <form id="sample_form" name="userForm" class="form-horizontal" enctype="multipart/form-data">
         <?php echo csrf_field(); ?>

           <div class="form-group">
               <label class="col-sm-2 control-label">No PRK</label>
               <div class="col-sm-12">
                   <input type="jumlah" class="form-control" id="no_prk" name="no_prk" placeholder="No PRK" value="" required="">
               </div>
           </div>

           <div class="form-group">
               <label class="col-sm-2 control-label">Nama PRK</label>
               <div class="col-sm-12">
                   <input type="satuan" class="form-control" id="nama_prk" name="nama_prk" placeholder="Nama PRK" value="" required="">
               </div>
           </div>

           <div class="form-group">
               <label class="col-sm-2 control-label">PAGU</label>
               <div class="col-sm-12">
                   <input type="harga_satuan" class="form-control" id="pagu" name="pagu" placeholder="PAGU" value="" required="">
               </div>
           </div>


           <div class="form-group">
             <label class="col-sm-2 control-label">Fungsi</label>
             <div class="col-sm-12">
               <select  class="form-control mb-3" name="fungsi" id="fungsi"  value="<?php echo e(old('fungsi')); ?>">
                <option>Option</option>
                 <?php foreach ($fungsi as $key => $f) { ?>
                   <option value=<?php echo $f->id_fungsi ?>><?php echo e($f->nama_fungsi); ?></option>
                   <?php
                 } ?>
               </select>
             </div>
           </div>


         </div>

           <div class="modal-footer">
            <button type="button" class="btn btn-success add" data-dismiss="modal" id="idadd">
           <span id="" class='glyphicon glyphicon-check'></span> Add
           </button>
         <button type="button" class="btn btn-warning" data-dismiss="modal">
           <span class='glyphicon glyphicon-remove'></span> Close
         </button>
           </div>
       </form>
   </div>
</div>




<div class="modal" id="addModalAdendum" aria-hidden="true">

<div class="modal-content">
   <div class="modal-header">
       <h4 class="modal-title"</h4>
   </div>
   <div class="modal-body">
       <form id="sample_form" name="userForm" class="form-horizontal" enctype="multipart/form-data">
         <?php echo csrf_field(); ?>


           <div class="form-group row">
             <label class="col-sm-2 control-label">No Kontrak</label>
             <div class="col-sm-12">
                   <select class="DDkontrak" style="width:440px;" name="itemName" id="DDkontrak"></select>
               </div>
           </div>


           <div class="form-group row">
             <label class="col-sm-2 control-label">Adendum Tanggal</label>
            <div class="col-sm-12">
           <div class="input-group date" data-provide="datepicker" style="width:40%">
               <input type="text" class="form-control bobot_datepicker" id="adendum_tanggal" >
               <div class="input-group-addon">
                   <span class="glyphicon glyphicon-th"></span>
               </div>
           </div>
         </div>



       <!-- <div class="form-group row">
         <label class="col-sm-2 control-label">Tanggal Melakukan Adendum</label>
        <div class="col-sm-12">
       <div class="input-group date" data-provide="datepicker" style="width:40%">
           <input type="text" class="form-control bobot_datepicker" id="tanggal_adendums" >
           <div class="input-group-addon">
               <span class="glyphicon glyphicon-th"></span>
           </div>
       </div>
     </div>
   </div> -->


           <div class="form-group">
               <label class="col-sm-2 control-label">Adendum Harga</label>
               <div class="col-sm-12">
                   <input type="harga_satuan" class="form-control" id="adendum_harga" name="adendum_harga" placeholder="Adendum Harga" value="" required="">
               </div>
           </div>

           <!-- this one is adendum tanggal -->
           <input type="hidden" id="tanggal_adendumedit" name="tanggal_adendumedit" value="">






          <input type="hidden" id="tanggal_adendumsedit" name="tanggal_adendumsedit" value="">
           <input type="hidden" id="tanggal_now" name="tanggal_now" value="">


         </div>

           <div class="modal-footer">
            <button type="button" class="btn btn-success add" data-dismiss="modal" id="idaddad">
           <span id="" class='glyphicon glyphicon-check'></span> Add
           </button>
         <button type="button" class="btn btn-warning" data-dismiss="modal">
           <span class='glyphicon glyphicon-remove'></span> Close
         </button>
           </div>
       </form>
   </div>
</div>
</div>



      <form class="form-horizontal">




        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Nomor Kontrak</label>
          <div class="col-sm-9">
            <input type="text" placeholder="" class="form-control" name="no_kontrak" id="no_kontrak"  value="<?php echo e(old('no_kontrak')); ?>">
            <!-- yg value= gak harus -->
          </div>
        </div>


        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Nomor RAB</label>
          <div class="col-sm-9">
                <select class="DDrabs" style="width:440px;" name="itemName" id="DDrab"></select>
            </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Nomor PRK</label>
          <div class="col-sm-9">
            <input type="text" placeholder="No PRK" class="form-control" name="no_prk" id="prkszs" value="<?php echo e(old('pekerjaan')); ?>" disabled>
                <!-- <select class="DDprks" style="width:440px;" name="itemName" id="DDprk"></select> -->
            </div>
        </div>



        <div class="line"></div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">No SKK</label>
          <div class="col-sm-9">
            <input type="text" placeholder="No SKK" class="form-control" name="no_skk" id="no_skk"  value="<?php echo e(old('no_skk')); ?>">
            <!-- yg value= gak harus -->
          </div>
        </div>

        <div class="line"></div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Pekerjaan</label>
          <div class="col-sm-9">
            <input type="text" placeholder="pekerjaan" class="form-control" name="pekerjaan" id="pekerjaan" value="<?php echo e(old('pekerjaan')); ?>" disabled>
            <!-- yg value= gak harus -->
          </div>
        </div>


        <div class="line"></div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Tanggal Awal</label>
          <div class="col-sm-9">
        <div class="input-group date" data-provide="datepicker" style="width:40%">
            <input type="text" class="form-control bobot_datepicker" id="tanggal_spbj" >
            <div class="input-group-addon">
                <span class="glyphicon glyphicon-th"></span>
            </div>
        </div>
      </div>
    </div>



        <div class="line"></div>

        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Tanggal Akhir</label>
          <div class="col-sm-9">
        <div class="input-group date" data-provide="datepicker" style="width:40%">
            <input type="text" class="form-control bobot_datepicker1" id="tanggal_akhir">
            <div class="input-group-addon">
                <span class="glyphicon glyphicon-th"></span>
            </div>
        </div>
      </div>
    </div>

        <div class="line"></div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Akhir Pemeliharaan</label>
          <div class="col-sm-9">
            <input type="text" placeholder="Akhir Pemeliharaan" class="form-control" name="akhir_pemeliharaan" id="akhir_pemeliharaan" value="<?php echo e(old('akhir_pemeliharaan')); ?>">
            <!-- yg value= gak harus -->
          </div>
        </div>

        <div class="line"></div>


        <div class="line"></div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Nama Vendor</label>
          <div class="col-sm-9">
            <select class="DDselectvendor" style="width:440px;" name="itemName" id="vendor"></select>
            <!-- yg value= gak harus -->
          </div>
        </div>


        <div class="line"></div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Material Kontrak</label>
          <div class="col-sm-9">
            <input type="text" placeholder="Material Kontrak" class="form-control" name="material_kontrak" id="material_kontrak"  value="<?php echo e(old('material_kontrak')); ?>">
            <!-- yg value= gak harus -->
          </div>
        </div>


        <div class="line"></div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Jasa Kontrak</label>
          <div class="col-sm-9">
            <input type="text" placeholder="Jasa Kontrak" class="form-control" name="jasa_kontrak" id="jasa_kontrak"  value="<?php echo e(old('jasa_kontrak')); ?>">
            <!-- yg value= gak harus -->
          </div>
        </div>
        <?php echo csrf_field(); ?>
        <div class="line"></div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Nomor Jaminan Pelaksanaan</label>
          <div class="col-sm-9">
            <input type="text" placeholder="Nomor Jaminan Pelaksanaan" class="form-control" name="no_lak" id="no_lak"  value="<?php echo e(old('total_kontrak')); ?>" >
            <!-- yg value= gak harus -->
          </div>
        </div>

        <div class="line"></div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Tanggal Jaminan Pelaksanaan</label>
          <div class="col-sm-9">
        <div class="input-group date" data-provide="datepicker" style="width:40%">
            <input type="text" class="form-control bobot_datepicker1" id="tanggal_jamlak">
            <div class="input-group-addon">
                <span class="glyphicon glyphicon-th"></span>
            </div>
        </div>
      </div>
    </div>


        <div class="line"></div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Nilai Jaminan Pelaksanaan</label>
          <div class="col-sm-9">
            <input type="text" placeholder="Nilai Jaminan Pelaksanaan" class="form-control" name="nilai_lak" id="nilai_lak"  value="<?php echo e(old('total_kontrak')); ?>" >
            <!-- yg value= gak harus -->
          </div>
        </div>

        <div class="line"></div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Penerbit Jaminan Pelaksanaan</label>
          <div class="col-sm-9">
            <input type="text" placeholder="Penerbit Jaminan Pelaksanaan" class="form-control" name="penerbit_lak" id="penerbit_lak"  value="<?php echo e(old('total_kontrak')); ?>" >
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
var tanggalfixjamlak = "";

$("#jasa_kontrak").keyup(function(e) {
  var totals = +$('#jasa_kontrak').val()+ +$('#material_kontrak').val()
  $('#total_kontrak').val(totals);
});

$("#material_kontrak").keyup(function(e) {
var totals = +$('#jasa_kontrak').val()+ +$('#material_kontrak').val()
$('#total_kontrak').val(totals);
});

$(document).ready( function () {
  $('#tanggal_now').val($.datepicker.formatDate('yy-mm-dd', new Date()));

});

$('.DDselectvendor').select2({
  placeholder: 'Select an item',
  ajax: {
    url: '/getvendor',
    dataType: 'json',
    delay: 250,
    processResults: function (data) {
      return {
        results:  $.map(data, function (item) {
              return {

                  text: item.nama_perusahaan,
                  id: item.id_vendor,
              }
          })
      };
    },
    cache: true
  }

});
$('.DDrabs').select2({
  placeholder: 'Select an item',
  ajax: {
    url: '/getnorab',
    dataType: 'json',
    delay: 250,
    processResults: function (data) {
      return {
        results:  $.map(data, function (item) {
              return {

                  text: item.no_rab,
                  id: item.no_rab,
              }
          })
      };
    },
    cache: true
  }

});


$('.DDrabs').on("select2:select", function(e) {

    var getrab = document.getElementById("DDrab").value;
    // console.log(getrab);
    $.ajax({
        type: 'GET',
        url: '/getpekerjaan',
        data:{'getrab': getrab},
        success:function(data)
        {

          // console.log(data);
          $('#prkszs').val(data[0].no_prk);
          $('#pekerjaan').val(data[0].judul);
        },
    });
});




$( "#tanggal_adendums" ).change(function() {
var datez=$('#tanggal_adendums').val();
var monthz=datez.substring(0, 2);
var dayz=datez.substring(3, 5);
var yearz=datez.substring(6, 10);
var datefixz=yearz+'-'+monthz+'-'+dayz;
$('#tanggal_adendumsedit').val(datefixz);
});

$( "#tanggal_spbj" ).change(function() {
var date=$('#tanggal_spbj').val();
var month=date.substring(0, 2);
var day=date.substring(3, 5);
var year=date.substring(6, 10);
var datefix=year+'-'+month+'-'+day;
$('#tanggal_spbjedit').val(datefix);
});

$( "#tanggal_akhir" ).change(function() {
  var date1=$('#tanggal_spbj').val();
  var month1=date1.substring(0, 2);
  var day1=date1.substring(3, 5);
  var year1=date1.substring(6, 10);
  var datefix1=year1+'-'+month1+'-'+day1;
$('#tanggal_akhiredit').val(datefix1);
});


$( "#adendum_tanggal" ).change(function() {
  var date2=$('#adendum_tanggal').val();
  var month2=date2.substring(0, 2);
  var day2=date2.substring(3, 5);
  var year2=date2.substring(6, 10);
  var datefix2=year2+'-'+month2+'-'+day2;
$('#tanggal_adendumedit').val(datefix2);
});

$( "#tanggal_jamlak" ).change(function() {
  var date33=$('#tanggal_jamlak').val();
  var month33=date33.substring(0, 2);
  var day33=date33.substring(3, 5);
  var year33=date33.substring(6, 10);
  var datefix33=year33+'-'+month33+'-'+day33;
  tanggalfixjamlak=datefix33;
});


$(document).on('click', '.add-modal', function() {
            // Empty input fields
            // document.getElementById("no_rab").value;
            $('#id_fungsi').val('');
            $('#nama_fungsi').val('');
            $('#pagu').val('');
            $('.modal-title').text('Tambah PRK');
            $('#addModal').appendTo("body").modal('show');
  });


  //INI ADD PRK
  $('.modal-footer').on('click', '#idadd', function() {
    // alert('madude');
          $.ajax({
              type: 'POST',
              url: '/storeprk',
              data: {
                '_token': $('input[name=_token]').val(),
                'no_prk': $('#no_prk').val(),
                'nama_prk': $('#nama_prk').val(),
                'pagu' : $('#pagu').val(),
                'fungsi': $('#fungsi').val(),
              },
              success:function(data)
              {
             },
          });
      });

//open modal adendum

      $(document).on('click', '.add-modaladendum', function() {
                  // Empty input fields
                  // document.getElementById("no_rab").value;
                  $('#no_kontrak').val('');
                  $('#adendum_tanggal').val('');
                  $('#adendum_harga').val('');
                  $('.modal-title').text('Tambah Adendum');
                  $('#addModalAdendum').appendTo("body").modal('show');
        });

          //INI ADD adendum
          $('.modal-footer').on('click', '#idaddad', function() {
            // alert('madude');
                  $.ajax({
                      type: 'POST',
                      url: '/storeadendum',
                      data: {
                        '_token': $('input[name=_token]').val(),
                        'no_kontrak': $('#DDkontrak').val(),
                        'adendum_tanggal': $('#tanggal_adendumedit').val(),
                        'adendum_harga' : $('#adendum_harga').val(),
                        'tanggal_adendum': $('#tanggal_now').val(),
                        // 'tanggal_adendum': $('#tanggal_adendumsedit').val(),

                      },
                      success:function(data)
                      {
                     },
                  });
              });


      //INI ADD Kontrak
      $('.addkontrak').on('click', '#addkont', function() {
        // alert('madude');
        // alert($('#prkszs').val());
        $.ajax({
            type: 'POST',
            url: '/storejamlak',
            data: {
              "_token": "<?php echo e(csrf_token()); ?>",
              'no_rab': $('#DDrab').val(),
              'no_lak' : $('#no_lak').val(),
              'tanggal_lak': tanggalfixjamlak,
              'nilai_lak' : $('#nilai_lak').val(),
              'penerbit_lak' : $('#penerbit_lak').val(),
            },
            success:function(data)
            {

            },
          });

              $.ajax({
                  type: 'POST',
                  url: '/storekontrak',
                  data: {
                    '_token': $('input[name=_token]').val(),
                    'no_kontrak': $('#no_kontrak').val(),
                    'no_prk': $('#prkszs').val(),
                    'no_skk' : $('#no_skk').val(),
                    'pekerjaan': $('#pekerjaan').val(),
                    'tanggal_spbj' : $('#tanggal_spbjedit').val(),
                    'tanggal_akhir': $('#tanggal_akhiredit').val(),
                    'akhir_pemeliharaan': $('#akhir_pemeliharaan').val(),
                    'vendor': $('#vendor').val(),
                    'material_kontrak' : $('#material_kontrak').val(),
                    'total_kontrak': $('#total_kontrak').val(),
                    'material_bayar' : $('#material_bayar').val(),
                    'jasa_bayar': $('#jasa_bayar').val(),
                    'jasa_kontrak': $('#jasa_kontrak').val(),
                    'total_bayar': $('#total_bayar').val(),
                    'aktif_bastp': $('#aktif_bastp').val(),
                    'aktif_byr': $('#aktif_byr').val(),
                    'no_rab': $('#DDrab').val(),

                  },
                  success:function(data)
                  {
                              $('#DDprk').val(null).trigger('change'),
                              $('#vendor').val(null).trigger('change'),
                              $('#DDrab').val(null).trigger('change'),
                    $('#no_kontrak').val(""),
                    $('#DDprk').val(""),
                    $('#no_skk').val(""),
                    $('#pekerjaan').val(""),
                    $('#tanggal_spbj').val(""),
                    $('#tanggal_akhir').val(""),
                    $('#tanggal_spbjedit').val(""),
                    $('#tanggal_akhiredit').val(""),
                    $('#akhir_pemeliharaan').val(""),
                    $('#vendor').val(""),
                    $('#material_kontrak').val(""),
                    $('#total_kontrak').val(""),
                    $('#material_bayar').val(""),
                    $('#jasa_bayar').val(""),
                    $('#jasa_kontrak').val(""),
                    $('#total_bayar').val(""),
                    $('#aktif_bastp').val(""),
                    $('#aktif_byr').val(""),
                    $('#prkszs').val(""),
                    $('#no_kontrak').focus(),
                    $('#no_lak').val(""),
                    $('#tanggal_lak').val(""),
                    $('#nilai_lak').val(""),
                    $('#penerbit_lak').val(""),

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


$('.DDprks').select2({
  placeholder: 'Select an item',
  ajax: {
    url: '/getprksz',
    dataType: 'json',
    delay: 250,
    processResults: function (data) {
      return {
        results:  $.map(data, function (item) {
              return {
                  text: item.no_prk,
                  id: item.no_prk,
              }
          })

      };
    },
    cache: true
  }
});

$('.DDkontrak').select2({
  placeholder: 'Select an item',
  ajax: {
    url: '/getkontraks',
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



</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.indexNVM', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\git\AO2\resources\views/pengadaan/buatkontrak.blade.php ENDPATH**/ ?>
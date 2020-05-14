<?php $__env->startSection('header'); ?>
Input Ikhtisar Pengawas
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
          <label class="col-sm-3 form-control-label">Nomor Pekerjaan</label>
          <div class="col-sm-9">
                <select class="DDkontrak" style="width:440px;" name="itemName" id="DDkontrak"></select>
            </div>
        </div>


        <!-- <div class="form-group row">
          <label class="col-sm-3 form-control-label">Nomor RAB</label>
          <div class="col-sm-9">
                <select class="DDrabs" style="width:440px;" name="itemName" id="DDrab"></select>
            </div>
        </div> -->

        <!-- <div class="form-group row">
          <label class="col-sm-3 form-control-label">Nomor PRK</label>
          <div class="col-sm-9">
            <input type="text" placeholder="No PRK" class="form-control" name="no_prk" id="prkszs" value="<?php echo e(old('pekerjaan')); ?>" disabled>
            </div>
        </div> -->

        <div class="line"></div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Nama Pekerjaan</label>
          <div class="col-sm-9">
            <input type="text" placeholder="Nama Pekerjaan" class="form-control" name="material_kontrak" id="nama_pekerjaan"  value="<?php echo e(old('material_kontrak')); ?>" readonly>
            <!-- yg value= gak harus -->
          </div>
        </div>

        <!-- <div class="line"></div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">No SKK</label>
          <div class="col-sm-9">
            <input type="text" placeholder="No SKK" class="form-control" name="no_skk" id="no_skk"  value="<?php echo e(old('no_skk')); ?>">
          </div>
        </div> -->

        <div class="line"></div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Nilai Kontrak</label>
          <div class="col-sm-9">
            <input type="text" placeholder="pekerjaan" class="form-control" name="pekerjaan" id="nilai_kontrak" value="<?php echo e(old('pekerjaan')); ?>" disabled>
            <!-- yg value= gak harus -->
          </div>
        </div>

        <div class="line"></div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Jangka Waktu</label>
          <div class="col-sm-9">
            <input type="text" placeholder="Jangka Waktu" class="form-control" name="jangka_waktu" id="jangka_waktu" value="<?php echo e(old('pekerjaan')); ?>" disabled>
            <!-- yg value= gak harus -->
          </div>
        </div>


        <div class="line"></div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Lokasi</label>
          <div class="col-sm-9">
            <select class="lokasis" style="width:440px;" name="itemName" id="lokasi"></select>
            <!-- yg value= gak harus -->
          </div>
        </div>



        <div class="line"></div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Addendum</label>
          <div class="col-sm-9">
            <input type="text" placeholder="no_addendum" class="form-control" name="material_kontrak" id="no_addendum"  value="<?php echo e(old('material_kontrak')); ?>" readonly>
            <!-- yg value= gak harus -->
          </div>
        </div>

        <div class="line"></div>

        <div class="line"></div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Periode Penilaian</label>
          <div class="col-sm-9">
            <input type="text" placeholder="Periode Penilaian Ex: MMYYYY" class="form-control" name="material_kontrak" id="periode_penilaian"  value="<?php echo e(old('material_kontrak')); ?>">
            <!-- yg value= gak harus -->
          </div>
        </div>



<!-- ASPEK PENILAIAN MADUDE -->

        <div class="line"></div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Jumlah Tenaga Kerja</label>
          <div class="col-sm-9">
            <input type="text" placeholder="Tenaga Kerja" class="form-control" name="jumlah_tenaga_kerja" id="jumlah_tk"  value="<?php echo e(old('material_kontrak')); ?>">
            <!-- yg value= gak harus -->
          </div>
        </div>


        <div class="line"></div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Sertifikasi Tenaga Kerja</label>
          <div class="col-sm-9">
            <input type="text" placeholder="Jumlah TK Bersertifikasi" class="form-control" name="sertifikasi_tk" id="sertifikasi_tk"  value="<?php echo e(old('material_kontrak')); ?>">
            <!-- yg value= gak harus -->
          </div>
        </div>


        <div class="line"></div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Rencana Kerja</label>
          <div class="col-sm-9">
                <select class="form-control c-select" id="rencana_kerja1">
                  <option value="Ada">Ada</option>
                  <option value="Tidak">Tidak</option>
                </select>
          </div>
        </div>


        <div class="line"></div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Rencana Kerja</label>
            <div class="col-sm-9">
              <select class="form-control c-select" id="rencana_kerja2">
                  <option value="Sesuai">Sesuai</option>
                  <option value="Tidak">Tidak</option>
                </select>
          </div>
        </div>

        <div class="line"></div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Kelengkapan Alat Kerja & Alat K3</label>
          <div class="col-sm-9">
                      <select class="form-control c-select" id="sarana_alat_k3_1">
                <option value="Lengkap">Lengkap</option>
                <option value="Tidak Lengkap">Tidak Lengkap</option>
              </select>
            </div>
          </div>



          <div class="form-group row">
            <label class="col-sm-3 form-control-label">Kelengkapan Alat Kerja & Alat K3</label>
            <div class="col-sm-9">
                        <select class="form-control c-select" id="sarana_alat_k3_2">
                  <option value="Memadai">Memadai</option>
                  <option value="Tidak">Tidak</option>
                </select>
              </div>
            </div>


        <div class="line"></div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Kualitas Alat Kerja & Alat K3</label>
          <div class="col-sm-9">
            <input type="text" placeholder="Bobot Kualitas" class="form-control" name="sarana_alat_k3_3" id="sarana_alat_k3_3"  value="<?php echo e(old('material_kontrak')); ?>">
            <!-- yg value= gak harus -->
          </div>
        </div>


        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Material Kerja</label>
          <div class="col-sm-9">
                      <select class="form-control c-select" id="material_kerja1">
                <option value="Lengkap">Lengkap</option>
                <option value="Tidak">Tidak</option>
              </select>
            </div>
          </div>


          <div class="form-group row">
            <label class="col-sm-3 form-control-label">Material Kerja</label>
            <div class="col-sm-9">
                        <select class="form-control c-select" id="material_kerja2">
                  <option value="Sesuai">Sesuai</option>
                  <option value="Tidak">Tidak</option>
                </select>
              </div>
            </div>


            <div class="line"></div>
            <div class="form-group row">
              <label class="col-sm-3 form-control-label">Material Kerja</label>
              <div class="col-sm-9">
                <input type="text" placeholder="Material Kerja" class="form-control" name="material_kerja1" id="material_kerja3"  value="<?php echo e(old('material_kontrak')); ?>">
                <!-- yg value= gak harus -->
              </div>
            </div>



            <div class="form-group row">
              <label class="col-sm-3 form-control-label">Work Permit</label>
              <div class="col-sm-9">
                          <select class="form-control c-select" id="work_permit">
                    <option value="Ada">Ada</option>
                    <option value="Tidak">Tidak</option>
                  </select>
                </div>
              </div>


        <div class="line"></div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Pelaksanaan Pekerjaan</label>
          <div class="col-sm-9">
            <div class="form-group col-sm-4">
                   <textarea class="form-control" rows="3" id="pelaksanaan_pekerjaan"></textarea>
                 </div>
          </div>
        </div>


        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Komunikasi Korespondensi</label>
          <div class="col-sm-9">
                      <select class="form-control c-select" id="komunikasi_koresponden_1">
                <option value="Lancar">Lancar</option>
                <option value="Tidak">Tidak</option>
              </select>
            </div>
          </div>


        <div class="line"></div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Komunikasi Korespondensi</label>
          <div class="col-sm-9">
            <input type="text" placeholder="Media Komunikasi dan Kendala" class="form-control" name="material_kontrak" id="komunikasi_koresponden_2"  value="<?php echo e(old('material_kontrak')); ?>">
            <!-- yg value= gak harus -->
          </div>
        </div>


        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Kepatuhan Pelaporan</label>
          <div class="col-sm-9">
                      <select class="form-control c-select" id="kepatuhan_pelaporan_1">
                <option value="Lancar">Lancar</option>
                <option value="Tidak">Tidak</option>
              </select>
            </div>
          </div>


        <div class="line"></div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Kepatuhan Pelaporan</label>
          <div class="col-sm-9">
            <input type="text" placeholder="Kepatuhan rekanan dan kendala" class="form-control" name="kepatuhan_pelaporan_2" id="kepatuhan_pelaporan_2"  value="<?php echo e(old('material_kontrak')); ?>">
            <!-- yg value= gak harus -->
          </div>
        </div>


        <div class="line"></div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Jam Awal Padam</label>
          <div class="col-sm-3">
            <div class="input-group clockpicker" data-placement="right" data-align="top" data-autoclose="true">
            	<input type="text" class="form-control" id="jam_awal_padam" value="00:00">
            	<span class="input-group-addon">
            		<span class="glyphicon glyphicon-time"></span>
            	</span>
            </div>
          </div>
        </div>


        <div class="line"></div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Jam Akhir Padam</label>
          <div class="col-sm-3">
            <div class="input-group clockpicker" data-placement="right" data-align="top" data-autoclose="true">
            	<input type="text" class="form-control" id="jam_akhir_padam" value="00:00">
            	<span class="input-group-addon">
            		<span class="glyphicon glyphicon-time"></span>
            	</span>
            </div>
          </div>
        </div>


        <div class="line"></div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Kesehatan Dan Keselamatan Kerja</label>
          <div class="col-sm-9">
            <input type="text" placeholder="Berapa Accident" class="form-control" name="material_kontrak" id="k3_accident"  value="<?php echo e(old('material_kontrak')); ?>">
            <!-- yg value= gak harus -->
          </div>
        </div>


        <div class="line"></div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Penjelasan Pelaksanaan K3</label>
          <div class="col-sm-9">
            <input type="text" placeholder="Penjelasan K3" class="form-control" name="material_kontrak" id="pelaksanaan_k3"  value="<?php echo e(old('material_kontrak')); ?>">
            <!-- yg value= gak harus -->
          </div>
        </div>


        <div class="line"></div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Prosentase Pekerjaan</label>
          <div class="col-sm-9">
            <input type="text" placeholder="Prosentase Pekerjaan" class="form-control" name="prosentase_laporan" id="prosentase_laporan"  value="<?php echo e(old('material_kontrak')); ?>">
            <!-- yg value= gak harus -->
          </div>
        </div>


        <div class="line"></div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Prosentase komulatif</label>
          <div class="col-sm-9">
            <input type="text" placeholder="prosentase komulatif" class="form-control" name="prosentase_komulatif" id="prosentase_komulatif"  value="<?php echo e(old('material_kontrak')); ?>">
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


$('.clockpicker').clockpicker();



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
                    'no_kontrak': document.getElementById("DDkontrak").textContent,
                    'no_rab': $('#DDkontrak').val(),
                    'id_lokasi' : $('#lokasi').val(),
                    'no_addendum': $('#no_addendum').val(),
                    'periode_penilaian' : $('#periode_penilaian').val(),
                    'jumlah_tk': $('#jumlah_tk').val(),
                    'sertifikasi_tk': $('#sertifikasi_tk').val(),
                    'rencana_kerja1': $('#rencana_kerja1').val(),
                    'rencana_kerja2' : $('#rencana_kerja2').val(),
                    'sarana_alat_k3_3': $('#sarana_alat_k3_1').val(),
                    'sarana_alat_k3_1' : $('#sarana_alat_k3_2').val(),
                    'sarana_alat_k3_2': $('#sarana_alat_k3_3').val(),
                    'material_kerja1': $('#material_kerja1').val(),
                    'material_kerja2': $('#material_kerja2').val(),
                    'material_kerja3': $('#material_kerja3').val(),
                    'work_permit': $('#work_permit').val(),
                    // 'bukti_work_permit': $('#DDrab').val(),

                    'pelaksanaan_pekerjaan': $('#pelaksanaan_pekerjaan').val(),
                    'komunikasi_koresponden_1': $('#komunikasi_koresponden_1').val(),
                    'komunikasi_koresponden_2': $('#komunikasi_koresponden_2').val(),
                    'kepatuhan_pelaporan_1' : $('#kepatuhan_pelaporan_1').val(),
                    'kepatuhan_pelaporan_2': $('#kepatuhan_pelaporan_2').val(),
                    'jam_awal_padam' : $('#jam_awal_padam').val(),
                    'jam_akhir_padam': $('#jam_akhir_padam').val(),
                    'k3_accident': $('#k3_accident').val(),
                    'pelaksanaan_k3': $('#pelaksanaan_k3').val(),
                    'prosentase_laporan': $('#prosentase_laporan').val(),
                    'prosentase_komulatif': $('#prosentase_komulatif').val(),
                  },
                  success:function(data)
                  {
                              $('#id_lokasi').val(null).trigger('change'),
                              $('#DDkontrak').val(null).trigger('change'),

                    $('#no_addendum').val(""),
                    $('#periode_penilaian').val(""),
                    $('#jumlah_tk').val(""),
                    $('#sertifikasi_tk').val(""),
                    $('#rencana_kerja1').val(""),
                    $('#rencana_kerja2').val(""),
                    $('#sarana_alat_k3_1').val(""),
                    $('#sarana_alat_k3_2').val(""),
                    $('#sarana_alat_k3_3').val(""),
                    $('#material_kerja1').val(""),
                    $('#material_kerja2').val(""),
                    $('#material_kerja3').val(""),
                    $('#work_permit').val(""),
                    $('#pelaksanaan_pekerjaan').val(""),
                    $('#komunikasi_koresponden_1').val(""),
                    $('#komunikasi_koresponden_2').val(""),
                    $('#kepatuhan_pelaporan_1').val(""),
                    $('#kepatuhan_pelaporan_2').val(""),
                    $('#jam_awal_padam').val(""),
                    $('#jam_akhir_padam').focus(),
                    $('#k3_accident').val(""),
                    $('#pelaksanaan_k3').val(""),
                    $('#prosentase_laporan').val(""),
                    $('#prosentase_komulatif').val(""),

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


$('#lokasi').select2({
  placeholder: 'Select an item',
  ajax: {
    url: '/getlokasis',
    dataType: 'json',
    delay: 250,
    processResults: function (data) {
      return {
        results:  $.map(data, function (item) {
              return {
                  text: item.nama_lokasi,
                  id: item.kode_lokasi,
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
                  id: item.no_rab,
              }
          })

      };
    },
    cache: true
  }
});


$('.DDkontrak').on("select2:select", function(e) {

    var getrab = document.getElementById("DDkontrak").value;
    $.ajax({
        type: 'GET',
        url: '/getkontraksdata',
        data:{'getrab': getrab},
        success:function(data)
        {
          $('#nama_pekerjaan').val(data[0].pekerjaan);
          $('#nilai_kontrak').val(data[0].total_kontrak);
          $('#jangka_waktu').val(data[0].tanggal_akhir);
          $('#no_addendum').val(data[0].addendums);
       },
    });
});


</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.indexNVM', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\git\AO2\resources\views/Konstruksi/pengawasan.blade.php ENDPATH**/ ?>
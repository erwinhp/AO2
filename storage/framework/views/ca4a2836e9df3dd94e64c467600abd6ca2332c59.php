<?php $__env->startSection('header'); ?>
View Jadual Pelelangan
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>

<div class="text-right">
    <a href="/jadwallelangs"  class="btn btn-primary" >Create Jadwal Pelelangan</a>
</div>
<form class="form-horizontal" role="form" >
  <?php echo csrf_field(); ?>
<?php

?>

 <input type="hidden" id="pengumuman_pelelanganz" name="CodeBanyak" value="">
  <input type="hidden" id="aanwijzingz" name="CodeBanyak" value="">
   <input type="hidden" id="pemasukan_penawaranz" name="CodeBanyak" value="">
    <input type="hidden" id="pembukaan_penawaranz" name="CodeBanyak" value="">
     <input type="hidden" id="cdaz" name="CodeBanyak" value="">
      <input type="hidden" id="penerbitan_kontrakz" name="CodeBanyak" value="">
       <input type="hidden" id="pengumuman_pemenangz" name="CodeBanyak" value="">
        <input type="hidden" id="penunjukan_pemenangz" name="CodeBanyak" value="">
        <input type="hidden" id="id_madude" name="CodeBanyak" value="">

<!-- <a href="#" class="add-modal"><li>Tambah PRK</li></a> -->
<!-- <a href="/inputPRK" class=""><li>Tambah PRK</li></a> -->
<!-- <a href="#" class="add-modaladendum"><li>Tambah Adendum</li></a> -->
<br>

      <form class="form-horizontal">

        <div>

        </div>

        <div class="row m-b-3">
             <div class="form-group col-sm-3">
               <h4 class="demo-sub-title">Nomor RKS</h4>
               <select class="DDselect" style="width:440px;" name="itemName" id="rab_select"></select>
                    <!-- yg value= gak harus -->
             </div>
           </div>


        <div class="row m-b-3">
             <div class="form-group col-sm-3">
               <h4 class="demo-sub-title">Pengumuman Pelelangan</h4>
                    <div class="input-group date" data-provide="datepicker" >
                        <input type="text" class="form-control bobot_datepicker" id="pengumuman_pelelangan" disabled>
                        <div class="input-group-addon">
                            <span class="glyphicon glyphicon-th"></span>
                        </div>
                    </div>
                    <!-- yg value= gak harus -->
             </div>
             <div class="form-group col-sm-1">
             </div>
             <div class="form-group col-sm-4">
               <h4 class="demo-sub-title">&nbsp;</h4>
               <input class="form-control focus" type="text" placeholder="Nomor Pengumuman" id="pengumumans_pelelangans" disabled >
             </div>
           </div>


           <div class="row m-b-3">
                <div class="form-group col-sm-3">
                  <h4 class="demo-sub-title">aanwijzing</h4>
                       <div class="input-group date" data-provide="datepicker" >
                           <input type="text" class="form-control bobot_datepicker" id="aanwijzing" disabled>
                           <div class="input-group-addon">
                               <span class="glyphicon glyphicon-th"></span>
                           </div>
                       </div>
                       <!-- yg value= gak harus -->
                </div>
                <div class="form-group col-sm-1">
                </div>
                <div class="form-group col-sm-4">
                  <h4 class="demo-sub-title">&nbsp;</h4>
                  <input class="form-control focus" type="text" placeholder="BA aanwijzing" id="ba_aanwijzing" disabled>
                </div>
              </div>




              <div class="row m-b-3">
                   <div class="form-group col-sm-3">
                     <h4 class="demo-sub-title">Pemasukan Penawaran</h4>
                          <div class="input-group date" data-provide="datepicker" >
                              <input type="text" class="form-control bobot_datepicker" id="pemasukan_penawaran" disabled>
                              <div class="input-group-addon">
                                  <span class="glyphicon glyphicon-th"></span>
                              </div>
                          </div>
                          <!-- yg value= gak harus -->
                   </div>
                   <div class="form-group col-sm-1">
                   </div>
                 </div>




                 <div class="row m-b-3">
                      <div class="form-group col-sm-3">
                        <h4 class="demo-sub-title">Pembukaan Penawaran</h4>
                             <div class="input-group date" data-provide="datepicker" >
                                 <input type="text" class="form-control bobot_datepicker" id="pembukaan_penawaran" disabled>
                                 <div class="input-group-addon">
                                     <span class="glyphicon glyphicon-th"></span>
                                 </div>
                             </div>
                             <!-- yg value= gak harus -->
                      </div>
                      <div class="form-group col-sm-1">
                      </div>
                      <div class="form-group col-sm-4">
                        <h4 class="demo-sub-title">&nbsp;</h4>
                        <input class="form-control focus" type="text" placeholder="BA Pembukaan Penawaran" id="ba_pembukaan_penawaran" disabled>
                      </div>
                    </div>






                       <div class="row m-b-3">
                            <div class="form-group col-sm-3">
                              <h4 class="demo-sub-title">Pengumuman Pemenang</h4>
                                   <div class="input-group date" data-provide="datepicker" >
                                       <input type="text" class="form-control bobot_datepicker" id="pengumuman_pemenang" disabled>
                                       <div class="input-group-addon">
                                           <span class="glyphicon glyphicon-th"></span>
                                       </div>
                                   </div>
                                   <!-- yg value= gak harus -->
                            </div>
                            <div class="form-group col-sm-1">
                            </div>
                            <div class="form-group col-sm-4">
                              <h4 class="demo-sub-title">&nbsp;</h4>
                              <input class="form-control focus" type="text" placeholder="Pengumuman Pemenang" id="pengumumans_pemenangs" disabled>
                            </div>
                          </div>




                          <div class="row m-b-3">
                               <div class="form-group col-sm-3">
                                 <h4 class="demo-sub-title">Penunjukan Pemenang</h4>
                                      <div class="input-group date" data-provide="datepicker" >
                                          <input type="text" class="form-control bobot_datepicker" id="penunjukan_pemenang" disabled>
                                          <div class="input-group-addon">
                                              <span class="glyphicon glyphicon-th"></span>
                                          </div>
                                      </div>
                                      <!-- yg value= gak harus -->
                               </div>
                               <div class="form-group col-sm-1">
                               </div>
                               <div class="form-group col-sm-4">
                                 <h4 class="demo-sub-title">&nbsp;</h4>
                                 <input class="form-control focus" type="text" placeholder="Surat Penunjukan" id="surat_penunjukan" disabled>
                               </div>
                             </div>




                             <div class="row m-b-3">
                                  <div class="form-group col-sm-3">
                                    <h4 class="demo-sub-title">CDA</h4>
                                         <div class="input-group date" data-provide="datepicker" >
                                             <input type="text" class="form-control bobot_datepicker" id="cda" disabled>
                                             <div class="input-group-addon">
                                                 <span class="glyphicon glyphicon-th"></span>
                                             </div>
                                         </div>
                                         <!-- yg value= gak harus -->
                                  </div>
                                  <div class="form-group col-sm-1">
                                  </div>
                                  <div class="form-group col-sm-4">
                                    <h4 class="demo-sub-title">&nbsp;</h4>
                                    <input class="form-control focus" type="text" placeholder="BA CDA"  id="ba_cda" disabled>
                                  </div>
                                </div>



                                <div class="row m-b-3">
                                     <div class="form-group col-sm-3">
                                       <h4 class="demo-sub-title">Penerbitan Kontrak</h4>
                                            <div class="input-group date" data-provide="datepicker" >
                                                <input type="text" class="form-control bobot_datepicker" id="penerbitan_kontrak" disabled>
                                                <div class="input-group-addon">
                                                    <span class="glyphicon glyphicon-th"></span>
                                                </div>
                                            </div>
                                            <!-- yg value= gak harus -->
                                     </div>
                                     <div class="form-group col-sm-1">
                                     </div>
                                     <div class="form-group col-sm-4">
                                       <h4 class="demo-sub-title">&nbsp;</h4>
                                       <input class="form-control focus" type="text" placeholder="Kontrak" id="no_kontrak" disabled>
                                     </div>
                                   </div>

      </form>




</form>

<script>
// $('.datepicker').datepicker({
//     format: 'mm/dd/yyyy',
//     startDate: '-3d'
// });




$('.bobot_datepicker').datepicker({
});



$('.DDselect').select2({
  placeholder: 'Select an item',
  ajax: {
    url: '/getrksjadwal',
    dataType: 'json',
    delay: 250,
    processResults: function (data) {
      return {
        results:  $.map(data, function (item) {
              return {

                  text: item.no_rks,
                  id: item.no_rks,
              }
          })
      };
    },
    cache: true
  }
});

function fetchdataupdate()
{
  var getrks = document.getElementById("rab_select").value;
  $.ajax({
      type: 'GET',
      url: '/getdatajadwal',
      data:{'getrks': getrks},
      success:function(data)
      {

        $('#id_madude').val(data[0].id_jadwal_lelang);
        $('#pengumuman_pelelanganz').val(data[0].pengumuman_pelelangan);
        $('#aanwijzingz').val(data[0].aanwijzing);
        $('#pemasukan_penawaranz').val(data[0].pemasukan_penawaran),
        $('#pembukaan_penawaranz').val(data[0].pembukaan_penawaran),
        $('#pengumuman_pemenangz').val(data[0].pengumuman_pemenang),
        $('#penunjukan_pemenangz').val(data[0].penunjukan_pemenang),
        $('#cdaz').val(data[0].cda),
        $('#penerbitan_kontrakz').val(data[0].penerbitan_kontrak),
        $('#pengumuman_pelelangan').val(data[0].pengumuman_pelelangan);
        $('#aanwijzing').val(data[0].aanwijzing);
        $('#pemasukan_penawaran').val(data[0].pemasukan_penawaran);
        $('#pembukaan_penawaran').val(data[0].pembukaan_penawaran);
        $('#pengumuman_pemenang').val(data[0].pengumuman_pemenang);
        $('#penunjukan_pemenang').val(data[0].penunjukan_pemenang);
        $('#cda').val(data[0].cda);
        $('#penerbitan_kontrak').val(data[0].penerbitan_kontrak);

        $('#pengumumans_pelelangans').val(data[0].pengumumans_pelelangans);
        $('#ba_aanwijzing').val(data[0].ba_aanwijzing);
        $('#ba_pembukaan_penawaran').val(data[0].ba_pembukaan_penawaran);
        $('#pengumumans_pemenangs').val(data[0].pengumumans_pemenangs);
        $('#penunjukan_pemenang').val(data[0].penunjukan_pemenang);
        $('#surat_penunjukan').val(data[0].surat_penunjukan);
        $('#ba_cda').val(data[0].ba_cda);
        $('#no_kontrak').val(data[0].no_kontrak);
     },
  });
}


$('.DDselect').on("select2:select", function(e) {
fetchdataupdate();
});



</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.indexNVM', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\git\AO2\resources\views/Pengadaan/indexviewjadwal.blade.php ENDPATH**/ ?>
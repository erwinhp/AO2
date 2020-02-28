@extends('layouts.indexNVM')
@section('header')
Create Jadual Pelelangan
@endsection
@section('content')

<div class="text-right">
    <a href="/indexeditjadwal"  class="btn btn-primary" >Edit Jadwal Pelelangan</a>
</div>
<form class="form-horizontal" role="form" >
  @csrf
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
                        <input type="text" class="form-control bobot_datepicker" id="pengumuman_pelelangan">
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
               <input class="form-control focus" type="text" placeholder="Nomor Pengumuman" id="pengumumans_pelelangans" >
             </div>
           </div>


           <div class="row m-b-3">
                <div class="form-group col-sm-3">
                  <h4 class="demo-sub-title">aanwijzing</h4>
                       <div class="input-group date" data-provide="datepicker" >
                           <input type="text" class="form-control bobot_datepicker" id="aanwijzing">
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
                  <input class="form-control focus" type="text" placeholder="BA aanwijzing" id="ba_aanwijzing" >
                </div>
              </div>




              <div class="row m-b-3">
                   <div class="form-group col-sm-3">
                     <h4 class="demo-sub-title">Pemasukan Penawaran</h4>
                          <div class="input-group date" data-provide="datepicker" >
                              <input type="text" class="form-control bobot_datepicker" id="pemasukan_penawaran">
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
                                 <input type="text" class="form-control bobot_datepicker" id="pembukaan_penawaran">
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
                        <input class="form-control focus" type="text" placeholder="BA Pembukaan Penawaran" id="ba_pembukaan_penawaran">
                      </div>
                    </div>






                       <div class="row m-b-3">
                            <div class="form-group col-sm-3">
                              <h4 class="demo-sub-title">Pengumuman Pemenang</h4>
                                   <div class="input-group date" data-provide="datepicker" >
                                       <input type="text" class="form-control bobot_datepicker" id="pengumuman_pemenang">
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
                              <input class="form-control focus" type="text" placeholder="Pengumuman Pemenang" id="pengumumans_pemenangs" >
                            </div>
                          </div>




                          <div class="row m-b-3">
                               <div class="form-group col-sm-3">
                                 <h4 class="demo-sub-title">Penunjukan Pemenang</h4>
                                      <div class="input-group date" data-provide="datepicker" >
                                          <input type="text" class="form-control bobot_datepicker" id="penunjukan_pemenang">
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
                                 <input class="form-control focus" type="text" placeholder="Surat Penunjukan" id="surat_penunjukan" >
                               </div>
                             </div>




                             <div class="row m-b-3">
                                  <div class="form-group col-sm-3">
                                    <h4 class="demo-sub-title">CDA</h4>
                                         <div class="input-group date" data-provide="datepicker" >
                                             <input type="text" class="form-control bobot_datepicker" id="cda">
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
                                    <input class="form-control focus" type="text" placeholder="BA CDA"  id="ba_cda">
                                  </div>
                                </div>



                                <div class="row m-b-3">
                                     <div class="form-group col-sm-3">
                                       <h4 class="demo-sub-title">Penerbitan Kontrak</h4>
                                            <div class="input-group date" data-provide="datepicker" >
                                                <input type="text" class="form-control bobot_datepicker" id="penerbitan_kontrak">
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
                                       <input class="form-control focus" type="text" placeholder="Kontrak" id="no_kontrak" >
                                     </div>
                                   </div>


        <div class="line"></div>
        <div class="form-group row">
          <div class="col-sm-4 offset-sm-3 addkontrak">
            <button type="button"  class="btn btn-secondary" id="cancle">Cancel</button>
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




$('.bobot_datepicker').datepicker({
});



$('.DDselect').select2({
  placeholder: 'Select an item',
  ajax: {
    url: '/getrks',
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


$( "#pengumuman_pelelangan" ).change(function() {
var datez=$('#pengumuman_pelelangan').val();
var monthz=datez.substring(0, 2);
var dayz=datez.substring(3, 5);
var yearz=datez.substring(6, 10);
var datefixz=yearz+'-'+monthz+'-'+dayz;
$('#pengumuman_pelelanganz').val(datefixz);
});


$( "#aanwijzing" ).change(function() {
var datez=$('#aanwijzing').val();
var monthz=datez.substring(0, 2);
var dayz=datez.substring(3, 5);
var yearz=datez.substring(6, 10);
var datefixz=yearz+'-'+monthz+'-'+dayz;
$('#aanwijzingz').val(datefixz);
});


$( "#pemasukan_penawaran" ).change(function() {
var datez=$('#pemasukan_penawaran').val();
var monthz=datez.substring(0, 2);
var dayz=datez.substring(3, 5);
var yearz=datez.substring(6, 10);
var datefixz=yearz+'-'+monthz+'-'+dayz;
$('#pemasukan_penawaranz').val(datefixz);
});


$( "#pembukaan_penawaran").change(function() {
var datez=$('#pembukaan_penawaran').val();
var monthz=datez.substring(0, 2);
var dayz=datez.substring(3, 5);
var yearz=datez.substring(6, 10);
var datefixz=yearz+'-'+monthz+'-'+dayz;
$('#pembukaan_penawaranz').val(datefixz);
});


$( "#cda").change(function() {
var datez=$('#cda').val();
var monthz=datez.substring(0, 2);
var dayz=datez.substring(3, 5);
var yearz=datez.substring(6, 10);
var datefixz=yearz+'-'+monthz+'-'+dayz;
$('#cdaz').val(datefixz);
});


$( "#penerbitan_kontrak" ).change(function() {
var datez=$('#penerbitan_kontrak').val();
var monthz=datez.substring(0, 2);
var dayz=datez.substring(3, 5);
var yearz=datez.substring(6, 10);
var datefixz=yearz+'-'+monthz+'-'+dayz;
$('#penerbitan_kontrakz').val(datefixz);
});


$( "#pengumuman_pemenang" ).change(function() {
var datez=$('#pengumuman_pemenang').val();
var monthz=datez.substring(0, 2);
var dayz=datez.substring(3, 5);
var yearz=datez.substring(6, 10);
var datefixz=yearz+'-'+monthz+'-'+dayz;
$('#pengumuman_pemenangz').val(datefixz);
});


$( "#penunjukan_pemenang" ).change(function() {
var datez=$('#penunjukan_pemenang').val();
var monthz=datez.substring(0, 2);
var dayz=datez.substring(3, 5);
var yearz=datez.substring(6, 10);
var datefixz=yearz+'-'+monthz+'-'+dayz;
$('#penunjukan_pemenangz').val(datefixz);
});


$('.addkontrak').on('click', '#addkont', function() {
  // alert('madude');
  if(($('#pengumuman_pelelanganz').val()=="")||($('#aanwijzingz').val()=="")||($('#pemasukan_penawaranz').val()=="")||($('#pembukaan_penawaranz').val()=="")||($('#cdaz').val()=="")||($('#penerbitan_kontrakz').val()=="")||
  ($('#pengumuman_pemenangz').val()=="")||($('#pengumumans_pelelangans').val()=="")||($('#ba_aanwijzing').val()=="")||($('#ba_pembukaan_penawaran').val()=="")||($('#pengumumans_pemenangs').val()=="")||($('#no_kontrak').val()=="")
||($('#ba_cda').val()=="")||($('#no_kontrak').val()==""))
  {
    alert('lengkapi semua data');
  }
  else {
        $.ajax({
            type: 'POST',
            url: '/storejadwallelangs',
            data: {
              '_token': $('input[name=_token]').val(),
              'pengumuman_pelelangan': $('#pengumuman_pelelanganz').val(),
              'aanwijzing': $('#aanwijzingz').val(),
              'pemasukan_penawaran' : $('#pemasukan_penawaranz').val(),
              'pembukaan_penawaran': $('#pembukaan_penawaranz').val(),
              'pengumuman_pemenang': $('#pengumuman_pemenangz').val(),
              'penunjukan_pemenang': $('#penunjukan_pemenangz').val(),
              'cda' : $('#cdaz').val(),
              'penerbitan_kontrak': $('#penerbitan_kontrakz').val(),
              'pengumumans_pelelangans': $('#pengumumans_pelelangans').val(),
              'ba_aanwijzing': $('#ba_aanwijzing').val(),
              'ba_pembukaan_penawaran' : $('#ba_pembukaan_penawaran').val(),
              'pengumumans_pemenangs': $('#pengumumans_pemenangs').val(),
              'surat_penunjukan': $('#surat_penunjukan').val(),
              'no_kontrak': $('#no_kontrak').val(),
              'ba_cda': $('#ba_cda').val(),
              'no_rks': $('#rab_select').val(),
            },
            success:function(data)
            {
              $('#pengumuman_pelelanganz').val(""),
              $('#aanwijzingz').val(""),
              $('#pemasukan_penawaranz').val(""),
              $('#pembukaan_penawaranz').val(""),
              $('#pengumuman_pemenangz').val(""),
              $('#penunjukan_pemenangz').val(""),
              $('#cdaz').val(""),
              $('#penerbitan_kontrakz').val(""),
              $('#pengumuman_pelelangan').val(""),
              $('#aanwijzing').val(""),
              $('#pemasukan_penawaran').val(""),
              $('#pembukaan_penawaran').val(""),
              $('#pengumuman_pemenang').val(""),
              $('#penunjukan_pemenang').val(""),
              $('#cda').val(""),
              $('#penerbitan_kontrak').val(""),

              $('#pengumumans_pelelangans').val(""),
              $('#ba_aanwijzing').val(""),
              $('#ba_pembukaan_penawaran').val(""),
              $('#pengumumans_pemenangs').val(""),
              $('#penunjukan_pemenang').val(""),
              $('#ba_cda').val(""),
              $('#no_kontrak').val(""),
              alert("input sukses");
           },
        });
      }
    });


</script>
@endsection

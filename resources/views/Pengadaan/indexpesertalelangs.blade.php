@extends('layouts.indexNVM')
@section('header')
Create Peserta Lelang
@endsection
@section('content')

<div class="text-right">
    <a href="/indexeditpesertalelangs"  class="btn btn-primary" >Edit Peserta Lelang</a>
</div>
<form class="form-horizontal" role="form" >
  @csrf
<?php

?>

 <input type="hidden" id="tanggal_ambil_rksz" name="CodeBanyak" value="">
  <input type="hidden" id="tgl_akhir_jaminanz" name="CodeBanyak" value="">
    <input type="hidden" id="getmetode" name="CodeBanyak" value="">
   <!-- <input type="hidden" id="pemasukan_penawaranz" name="CodeBanyak" value="">
    <input type="hidden" id="pembukaan_penawaranz" name="CodeBanyak" value="">
     <input type="hidden" id="cdaz" name="CodeBanyak" value="">
      <input type="hidden" id="penerbitan_kontrakz" name="CodeBanyak" value="">
       <input type="hidden" id="pengumuman_pemenangz" name="CodeBanyak" value="">
        <input type="hidden" id="penunjukan_pemenangz" name="CodeBanyak" value=""> -->

<!-- <a href="#" class="add-modal"><li>Tambah PRK</li></a> -->
<!-- <a href="/inputPRK" class=""><li>Tambah PRK</li></a> -->
<!-- <a href="#" class="add-modaladendum"><li>Tambah Adendum</li></a> -->
<br>

      <form class="form-horizontal">

        <div>

        </div>


        <div class="row m-b-3">
             <div class="form-group col-sm-3">
               <h4 class="demo-sub-title">Nama Vendor</h4>
               <select class="DDselectvendor" style="width:440px;" name="itemName" id="nama_vendor"></select>
                    <!-- yg value= gak harus -->
             </div>
           </div>


        <div class="row m-b-3">
             <div class="form-group col-sm-3">
               <h4 class="demo-sub-title">Nomor RAB</h4>
               <select class="DDselectrab" style="width:440px;" name="itemName" id="rab_selects"></select>
                    <!-- yg value= gak harus -->
             </div>
           </div>


           <div class="row m-b-3">

                             <div class="form-group col-sm-3">
                               <h4 class="demo-sub-title">Nomor RKS</h4>
                               <select class="DDselect" style="width:440px;" name="itemName" id="rab_select"></select>
                                    <!-- yg value= gak harus -->
                             </div>



                <div class="form-group col-sm-1">
                </div>


                <div class="form-group col-sm-3">
                  <h4 class="demo-sub-title">Tanggal Ambil RKS</h4>
                       <div class="input-group date" data-provide="datepicker" >
                           <input type="text" class="form-control bobot_datepicker" id="tanggal_ambil_rks" >
                           <div class="input-group-addon">
                               <span class="glyphicon glyphicon-th"></span>
                           </div>
                       </div>
                       <!-- yg value= gak harus -->
                </div>

              </div>





                 <div class="row m-b-3">
                      <div class="form-group col-sm-3">
                        <h4 class="demo-sub-title">Ikut Aanwijzing</h4>
                        <select class="form-control" id="ikut_aanwijzing">
                           <option value="yes">Ikut</option>
                           <option value="no">Tidak Ikut</option>
                         </select>
                      </div>
                    </div>






                       <div class="row m-b-3">
                            <div class="form-group col-sm-3">
                              <h4 class="demo-sub-title">Masuk Penawaran</h4>
                              <select class="form-control" id="masuk_penawaran">
                                 <option value="yes">Ikut</option>
                                 <option value="no">Tidak Ikut</option>
                               </select>
                            </div>

                            <div class="form-group col-sm-1">
                            </div>

                            <div class="form-group col-sm-3">
                               <h4 class="demo-sub-title">Harga Penawaran</h4>
                              <input class="form-control focus" type="text" placeholder="Harga Penawaran" id="harga_penawaran" >
                            </div>
                          </div>





                             <div class="row m-b-3">
                                  <div class="form-group col-sm-3">
                                    <h4 class="demo-sub-title">Flag Menang</h4>
                                    <select class="form-control" id="flag_menang">
                                       <option value="yes">Menang</option>
                                       <option value="no">Tidak Menang</option>
                                     </select>
                                  </div>
                                </div>



                                <div class="row m-b-3">
                                     <div class="form-group col-sm-3">
                                       <h4 class="demo-sub-title">Jaminan Penawaran</h4>
                                       <input class="form-control focus" type="text" placeholder="Jaminan Penawaran" id="jaminan_penawaran" >
                                     </div>

                                     <div class="form-group col-sm-1">
                                     </div>

                                     <div class="form-group col-sm-3">
                                       <h4 class="demo-sub-title">Penjamin</h4>
                                       <input class="form-control focus" type="text" placeholder="Penjamin" id="penjamin" >
                                     </div>

                                   </div>





                                      <div class="row m-b-3">
                                           <div class="form-group col-sm-3">
                                             <h4 class="demo-sub-title">Tanggal Akhir Jaminan</h4>
                                                  <div class="input-group date" data-provide="datepicker" >
                                                      <input type="text" class="form-control bobot_datepicker" id="tgl_akhir_jaminan">
                                                      <div class="input-group-addon">
                                                          <span class="glyphicon glyphicon-th"></span>
                                                      </div>
                                                  </div>
                                                  <!-- yg value= gak harus -->
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

$('.DDselectrab').select2({
  placeholder: 'Select an item',
  ajax: {
    url: '/getrabsmetode',
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


$('.DDselectrab').on("select2:select", function(e) {

    var getrab = document.getElementById("rab_selects").value;
    $.ajax({
        type: 'GET',
        url: '/getmetodes',
        data:{'getrab': getrab},
        success:function(data)
        {
          $('#getmetode').val(data[0].metode);
          if(data[0].metode=='tunjuklangsung')
          {
              // alert('madude');
              document.getElementById("tanggal_ambil_rks").disabled = true;
              document.getElementById("ikut_aanwijzing").disabled = true;
              document.getElementById("masuk_penawaran").disabled = true;
              $(".DDselect").prop("disabled", true);
             // document.getElementById("no_rks").disabled = true;
             // document.getElementById("tanggal_ambil_rks").disabled = true;
             // document.getElementById("ikut_aanwijzing").disabled = true;
             // document.getElementById("masuk_penawaran").disabled = true;
          }
          else {
            document.getElementById("tanggal_ambil_rks").disabled = false;
            document.getElementById("ikut_aanwijzing").disabled = false;
            document.getElementById("masuk_penawaran").disabled = false;
            $(".DDselect").prop("disabled", false);
            //pass
          }
       },
    });

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





$( "#tanggal_ambil_rks" ).change(function() {
var datez=$('#tanggal_ambil_rks').val();
var monthz=datez.substring(0, 2);
var dayz=datez.substring(3, 5);
var yearz=datez.substring(6, 10);
var datefixz=yearz+'-'+monthz+'-'+dayz;
$('#tanggal_ambil_rksz').val(datefixz);
});


$( "#tgl_akhir_jaminan" ).change(function() {
var datez=$('#tgl_akhir_jaminan').val();
var monthz=datez.substring(0, 2);
var dayz=datez.substring(3, 5);
var yearz=datez.substring(6, 10);
var datefixz=yearz+'-'+monthz+'-'+dayz;
$('#tgl_akhir_jaminanz').val(datefixz);
});




$('.addkontrak').on('click', '#addkont', function() {
  // alert('madude');
if($('#getmetode').val()!='tunjuklangsung')
{
  if(($('#nama_vendor').val()=="")||($('#no_rab').val()=="")||($('#no_rks').val()=="")||($('#tanggal_ambil_rks').val()=="")||($('#ikut_aanwijzing').val()=="")||($('#masuk_penawaran').val()=="")||
  ($('#harga_penawaran').val()=="")||($('#flag_menang').val()=="")||($('#jaminan_penawaran').val()=="")||($('#penjamin').val()=="")||($('#tgl_akhir_jaminan').val()==""))
  {
    alert('lengkapi semua data');
  }
  else {
    $.ajax({
        type: 'POST',
        url: '/storepesertalelang',
        data: {
          '_token': $('input[name=_token]').val(),
          'nama_vendor' : $('#nama_vendor').val(),
          'no_rab': $('#rab_selects').val(),
          'no_rks': $('#rab_select').val(),
          'tanggal_ambil_rks': $('#tanggal_ambil_rksz').val(),
          'ikut_aanwijzing' : $('#ikut_aanwijzing').val(),
          'masuk_penawaran': $('#masuk_penawaran').val(),
          'harga_penawaran': $('#harga_penawaran').val(),
          'flag_menang': $('#flag_menang').val(),
          'jaminan_penawaran' : $('#jaminan_penawaran').val(),
          'penjamin': $('#penjamin').val(),
          'tgl_akhir_jaminan': $('#tgl_akhir_jaminanz').val(),
        },
        success:function(data)
        {
          alert('sukses input');
          $('#nama_vendor').val(null).trigger('change');
          $('#rab_selects').val(null).trigger('change');
          $('#rab_select').val(null).trigger('change');
          $('#tanggal_ambil_rks').val("");
          $('#ikut_aanwijzing').val("");
          $('#masuk_penawaran').val("");
          $('#harga_penawaran').val("");
          $('#flag_menang').val("");
          $('#jaminan_penawaran').val("");
          $('#penjamin').val("");
          $('#tgl_akhir_jaminan').val("");
       },
    });
  }
}
  else {
    if(($('#nama_vendor').val()=="")||($('#no_rab').val()=="")||
    ($('#harga_penawaran').val()=="")||($('#flag_menang').val()=="")||($('#jaminan_penawaran').val()=="")||($('#penjamin').val()=="")||($('#tgl_akhir_jaminan').val()==""))
    {
      alert("Lengkapi semua data");
    }
    else {
      $.ajax({
          type: 'POST',
          url: '/storepesertalelang',
          data: {
            '_token': $('input[name=_token]').val(),
            'nama_vendor' : $('#nama_vendor').val(),
            'no_rab': $('#rab_selects').val(),
            'no_rks': $('#rab_select').val(),
            'tanggal_ambil_rks': $('#tanggal_ambil_rksz').val(),
            'ikut_aanwijzing' : $('#ikut_aanwijzing').val(),
            'masuk_penawaran': $('#masuk_penawaran').val(),
            'harga_penawaran': $('#harga_penawaran').val(),
            'flag_menang': $('#flag_menang').val(),
            'jaminan_penawaran' : $('#jaminan_penawaran').val(),
            'penjamin': $('#penjamin').val(),
            'tgl_akhir_jaminan': $('#tgl_akhir_jaminanz').val(),
          },
          success:function(data)
          {
            alert('sukses input');
            $('#nama_vendor').val(null).trigger('change');
            $('#rab_selects').val(null).trigger('change');
            $('#rab_select').val(null).trigger('change');
            $('#tanggal_ambil_rks').val("");
            $('#ikut_aanwijzing').val("");
            $('#masuk_penawaran').val("");
            $('#harga_penawaran').val("");
            $('#flag_menang').val("");
            $('#jaminan_penawaran').val("");
            $('#penjamin').val("");
            $('#tgl_akhir_jaminan').val("");
         },
      });
    }
  }
    });


</script>
@endsection

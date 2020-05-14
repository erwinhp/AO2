@extends('layouts.indexNVM')
@section('header')
Input Metode Lelang
@endsection
@section('content')
<form class="form-horizontal" role="form" >
  @csrf
<?php

?>
<!-- <a href="#" class="add-modal"><li>Tambah PRK</li></a> -->
<!-- <a href="/inputPRK" class=""><li>Tambah PRK</li></a> -->
<!-- <a href="#" class="add-modaladendum"><li>Tambah Adendum</li></a> -->
<br>

      <form class="form-horizontal">

        <div class="form-group row">
          <label class="col-sm-3 form-control-label">No RKS</label>
          <div class="col-sm-9">
            <input type="text" placeholder="Input No RKS" class="form-control" name="nama_perusahaan" id="no_rks"  value="{{ old('no_rks') }}">
            <!-- yg value= gak harus -->
          </div>
        </div>

        <div class="form-group row">
          <label class="col-sm-3 form-control-label">No RAB</label>
        <div class="col-sm-9">
            <select class="DDselect" style="width:440px;" name="itemName" id="rab_select"></select>
        </div>
      </div>

        <div class="line"></div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Nama Pekerjaan</label>
          <div class="col-sm-9">
            <input type="text" placeholder="" class="form-control" name="nomor_kontak" id="nama_pekerjaan"  value="{{ old('') }}" disabled>
            <!-- yg value= gak harus -->
          </div>
        </div>

        <div class="line"></div>
        <div class="form-group row">
          <label class="col-sm-3 form-control-label">Metode</label>
          <div class="col-sm-9">
            <select class="form-control" id="metode">
              <option value="">Pilih Metode</option>
              <option value="belilangsung">Pembelian Langsung</option>
              <!-- wut penununjukan langsung? -->
              <option value="tunjuklangsung">Pengadaan Langsung</option>
              <option value="lelangterbatas">Pelelangan Terbatas</option>
              <option value="lelangterbuka">Pelelangan Terbuka</option>
              <option value="spbj">Kontrak Rinci</option>
            </select>
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







//open modal adendum
  $('.addkontrak').on('click', '#cancle', function() {
    $('#no_rks').val("");
    $('#no_rab').val("");
    $('#nama_pekerjaan').val("");
    $('#metode').val("");
    $('#no_rks').focus();
  });

      //INI ADD Kontrak
      $('.addkontrak').on('click', '#addkont', function() {
        // alert('madude');
        if(($('#nama_pekerjaan').val()=="")||(document.getElementById("metode").value==""))
        {
          alert('lengkapi semua data');
          $('#no_rks').val();
          //pass
        }
        else {
              $.ajax({
                  type: 'POST',
                  url: '/storemetodelelang',
                  data: {
                    '_token': $('input[name=_token]').val(),
                    'no_rks': $('#no_rks').val(),
                    'no_rab': document.getElementById("rab_select").value,
                    'nama_pekerjaan' : $('#nama_pekerjaan').val(),
                    'metode': document.getElementById("metode").value,
                  },
                  success:function(data)
                  {
                    $('#no_rks').val(""),
                    $('#no_rab').val(""),
                    $('#nama_pekerjaan').val(""),
                    $('#metode').val(""),
                    alert("input sukses");
                 },
              });
            }
          });


      $('.DDselect').select2({
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

      $('.DDselect').on("select2:select", function(e) {

          var getrab = document.getElementById("rab_select").value;
          $.ajax({
              type: 'GET',
              url: '/getpekerjaan',
              data:{'getrab': getrab},
              success:function(data)
              {
                $('#nama_pekerjaan').val(data[0].judul);
             },
          });
});


</script>
@endsection

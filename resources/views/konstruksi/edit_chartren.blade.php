@extends('layouts.indexNVM')
@section('header')
Edit Chart Perencanaan
@endsection
@section('content')
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>


<!-- <div class="input-group date" data-provide="datepicker" style="width:40%">
    <input type="text" class="form-control bobot_datepicker" id="tanggal_bobot">
    <div class="input-group-addon">
        <span class="glyphicon glyphicon-th"></span>
    </div>
</div> -->

<br>
<!-- NO RAB -->
<div>
    <select class="DDselect" style="width:440px;" name="itemName" id="rab_select"></select>
</div>

<br>

<!-- <div>
    <select class="DDselect" style="width:440px;" name="itemName" id="tanggal_bobot"></select>
</div> -->

<br>
<!-- KODE BANYAK -->
 <input type="hidden" id="tglfixchart" name="CodeBanyak" value="">
<br>
    <div class="responsive-nav">
                <table class="table">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>No RAB</th>
                      <th>Tanggal Progress</th>
                      <th>Jumlah Progress</th>
                      <th>Edit</th>
                    </tr>
                  </thead>
                  <tbody id="tablerab">
                  </tbody>
                </table>
              </div>



              <div class="modal fade" id="editModal" aria-hidden="true">

              <div class="modal-content">
                 <div class="modal-header">
                     <h4 class="modal-title"</h4>
                 </div>
                 <div class="modal-body">
                     <form id="sample_form" name="userForm" class="form-horizontal" enctype="multipart/form-data">
                       @csrf
                       <div class="input-group date" data-provide="datepicker" style="width:40%">
                           <input type="text" class="form-control bobot_datepicker" id="tanggalmodal">
                           <div class="input-group-addon">
                               <span class="glyphicon glyphicon-th"></span>
                           </div>
                       </div>

                         <div class="form-group">
                             <label class="col-sm-2 control-label">Jumlah</label>
                             <div class="col-sm-12">
                                 <input type="jumlah" class="form-control" id="jumlah_progressu" name="jumlah_progress" placeholder="Masukan Jumlah Jumlah Edit" value="" required="">
                             </div>
                         </div>


                         <div class="modal-footer">
                                         <button type="button" class="btn btn-primary edit" data-dismiss="modal">
                                             <span class='glyphicon glyphicon-check'></span> Edit
                                         </button>
                                         <button type="button" class="btn btn-warning" data-dismiss="modal">
                                             <span class='glyphicon glyphicon-remove'></span> Close
                                         </button>
                                     </div>
                     </form>
                 </div>
                 <div class="modal-footer">

                 </div>
              </div>
              </div>

<!-- <div id="chartContainer" style="height: 370px; width: 100%;"></div> -->
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
    url: '/getnokontrakrab',
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


$('.DDselect').on("select2:select", function(e) {
  var getrab = document.getElementById("rab_select").value;
  var html='';

    $.ajax({
        type: 'GET',
        url: '/getdatachart',
        data:{'getrab': getrab},
        success:function(data)
        {
                    for(var count=0; count < data.length; count++)
                    {
                    html +='<tr>';
                    html +='<td>'+(count+1)+'</td>';
                    html +='<td class="column_name" data-column_name="uraian" data-id="'+data[count].id_chartren+'">'+data[count].no_rab+'</td>';
                    html +='<td  class="column_name" data-column_name="uraian" data-id="'+data[count].id_chartren+'">'+data[count].tgl_progress+'</td>';
                    html +='<td  class="column_name" data-column_name="uraian" data-id="'+data[count].id_chartren+'">'+data[count].jumlah_progress+'</td>';
                    html += '<td><button class="edit-modal btn btn-info" id="editbutton" data-id="'+data[count].id_chartren+'" data-jml="'+data[count].jumlah_progress+'" data-tgl="'+data[count].tgl_progress+'"><span class="glyphicon glyphicon-trash">Edit</span></button>';
                    html +='</tr>';
                    }
                    $('#tablerab').html(html);


        },
      });
});

function fetchdataupdate()
{
    var getrab = document.getElementById("rab_select").value;
  $.ajax({
      type: 'GET',
      url: '/getdatachart',
      data:{'getrab': getrab},
      success:function(data)
      {           html="";
                  for(var count=0; count < data.length; count++)
                  {
                  html +='<tr>';
                  html +='<td>'+(count+1)+'</td>';
                  html +='<td class="column_name" data-column_name="uraian" data-id="'+data[count].id_chartren+'">'+data[count].no_rab+'</td>';
                  html +='<td  class="column_name" data-column_name="uraian" data-id="'+data[count].id_chartren+'">'+data[count].tgl_progress+'</td>';
                  html +='<td  class="column_name" data-column_name="uraian" data-id="'+data[count].id_chartren+'">'+data[count].jumlah_progress+'</td>';
                  html += '<td><button class="edit-modal btn btn-info" id="editbutton" data-id="'+data[count].id_chartren+'" data-jml="'+data[count].jumlah_progress+'" data-tgl="'+data[count].tgl_progress+'"><span class="glyphicon glyphicon-trash">Edit</span></button>';
                  html +='</tr>';
                  }
                  $('#tablerab').html(html);


      },
    });
}


$("#tanggalmodal").change(function() {
var datez=$('#tanggalmodal').val();
var monthz=datez.substring(0, 2);
var dayz=datez.substring(3, 5);
var yearz=datez.substring(6, 10);
var datefixz=yearz+'-'+monthz+'-'+dayz;
var datecalc=yearz+','+monthz+','+dayz;
$('#tglfixchart').val(datefixz);
});


$(document).on('click', '.edit-modal', function() {
  $('#tglfixchart').val($(this).data("tgl"));
  $('#tanggalmodal').val($(this).data("tgl"));
     $('#jumlah_progressu').val($(this).data("jml"));
     id = $(this).data("id");
    $('#editModal').appendTo("body").modal('show');
});



$('.modal-footer').on('click', '.edit', function() {
  // alert(id);
        $.ajax({
            type: 'PUT',
            url: '/updatechart/'+ id,
            data: {
                '_token': $('input[name=_token]').val(),
                'id_chartren': $(this).data("id"),
                'tgl_progress': $('#tglfixchart').val(),
                'jumlah_progress': $("#jumlah_progressu").val(),
            },
            success:function(data)
            {
              alert("suksess")
              fetchdataupdate();
           },
        });
    });




</script>
@endsection

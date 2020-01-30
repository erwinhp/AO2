@extends('layouts.indexNVM')
@section('header')
Bobot Pelaksanaan
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

<div>
    <select  class="form-control" name="tanggal_bobot" id="tanggal_bobot"  value="">
      <option> Tanggal </option>

    </select>
</div>
<br>
<!-- KODE BANYAK -->
 <input type="hidden" id="kodebanyak" name="CodeBanyak" value="">
 <!-- TANGGAL CEK -->
 <input type="hidden" id="tanggal_bobotfix" name="tanggalfix" value="">
 <!-- SEHARUSNY DIBAWAH -->
  <input type="hidden" id="kodeuraian" name="kodeuraian" value="">
  <!-- SEHARUSNY DIBAWAH -->
   <input type="hidden" id="no_rab" name="no_rab" value="">
   <!-- SEHARUSNY DIBAWAH -->
    <input type="hidden" id="tanggals" name="tanggals" value="">
<br>
    <div class="responsive-nav">
                <table class="table">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Uraian</th>
                      <th>Volume SPBJ</th>
                      <th>Volume Cek</th>
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
                         <div class="form-group">
                             <label class="col-sm-2 control-label">Jumlah</label>
                             <div class="col-sm-12">
                                 <input type="jumlah" class="form-control" id="volume_cek" name="volume_cek" placeholder="Masukan Jumlah Jumlah Edit" value="" required="">
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
  var html='';

    $.ajax({
        type: 'GET',
        url: '/getdate',
        data:{'getrab': getrab},
        success:function(data)
        {
          $('#no_rab').val(getrab);
          for(var count=0; count < data.length; count++)
          {
            // html +='<option>'+data[count].tanggal_cek+'</option>';
            $("#tanggal_bobot").append($('<option>', {value: data[count].tanggal_cek, text: data[count].tanggal_cek}));
          }
          // console.log(html);
          // $('#optionsz').append(html);
        },
      });
});


$( "#tanggal_bobot" ).change(function() {
  var getrab = document.getElementById("rab_select").value;
  var gettgl = document.getElementById("tanggal_bobot").value;
  $.ajax({
      type: 'GET',
      url: '/getdataedit',
      data:{'getrab': getrab, 'gettgl':gettgl},
      success:function(data)
      {         $('#tanggals').val(gettgl);
                html='';
                console.log(data);
                for(var count=0; count < data.length; count++)
                {
                html +='<tr>';
                html +='<td>'+(count+1)+'</td>';
                html +='<td class="column_name" data-column_name="uraian" data-id="'+data[count].id_bobot+'">'+data[count].uraians+'</td>';
                html +='<td  class="column_name" data-column_name="uraian" data-id="'+data[count].id_bobot+'">'+data[count].volume_spbj+'</td>';
                html +='<td  class="column_name" data-column_name="uraian" data-id="'+data[count].id_bobot+'">'+data[count].volume_cek+'</td>';
                html += '<td><button class="edit-modal btn btn-info" id="editbutton" data-id="'+data[count].id_bobot+'"><span class="glyphicon glyphicon-trash">Edit</span></button>';
                html +='</tr>';
                }
                $('#tablerab').html(html);
      },
    });

});




function fetch_datatrasnport()
{
  var getrab = document.getElementById("rab_select").value;
  var gettgl = document.getElementById("tanggal_bobot").value;
  $.ajax({
      type: 'GET',
      url: '/getdataedit',
      data:{'getrab': getrab, 'gettgl':gettgl},
      success:function(data)
      {         $('#tanggals').val(gettgl);
                html='';
                console.log(data);
                for(var count=0; count < data.length; count++)
                {
                html +='<tr>';
                html +='<td>'+(count+1)+'</td>';
                html +='<td class="column_name" data-column_name="uraian" data-id="'+data[count].id_bobot+'">'+data[count].uraians+'</td>';
                html +='<td  class="column_name" data-column_name="uraian" data-id="'+data[count].id_bobot+'">'+data[count].volume_spbj+'</td>';
                html +='<td  class="column_name" data-column_name="uraian" data-id="'+data[count].id_bobot+'">'+data[count].volume_cek+'</td>';
                html += '<td><button class="edit-modal btn btn-info" id="editbutton" data-id="'+data[count].id_bobot+'"><span class="glyphicon glyphicon-trash">Edit</span></button>';
                html +='</tr>';
                }
                $('#tablerab').html(html);
      },
    });

}

$(document).on('click', '.edit-modal', function() {
     $('#volume_cek').val('');
     id = $(this).data("id");
    $('#editModal').appendTo("body").modal('show');
});



$('.modal-footer').on('click', '.edit', function() {
  // alert(id);
        $.ajax({
            type: 'PUT',
            url: '/updatebobot/'+ id,
            data: {
                '_token': $('input[name=_token]').val(),
                'id_bobot': $(this).data("id"),
                'volume_cek': $("#volume_cek").val(),
            },
            success:function(data)
            {
              alert("suksess")
              fetch_datatrasnport();
           },
        });
    });



//
// $( "#tanggal_bobot" ).change(function() {
// var datez=$('#tanggal_bobot').val();
// var monthz=datez.substring(0, 2);
// var dayz=datez.substring(3, 5);
// var yearz=datez.substring(6, 10);
// var datefixz=yearz+'-'+monthz+'-'+dayz;
// $('#tanggal_bobotfix').val(datefixz);
// if (arraytemp.length==0)
// {
//
// }
// else {
// for (i = 0; i < arraytemp.length; i++) {
//   arraytemp[i].tanggal_cek=$('#tanggal_bobotfix').val();
// }
// }
// });




// window.onload = function () {
//
// var chart = new CanvasJS.Chart("chartContainer", {
// 	animationEnabled: true,
// 	theme: "light2",
// 	title:{
// 		text: "S Curve"
// 	},
// 	axisY:{
// 		includeZero: false
// 	},
// 	data: [{
// 		type: "line",
// 		dataPoints: [
// 			{ y: 450 },
// 			{ y: 414},
// 			{ y: 520, indexLabel: "highest",markerColor: "red", markerType: "triangle" },
// 			{ y: 460 },
// 			{ y: 450 },
// 			{ y: 500 },
// 			{ y: 480 },
// 			{ y: 480 },
// 			{ y: 410 , indexLabel: "lowest",markerColor: "DarkSlateGrey", markerType: "cross" },
// 			{ y: 500 },
// 			{ y: 480 },
// 			{ y: 510 }
// 		]
// 	}]
// });
// chart.render();
// }



</script>
@endsection

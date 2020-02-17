<?php $__env->startSection('header'); ?>
Edit Chart Perencanaan
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>


<!-- <div class="input-group date" data-provide="datepicker" style="width:40%">
    <input type="text" class="form-control bobot_datepicker" id="tanggal_bobot">
    <div class="input-group-addon">
        <span class="glyphicon glyphicon-th"></span>
    </div>
</div> -->
<div>
    <select class="DDselectvendors" style="width:440px;" name="itemName" id="vendors"></select>
</div>

<br>
<!-- NO RAB -->
<div>
    <select class="DDselect" style="width:440px;" name="itemName" id="rab_select"></select>
</div>

<br>

<!-- <div>
    <select class="DDselect" style="width:440px;" name="itemName" id="tanggal_bobot"></select>
</div> -->
<input type="hidden" id="norab" name="norab" value="">
<input type="hidden" id="namavendor" name="namavendor" value="">


<br>
<!-- KODE BANYAK -->
 <input type="hidden" id="tglfixchart" name="CodeBanyak" value="">
<br>
    <div class="responsive-nav">
                <table class="table">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Uraian</th>
                      <th>Volume</th>
                      <th>Harga satuan</th>
                      <th>Total Harga</th>
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
                       <?php echo csrf_field(); ?>
                       <div class="form-group">
                           <label class="col-sm-2 control-label">Uraian</label>
                           <div class="col-sm-12">
                               <input type="jumlah" class="form-control" id="uraiansz" name="volume_cek" placeholder="" value="" disabled>
                           </div>
                       </div>

                         <div class="form-group">
                             <label class="col-sm-2 control-label">Harga Satuan</label>
                             <div class="col-sm-12">
                                 <input type="jumlah" class="form-control" id="harga_satuansz" name="volume_cek" placeholder="Masukan Harga Satuan" value="" required="">
                             </div>
                         </div>

                         <div class="form-group">
                             <label class="col-sm-2 control-label">Volume</label>
                             <div class="col-sm-12">
                                 <input type="jumlah" class="form-control" id="volumesz" name="volumesz" placeholder="" value="Masukan Jumlah" required="">
                             </div>
                         </div>

                         <div class="form-group">
                             <label class="col-sm-2 control-label">Total</label>
                             <div class="col-sm-12">
                                 <input type="jumlah" class="form-control" id="totalsz" name="volume_cek" placeholder="" value="" required="" disabled>
                             </div>
                         </div>

                         <div class="modal-footer">
                                         <button type="button" class="btn btn-primary edit" data-dismiss="modal" id="edito">
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


$('.DDselectvendors').select2({
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


$('.DDselectvendors').on("select2:select", function(e) {
$('#namavendor').val($('#vendors').val());
});
$('.DDselect').on("select2:select", function(e) {
  var getrab = document.getElementById("rab_select").value;
  var getvendorsz = document.getElementById("vendors").value;
  var html='';
if($('#namavendor').val()=="")
{
  alert("isi nama vendor");
  $('#vendors').focus();
}
else {
    $.ajax({
        type: 'GET',
        url: '/getdatavendror',
        data:{'getrab': getrab, 'getvendorsz' : getvendorsz},
        success:function(data)
        {
                    for(var count=0; count < data.length; count++)
                    {
                    html +='<tr>';
                    html +='<td>'+(count+1)+'</td>';
                    html +='<td class="column_name" data-column_name="uraian" data-id="'+data[count].id_detilrab+'">'+data[count].uraian+'</td>';
                    html +='<td  class="column_name" data-column_name="uraian" data-id="'+data[count].id_detilrab+'">'+data[count].jumlah+'</td>';
                    html +='<td  class="column_name" data-column_name="uraian" data-id="'+data[count].id_detilrab+'">'+data[count].harga_nego+'</td>';
                    html +='<td  class="column_name" data-column_name="uraian" data-id="'+data[count].id_detilrab+'">'+data[count].total_harganego+'</td>';
                    html += '<td><button class="edit-modal btn btn-info" id="editbutton" data-jumlah="'+data[count].jumlah+'" data-id="'+data[count].id_detilrab+'" data-hrg="'+data[count].harga_nego+'" data-uraian="'+data[count].uraian+'" data-total="'+data[count].total_harganego+'"><span class="glyphicon glyphicon-trash">Edit</span></button>';
                    html +='</tr>';
                    }
                    $('#tablerab').html(html);
        },
      });
    }
});

function fetchdataupdate()
{
  var getrab = document.getElementById("rab_select").value;
  var getvendorsz = document.getElementById("vendors").value;
  $.ajax({
      type: 'GET',
      url: '/getdatavendror',
      data:{'getrab': getrab , 'getvendorsz' : getvendorsz},
      success:function(data)
      {
      html="";
      for(var count=0; count < data.length; count++)
      {
      html +='<tr>';
      html +='<td>'+(count+1)+'</td>';
      html +='<td class="column_name" data-column_name="uraian" data-id="'+data[count].id_detilrab+'">'+data[count].uraian+'</td>';
      html +='<td  class="column_name" data-column_name="uraian" data-id="'+data[count].id_detilrab+'">'+data[count].jumlah+'</td>';
      html +='<td  class="column_name" data-column_name="uraian" data-id="'+data[count].id_detilrab+'">'+data[count].harga_nego+'</td>';
      html +='<td  class="column_name" data-column_name="uraian" data-id="'+data[count].id_detilrab+'">'+data[count].total_harganego+'</td>';
      html += '<td><button class="edit-modal btn btn-info" id="editbutton" data-jumlah="'+data[count].jumlah+'" data-id="'+data[count].id_detilrab+'" data-hrg="'+data[count].harga_nego+'" data-uraian="'+data[count].uraian+'" data-total="'+data[count].total_harganego+'"><span class="glyphicon glyphicon-trash">Edit</span></button>';
      html +='</tr>';
      }
      $('#tablerab').html(html);
      },
    });
}

$("#harga_satuansz").keyup(function(e) {
  var total=$("#volumesz").val()*$("#harga_satuansz").val();
$("#totalsz").val(total);
});

$("#volumesz").keyup(function(e) {
  var total=$("#volumesz").val()*$("#harga_satuansz").val();
$("#totalsz").val(total);
});

$(document).on('click', '.edit-modal', function() {
  $('#uraiansz').val($(this).data("uraian"));
  $('#harga_satuansz').val($(this).data("hrg"));
  $('#volumesz').val($(this).data("jumlah"));
  $('#totalsz').val($(this).data("total"));
     id = $(this).data("id");
    $('#editModal').appendTo("body").modal('show');
});



$('.modal-footer').on('click', '.edit', function() {
  // alert(id);
        $.ajax({
            type: 'PUT',
            url: '/update_rabpenawaran/'+ id,
            data: {
                '_token': $('input[name=_token]').val(),
                'id_detilrab': $(this).data("id"),
                'jumlah': $('#volumesz').val(),
                'harga_nego': $("#harga_satuansz").val(),
                'total_harganego': $("#totalsz").val(),
            },
            success:function(data)
            {
              alert("suksess")
              fetchdataupdate();
           },
        });
    });




</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.indexNVM', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\git\AO2\resources\views/Pengadaan/edit_rabpenawaran.blade.php ENDPATH**/ ?>
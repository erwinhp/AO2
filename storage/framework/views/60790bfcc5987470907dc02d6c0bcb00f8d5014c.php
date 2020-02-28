<?php $__env->startSection('header'); ?>
Penawaran RAB
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<div class="text-right">
    <a href="/edit_rabpenawaran"  class="btn btn-primary" >Edit Rab rab penawarans</a>
</div>

<br>
<div>
    <select class="DDselectvendors" style="width:440px;" name="itemName" id="vendors"></select>
</div>
<br>

<!-- NO RAB -->
<div>
    <select class="DDselect" style="width:440px;" name="itemName" id="rab_select"></select>
</div>

<br>

<!-- KODE BANYAK -->
 <input type="hidden" id="jumlahszsz" name="jumlahszsz" value="">
 <input type="hidden" id="maxids" name="maxids" value="">
 <input type="hidden" id="namavendor" name="namavendor" value="">
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


      <div class="modal fade" id="addvendor" aria-hidden="true">
      <div class="modal-content">
         <div class="modal-header">
             <h4 class="modal-title"</h4>
         </div>
         <div class="modal-body">
             <form id="sample_form" name="userForm" class="form-horizontal" enctype="multipart/form-data">
               <?php echo csrf_field(); ?>
               <div class="form-group">
                   <label class="col-sm-2 control-label">Nama Perusahaan</label>
                   <div class="col-sm-12">
                       <input type="jumlah" class="form-control" id="nama_perusahaan" name="volume_cek" placeholder="Masukan Nama Perusahaan" value="" >
                   </div>
               </div>


                 <div class="form-group">
                     <label class="col-sm-2 control-label">Alamat</label>
                     <div class="col-sm-12">
                         <input type="jumlah" class="form-control" id="alamat" name="volumesz" placeholder="" value="Masukan Alamat" required="">
                     </div>
                 </div>

                 <div class="form-group">
                     <label class="col-sm-2 control-label">Nomor Kontak</label>
                     <div class="col-sm-12">
                         <input type="jumlah" class="form-control" id="nomor_kontak" name="volume_cek" placeholder="Masukan Nomor Kontak" value="" required="" >
                     </div>
                 </div>

                 <div class="form-group">
                     <label class="col-sm-2 control-label">NPWP</label>
                     <div class="col-sm-12">
                         <input type="jumlah" class="form-control" id="npwp" name="volume_cek" placeholder="Masukan Nomor NPWP" value="" required="" >
                     </div>
                 </div>

                 <div class="modal-footer">
                                 <button type="button" class="btn btn-primary edit" data-dismiss="modal" id="Savu">
                                     <span class='glyphicon glyphicon-check'></span> Save
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
                         <input type="jumlah" class="form-control" id="volumesz" name="volumesz" placeholder="Masukan Jumlah" value="" required="">
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
var arraytemp=[];
$(document).ready( function () {
  $.ajax({
      type: 'GET',
      url: '/getmaxid',
      data:{},
      success:function(data)
      {
        if((data[0].id_detilrabs)==null)
        {
          $('#maxids').val(0);
        }
        else {
          $('#maxids').val(data[0].id_detilrabs);
        }


      },
    });
});





$('.bobot_datepicker').datepicker({
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



function fetchmadude()
{
  var getrab = document.getElementById("rab_select").value;
  $.ajax({
      type: 'GET',
      url: '/getmaterialpenawaran',
      data:{'getrab': getrab},
      success:function(data)
      {
        html='';
        // console.log(data);
        idsz=$('#maxids').val();
        for(var count=0; count < data.length; count++)
        {
          idsz=idsz+1;
          //ARRAY PUSH Here
          arraytemp.push({
            id_detilrab : data[count].id_detilrab,
          uraian: data[count].uraian,
          uraians: data[count].uraians,
          jumlah: data[count].jumlah,
          no_rab : data[count].no_rab,
          nama_uraian : data[count].nama_uraian,
          satuan : data[count].satuan,
          harga_satuan : data[count].harga_satuan,
          material_PLN : data[count].material_PLN,
          total_biaya : data[count].total_biaya,
          kontrak : data[count].kontrak,
          kontrak : data[count].spbj,
          harga_nego :  data[count].harga_satuan,
          total_harganego : data[count].total_biaya,
        });
        html +='<form class="form-horizontal" role="form" method="post" action="/storebobot">'
        html +='<tr>';
        html +='<td>'+(count+1)+'</td>';
        html +='<td class="column_name" data-column_name="uraian" data-id="'+data[count].id_detilrab+'">'+data[count].uraians+'</td>';
        html +='<td  class="column_name" data-column_name="uraian" data-id="'+data[count].id_detilrab+'">'+data[count].jumlah+'</td>';
        html +='<td  class="column_name" data-column_name="uraian" data-id="'+data[count].id_detilrab+'">'+data[count].harga_satuan+'</td>';
        html +='<td  class="column_name" data-column_name="uraian" data-id="'+data[count].id_detilrab+'">'+data[count].total_biaya+'</td>';
        html +='<td><button class="edit-modal btn btn-info" id="editbutton" data-id="'+data[count].id_detilrab+'"  data-uraian="'+data[count].uraians+'"  data-jumlah="'+data[count].jumlah+'"><span class="glyphicon glyphicon-trash">Edit</span></button></td>';
        html +='</tr>';
        }
        html +=' <button type="button" class="btn btn-success addabc" data-dismiss="modal" id="idadd"> <span class="glyphicon glyphicon-check "></span> Save </button>';
        html +='</form>';
        // console.log(html);
        $('#tablerab').html(html);
        // console.log(arraytemp);
     },
  });
}


function fetcharraymadude()
{
html='';
for(var count=0; count < arraytemp.length; count++)
{
html +='<form class="form-horizontal" role="form" method="post" action="/storebobot">'
html +='<tr>';
html +='<td>'+(count+1)+'</td>';
html +='<td class="column_name" data-column_name="uraian" data-id="'+arraytemp[count].id_detilrab+'">'+arraytemp[count].uraians+'</td>';
html +='<td  class="column_name" data-column_name="uraian" data-id="'+arraytemp[count].id_detilrab+'">'+arraytemp[count].jumlah+'</td>';
html +='<td  class="column_name" data-column_name="uraian" data-id="'+arraytemp[count].id_detilrab+'">'+arraytemp[count].harga_satuan+'</td>';
html +='<td  class="column_name" data-column_name="uraian" data-id="'+arraytemp[count].id_detilrab+'">'+arraytemp[count].total_biaya+'</td>';
html +='<td><button class="edit-modal btn btn-info" id="editbutton" data-id="'+arraytemp[count].id_detilrab+'"  data-uraian="'+arraytemp[count].uraians+'"  data-jumlah="'+arraytemp[count].jumlah+'"><span class="glyphicon glyphicon-trash">Edit</span></button></td>';
html +='</tr>';
}
html +=' <button type="button" class="btn btn-success addabc" data-dismiss="modal" id="idadd"> <span class="glyphicon glyphicon-check "></span> Save </button>';
html +='</form>';
// console.log(html);
$('#tablerab').html(html);
}



//tablenya
$('.DDselect').on("select2:select", function(e) {
arraytemp=[];
fetchmadude()
});

//kalkulasi kalkulasi kalkulasi
$("#harga_satuansz").keyup(function(e) {
  var total=$("#volumesz").val()*$("#harga_satuansz").val();
$("#totalsz").val(total);
});

$("#volumesz").keyup(function(e) {
  var total=$("#volumesz").val()*$("#harga_satuansz").val();
$("#totalsz").val(total);
});


//open the modal
$(document).on('click', '.edit-modal', function() {
     $('#uraiansz').val($(this).data("uraian"));
     $('#volumesz').val($(this).data("jumlah"));
      $('#harga_satuansz').val("");
     id = $(this).data("id");
     // console.log(id);
    $('#editModal').appendTo("body").modal('show');
});


$(document).on('click', '#edito', function() {
  // console.log(arraytemp);
  if($("#harga_satuansz").val()=="")
  {
    alert("mohon isi harga satuan");
  }
  else {

    for(var count=0; count < arraytemp.length; count++)
    {
      if(id==arraytemp[count].id_detilrab)
      {
        arraytemp[count].jumlah=$('#volumesz').val();
        arraytemp[count].harga_satuan=$('#harga_satuansz').val();
        arraytemp[count].total_biaya=$('#totalsz').val();
      }
    }
    // console.log(arraytemp);
    fetcharraymadude();
    $('#uraiansz').val("");
    $('#volumesz').val("");
    $('#harga_satuansz').val("");
    $('#totalsz').val("");


  }
});
// $(document).on('click', '#idad', function() {
// alert('mouse up');
// });
//
// add to db add to db
$(document).on('click', '#idadd', function() {
  sukaes=0;
if( $('#namavendor').val()=="")
{
  alert("isi vendor");
  $('#vendors').focus();
}
else {
for (i = 0; i < arraytemp.length; i++) {
        $.ajax({
            type: 'POST',
            url: '/storerab_penawaran',
            data: {
              "_token": "<?php echo e(csrf_token()); ?>",
              // '_token': $('input[name=_token]').val(),
                  uraian:arraytemp[i].uraian,
                  jumlah: arraytemp[i].jumlah,
                  no_rab : arraytemp[i].no_rab,
                  nama_uraian : arraytemp[i].nama_uraian,
                  satuan : arraytemp[i].satuan,
                  harga_satuan : arraytemp[i].harga_satuan,
                  material_PLN : arraytemp[i].material_PLN,
                  total_biaya : arraytemp[i].total_biaya,
                  kontrak : arraytemp[i].kontrak,
                  kontrak : arraytemp[i].spbj,
                  harga_nego :  arraytemp[i].harga_satuan,
                  total_harganego : arraytemp[i].total_biaya,
                  id_vendor : $('#vendors').val(),
            },
            success:function(data)
            {
              sukaes=sukaes+1;
              if (sukaes==arraytemp.length)
              {
                alert("sukses input");
                arraytemp=[];
                $('#maxids').val();
                // $('#tablerab').html("");
                // $("#tanggal_bobot").val("");
                // $("#tanggal_bobot").focus;
              }
           },
        });
      }
  }
});




</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.indexNVM', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\git\AO2\resources\views/Pengadaan/rab_penawaranindex.blade.php ENDPATH**/ ?>
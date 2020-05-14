<?php $__env->startSection('header'); ?>
Kerja Tambah/Kurang
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<div class="text-right">
    <a href="#"  class="btn btn-primary add-modal" >Tambah Barang</a>
</div>
<!-- <a href="#" class="add-modal"><li>Tambah Material/Jasa</li></a> -->
<div class="form-group row">
  <label class="col-sm-2 control-label">Tanggal Perubahan</label>
 <div class="col-sm-12">
<div class="input-group date" data-provide="datepicker" style="width:40%">
    <input type="text" class="form-control bobot_datepicker" id="tanggal_adendum" >
    <div class="input-group-addon">
        <span class="glyphicon glyphicon-th"></span>
    </div>
</div>
</div>
</div>
<br>
No Addendum
    <div>
        <input type="jumlah" class="form-control" id="no_addendum" name="volumesz" placeholder="Masukan Nomor Addedum" value="" required="">
    </div>

<br>

No Kontrak
<div>
    <select class="DDselect" style="width:440px;" name="itemName" id="rab_select"></select>
</div>

<br>
No PRK
<div>
<input type="text" placeholder="No PRK" class="form-control" name="no_prk" id="prkszs" value="" disabled>
</div>


<br>
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
</div>
<br>

<!-- KODE BANYAK -->
 <!-- <input type="hidden" id="jumlahszsz" name="jumlahszsz" value="">
 <input type="hidden" id="maxids" name="maxids" value="">
 <input type="hidden" id="namavendor" name="namavendor" value=""> -->
  <input type="hidden" id="prkszss" name="prkszss" value="">
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
                         <input type="jumlah" class="form-control" id="harga_satuanszzs" name="volume_cek" placeholder="Masukan Harga Satuan" value="" required="">
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



<!-- THIS IS ADD MODAL MADUDES ALKJAD;LAJSDF; -->
<div class="modal" id="addModal" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
   <div class="modal-header">
       <h4 class="modal-title"</h4>
   </div>
   <div class="modal-body">
       <form id="sample_form" name="userForm" class="form-horizontal" enctype="multipart/form-data">
         <?php echo csrf_field(); ?>
          <div class="form-group">
              <label for="uraian" class="col-sm-1 control-label">Uraian</label>
              <div class="col-sm-12">
                  <select class="DDselecturaian" style="width:440px;" name="itemName" id="uraianmsz"></select>
              </div>
          </div>

           <div class="form-group">
               <label class="col-sm-1 control-label">Jumlah</label>
               <div class="col-sm-12">
                   <input type="jumlah" class="form-control" id="jumlahmsz" name="jumlah" placeholder="Enter jumlah" value="" required="">
               </div>
           </div>

           <div class="form-group">
               <label class="col-sm-1 control-label">Satuan</label>
               <div class="col-sm-12">
                   <input type="satuan" class="form-control" id="satuanmsz" name="satuan" placeholder="Enter satuan" value="" required="" disabled>
               </div>
           </div>

           <div class="form-group">
               <label class="col-sm-1 control-label">Harga Satuan</label>
               <div class="col-sm-12">
                   <input type="harga_satuan" class="form-control" id="harga_satuanmsz" name="harga_satuan" placeholder="Enter harga_satuan" value="" required="">
               </div>
           </div>

           <div class="form-group">
               <label class="col-sm-1 control-label">Material PLN</label>
               <div class="col-sm-12">
                   <input type="material_PLN" class="form-control" id="material_PLNmsz" name="material_PLN" placeholder="Enter material_PLN" value="" required="" disabled>
               </div>
           </div>


           <div class="form-group">
               <label class="col-sm-1 control-label">Total Biaya</label>
               <div class="col-sm-12">
                   <input type="total_jasa" class="form-control" id="total_biayamsz" name="total_biaya" placeholder="Enter total_biaya" value="" required="" disabled>
               </div>
           </div>
         </div>


           <div class="modal-footer">
            <button type="button" class="btn btn-success addmsz" data-dismiss="modal">
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




<!-- <div id="chartContainer" style="height: 370px; width: 100%;"></div> -->
<script>
// $('.datepicker').datepicker({
//     format: 'mm/dd/yyyy',
//     startDate: '-3d'
// });
var arraytemp=[];
var arraytanggalandtotal=[];
var arrayprosentasefix=[];
// $(document).ready( function () {
//   $.ajax({
//       type: 'GET',
//       url: '/getmaxid',
//       data:{},
//       success:function(data)
//       {
//         if((data[0].id_detilrabs)==null)
//         {
//           $('#maxids').val(0);
//         }
//         else {
//           $('#maxids').val(data[0].id_detilrabs);
//         }
//       },
//     });
// });
var addtanggal="";
var tanggaladd="";
var tanggalnow="";
var no_kontrakszs="";
var idmaxusu="";
var spbjmadude="";
var id_vendormadude="";
var adendum_ke=0;
var sums=0;
var ttlharga=0;
var sumtotalharga=0;
var totalbayarz=0;
$( document ).ready(function() {
    getdatenow();

    // console.log($('#tanggalnow').val());
});

$('.modal-footer').on('click', '.addmsz', function() {
if (tanggaladd == "" || $('#rab_select').val()=="")
{
  alert('isi tanggal perubahan');
  $('#tanggal_adendum').focus();
}
else {
  arraytemp.push({
  id_detilrab: idmaxusu,
  uraian: $('#uraianmsz').val(),
  uraians: document.getElementById("uraianmsz").textContent,
  jumlah: $('#jumlahmsz').val(),
  no_rab :$('#rab_select').val(),
  nama_uraian : null,
  satuan : $('#satuanmsz').val(),
  material_PLN : $('#material_PLNmsz').val(),
  no_kontrak :no_kontrakszs,
  spbj : spbjmadude,
  harga_nego :$('#harga_satuanmsz').val(),
  total_harganego :$('#total_biayamsz').val(),
  id_vendor : id_vendormadude,
});
fetcharraymadude();
idmaxusu=idmaxusu+1;
}
});


$('.DDselecturaian').select2({
  placeholder: 'Select an item',
  ajax: {
    url: '/searchmaterialjasa',
    dataType: 'json',
    delay: 250,
    processResults: function (data) {
      return {
        results:  $.map(data, function (item) {
              return {
                  text: item.uraian_matkhs,
                  id: item.kode_matkhs,
              }
          })

      };
    },
    cache: true
  }
});

 $("#jumlahmsz").keyup(function(){
   $("#total_biayamsz").val(($("#jumlahmsz").val()*$("#harga_satuanmsz").val()));
 });

 $("#harga_satuanmsz").keyup(function(){
      $("#total_biayamsz").val($("#jumlahmsz").val()*$("#harga_satuanmsz").val());
 });

$('.DDselecturaian').on("select2:select", function(e) {
  var idmat = document.getElementById("uraianmsz").value;
  var hrg = document.getElementById("jumlahmsz").value;
  $.ajax({
      type: 'GET',
      url: '/rgetmat',
      data:{'idmat': idmat},
      success:function(data)
      {

        var a=data[0];
        // $("#harga_satuan").attr("placeholder", a.harga_matkhs);
        // $('#harga_satuan').val(a.harga_matkhs);

        $("#satuanmsz").attr("placeholder", a.satuan_matkhs);
        $('#satuanmsz').val(a.satuan_matkhs);

        $("#total_biayamsz").attr("placeholder", a.harga_matkhs*hrg);
        $('#total_biayamsz').val(a.harga_matkhs*hrg);

        if(a.PLN==1)
        {
          $("#material_PLNmsz").attr("placeholder", "PLN");
          $('#material_PLNmsz').val("PLN");
        }
        else {
          $("#material_PLNmsz").attr("placeholder", "NON PLN");
          $('#material_PLNmsz').val("NON PLN");
        }
     },
  });
});


$(document).on('click', '.add-modal', function() {
            // Empty input fields
            // document.getElementById("no_rab").value;
            $('#DDselect').val(null).trigger('change');
            $('#uraianmsz').val('');
            $('#jumlahmsz').val('');
            $('#satuanmsz').val('');
            $('#harga_satuanmsz').val('');
            $('#material_PLNmsz').val('');
            $('#material_PFKmsz').val('');
            $('#total_biayamsz').val('');
            $('.modal-titlemsz').text('Add');
            $('#addModal').appendTo("body").modal('show');
        });

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


function getdatenow()
{
var today = new Date();
var dd = String(today.getDate()).padStart(2, '0');
var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
var yyyy = today.getFullYear();
today = mm + '-' + dd + '-' + yyyy;
$('#tanggalnow').val(today);
tanggalnow=today;
}

function fetchmadude()
{
  var getrab = document.getElementById("rab_select").value;
  $.ajax({
      type: 'GET',
      url: '/getdataaddendumsz',
      data:{'getrab': getrab},
      success:function(data)
      {
        // console.log(data);
        html='';
        // console.log(data);
        idmaxusu=data[0].idmax;
        spbjmadude=data[0].spbj;
        id_vendormadude=data[0].id_vendor;
        adendum_ke=data[0].adendum_ke;
        if(adendum_ke==null)
        {
          adendum_ke=1;
        }
        else {
          adendum_ke=adendum_ke+1;
        }
        sumtotalharga=0;
        for(var count=0; count < data.length; count++)
        {
          //ARRAY PUSH Here
          sumtotalharga=sumtotalharga+(data[count].harga_nego*data[count].jumlah);
          arraytemp.push({
          id_detilrab: data[count].id_detilrab,
          uraian: data[count].uraian,
          uraians: data[count].uraians,
          jumlah: data[count].jumlah,
          no_rab : data[count].no_rab,
          nama_uraian : data[count].nama_uraian,
          satuan : data[count].satuan,
          material_PLN : data[count].material_PLN,
          no_kontrak : data[count].kontrak,
          spbj : data[count].spbj,
          harga_nego :  data[count].harga_nego,
          total_harganego : data[count].total_harganego,
          id_vendor : data[count].id_vendor,
        });
        html +='<form class="form-horizontal" role="form" method="post" action="/">'
        html +='<tr>';
        html +='<td>'+(count+1)+'</td>';
        html +='<td class="column_name" data-column_name="uraian" data-id="'+data[count].id_detilrab+'">'+data[count].uraians+'</td>';
        html +='<td  class="column_name" data-column_name="uraian" data-id="'+data[count].id_detilrab+'">'+data[count].jumlah+'</td>';
        html +='<td  class="column_name" data-column_name="uraian" data-id="'+data[count].id_detilrab+'">'+data[count].harga_nego+'</td>';
        html +='<td  class="column_name" data-column_name="uraian" data-id="'+data[count].id_detilrab+'">'+data[count].total_harganego+'</td>';
        html +='<td><button class="edit-modal btn btn-info" id="editbutton" data-totalhargasatuanszz="'+arraytemp[count].total_harganego+'" data-hargasatuanszz="'+arraytemp[count].harga_nego+'" data-id="'+data[count].id_detilrab+'"  data-uraian="'+data[count].uraians+'"  data-jumlah="'+data[count].jumlah+'"><span class="glyphicon glyphicon-trash">Edit</span></button></td>';
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
sumtotalharga=0;
for(var count=0; count < arraytemp.length; count++)
{
sumtotalharga=sumtotalharga+(arraytemp[count].harga_nego*arraytemp[count].jumlah);
html +='<form class="form-horizontal" role="form" method="post" action="/">'
html +='<tr>';
html +='<td>'+(count+1)+'</td>';
html +='<td class="column_name" data-column_name="uraian" data-id="'+arraytemp[count].id_detilrab+'">'+arraytemp[count].uraians+'</td>';
html +='<td  class="column_name" data-column_name="uraian" data-id="'+arraytemp[count].id_detilrab+'">'+arraytemp[count].jumlah+'</td>';
html +='<td  class="column_name" data-column_name="uraian" data-id="'+arraytemp[count].id_detilrab+'">'+arraytemp[count].harga_nego+'</td>';
html +='<td  class="column_name" data-column_name="uraian" data-id="'+arraytemp[count].id_detilrab+'">'+arraytemp[count].total_harganego+'</td>';
html +='<td><button class="edit-modal btn btn-info" id="editbutton" data-totalhargasatuanszz="'+arraytemp[count].total_harganego+'" data-hargasatuanszz="'+arraytemp[count].harga_nego+'" data-id="'+arraytemp[count].id_detilrab+'"  data-uraian="'+arraytemp[count].uraians+'"  data-jumlah="'+arraytemp[count].jumlah+'"><span class="glyphicon glyphicon-trash">Edit</span></button></td>';
html +='</tr>';
}
html +=' <button type="button" class="btn btn-success addabc" data-dismiss="modal" id="idadd"> <span class="glyphicon glyphicon-check "></span> Save </button>';
html +='</form>';
// console.log(html);
$('#tablerab').html(html);
}










//ONCLICK DDSELECT MADUDE
$('.DDselect').on("select2:select", function(e) {

  var getrab = document.getElementById("rab_select").value;
  // console.log(getrab);
  $.ajax({
      type: 'GET',
      url: '/getpekerjaan',
      data:{'getrab': getrab},
      async:false,
      success:function(data)
      {
        // console.log(data);
        $('#prkszs').val(data[0].no_prk);
        $('#prkszss').val(data[0].no_prk);
        totalbayarz=data[0].total_bayar;

      },
  });

  $.ajax({
      type: 'GET',
      url: '/gettotalbayarszsz',
      data:{'getrab': getrab},
      async:false,
      success:function(data)
      {
        totalbayarz=data[0].total_bayar;

      },
  });

arraytemp=[];
no_kontrakszs = document.getElementById("rab_select").textContent;
fetchmadude();
getdatarenprosentase();
});











//kalkulasi kalkulasi kalkulasi
$("#harga_satuanszzs").keyup(function(e) {
  var total=$("#volumesz").val()*$("#harga_satuansz").val();
$("#totalsz").val(total);
});

$("#volumesz").keyup(function(e) {
  var total=$("#volumesz").val()*$("#harga_satuanszzs").val();
$("#totalsz").val(total);
});


//open the modal
$(document).on('click', '.edit-modal', function() {
  $("#totalsz").val($(this).data("totalhargasatuanszz"));
  $('#harga_satuanszzs').val($(this).data("hargasatuanszz"));
     $('#uraiansz').val($(this).data("uraian"));
     $('#volumesz').val($(this).data("jumlah"));
      // $('#harga_satuansz').val("");
      id=$(this).data("id");

     // console.log(id);
    $('#editModal').appendTo("body").modal('show');
});


$(document).on('click', '#edito', function() {
  // console.log(arraytemp);
  // id = $(this).data("id");
  if($("#harga_satuansz").val()=="")
  {
    alert("mohon isi harga satuan");
  }
  else {
    // console.log(id);
    for(var count=0; count < arraytemp.length; count++)
    {
      if( id==arraytemp[count].id_detilrab)
      {
        arraytemp[count].jumlah=$('#volumesz').val();
        arraytemp[count].harga_nego=$('#harga_satuanszzs').val();
        arraytemp[count].total_harganego=$('#totalsz').val();
      }
    }
    // console.log(arraytemp);
    fetcharraymadude()
    // console.log(arraytemp);
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
$( "#adendum_tanggal" ).change(function() {
var datez=$('#adendum_tanggal').val();
var monthz=datez.substring(0, 2);
var dayz=datez.substring(3, 5);
var yearz=datez.substring(6, 10);
var datefixz=yearz+'-'+monthz+'-'+dayz;
addtanggal=datefixz;
});


$( "#tanggal_adendum" ).change(function() {
var datez=$('#tanggal_adendum').val();
var monthz=datez.substring(0, 2);
var dayz=datez.substring(3, 5);
var yearz=datez.substring(6, 10);
var datefixz=yearz+'-'+monthz+'-'+dayz;
tanggaladd=datefixz;
});

$(document).on('click', '#idadd', function() {
  sukaes=0;
if( $('#no_adendum').val()==""|| $('#tanggal_adendum').val()=="")
{
  alert("Isi field nomor addendum dan tanggal perubahan");
  $('#vendors').focus();
}
else {
//find the prosentase in loop by the date
                for (i = 0; i < arraytanggalandtotal.length; i++) {
                  var sum=0;
                  var prosentase = 0;
                  var getrab=$('#rab_select').val();
                  $.ajax({
                      type: 'GET',
                      url: '/gettgldatacek',
                      data:{"_token": "<?php echo e(csrf_token()); ?>",'getrab': getrab, gettglcek: arraytanggalandtotal[i].tanggal_cek},
                      async: false,
                      success:function(data)
                      {
                        for (m = 0; m < data.length; m++) {
                          for (j = 0; j < arraytemp.length; j++) {
                            if (data[m].uraian==arraytemp[j].uraian) {
                              sum=sum+(data[m].volume_cek*arraytemp[j].harga_nego)
                            }
                            else {
                              //do nothing
                            }
                            }
                          }

                        prosentases=(sum/sumtotalharga)*100;
                        prosentase = prosentases.toFixed(2);
                        arrayprosentasefix.push({
                          no_rab :$('#rab_select').val(),
                          tgl_progress : arraytanggalandtotal[i].tanggal_cek,
                          jumlah_progress : prosentase,
                        });
                      },
                    });
                }
                //storing the prosentase
                 storeprosentase()
                 //storing the addendum based on the arraylength
for (i = 0; i < arraytemp.length; i++) {
        $.ajax({
            type: 'POST',
            url: '/storeaddendums',
            data: {
              "_token": "<?php echo e(csrf_token()); ?>",
              // '_token': $('input[name=_token]').val(),
                  no_prk:$('#prkszss').val(),
                  uraian:arraytemp[i].uraian,
                  jumlah: arraytemp[i].jumlah,
                  no_rab : arraytemp[i].no_rab,
                  nama_uraian : arraytemp[i].nama_uraian,
                  satuan : arraytemp[i].satuan,
                  material_PLN : arraytemp[i].material_PLN,
                  spbj : arraytemp[i].spbj,
                  harga_nego :  arraytemp[i].harga_nego,
                  total_harganego : arraytemp[i].total_harganego,
                  id_vendor : arraytemp[i].id_vendor,
                  tanggal_adendum : tanggaladd,
                  adendum_tanggal : addtanggal,
                  no_kontrak : no_kontrakszs,
                  no_adendum : $('#no_addendum').val(),
                  adendum_ke :adendum_ke,
                  total_bayar : totalbayarz,
            },
            success:function(data)
            {
              // getprosentase();
              // getdatarenprosentase();
              // storeprosentase();
              sukaes=sukaes+1;
              if (sukaes==arraytemp.length)
              {
                alert("sukses input");
                html = '';
                $('#tablerab').html(html);
                arraytemp=[];
                 addtanggal="";
                 tanggaladd="";
                 tanggalnow="";
                 no_kontrakszs="";
                 idmaxusu="";
                 spbjmadude="";
                 id_vendormadude="";
                // $('#tablerab').html("");
                // $("#tanggal_bobot").val("");
                // $("#tanggal_bobot").focus;
              }
           },
        });
      }
  }
});
//GET DATA PROSENTASE

function getdatarenprosentase()
{
  var getrab=$('#rab_select').val();
  $.ajax({
      type: 'GET',
      url: '/getdatarennewprosentase',
      data:{'getrab': getrab},
      async: false,
      success:function(data)
      {
        for (i = 0; i < data.length; i++) {
        arraytanggalandtotal.push({
          tanggal_cek : data[i].tanggal_cek,
        });
      }
    },
    });
}

//GET RPOSENTASE//not used in this
// function getprosentase()
// {
//   var sums=0;
//   var ttlharga=0;
//   for (i = 0; i < arraytemp.length; i++) {
//     sums=sums+(arraytemp[i].harga_nego*arraytemp[i].jumlah);
//     ttlharga=ttlharga+arraytemp[i].total_harganego;
// }
//   prosentase=(sums/ttlharga)*100;
// }

////STORE PEROSENTASE CHARTREN MADUDE A;SDLKFJADF;LKADF;AKLJSDF
//A;LSDFKJA;SDLFKJASD;FLKAJSDF;LAKSJDF;LASDJFA;LSKDFJA;SDLFKJASD;FL
function storeprosentase()
{
  for (i = 0; i < arrayprosentasefix.length; i++) {
  $.ajax({
      type: 'POST',
      url: '/chart_renpost',
      Async:"False",
      data: {
        "_token": "<?php echo e(csrf_token()); ?>",
        'tgl_progress':arrayprosentasefix[i].tgl_progress,
        'jumlah_progress': arrayprosentasefix[i].jumlah_progress,
        'no_rab' : arrayprosentasefix[i].no_rab,
        'jenis_chart' : "add",
        'adendum_ke' : adendum_ke,
      },
      success:function(data)
      {
        prosentase=0;
     },
   });
 }
}


</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.indexNVM', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\git\AO2\resources\views/Konstruksi/addendum.blade.php ENDPATH**/ ?>
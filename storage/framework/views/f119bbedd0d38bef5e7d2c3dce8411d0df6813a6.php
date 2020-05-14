<?php $__env->startSection('header'); ?>
Bobot Pelaksanaan
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
<div class="text-right">
    <a href="/editbobotindex"  class="btn btn-primary" >Edit Bobot</a>
</div>

<div class="input-group date" data-provide="datepicker" style="width:40%">
    <input type="text" class="form-control bobot_datepicker" id="tanggal_bobot">
    <div class="input-group-addon">
        <span class="glyphicon glyphicon-th"></span>
    </div>
</div>

<br>
<!-- NO RAB -->
<div>
    <select class="DDselect" style="width:440px;" name="itemName" id="rab_select"></select>
</div>

<br>
<!-- KODE BANYAK -->
 <input type="hidden" id="kodebanyak" name="CodeBanyak" value="">
 <!-- TANGGAL CEK -->
 <input type="hidden" id="tanggal_bobotfix" name="tanggalfix" value="">
 <!-- SEHARUSNY DIBAWAH -->
  <input type="hidden" id="kodeuraian" name="kodeuraian" value="">

<br>
    <div class="responsive-nav">
                <table class="table">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Uraian</th>
                      <th>Volume SPBJ</th>
                      <th>Total Harga</th>
                      <th>Prosentase</th>
                      <th>Input</th>
                    </tr>
                  </thead>
                  <tbody id="tablerab">
                  </tbody>
                </table>
              </div>

<!-- <div id="chartContainer" style="height: 370px; width: 100%;"></div> -->
<script>
// $('.datepicker').datepicker({
//     format: 'mm/dd/yyyy',
//     startDate: '-3d'
// });

var jenischartmadude="";

var adendum_ke=0;

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
  if ($('#tanggal_bobot').val()==("")) {
    $('#tanggal_bobot').focus();
  }
  else
  {
    var getrab = document.getElementById("rab_select").value;
    $.ajax({
        type: 'GET',
        url: '/getcount',
        data:{'getrab': getrab},
        success:function(data)
        {
          $('#kodebanyak').val(data);
       },
    });
  }
});



//tablenya
$('.DDselect').on("select2:select", function(e) {
  if ($('#tanggal_bobot').val()==("")) {
    $('#tanggal_bobot').focus();
    alert("Isi tanggal Terlebih dahulu");
  }
  else {
    {
  }
  var getrab = document.getElementById("rab_select").value;
  // var arraytemp = [];
  $.ajax({
      type: 'GET',
      url: '/getdatarab',
      data:{'getrab': getrab},
      success:function(data)
      {
        html='';
        try {
          adendum_ke=data[0].adendum_ke;
          jenischartmadude="add";
        }
        catch(err) {
          adendum_ke=0;
          jenischartmadude="lak";

        }
        //
        // if (typeof data[0].adendum_ke !== "undefined")
        // {
        //   adendum_ke=data[0].adendum_ke;
        // }
        // else {
        //   adendum_ke=0;
        // }
        for(var count=0; count < data.length; count++)
        {
          // arraytemp.push({
          //     uraian: data[count].uraians,
          //     volume_spbj: data[count].jumlah,
          //     jumlah: data[count].jumlah,
          // });
        html +='<form class="form-horizontal" role="form" method="post" action="/storebobot">'
        html +='<tr>';
        html +='<td>'+(count+1)+'</td>';
        html +='<td class="column_name" data-column_name="uraian" data-id="'+data[count].id_bobot+'">'+data[count].uraians+'</td>';
        html +='<td  class="column_name" data-column_name="uraian" data-id="'+data[count].id_bobot+'">'+data[count].jumlah+'</td>';
        html +='<td  class="column_name" data-column_name="uraian" data-id="'+data[count].id_bobot+'">'+data[count].total_harganego+'</td>';
        html +='<td  class="column_name" data-column_name="uraian" data-id="'+data[count].id_bobot+'">'+data[count].prosentase+'</td>';
        html +='<td> <input type="text" class="form-control inputs" value="" data-id="'+data[count].id_bobot+'" data-uraian="'+data[count].uraian+'" data-jumlah="'+data[count].jumlah+'"data-harga="'+data[count].harga_nego+'"data-totalharga="'+data[count].total_harganego+'" id="volumes" required> </td>';
        html +='</tr>';
        }
        html +=' <button type="button" class="btn btn-success addabc" data-dismiss="modal" id="idadd"> <span class="glyphicon glyphicon-check "></span> Save </button>';
        html +='</form>';
        // console.log(html);
        $('#tablerab').html(html);

     },
  });
}
});


$( "#tanggal_bobot" ).change(function() {
var datez=$('#tanggal_bobot').val();
var monthz=datez.substring(0, 2);
var dayz=datez.substring(3, 5);
var yearz=datez.substring(6, 10);
var datefixz=yearz+'-'+monthz+'-'+dayz;
$('#tanggal_bobotfix').val(datefixz);
if (arraytemp.length==0)
{

}
else {
for (i = 0; i < arraytemp.length; i++) {
  arraytemp[i].tanggal_cek=$('#tanggal_bobotfix').val();
}
}
});


//MAKE THE ARRAY MAKE THE ARRAY MAKE THE ARRAY
var arraytemp=[];
$(document).on('focusout', '#volumes', function() {
var temparr=[];
//KARENA FOCUS OUT MISALKAN DIA FOCUS OUT DLUAN DIA BAKAL NYIMPEN ARRAY KOSONG
if (($(this).val())==("")) {
  if(arraytemp.length==0)
  {
    //pass
  }
  //ELSE NGECEK ARRAY KOSONG DAN DI SPLIE/DELETE
  else {
    for (i = 0; i < arraytemp.length; i++) {
      if (((arraytemp[i].uraian.includes($(this).data("uraian")))==true) && (($(this).val())==("")))
        {
            arraytemp.splice(i, 1)
        }
    }
  }
}
//NGEPUSH ARRAY SAAT FOCUS OUT
else {
      if(arraytemp.length==0)
      {
        arraytemp.push({
        uraian: $(this).data("uraian"),
        volume_spbj: $(this).data("jumlah"),
        jumlah: $(this).val(),
        tanggal_cek : $("#tanggal_bobotfix").val(),
        kodebanyak : $("#kodebanyak").val(),
        no_rab : $("#rab_select").val(),
        harga_nego: $(this).data("harga"),
        total_harganego: $(this).data("totalharga"),
      });
    }
      else {
        arrtemp={};
          for (i = 0; i < arraytemp.length; i++) {
            if (((arraytemp[i].uraian.includes($(this).data("uraian")))==true) && ((arraytemp[i].jumlah.includes($(this).val()))==false))
            {
              arrtemp=({
              uraian: $(this).data("uraian"),
              volume_spbj: $(this).data("jumlah"),
              jumlah: $(this).val(),
              tanggal_cek : $("#tanggal_bobotfix").val(),
              kodebanyak : $("#kodebanyak").val(),
              no_rab : $("#rab_select").val(),
              harga_nego: $(this).data("harga"),
              total_harganego: $(this).data("totalharga"),
            });
            arraytemp[i]=arrtemp;
            arraytemp.splice(i, 1)
            }
            else if (arraytemp[i].uraian.includes($(this).data("uraian"))==true)
            {
              arrtemp={};
              return arrtemp
              //pass
            }

            else {
              arrtemp=({
              uraian: $(this).data("uraian"),
              volume_spbj: $(this).data("jumlah"),
              jumlah: $(this).val(),
              tanggal_cek : $("#tanggal_bobotfix").val(),
              kodebanyak : $("#kodebanyak").val(),
              no_rab : $("#rab_select").val(),
              harga_nego: $(this).data("harga"),
              total_harganego: $(this).data("totalharga"),
            });
            }
          }
          if (arrtemp!={}){
            arraytemp.push(arrtemp);
          }
      }

}

// console.log($(this).data("uraian"));
// console.log($(this).data("jumlah"));
// console.log($("#tanggal_bobotfix").val());
// console.log($("#kodebanyak").val());
// console.log($("#rab_select").val());
// console.log($(this).val());
console.log(arraytemp);
});

function storeprosentase()
{
  $.ajax({
      type: 'POST',
      url: '/chart_renpost',
      Async:"False",
      data: {
        "_token": "<?php echo e(csrf_token()); ?>",
        'tgl_progress':$('#tanggal_bobotfix').val(),
        'jumlah_progress': prosentase,
        'no_rab' : $('#rab_select').val(),
        'jenis_chart' : jenischartmadude,
        'adendum_ke' : adendum_ke,
      },
      success:function(data)
      {
        prosentase=0;
     },
   });
}

var prosentase=0;
function getprosentase()
{

  var sums=0;
  var ttlharga=0;
  for (i = 0; i < arraytemp.length; i++) {
    //jumlah is volume cek
    sums=sums+(arraytemp[i].harga_nego*arraytemp[i].jumlah);
    ttlharga=ttlharga+arraytemp[i].total_harganego;
}
  prosentases=(sums/ttlharga)*100;
  prosentase = prosentases.toFixed(2);
  // console.log(prosentase);
}

// $(document).on('click', '#idad', function() {
// alert('mouse up');
// });

//add to db add to db
$(document).on('click', '#idadd', function() {
  sukaes=0;
if(arraytemp==[])
{
//pass it brah
}
else
{
for (i = 0; i < arraytemp.length; i++) {
        $.ajax({
            type: 'POST',
            url: '/storebobot',
            data: {
              "_token": "<?php echo e(csrf_token()); ?>",
              // '_token': $('input[name=_token]').val(),
              'tanggal_cek': arraytemp[i].tanggal_cek,
              'kodebanyak': arraytemp[i].kodebanyak,
              'no_rab' : arraytemp[i].no_rab,
              'volume_spbj' : arraytemp[i].volume_spbj,
              'volume_cek' :arraytemp[i].jumlah,
              'uraian': arraytemp[i].uraian,
              'harga_nego': arraytemp[i].harga_nego,
              'total_harganego': arraytemp[i].total_harganego,
              'adendum_ke' : adendum_ke,
            },
            success:function(data)
            {
              sukaes=sukaes+1;
              if (sukaes==arraytemp.length)
              {
                getprosentase();
                storeprosentase();
                adendum_ke=0;
                alert("sukses input");
                arraytemp=[];
                $('#tablerab').html("");
                $('#rab_select').val(null).trigger('change'),
                $("#tanggal_bobot").val("");
                $("#tanggal_bobot").focus;
              }
           },
        });
      }
  }
});



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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.indexNVM', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\git\AO2\resources\views/Konstruksi/bobot_pelaksanaan.blade.php ENDPATH**/ ?>
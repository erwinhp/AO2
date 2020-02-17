@extends('layouts.indexNVM')
@section('header')
Bobot Pelaksanaan
@endsection
@section('content')
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
        html +='<td  class="column_name" data-column_name="uraian" data-id="'+data[count].id_bobot+'">'+data[count].total_biaya+'</td>';
        html +='<td  class="column_name" data-column_name="uraian" data-id="'+data[count].id_bobot+'">'+data[count].prosentase+'</td>';
        html +='<td> <input type="text" class="form-control inputs" value="" data-id="'+data[count].id_bobot+'" data-uraian="'+data[count].uraian+'" data-jumlah="'+data[count].jumlah+'"  id="volumes" required> </td>';
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
              "_token": "{{ csrf_token() }}",
              // '_token': $('input[name=_token]').val(),
              'tanggal_cek': arraytemp[i].tanggal_cek,
              'kodebanyak': arraytemp[i].kodebanyak,
              'no_rab' : arraytemp[i].no_rab,
              'volume_spbj' : arraytemp[i].volume_spbj,
              'volume_cek' :arraytemp[i].jumlah,
              'uraian': arraytemp[i].uraian,
            },
            success:function(data)
            {
              sukaes=sukaes+1;
              if (sukaes==arraytemp.length)
              {
                alert("sukses input");
                arraytemp=[];
                $('#tablerab').html("");
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
@endsection

@extends('layouts.indexNVM')
@section('header')
Bobot Pelaksanaan
@endsection
@section('content')



<div class="input-group date" data-provide="datepicker" style="width:40%">
    <input type="text" class="form-control bobot_datepicker">
    <div class="input-group-addon">
        <span class="glyphicon glyphicon-th"></span>
    </div>
</div>
<br>
<div>
    <select class="DDselect" style="width:440px;" name="itemName" id="rab_select"></select>
</div>
<br>
    <div class="responsive-nav">
                <table class="table">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>Uraian</th>
                      <th>Volume SPBJ</th>
                      <th>Volume CEK</th>
                    </tr>
                  </thead>
                  <tbody id="tablerab">
                  </tbody>
                </table>
              </div>
          </div>
      </div>
  </div>

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
  var getrab = document.getElementById("rab_select").value;
  $.ajax({
      type: 'GET',
      url: '/getdatarab',
      data:{'getrab': getrab},
      success:function(data)
      {
        html='';
        for(var count=0; count < data.length; count++)
        {
        html +='<tr>';
        html +='<td>'+(count+1)+'</td>';
        html +='<td class="column_name" data-column_name="uraian" data-id="'+data[count].id_detilrab+'">'+data[count].uraian+'</td>';
        html +='<td  class="column_name" data-column_name="uraian" data-id="'+data[count].id_detilrab+'">'+data[count].jumlah+'</td>';
        html +='<td>Volume Cek</td>';
        html +='</tr>';
        }
        // console.log(html);
        $('#tablerab').html(html);
     },
  });
});
</script>
@endsection

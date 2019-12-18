@extends('layouts.indexNVM')
@section('header')
Bobot Pelaksanaan
@endsection
@section('content')


    <select class="DDselect" style="width:440px;" name="itemName" id="rab_select"></select>

    <div class="responsive-nav">
                <table class="table">
                  <thead>
                    <tr>
                      <th>#</th>
                      <th>madude</th>
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
        html +='<td>Material '+(count+1)+'</td>';
        html +='</tr>';
        html +='<tr>';
        html +='<td class="column_name" data-column_name="uraian" data-id="'+data[count].id_detilrab+'">'+data[count].no_rab+'</td>';
        html +='<td>madude</td>';
        html +='</tr>';
        html +='<tr>';
        html +='<td class="column_name" data-column_name="uraian" data-id="'+data[count].id_detilrab+'">'+data[count].uraian+'</td>';
        html +='<td>madude</td>';
        html +='</tr>';
        html +='<tr>';
        html +='<td  class="column_name" data-column_name="uraian" data-id="'+data[count].id_detilrab+'">'+data[count].jumlah+'</td>';
        html +='<td>madude</td>';
        html +='</tr>';

        }
        // console.log(html);
        $('#tablerab').html(html);
     },
  });
});
</script>

@endsection

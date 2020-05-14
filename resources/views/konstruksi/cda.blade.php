@extends('layouts.indexNVM')
@section('header')
Contract Discussion Agreement
@endsection
@section('content')
<!-- <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<br>
Pilih Kontrak
<div>
    <select class="DDselect" style="width:440px;" name="itemName" id="rab_select"></select>
</div>
<br>
<textarea id="summernote"></textarea>

  <div class="text-right">
      <a href="#"  class="btn btn-primary" id="saveu">save</a>
</div>

<div class="responsive-nav">
            <table class="table">
              <thead>
                <tr>
                  <th>#</th>
                  <th>CDA</th>
                </tr>
              </thead>
              <tbody id="tablerab">
              </tbody>
          </table>
  </div>


<div class="col-md-10">
<!--       Chart.js Canvas Tag -->

</div>
 <!-- SEHARUSNY DIBAWAH -->
  <!-- <input type="hidden" id="kodeuraian" name="kodeuraian" value=""> -->
<!-- <div id="chartContainer" style="height: 370px; width: 100%;"></div> -->
<script>
     $('#summernote').summernote({
       tabsize: 2,
       height: 120,
       toolbar: [
         // ['style', ['style']],
         ['font', ['bold', 'underline', 'clear']],
         ['color', ['color']],
         ['para', ['ul', 'ol', 'paragraph']],
         // ['table', ['table']],
         // ['insert', ['link', 'picture', 'video']],
         // ['view', ['fullscreen', 'codeview', 'help']]
       ]
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
var getrab=$('#rab_select').val();
$.ajax({
    type: 'GET',
    url: '/getcdadata',
    data:{'getrab': getrab},
    success:function(data)
    {
      html='';
      // console.log(data);
      idsz=$('#maxids').val();
      for(var count=0; count < data.length; count++)
      {
        html +='<form class="form-horizontal" role="form" method="post" action="">'
        html +='<tr>';
        html +='<td>'+(count+1)+'</td>';
        html +='<td  class="column_name" data-column_name="uraian" data-id="'+data[count].id_cda+'">'+data[count].cda+'</td>';
        html +='</tr>';
        $('#tablerab').html(html);
      }
    }
  });
});


function postchart()
{
  $.ajax({
      type: 'POST',
      url: '/storecda',
      Async:"False",
      data: {
        "_token": "{{ csrf_token() }}",
        // '_token': $('input[name=_token]').val(),
        'no_rab': $('#rab_select').val(),
        'cda': $('#summernote').val(),
      },
      success:function(data)
      {
          alert("sukses input");
          $('#rab_select').val(null).trigger('change');
          $('#summernote').summernote('code', '<p><br></p>');
     },
   });
}
$(document).on('click', '#saveu', function() {
  console.log($('#summernote').val());
  // $('#summernote').val("");
postchart();
});

</script>
@endsection

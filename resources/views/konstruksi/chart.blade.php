@extends('layouts.indexNVM')
@section('header')
Chart Pelaksanaan
@endsection
@section('content')
<!-- <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<style>
#rectangle{
    width:25px;
    height:15px;
    background:#dcdcdc;
}

#rectangle1{
    width:25px;
    height:15px;
    background:#97bbcd;
}
</style>
<br>
Pilih Kontrak
<div>
    <select class="DDselect" style="width:440px;" name="itemName" id="rab_select"></select>
</div>
<br>




<table>
<tr>
  <td>
<div id="rectangle1"></div>
  </td>

<td>
  &nbsp;&nbsp;&nbsp;Chart Pelaksanaan&nbsp;&nbsp;&nbsp;
</td>

<td>
<div id="rectangle"></div>
</td>

<td>
  &nbsp;&nbsp;&nbsp;Chart Perencanaan
</td>
</tr>
<tr>


</tr>
</table>


<div class="box">
  <canvas id="lineChart" height="50" width="200"></canvas>
</div>
 <!-- SEHARUSNY DIBAWAH -->
  <!-- <input type="hidden" id="kodeuraian" name="kodeuraian" value=""> -->
<!-- <div id="chartContainer" style="height: 370px; width: 100%;"></div> -->
<script>

var dps=[];
var dps1=[];
var dps2=[];

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
    fetchandpusharray()
    console.log(dps);
    //up is pelaksanaan
    console.log(dps1);
    //up is ren
    console.log(dps2);
    //up is pelaksanaan
    chartszdfjfj();

});

function chartszdfjfj(){

  var data = {
       labels: dps2,
       datasets: [
           {
               label: "Prime and Fibonacci",
               fillColor: "rgba(220,220,220,0.2)",
               strokeColor: "rgba(220,220,220,1)",
               pointColor: "rgba(220,220,220,1)",
               pointStrokeColor: "#fff",
               pointHighlightFill: "#fff",
               pointHighlightStroke: "rgba(220,220,220,1)",
               data: dps1
           },
           {
               label: "My Second dataset",
               fillColor: "rgba(151,187,205,0.2)",
               strokeColor: "rgba(151,187,205,1)",
               pointColor: "rgba(151,187,205,1)",
               pointStrokeColor: "#fff",
               pointHighlightFill: "#fff",
               pointHighlightStroke: "rgba(151,187,205,1)",
               data: dps
           }
       ]
   };
   var ctx = document.getElementById("lineChart").getContext("2d");
   var options = {
     legend:{
       display:true,
   }
 };
   var lineChart = new Chart(ctx).Line(data, options);
}




  // Notice the scaleLabel at the same level as Ticks






function fetchandpusharray()
{
  var getrab = document.getElementById("rab_select").value;

  $.ajax({
      type: 'GET',
      url: '/getdatlaks',
      data:{'getrab': getrab},
      async: false,
      success:function(data)
      {
         // dps=[];
         dps=data;
      },
    });

    $.ajax({
        type: 'GET',
        url: '/getdatrens',
        data:{'getrab': getrab},
        async: false,
        success:function(data)
        {
           // dps1=[];
           dps1=data;
        },
      });

      $.ajax({
          type: 'GET',
          url: '/gettanggalbbt',
          data:{'getrab': getrab},
          async: false,
          success:function(data)
          {
             // dps1=[];
             dps2=data;
          },
        });

}


// var chart = new CanvasJS.Chart("chartContainer", {
//   animationEnabled: true,
//   theme: "light2",
//   title:{
//     text: "Kurva S Pelaksanaan"
//   },
//   axisX:{
//     // valueFormatString: "DD MMM",
//     crosshair: {
//       enabled: true,
//       snapToDataPoint: true
//     }
//   },
//   axisY: {
//     title: "Prosentase",
//     crosshair: {
//       enabled: true
//     }
//   },
//   toolTip:{
//     shared:true
//   },
//   legend:{
//     cursor:"pointer",
//     verticalAlign: "bottom",
//     horizontalAlign: "left",
//     dockInsidePlotArea: true,
//
//   },
//   data: [{
//     type: "line",
//     showInLegend: true,
//     name: "Chart Perencanaan",
//     markerType: "square",
//     // xValueFormatString: "DD MMM, YYYY",
//     color: "#F08080",
//     dataPoints: dps
//   },
//   {
//     type: "line",
//     showInLegend: true,
//     name: "Chart Pelaksanaan",
//     lineDashType: "dash",
//     dataPoints: dps1
//   }]
// });
//      chart.render();

</script>
@endsection

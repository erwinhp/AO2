<?php $__env->startSection('header'); ?>
Chart Pelaksanaan
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<!-- <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script> -->
<script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
<br>
Pilih Kontrak
<div>
    <select class="DDselect" style="width:440px;" name="itemName" id="rab_select"></select>
</div>
<br>




<div class="col-md-10">
<!--       Chart.js Canvas Tag -->
  <canvas id="barChart"></canvas>
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
  var canvas = document.getElementById("barChart");
  var ctx = canvas.getContext('2d');

  // Global Options:
  Chart.defaults.global.defaultFontColor = 'black';
  Chart.defaults.global.defaultFontSize = 16;

  var data = {
    labels: dps2,
    datasets: [{
        label: "Perencanaan",
        fill: false,
        lineTension: 0.1,
        backgroundColor: "rgba(225,0,0,0.4)",
        borderColor: "red", // The main line color
        borderCapStyle: 'square',
        borderDash: [], // try [5, 15] for instance
        borderDashOffset: 0.0,
        borderJoinStyle: 'miter',
        pointBorderColor: "black",
        pointBackgroundColor: "white",
        pointBorderWidth: 1,
        pointHoverRadius: 8,
        pointHoverBackgroundColor: "Red",
        pointHoverBorderColor: "Black",
        pointHoverBorderWidth: 2,
        pointRadius: 4,
        pointHitRadius: 10,
        // notice the gap in the data and the spanGaps: true
        data: dps1,
        spanGaps: true,
      }, {
          label: "Pelaksanaan",
          fill: false,
          lineTension: 0.1,
          backgroundColor: "rgba(225,0,0,0.4)",
          borderColor: "Blue", // The main line color
          borderCapStyle: 'square',
          borderDash: [], // try [5, 15] for instance
          borderDashOffset: 0.0,
          borderJoinStyle: 'miter',
          pointBorderColor: "black",
          pointBackgroundColor: "white",
          pointBorderWidth: 1,
          pointHoverRadius: 8,
          pointHoverBackgroundColor: "Blue",
          pointHoverBorderColor: "Black",
          pointHoverBorderWidth: 2,
          pointRadius: 4,
          pointHitRadius: 10,
          // notice the gap in the data and the spanGaps: true
          data: dps,
          spanGaps: true,
        }

    ]
  };

  // Notice the scaleLabel at the same level as Ticks
  var options = {
    scales: {
              yAxes: [{
                  ticks: {
                      beginAtZero:true

                  },
                  scaleLabel: {
                       display: true,
                       labelString: 'Prosentase',
                       fontSize: 20
                    }
              }]
          }
  };

  // Chart declaration:
  var myBarChart = new Chart(ctx, {
    type: 'line',
    data: data,
    options: options
  });

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
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.indexNVM', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\git\AO2\resources\views/Konstruksi/chart.blade.php ENDPATH**/ ?>
<?php $__env->startSection('header'); ?>
Home
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>


Pilih PRK
<div>
    <select class="DDselect" style="width:440px;" name="itemName" id="rab_select"></select>
</div>


    <div id="chart_parent" style="height:500px;width:1000px;"></div>

<script>
$('.DDselect').select2({
  placeholder: 'Select an item',
  ajax: {
    url: '/getprkszz',
    dataType: 'json',
    delay: 250,
    processResults: function (data) {
      return {
        results:  $.map(data, function (item) {
              return {

                  text: item.no_prk,
                  id: item.no_prk,
              }
          })
      };
    },
    cache: true
  }
});
$('.DDselect').on("select2:select", function(e) {
var getprk = document.getElementById("rab_select").value;
$.ajax({
    type: 'GET',
    url: '/getprksbayarandkontrak',
    data:{'getprk': getprk},
    success:function(data)
    {
      // console.log(data);
    const dpm=[data[0][0].pagu,data[1][0].tk,data[1][0].tb];
    // console.log(dpm);

    $('#chart').remove(); // this is my <canvas> element
    $('#chart_parent').append('<label for = "chart"><canvas class="chart" id="chart" width='+$('#chart_parent').width()+' height='+$('#chart_parent').height()+'><canvas></label>');
    var ctx = document.getElementById("chart").getContext('2d');
    var chart = new Chart(ctx, {
      type: 'bar',
      data: {
        labels: [],
        datasets: [{
          label: 'PAGU',
          data: [dpm[0]],
          backgroundColor: "rgba(255,0,0,1)"
        }, {
          label: 'TERKONTRAK',
          data: [dpm[1]],
          backgroundColor: "rgba(0,0,255,1)"
        },
        {
          label: 'TERBAYAR',
          data: [dpm[2]],
          backgroundColor: "rgba(24, 124, 96, 1)"
        }
      ]
      }
    });

   // console.log(barChart);
    },
  });
});
</script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.indexNVM', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\git\AO2\resources\views/home.blade.php ENDPATH**/ ?>
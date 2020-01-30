@extends('layouts.indexNVM')
@section('header')
Detil Pembayaran
@endsection
@section('content')


<!-- Inline Form-->


<!-- table madude-->
<?php
// dd($prk);
// ?>
<section class="table table-bordered">


      <div class="card-header d-flex align-items-center">
        <h4 class="h4">Nomor Kontrak : {{$no_kontrak}} </h4>
        <!-- <div class="badge badge-rounded bg-green">      </div> -->
      </div>
      <div class="card-body no-padding" >
        <div class="card text-center">
          <div class="card-header">

            <ul class="nav nav-tabs card-header-tabs">
              <li class="nav-item">
                <button class="nav-link active" id="Detil" value="<?php   ?>">Detil</button>
              </li>

              <li class="nav-item">
                <button class="nav-link active" id="Termin" value="<?php   ?>">Termin</button>
              </li>

            </ul>
          </div>
          <div class="card-body">


            <table id="tablez" class="table table-striped table-bordered" style="width:100%">
            </table>
          </div>
        </div>
    </div>


</section>
<script>

//active show this
   $(document).ready( function () {
var prktake=("<?php echo($no_kontrak) ?>");
 $.ajax({
 type: "GET",
 data:{'no_kontrak':prktake},
  url:"getdetilpembayaran",
  dataType:"json",
  success:function(data)
  {
   // console.log(data);
   html='';
   html +='<thead>';
   html +='<tr>';
   html +='<td> No </td>';
   html +='<td> No Register Sipat </td>';
   // html +='<td> invoice Po </td>';
   // html +='<td> invoice Non PO </td>';
   html +='<td> Denda / Lainnya </td>';
   html +='<td> Dasar Pengenaan Pajak </td>';
   // html +='<td> PPN </td> </tr><thead>';
   // html +='<td> PPH 22 </td> </tr><thead>';
   // html +='<td> PPH 23 </td> </tr><thead>';
   html +='<td> Denda / Lainnya 22 </td> </tr></thead>';
   for(var count=0; count < data.length; count++)
   {
  html +='<tbody>';
   html +='<tr>';
   html +='<td>'+(count+1)+'</td>';
   html +='<td>'+data[count].no_register_sipat+'</td>';
   // html += '<td>'+data[count].invoice_po+'</td>';
   // html += '<td>'+data[count].invoice_nonpo+'</td>';
   html += '<td>'+data[count].no_denda+'</td></tr><tbody>';
   html +='<td>'+data[count].dasar_pengenaan_pajak+'</td>';
   // html += '<td>'+data[count].ppn+'</td>';
   // html += '<td>'+data[count].pph22+'</td>';
   // html += '<td>'+data[count].pph23+'</td></tr><tbody>';
      html += '<td>'+data[count].rpdenda_lainnya+'</td></tr></tbody>';
   }
   // console.log(html);
   $('#tablez').html(html);
 }//success
});//ajax
 });


 $(document).on('click', '#Termin', function() {
 var prktake=("<?php echo($no_kontrak) ?>");
 $.ajax({
 type: "GET",
 data:{'no_kontrak':prktake},
  url:"gettermyn",
  dataType:"json",
  success:function(data)
  {
   // console.log(data);
   html='';
   html +='<thead>';
   html +='<tr>';
   html +='<td> No </td>';
   html +='<td> Sum Termin </td>';
   html +='</tr>';
  html +='</thead>';
   for(var count=0; count < data.length; count++)
   {
  html +='<tbody>';
   html +='<tr>';
   html +='<td>'+(count+1)+'</td>';
   html += '<td>'+data[count].terminsum+'</td></tr></tbody>';
   }
   // console.log(html);
   $('#tablez').html(html);
 }//success
 });//ajax
});



//general a general j general g
 $(document).on('click', '#Detil', function() {
 var prktake=("<?php echo($no_kontrak) ?>");
 $.ajax({
 type: "GET",
 data:{'no_kontrak':prktake},
  url:"getdetilpembayaran",
  dataType:"json",
  success:function(data)
  {
    // console.log(data);
    html='';
    html +='<thead>';
    html +='<tr>';
    html +='<td> No </td>';
    html +='<td> no register sipat </td>';
    // html +='<td> invoice Po </td>';
    // html +='<td> invoice Non PO </td>';
    html +='<td> Denda / Lainnya </td>';
    html +='<td> Dasar Pengenaan Pajak </td>';
    // html +='<td> PPN </td> </tr><thead>';
    // html +='<td> PPH 22 </td> </tr><thead>';
    // html +='<td> PPH 23 </td> </tr><thead>';
    html +='<td> Denda / Lainnya 22 </td> </tr></thead>';
    for(var count=0; count < data.length; count++)
    {
   html +='<tbody>';
    html +='<tr>';
    html +='<td>'+(count+1)+'</td>';
    html +='<td>'+data[count].no_register_sipat+'</td>';
    html += '<td>'+data[count].invoice_po+'</td>';
    html += '<td>'+data[count].invoice_nonpo+'</td>';
    html += '<td>'+data[count].no_denda+'</td></tr><tbody>';
    html +='<td>'+data[count].dasar_pengenaan_pajak+'</td>';
    // html += '<td>'+data[count].ppn+'</td>';
    // html += '<td>'+data[count].pph22+'</td>';
    // html += '<td>'+data[count].pph23+'</td></tr><tbody>';
       html += '<td>'+data[count].rpdenda_lainnya+'</td></tr></tbody>';
    }
    // console.log(html);
    $('#tablez').html(html);
 }//success
});//ajax
 });
 function addCommas(nStr)
 {
     nStr += '';
     var x = nStr.split('.');
     var x1 = x[0];
     var x2 = x.length > 1 ? '.' + x[1] : '';
     var rgx = /(\d+)(\d{3})/;
     while (rgx.test(x1)) {
         x1 = x1.replace(rgx, '$1' + ',' + '$2');
     }
     return x1 + x2;
 }

 $(document).on('click', '#Termin', function() {
 var prktake=("<?php echo($no_kontrak) ?>");
 $.ajax({
 type: "GET",
 data:{'no_kontrak':prktake},
  url:"gettermyn",
  dataType:"json",
  success:function(data)
  {
    html='';
    html +='<thead>';
    html +='<tr>';
    html +='<td> No </td>';
    html +='<td> Sum Termin </td>';
    html +='</tr>';
    html +='</thead>';
    for(var count=0; count < data.length; count++)
    {
   html +='<tbody>';
    html +='<tr>';
    html +='<td>'+(count+1)+'</td>';
    html += '<td>'+data[count].terminsum+'</td></tr></tbody>';
    }
   // console.log(html);
   $('#tablez').html(html);
 }//success
 });//ajax
 });

</script>
@stop

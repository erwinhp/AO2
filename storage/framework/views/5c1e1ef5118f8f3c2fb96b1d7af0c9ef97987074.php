<?php $__env->startSection('header'); ?>
Detil RAB KHS
<?php $__env->stopSection(); ?>


<?php $__env->startSection('content'); ?>

<meta name="_token" content="<?php echo e(csrf_token()); ?>">

<?php
$no_kontrak="";
$atributs=[];
if (isset($_GET['no_kontrak']))
{
 $no_kontrak=$_GET['no_kontrak'];
}

foreach ($atribut as $key => $value) {
$atributs=$value;
}



?>


 <!-- <button type="button" name="create_record" id="create_record" class="btn btn-success btn-sm">Create Record</button> -->



<section class="table table-bordered">
<button type="button" class="btn btn-primary" id="cetakrab">CETAK RAB</button>
<button type="button" class="btn btn-primary" id="cetakexcel">CETAK EXCEL</button>
 <!-- <div class="form-group">
 <input type="text" class="form-controller" id="sss" name="search"></input>
 </div> -->
 <div class="container-fluid">
   <div align="right">
    <!-- <button type="button" name="create_record" id="create_record" class="btn btn-success btn-sm">Create Record</button> -->
   <a href="#" class="add-modal"><li>Tambah Material/Jasa</li></a>
<p id='test'></p>
   </div>
   <div class="row">
     <div class="col-lg-12">
       <div class="card">
         <div class="card-close">
           <div class="dropdown">
           </div>
         </div>
         <div class="card-header d-flex align-items-center">
           <h3 class="h4">Table RAB <?php echo e($rab); ?></h3>
         </div>
         <div class="card-body">
           <div class="table-responsive">
             <table id="postTable" class="display" style="width:100%">
               <thead>
                 <tr>
                   <th>Uraian</th>
                   <th>Jumlah</th>
                   <th>Satuan</th>
                   <th>Harga Satuan</th>
                   <th>Total Biaya</th>
                   <th>Jenis Material</th>
                   <th>Action</th>
                 </tr>
               </thead>
               <?php $nomor=1; ?>
               <tbody id="matjasa">
               </tbody>

             </table>
           </div>
         </div>
       </div>
     </div>

   </div>
 </div>


 <div class="container-fluid">
   <div align="right">
    <!-- <button type="button" name="create_record" id="create_record" class="btn btn-success btn-sm">Create Record</button> -->
   <a href="#" class="add-modaltr"><li>Tambah Transport</li></a>
   <p id='test'></p>
   </div>
   <div class="row">
     <div class="col-lg-12">
       <div class="card">
         <div class="card-close">
           <div class="dropdown">
           </div>
         </div>
         <div class="card-header d-flex align-items-center">
           <h3 class="h4">Table Transport RAB <?php echo e($rab); ?></h3>
         </div>
         <div class="card-body">
           <div class="table-responsive">
             <table id="postTable" class="display" style="width:100%">
               <thead>
                 <tr>
                   <th>Uraian</th>
                   <th>Total Harga</th>
                   <th>Action</th>
                 </tr>
               </thead>
               <?php $nomor=1; ?>
               <tbody id="transport">
               </tbody>

             </table>
           </div>
         </div>
       </div>
     </div>

   </div>
 </div>



 <div class="modal fade" id="transportaddModal" aria-hidden="true">

 <div class="modal-content">
     <div class="modal-header">
         <h4 class="modal-title"</h4>
     </div>
     <div class="modal-body">
         <form id="sample_form" name="userForm" class="form-horizontal" enctype="multipart/form-data">
           <?php echo csrf_field(); ?>
           <input type="hidden" name="kontrak" id="kontrak" value="<?php echo e($no_kontrak); ?>">
            <input type="hidden" name="no_rab" id="no_rabtr" value="<?php echo e($rab); ?>">
            <input type="hidden" name="uraiantr" id="uraiantr" value="Transport">

            <div class="form-group">
                <label for="uraian" class="col-sm-2 control-label">Uraian</label>
                <div class="col-sm-12">
                    <select class="DDselecttrans" style="width:440px;" name="itemName" id="nama_uraiantr"></select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">satuan</label>
                <div class="col-sm-12">
                    <input type="jumlah" class="form-control" id="satuantr" name="satuantr" placeholder="Enter Satuan" value="" required="">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Jumlah</label>
                <div class="col-sm-12">
                    <input type="total_biaya" class="form-control" id="jumlahtr" name="jumlahtr" placeholder="" value="" required="" disabled>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Harga Satuan</label>
                <div class="col-sm-12">
                    <input type="total_biaya" class="form-control" id="harga_satuantr" name="harga_satuantr" placeholder="" value="" required="" disabled>
                </div>
            </div>


             <div class="form-group">
                 <label class="col-sm-2 control-label">Total Biaya</label>
                 <div class="col-sm-12">
                     <input type="total_biaya" class="form-control" id="total_biayatr" name="total_biayatr" placeholder="" value="" required="" disabled>
                 </div>
             </div>


             <div class="modal-footer">
              <button type="button" class="btn btn-success adds" data-dismiss="modal" id="addtr">
             <span  class='glyphicon glyphicon-check'></span> Add
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



 <div class="modal fade" id="transporteditModal" aria-hidden="true">

 <div class="modal-content">
     <div class="modal-header">
         <h4 class="modal-title"</h4>
     </div>
     <div class="modal-body">
         <form id="sample_form" name="userForm" class="form-horizontal" enctype="multipart/form-data">
           <?php echo csrf_field(); ?>

           <input type="hidden" name="no_rab" id="no_rabtr1" value="<?php echo e($rab); ?>">
           <input type="hidden" name="uraiantr" id="uraiantr1" value="Transport">
           <input type="hidden" name="id_edit" id="id_edittr1" >

            <div class="form-group">
                <label for="uraian" class="col-sm-2 control-label">Uraian</label>
                <div class="col-sm-12">
                    <select class="DDselecttrans1" style="width:440px;" name="itemName" id="nama_uraiantr1"></select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">satuan</label>
                <div class="col-sm-12">
                    <input type="jumlah" class="form-control" id="satuantr1" name="satuantr1" placeholder="Enter jumlah" value="" required="">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Jumlah</label>
                <div class="col-sm-12">
                    <input type="total_biaya" class="form-control" id="jumlahtr1" name="jumlahtr1" placeholder="" value="" required="" disabled>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Harga Satuan</label>
                <div class="col-sm-12">
                    <input type="total_biaya" class="form-control" id="harga_satuantr1" name="harga_satuantr1" placeholder="" value="" required="" disabled>
                </div>
            </div>

             <div class="form-group">
                 <label class="col-sm-2 control-label">Total Biaya</label>
                 <div class="col-sm-12">
                     <input type="total_biaya" class="form-control" id="total_biayatr1" name="total_biayatr1" placeholder="" value="" required="" disabled>
                 </div>
             </div>


             <div class="modal-footer">
                 <button type="button" class="btn btn-primary edit" data-dismiss="modal" id="edittr1">
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



<div class="modal" id="addModal" aria-hidden="true">

<div class="modal-content">
   <div class="modal-header">
       <h4 class="modal-title"</h4>
   </div>
   <div class="modal-body">
       <form id="sample_form" name="userForm" class="form-horizontal" enctype="multipart/form-data">
         <?php echo csrf_field(); ?>

         <input type="hidden" name="no_spbj" id="no_spbj" value="<?php echo e($no_spbj); ?>">
          <input type="hidden" name="no_rab" id="no_rab" value="<?php echo e($rab); ?>">
          <input type="hidden" name="kontrak" id="kontrak" value="<?php echo e($no_kontrak); ?>">
          <div class="form-group">
              <label for="uraian" class="col-sm-2 control-label">Uraian</label>
              <div class="col-sm-12">
                  <select class="DDselect" style="width:440px;" name="itemName" id="uraian"></select>
              </div>
          </div>

           <div class="form-group">
               <label class="col-sm-2 control-label">Jumlah</label>
               <div class="col-sm-12">
                   <input type="jumlah" class="form-control" id="jumlah" name="jumlah" placeholder="Enter jumlah" value="" required="">
               </div>
           </div>

           <div class="form-group">
               <label class="col-sm-2 control-label">Satuan</label>
               <div class="col-sm-12">
                   <input type="satuan" class="form-control" id="satuan" name="satuan" placeholder="Enter satuan" value="" required="" disabled>
               </div>
           </div>

           <div class="form-group">
               <label class="col-sm-2 control-label">Harga Satuan</label>
               <div class="col-sm-12">
                   <input type="harga_satuan" class="form-control" id="harga_satuan" name="harga_satuan" placeholder="Enter harga_satuan" value="" required="" disabled>
               </div>
           </div>

           <div class="form-group">
               <label class="col-sm-2 control-label">Material PLN</label>
               <div class="col-sm-12">
                   <input type="material_PLN" class="form-control" id="material_PLN" name="material_PLN" placeholder="Enter material_PLN" value="" required="" disabled>
               </div>
           </div>


           <div class="form-group">
               <label class="col-sm-2 control-label">Total Biaya</label>
               <div class="col-sm-12">
                   <input type="total_jasa" class="form-control" id="total_biaya" name="total_biaya" placeholder="Enter total_biaya" value="" required="" disabled>
               </div>
           </div>
         </div>


           <div class="modal-footer">
            <button type="button" class="btn btn-success add" data-dismiss="modal">
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




<!-- MODAL EDIT MODAL EDIT MODAL EDIT MODAL EDIT MODAL EDIT MODAL EDIT MODAL EDIT MODAL EDIT-->
<div class="modal fade" id="editModal" aria-hidden="true">
<div class="modal-content">
   <div class="modal-header">
       <h4 class="modal-title"</h4>
   </div>
   <div class="modal-body">
       <form id="sample_form" name="userForm" class="form-horizontal" enctype="multipart/form-data">
         <?php echo csrf_field(); ?>

         <input type="hidden" name="id_edit" id="id_edit" >
          <input type="hidden" name="no_rab" id="no_rab1" value="<?php echo e($rab); ?>">

          <div class="form-group">
              <label for="uraian" class="col-sm-2 control-label">Uraian</label>
              <div class="col-sm-12">
                  <select class="DDselect1" style="width:440px;" name="itemName1" id="uraian1"></select>
              </div>
          </div>

           <div class="form-group">
               <label class="col-sm-2 control-label">Jumlah</label>
               <div class="col-sm-12">
                   <input type="jumlah" class="form-control" id="jumlah1" name="jumlah1" placeholder="Enter jumlah1" value="" required="">
               </div>
           </div>

           <div class="form-group">
               <label class="col-sm-2 control-label">Satuan</label>
               <div class="col-sm-12">
                   <input type="satuan" class="form-control" id="satuan1" name="satuan1" placeholder="Enter satuan1" value="" required="" disabled>
               </div>
           </div>

           <div class="form-group">
               <label class="col-sm-2 control-label">Harga Satuan</label>
               <div class="col-sm-12">
                   <input type="harga_satuan" class="form-control" id="harga_satuan1" name="harga_satuan1" placeholder="Enter harga_satuan" value="" required="" disabled>
               </div>
           </div>

           <div class="form-group">
               <label class="col-sm-2 control-label">Material PLN</label>
               <div class="col-sm-12">
                   <input type="material_PLN" class="form-control" id="material_PLN1" name="material_PLN1" placeholder="Enter material_PLN" value="" required="" disabled>
               </div>
           </div>


           <div class="form-group">
               <label class="col-sm-2 control-label">Total Biaya</label>
               <div class="col-sm-12">
                   <input type="total_jasa" class="form-control" id="total_biaya1" name="total_biaya1" placeholder="Enter total_biaya" value="" required="" disabled>
               </div>
           </div>


           <div class="modal-footer">
                           <button type="button" class="btn btn-primary edit" data-dismiss="modal">
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




<!--
delete modal -->

<div id="deleteModal" class="modal fade" role="dialog">

       <div class="modal-content">
           <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal">&times;</button>

           </div>
           <div class="modal-body">
               <h4 align="center" style="margin:0;">Are you sure you want to remove this data?</h4>
           </div>
           <div class="modal-footer">
             <input type="hidden" name="id_delete" id="id_delete" >
             <input type="hidden" name="no_rab" id="no_rab" value="<?php echo e($rab); ?>">
             <button type="button" class="btn btn-danger delete" data-dismiss="modal">
               <span id="" class='glyphicon glyphicon-trash'></span> Delete
             </button>
               <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
           </div>
       </div>
   </div>

</section>




<?php
 ob_start();
?>
<html>
<head>
<meta http-equiv=Content-Type content="text/html; charset=windows-1252">
<meta name=Generator content="Microsoft Word 15 (filtered)">
<style>
<!--
/* Font Definitions */
@font-face
 {font-family:"Cambria Math";
 panose-1:2 4 5 3 5 4 6 3 2 4;}
@font-face
 {font-family:Calibri;
 panose-1:2 15 5 2 2 2 4 3 2 4;}
/* Style Definitions */
p.MsoNormal, li.MsoNormal, div.MsoNormal
 {margin-top:0cm;
 margin-right:0cm;
 margin-bottom:8.0pt;
 margin-left:0cm;
 line-height:107%;
 font-size:11.0pt;
 font-family:"Calibri","sans-serif";}
p.MsoListParagraph, li.MsoListParagraph, div.MsoListParagraph
 {margin-top:0cm;
 margin-right:0cm;
 margin-bottom:8.0pt;
 margin-left:36.0pt;
 line-height:107%;
 font-size:11.0pt;
 font-family:"Calibri","sans-serif";}
p.MsoListParagraphCxSpFirst, li.MsoListParagraphCxSpFirst, div.MsoListParagraphCxSpFirst
 {margin-top:0cm;
 margin-right:0cm;
 margin-bottom:0cm;
 margin-left:36.0pt;
 margin-bottom:.0001pt;
 line-height:107%;
 font-size:11.0pt;
 font-family:"Calibri","sans-serif";}
p.MsoListParagraphCxSpMiddle, li.MsoListParagraphCxSpMiddle, div.MsoListParagraphCxSpMiddle
 {margin-top:0cm;
 margin-right:0cm;
 margin-bottom:0cm;
 margin-left:36.0pt;
 margin-bottom:.0001pt;
 line-height:107%;
 font-size:11.0pt;
 font-family:"Calibri","sans-serif";}
p.MsoListParagraphCxSpLast, li.MsoListParagraphCxSpLast, div.MsoListParagraphCxSpLast
 {margin-top:0cm;
 margin-right:0cm;
 margin-bottom:8.0pt;
 margin-left:36.0pt;
 line-height:107%;
 font-size:11.0pt;
 font-family:"Calibri","sans-serif";}
.MsoChpDefault
 {font-family:"Calibri","sans-serif";}
.MsoPapDefault
 {margin-bottom:8.0pt;
 line-height:107%;}
@page  WordSection1
 {size:612.0pt 792.0pt;
 margin:72.0pt 72.0pt 72.0pt 72.0pt;}
div.WordSection1
 {page:WordSection1;}
/* List Definitions */
ol
 {margin-bottom:0cm;}
ul
 {margin-bottom:0cm;}

</style>

</head>

<body lang=EN-US>

<div class=WordSection1 id="export-content">
  <table class=MsoTableGrid border=1 cellspacing=0 cellpadding=0 width=649
  style='width:486.55pt;border-collapse:collapse;border:none'>
<tr><p class=MsoNormal><b><span style='font-size:8.0pt;line-height:107%'>RENCANA
ANGGARAN BIAYA : </span></b></p></tr>
<tr>
  <td>
<p class=MsoNormal><span style='font-size:8.0pt;line-height:107%'>PROGRAM : <?php echo($atributs->program) ?></span></p>
</td>
</tr>
<tr>
  <td>
<p class=MsoNormal><span style='font-size:8.0pt;line-height:107%'>FUNGSI : <?php echo($atributs->fungsi) ?></span></p>
</td>
</tr>
<tr>
  <td>
<p class=MsoNormal><span style='font-size:8.0pt;line-height:107%'>PEKERJAAN : <?php echo($atributs->judul) ?></span></p>
</td>
</tr>
<tr>
  <td>
<p class=MsoNormal><span style='font-size:8.0pt;line-height:107%'>ATAS NAMA : <?php  echo($atributs->rab_nama) ?></span></p>
</td>
</tr>
<tr>
  <td>
<p class=MsoNormal><span style='font-size:8.0pt;line-height:107%'>LOKASI : <?php echo($atributs->lokasi) ?></span></p>
</td>
</tr>
<tr>
  <td>
<p class=MsoNormal><span style='font-size:8.0pt;line-height:107%'>&nbsp;</span></p>
</td>
</tr>

<tr>
 <td width=30 rowspan=3 valign=top style='width:22.6pt;border:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><b><span style='font-size:8.0pt'>NO</span></b></p>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><b><span style='font-size:8.0pt'>&nbsp;</span></b></p>
 </td>
 <td width=81 rowspan=3 valign=top style='width:60.45pt;border:solid windowtext 1.0pt;
 border-left:none;padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><b><span style='font-size:8.0pt'>URAIAN</span></b></p>
 </td>
 <td width=34 rowspan=3 valign=top style='width:25.15pt;border:solid windowtext 1.0pt;
 border-left:none;padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><b><span style='font-size:8.0pt'>STN</span></b></p>
 </td>
 <td width=105 colspan=3 valign=top style='width:78.6pt;border:solid windowtext 1.0pt;
 border-left:none;padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><b><span style='font-size:8.0pt'>VOLUME</span></b></p>
 </td>
 <td width=55 rowspan=3 valign=top style='width:41.35pt;border:solid windowtext 1.0pt;
 border-left:none;padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><b><span style='font-size:8.0pt'>HARGA
 SATUAN</span></b></p>
 </td>
 <td width=66 colspan=2 valign=top style='width:49.35pt;border:solid windowtext 1.0pt;
 border-left:none;padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><b><span style='font-size:8.0pt'>MATERIAL</span></b></p>
 </td>
 <td width=65 rowspan=3 valign=top style='width:48.65pt;border:solid windowtext 1.0pt;
 border-left:none;padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><b><span style='font-size:8.0pt'>HARGA
 MATERIAL PLN (Rp)</span></b></p>
 </td>
 <td width=158 colspan=3 valign=top style='width:118.65pt;border:solid windowtext 1.0pt;
 border-left:none;padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><b><span style='font-size:8.0pt'>BIAYA
 YANG DIPERLUKAN</span></b></p>
 </td>
 <td width=56 rowspan=3 valign=top style='width:41.75pt;border:solid windowtext 1.0pt;
 border-left:none;padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><b><span style='font-size:8.0pt'>JUMLAH
 BIAYA (Rp)</span></b></p>
 </td>
</tr>
<tr>
 <td width=49 colspan=2 valign=top style='width:36.85pt;border-top:none;
 border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><b><span style='font-size:8.0pt'>LOKASI</span></b></p>
 </td>
 <td width=56 valign=top style='width:41.75pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><b><span style='font-size:8.0pt'>JUMLAH</span></b></p>
 </td>
 <td width=33 rowspan=2 valign=top style='width:25.05pt;border-top:none;
 border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><b><span style='font-size:8.0pt'>PLN</span></b></p>
 </td>
 <td width=32 rowspan=2 valign=top style='width:24.3pt;border-top:none;
 border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><b><span style='font-size:8.0pt'>PFK</span></b></p>
 </td>
 <td width=65 rowspan=2 valign=top style='width:48.65pt;border-top:none;
 border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><b><span style='font-size:8.0pt'>MATERIAL
 (Rp)</span></b></p>
 </td>
 <td width=38 rowspan=2 valign=top style='width:28.25pt;border-top:none;
 border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><b><span style='font-size:8.0pt'>JASA
 (Rp)</span></b></p>
 </td>
 <td width=56 rowspan=2 valign=top style='width:41.75pt;border-top:none;
 border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><b><span style='font-size:8.0pt'>JUMLAH
 (Rp)</span></b></p>
 </td>
</tr>
<tr>
 <td width=26 valign=top style='width:19.3pt;border-top:none;border-left:none;
 border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><b><span style='font-size:8.0pt'>1</span></b></p>
 </td>
 <td width=23 valign=top style='width:17.55pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><b><span style='font-size:8.0pt'>2</span></b></p>
 </td>
 <td width=56 valign=top style='width:41.75pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
</tr>
<tr>
 <td width=30 valign=top style='width:22.6pt;border:solid windowtext 1.0pt;
 border-top:none;padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=81 valign=top style='width:60.45pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
 justify;line-height:normal'><span style='font-size:8.0pt'>I<b>. MATERIAL
 UTAMA</b></span></p>
 </td>
 <td width=34 valign=top style='width:25.15pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=26 valign=top style='width:19.3pt;border-top:none;border-left:none;
 border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=23 valign=top style='width:17.55pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=56 valign=top style='width:41.75pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=55 valign=top style='width:41.35pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=33 valign=top style='width:25.05pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=32 valign=top style='width:24.3pt;border-top:none;border-left:none;
 border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=65 valign=top style='width:48.65pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=65 valign=top style='width:48.65pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=38 valign=top style='width:28.25pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=56 valign=top style='width:41.75pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=56 valign=top style='width:41.75pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
</tr>




<!-- INI MATERIAL UTAMA INI MATERIAL UTAMA INI MATERIAL UTAMA INI MATERIAL UTAMA INI MATERIAL UTAMA
INI MATERIAL UTAMA INI MATERIAL UTAMA INI MATERIAL UTAMA INI MATERIAL UTAMA INI MATERIAL UTAMA
INI MATERIAL UTAMA INI MATERIAL UTAMA INI MATERIAL UTAMA INI MATERIAL UTAMA INI MATERIAL UTAMA
INI MATERIAL UTAMA INI MATERIAL UTAMA INI MATERIAL UTAMA INI MATERIAL UTAMA INI MATERIAL UTAMA
INI MATERIAL UTAMA INI MATERIAL UTAMA INI MATERIAL UTAMA INI MATERIAL UTAMA INI MATERIAL UTAMA
INI MATERIAL UTAMA INI MATERIAL UTAMA INI MATERIAL UTAMA INI MATERIAL UTAMA INI MATERIAL UTAMA
INI MATERIAL UTAMA INI MATERIAL UTAMA INI MATERIAL UTAMA INI MATERIAL UTAMA INI MATERIAL UTAMA
INI MATERIAL UTAMA INI MATERIAL UTAMA INI MATERIAL UTAMA INI MATERIAL UTAMA INI MATERIAL UTAMA
INI MATERIAL UTAMA INI MATERIAL UTAMA INI MATERIAL UTAMA INI MATERIAL UTAMA INI MATERIAL UTAMA
INI MATERIAL UTAMA INI MATERIAL UTAMA INI MATERIAL UTAMA INI MATERIAL UTAMA INI MATERIAL UTAMA
INI MATERIAL UTAMA INI MATERIAL UTAMA INI MATERIAL UTAMA INI MATERIAL UTAMA INI MATERIAL UTAMA
INI MATERIAL UTAMA INI MATERIAL UTAMA INI MATERIAL UTAMA INI MATERIAL UTAMA INI MATERIAL UTAMA
-->



<?php $numb=0;
$jumlah1=0;
$jumlah2=0;
$jumlah3=0;
 foreach ($material_utama as $key => $value) { ?>
<tr>
 <td width=30 valign=top style='width:22.6pt;border:solid windowtext 1.0pt;
 border-top:none;padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'><?php echo $numb=$numb+1; ?></span></p>
 </td>
 <td width=81 valign=top style='width:60.45pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'><?php echo  $value->uraian_nama; ?></span></p>
 </td>
 <td width=34 valign=top style='width:25.15pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'><?php echo  $value->satuan; ?></span></p>
 </td>
 <td width=26 valign=top style='width:19.3pt;border-top:none;border-left:none;
 border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'><?php echo  $value->jumlah; ?></span></p>
 </td>
 <td width=23 valign=top style='width:17.55pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=56 valign=top style='width:41.75pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'><?php echo  $value->jumlah; ?></span></p>
 </td>
 <td width=55 valign=top style='width:41.35pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'><?php echo  $value->matkhs_harga; ?></span></p>
 </td>
 <td width=33 valign=top style='width:25.05pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'><?php
 if($value->material_PLN == "PLN")
 {
   echo $value->jumlah;
 }
 else {
   echo "";
 }
 ?></span></p>
 </td>
 <td width=32 valign=top style='width:24.3pt;border-top:none;border-left:none;
 border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'><?php
 if($value->material_PLN == "NON PLN")
 {
   echo $value->jumlah;
 }
 else {
   echo "";
 }
  ?></span></p>
 </td>
 <td width=65 valign=top style='width:48.65pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=65 valign=top style='width:48.65pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'><?php
echo $value->total_biaya;
 ?></span></p>
 </td>
 <td width=38 valign=top style='width:28.25pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=56 valign=top style='width:41.75pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'><?php
echo $value->total_biaya;
 ?></span></p>
 </td>
 <td width=56 valign=top style='width:41.75pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'><?php
if ($value->material_PLN=="PLN") {
 echo "PLN";
}
else {
 echo $value->total_biaya;
 $jumlah1=$jumlah1+$value->total_biaya;
}
  ?></span></p>
 </td>
</tr>
<?php } ?>
<tr>
 <td width=30 valign=top style='width:22.6pt;border:solid windowtext 1.0pt;
 border-top:none;padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=81 valign=top style='width:60.45pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><b><span style='font-size:8.0pt'>JUMLAH I</span></b><span
 style='font-size:8.0pt'></span></p>
 </td>
 <td width=324 colspan=8 valign=top style='width:243.1pt;border-top:none;
 border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=65 valign=top style='width:48.65pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'><?php echo $jumlah1; ?></span></p>
 </td>
 <td width=38 valign=top style='width:28.25pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=65 valign=top style='width:48.65pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'><?php echo $jumlah1; ?></span></p>
 </td>
 <td width=65 valign=top style='width:48.65pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'><?php echo $jumlah1; ?></span></p>
 </td>
</tr>
<tr>
 <td width=30 valign=top style='width:22.6pt;border:solid windowtext 1.0pt;
 border-top:none;padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=81 valign=top style='width:60.45pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
 justify;line-height:normal'><b><span style='font-size:8.0pt'>II. MATERIAL NON
 UTAMA</span></b></p>
 </td>
 <td width=34 valign=top style='width:25.15pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=26 valign=top style='width:19.3pt;border-top:none;border-left:none;
 border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=23 valign=top style='width:17.55pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=56 valign=top style='width:41.75pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=55 valign=top style='width:41.35pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=33 valign=top style='width:25.05pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=32 valign=top style='width:24.3pt;border-top:none;border-left:none;
 border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=65 valign=top style='width:48.65pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=65 valign=top style='width:48.65pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=38 valign=top style='width:28.25pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=56 valign=top style='width:41.75pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=56 valign=top style='width:41.75pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
</tr>



<!-- INI MATERIAL NON UTAMA INI MATERILA NON UTAMA INI MATERIAL NON UTAMA
INI MATERIAL NON UTAMA INI MATERILA NON UTAMA INI MATERIAL NON UTAMA
INI MATERIAL NON UTAMA INI MATERILA NON UTAMA INI MATERIAL NON UTAMA
INI MATERIAL NON UTAMA INI MATERILA NON UTAMA INI MATERIAL NON UTAMA
INI MATERIAL NON UTAMA INI MATERILA NON UTAMA INI MATERIAL NON UTAMA
INI MATERIAL NON UTAMA INI MATERILA NON UTAMA INI MATERIAL NON UTAMA
INI MATERIAL NON UTAMA INI MATERILA NON UTAMA INI MATERIAL NON UTAMA
INI MATERIAL NON UTAMA INI MATERILA NON UTAMA INI MATERIAL NON UTAMA
INI MATERIAL NON UTAMA INI MATERILA NON UTAMA INI MATERIAL NON UTAMA
INI MATERIAL NON UTAMA INI MATERILA NON UTAMA INI MATERIAL NON UTAMA
INI MATERIAL NON UTAMA INI MATERILA NON UTAMA INI MATERIAL NON UTAMA
-->

<tr>
 <td width=30 valign=top style='width:22.6pt;border:solid windowtext 1.0pt;
 border-top:none;padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=81 valign=top style='width:60.45pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=34 valign=top style='width:25.15pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=26 valign=top style='width:19.3pt;border-top:none;border-left:none;
 border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=23 valign=top style='width:17.55pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=56 valign=top style='width:41.75pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=55 valign=top style='width:41.35pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=33 valign=top style='width:25.05pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=32 valign=top style='width:24.3pt;border-top:none;border-left:none;
 border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=65 valign=top style='width:48.65pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=65 valign=top style='width:48.65pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=38 valign=top style='width:28.25pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=56 valign=top style='width:41.75pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=56 valign=top style='width:41.75pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
</tr>
<tr>
 <td width=30 valign=top style='width:22.6pt;border:solid windowtext 1.0pt;
 border-top:none;padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=81 valign=top style='width:60.45pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><b><span style='font-size:8.0pt'>JUMLAH
 II</span></b></p>
 </td>
 <td width=324 colspan=8 valign=top style='width:243.1pt;border-top:none;
 border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=65 valign=top style='width:48.65pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=38 valign=top style='width:28.25pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=56 valign=top style='width:41.75pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=56 valign=top style='width:41.75pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
</tr>
<tr>
 <td width=30 valign=top style='width:22.6pt;border:solid windowtext 1.0pt;
 border-top:none;padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=81 valign=top style='width:60.45pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal style='margin-bottom:0cm;margin-bottom:.0001pt;text-align:
 justify;line-height:normal'><b><span style='font-size:8.0pt'>III. JASA/ UPAH
 KERJA</span></b></p>
 </td>
 <td width=34 valign=top style='width:25.15pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=26 valign=top style='width:19.3pt;border-top:none;border-left:none;
 border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=23 valign=top style='width:17.55pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=56 valign=top style='width:41.75pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=55 valign=top style='width:41.35pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=33 valign=top style='width:25.05pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=32 valign=top style='width:24.3pt;border-top:none;border-left:none;
 border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=65 valign=top style='width:48.65pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=65 valign=top style='width:48.65pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=38 valign=top style='width:28.25pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=56 valign=top style='width:41.75pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=56 valign=top style='width:41.75pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
</tr>


<!-- INI JASA INI JASA INI JASA INI JASA INI JASA INI JASA INI JASA
INI JASA INI JASA INI JASA INI JASA INI JASA INI JASA INI JASA
INI JASA INI JASA INI JASA INI JASA INI JASA INI JASA INI JASA
INI JASA INI JASA INI JASA INI JASA INI JASA INI JASA INI JASA
INI JASA INI JASA INI JASA INI JASA INI JASA INI JASA INI JASA
INI JASA INI JASA INI JASA INI JASA INI JASA INI JASA INI JASA
INI JASA INI JASA INI JASA INI JASA INI JASA INI JASA INI JASA
INI JASA INI JASA INI JASA INI JASA INI JASA INI JASA INI JASA
INI JASA INI JASA INI JASA INI JASA INI JASA INI JASA INI JASA

-->

<?php
$numb3=0;
foreach ($jasa as $key => $value) { ?>
<tr>
<td width=30 valign=top style='width:22.6pt;border:solid windowtext 1.0pt;
border-top:none;padding:0cm 5.4pt 0cm 5.4pt'>
<p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
text-align:center;line-height:normal'><span style='font-size:8.0pt'><?php echo $numb3=$numb3+1; ?></span></p>
</td>
<td width=81 valign=top style='width:60.45pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
padding:0cm 5.4pt 0cm 5.4pt'>
<p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
text-align:center;line-height:normal'><span style='font-size:8.0pt'><?php echo  $value->uraian_nama; ?></span></p>
</td>
<td width=34 valign=top style='width:25.15pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
padding:0cm 5.4pt 0cm 5.4pt'>
<p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
text-align:center;line-height:normal'><span style='font-size:8.0pt'><?php echo  $value->satuan; ?></span></p>
</td>
<td width=26 valign=top style='width:19.3pt;border-top:none;border-left:none;
border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
padding:0cm 5.4pt 0cm 5.4pt'>
<p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
text-align:center;line-height:normal'><span style='font-size:8.0pt'><?php echo  $value->jumlah; ?></span></p>
</td>
<td width=23 valign=top style='width:17.55pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
padding:0cm 5.4pt 0cm 5.4pt'>
<p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
<td width=56 valign=top style='width:41.75pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
padding:0cm 5.4pt 0cm 5.4pt'>
<p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
text-align:center;line-height:normal'><span style='font-size:8.0pt'><?php echo  $value->jumlah; ?></span></p>
</td>
<td width=55 valign=top style='width:41.35pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
padding:0cm 5.4pt 0cm 5.4pt'>
<p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
text-align:center;line-height:normal'><span style='font-size:8.0pt'><?php echo  $value->matkhs_harga; ?></span></p>
</td>
<td width=33 valign=top style='width:25.05pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
padding:0cm 5.4pt 0cm 5.4pt'>
<p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
text-align:center;line-height:normal'><span style='font-size:8.0pt'><?php
if($value->material_PLN == "PLN")
{
 echo $value->jumlah;
}
else {
 echo "";
}
?></span></p>
</td>
<td width=32 valign=top style='width:24.3pt;border-top:none;border-left:none;
border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
padding:0cm 5.4pt 0cm 5.4pt'>
<p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
text-align:center;line-height:normal'><span style='font-size:8.0pt'><?php
if($value->material_PLN == "NON PLN")
{
 echo $value->jumlah;
}
else {
 echo "";
}
?></span></p>
</td>
<td width=65 valign=top style='width:48.65pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
padding:0cm 5.4pt 0cm 5.4pt'>
<p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
</td>
<td width=65 valign=top style='width:48.65pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
padding:0cm 5.4pt 0cm 5.4pt'>
<p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
text-align:center;line-height:normal'><span style='font-size:8.0pt'></span></p>
</td>
<td width=38 valign=top style='width:28.25pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
padding:0cm 5.4pt 0cm 5.4pt'>
<p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
text-align:center;line-height:normal'><span style='font-size:8.0pt'><?php
echo $value->total_biaya;
?></span></p>
</td>
<td width=56 valign=top style='width:41.75pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
padding:0cm 5.4pt 0cm 5.4pt'>
<p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
text-align:center;line-height:normal'><span style='font-size:8.0pt'><?php
echo $value->total_biaya;
?></span></p>
</td>
<td width=56 valign=top style='width:41.75pt;border-top:none;border-left:
none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
padding:0cm 5.4pt 0cm 5.4pt'>
<p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
text-align:center;line-height:normal'><span style='font-size:8.0pt'><?php
if ($value->material_PLN=="PLN") {
echo "PLN";
}
else {
echo $value->total_biaya;
$jumlah3=$jumlah3+$value->total_biaya;
}
?></span></p>
</td>
</tr>
<?php } ?>

<!-- INI TRANSPORT INI TRANSPORT INI TRANSPORT INI TRANSPORT INI TRANSPORT INI Transport
INI TRANSPORT INI TRANSPORT INI TRANSPORT INI TRANSPORT INI Transpor
INI TRANSPORT INI TRANSPORT INI TRANSPORT INI TRANSPORT INI TransportINI
TRANSPORT
INI TRANSPORT INI TRANSPORT INI TRANSPORT INI TRANSPORT INI TRANSPORT INI Transport
INI TRANSPORT INI TRANSPORT INI TRANSPORT INI TRANSPORT INI Transpor
INI TRANSPORT INI TRANSPORT INI TRANSPORT INI TRANSPORT INI TransportINI
TRANSPORT-->

<?php
$jumlah4=0;
if(isset($transport[0]->uraian)){
  ?>
  <tr>
  <td width=30 valign=top style='width:22.6pt;border:solid windowtext 1.0pt;
  border-top:none;padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'><?php echo $numb3=$numb3+1; ?></span></p>
  </td>
  <td width=81 valign=top style='width:60.45pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'><?php echo  $transport[0]->uraian; ?></span></p>
  </td>
  <td width=34 valign=top style='width:25.15pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'><?php echo  $transport[0]->satuan; ?></span></p>
  </td>
  <td width=26 valign=top style='width:19.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'><?php echo  $transport['berat']; ?></span></p>
  </td>
  <td width=23 valign=top style='width:17.55pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=56 valign=top style='width:41.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'><?php echo  $transport['berat']; ?></span></p>
  </td>
  <td width=55 valign=top style='width:41.35pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'><?php echo  $transport['harga']; ?></span></p>
  </td>
  <td width=33 valign=top style='width:25.05pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'><?php
  // if($value->material_PLN == "PLN")
  // {
  //   echo $value->jumlah;
  // }
  // else {
  //   echo "";
  // }
  ?></span></p>
  </td>
  <td width=32 valign=top style='width:24.3pt;border-top:none;border-left:none;
  border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'><?php
  echo $transport['berat'];
  ?></span></p>
  </td>
  <td width=65 valign=top style='width:48.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
  </td>
  <td width=65 valign=top style='width:48.65pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'></span></p>
  </td>
  <td width=38 valign=top style='width:28.25pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'><?php
  echo $transport[0]->total_biaya;
  ?></span></p>
  </td>
  <td width=56 valign=top style='width:41.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'><?php
  echo $transport[0]->total_biaya;
  ?></span></p>
  </td>
  <td width=56 valign=top style='width:41.75pt;border-top:none;border-left:
  none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
  padding:0cm 5.4pt 0cm 5.4pt'>
  <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
  text-align:center;line-height:normal'><span style='font-size:8.0pt'><?php
  echo $transport[0]->total_biaya;
  $jumlah4=$transport[0]->total_biaya;
  ?></span></p>
  </td>
  </tr>
<?php ?>













  <tr>
   <td width=30 valign=top style='width:22.6pt;border:solid windowtext 1.0pt;
   border-top:none;padding:0cm 5.4pt 0cm 5.4pt'>
   <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
   text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
   </td>
   <td width=81 valign=top style='width:60.45pt;border-top:none;border-left:
   none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
   padding:0cm 5.4pt 0cm 5.4pt'>
   <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
   text-align:center;line-height:normal'><b><span style='font-size:8.0pt'>JUMLAH
   III</span></b></p>
   </td>
   <td width=324 colspan=8 valign=top style='width:243.1pt;border-top:none;
   border-left:none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
   padding:0cm 5.4pt 0cm 5.4pt'>
   <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
   text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
   </td>
   <td width=65 valign=top style='width:48.65pt;border-top:none;border-left:
   none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
   padding:0cm 5.4pt 0cm 5.4pt'>
   <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
   text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
   </td>
   <td width=38 valign=top style='width:28.25pt;border-top:none;border-left:
   none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
   padding:0cm 5.4pt 0cm 5.4pt'>
   <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
   text-align:center;line-height:normal'><span style='font-size:8.0pt'><?php echo $jumlah3+$jumlah4; ?></span></p>
   </td>
   <td width=56 valign=top style='width:41.75pt;border-top:none;border-left:
   none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
   padding:0cm 5.4pt 0cm 5.4pt'>
   <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
   text-align:center;line-height:normal'><span style='font-size:8.0pt'><?php echo $jumlah3+$jumlah4; ?></span></p>
   </td>
   <td width=56 valign=top style='width:41.75pt;border-top:none;border-left:
   none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
   padding:0cm 5.4pt 0cm 5.4pt'>
   <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
   text-align:center;line-height:normal'><span style='font-size:8.0pt'><?php echo $jumlah3+$jumlah4; ?></span></p>
   </td>
  </tr>
<?php
}
?>


<!-- JUMLAH 123 JUMLAH 123 JUMLAH 123 JUMLAH 123 JUMLAH 123 JUMLAH 123 JUMLAH 123
JUMLAH 123 JUMLAH 123 JUMLAH 123 JUMLAH 123 JUMLAH 123 JUMLAH 123 JUMLAH 123
JUMLAH 123 JUMLAH 123 JUMLAH 123 JUMLAH 123 JUMLAH 123 JUMLAH 123 JUMLAH 123
JUMLAH 123 JUMLAH 123 JUMLAH 123 JUMLAH 123 JUMLAH 123 JUMLAH 123 JUMLAH 123
JUMLAH 123 JUMLAH 123 JUMLAH 123 JUMLAH 123 JUMLAH 123 JUMLAH 123 JUMLAH 123 -->


<tr>
 <td width=30 valign=top style='width:22.6pt;border:solid windowtext 1.0pt;
 border-top:none;padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'></span></p>
 </td>
 <td width=81 valign=top style='width:60.45pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=34 valign=top style='width:25.15pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><b><span style='font-size:8.0pt'>JUMLAH
 I + II + III</span></b></p>
 </td>
 <td width=26 valign=top style='width:19.3pt;border-top:none;border-left:none;
 border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=23 valign=top style='width:17.55pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=56 valign=top style='width:41.75pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=55 valign=top style='width:41.35pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=33 valign=top style='width:25.05pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=32 valign=top style='width:24.3pt;border-top:none;border-left:none;
 border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=65 valign=top style='width:48.65pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=65 valign=top style='width:48.65pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'><?php echo ($jumlah1+$jumlah2); ?></span></p>
 </td>
 <td width=38 valign=top style='width:28.25pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'><?php echo($jumlah3+$jumlah4); ?></span></p>
 </td>
 <td width=56 valign=top style='width:41.75pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'><?php echo($jumlah1+$jumlah2+$jumlah3+$jumlah4); ?></span></p>
 </td>
 <td width=56 valign=top style='width:41.75pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'><?php echo($jumlah1+$jumlah2+$jumlah3+$jumlah4); ?></span></p>
 </td>
</tr>

<!--
PPN PPN PPN PPN 10% PPN PPN PPN PPN 10%PPN PPN PPN PPN 10%
PPN PPN PPN PPN 10%PPN PPN PPN PPN 10%PPN PPN PPN PPN 10%
PPN PPN PPN PPN 10%PPN PPN PPN PPN 10%PPN PPN PPN PPN 10%
PPN PPN PPN PPN 10%PPN PPN PPN PPN 10%PPN PPN PPN PPN 10% -->


<tr>
 <td width=30 valign=top style='width:22.6pt;border:solid windowtext 1.0pt;
 border-top:none;padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=81 valign=top style='width:60.45pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=34 valign=top style='width:25.15pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><b><span style='font-size:8.0pt'>P P N
 10 %</span></b></p>
 </td>
 <td width=26 valign=top style='width:19.3pt;border-top:none;border-left:none;
 border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=23 valign=top style='width:17.55pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=56 valign=top style='width:41.75pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=55 valign=top style='width:41.35pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=33 valign=top style='width:25.05pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=32 valign=top style='width:24.3pt;border-top:none;border-left:none;
 border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=65 valign=top style='width:48.65pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=65 valign=top style='width:48.65pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'><?php echo (($jumlah1+$jumlah2)*10/100);?></span></p>
 </td>
 <td width=38 valign=top style='width:28.25pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'><?php echo (($jumlah3+$jumlah4)*10/100); ?></span></p>
 </td>
 <td width=56 valign=top style='width:41.75pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'><?php echo (($jumlah1+$jumlah2+$jumlah3+$jumlah4)*10/100); ?></span></p>
 </td>
 <td width=56 valign=top style='width:41.75pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'> <?php echo (($jumlah1+$jumlah2+$jumlah3+$jumlah4)*10/100); ?></span></p>
 </td>
</tr>

<!--


TOTAL TOTAL TOTAL TOTAL TOTAL TOTAL TOTAL TOTAL TOTLAS
 TOTAL TOTAL TOTAL TOTAL TOTAL TOTAL TOTAL TOTAL TOTLAS
  TOTAL TOTAL TOTAL TOTAL TOTAL TOTAL TOTAL TOTAL TOTLAS
   TOTAL TOTAL TOTAL TOTAL TOTAL TOTAL TOTAL TOTAL TOTLAS
    TOTAL TOTAL TOTAL TOTAL TOTAL TOTAL TOTAL TOTAL TOTLAS
     TOTAL TOTAL TOTAL TOTAL TOTAL TOTAL TOTAL TOTAL TOTLAS -->
<tr>
 <td width=30 valign=top style='width:22.6pt;border:solid windowtext 1.0pt;
 border-top:none;padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=81 valign=top style='width:60.45pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=34 valign=top style='width:25.15pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><b><span style='font-size:8.0pt'>T O T
 A L</span></b></p>
 </td>
 <td width=26 valign=top style='width:19.3pt;border-top:none;border-left:none;
 border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=23 valign=top style='width:17.55pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=56 valign=top style='width:41.75pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=55 valign=top style='width:41.35pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=33 valign=top style='width:25.05pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=32 valign=top style='width:24.3pt;border-top:none;border-left:none;
 border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=65 valign=top style='width:48.65pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>&nbsp;</span></p>
 </td>
 <td width=65 valign=top style='width:48.65pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'>
<?php echo (($jumlah1+$jumlah2)+(($jumlah1+$jumlah2)*10/100));?></span></p>
 </td>
 <td width=38 valign=top style='width:28.25pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'><?php echo (($jumlah3+$jumlah4)+(($jumlah3+$jumlah4)*10/100)); ?></span></p>
 </td>
 <td width=56 valign=top style='width:41.75pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'><?php echo (($jumlah1+$jumlah2+$jumlah3+$jumlah4)+(($jumlah1+$jumlah2+$jumlah3+$jumlah4)*10/100)); ?></span></p>
 </td>
 <td width=56 valign=top style='width:41.75pt;border-top:none;border-left:
 none;border-bottom:solid windowtext 1.0pt;border-right:solid windowtext 1.0pt;
 padding:0cm 5.4pt 0cm 5.4pt'>
 <p class=MsoNormal align=center style='margin-bottom:0cm;margin-bottom:.0001pt;
 text-align:center;line-height:normal'><span style='font-size:8.0pt'><?php echo (($jumlah1+$jumlah2+$jumlah3+$jumlah4)+(($jumlah1+$jumlah2+$jumlah3+$jumlah4)*10/100)); ?></span></p>
 </td>
</tr>

<tr>
</tr>
<tr>
  <td></td>
    <td></td>
      <td></td>
        <td></td>
          <td></td>
            <td></td>
          <td></td>
        <td></td>
    <td></td>
  <td>Bos Mengetahui</td>
    <td></td>
      <td></td>
        <td></td>
    <td>Membuat</td>
</tr>
<tr>
</tr>
<tr>
</tr>
<tr>
</tr>
<tr>
</tr>
<tr>
  <td></td>
    <td></td>
      <td></td>
        <td></td>
          <td></td>
            <td></td>
          <td></td>
        <td></td>
    <td></td>
  <td>Nama Bos</td>
    <td></td>
      <td></td>
        <td></td>
    <td>Nama Pembuat</td>
</tr>
</table>

<p class=MsoNormal style='text-align:justify'><span style='font-size:8.0pt;
line-height:107%'>&nbsp;</span></p>

</div>

</body>

</html>

<?php
$html = ob_get_clean();
echo '<input type="hidden" name="" value="'.$html.'">';

?>



<script>
  $(document).ready( function () {
    fetch_data();
    fetch_datatrasnport();


});


     $('.DDselect').select2({
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


     $('.DDselect1').select2({
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


     //get harga of total
     $('.DDselect').on("select2:select", function(e) {
       var idmat = document.getElementById("uraian").value;
       var hrg = document.getElementById("jumlah").value;
       $.ajax({
           type: 'GET',
           url: '/rgetmat',
           data:{'idmat': idmat},
           success:function(data)
           {

             var a=data[0];
             $("#harga_satuan").attr("placeholder", a.harga_matkhs);
             $('#harga_satuan').val(a.harga_matkhs);

             $("#satuan").attr("placeholder", a.satuan_matkhs);
             $('#satuan').val(a.satuan_matkhs);

             $("#total_biaya").attr("placeholder", a.harga_matkhs*hrg);
             $('#total_biaya').val(a.harga_matkhs*hrg);

             if(a.PLN==1)
             {
               $("#material_PLN").attr("placeholder", "PLN");
               $('#material_PLN').val("PLN");
             }
             else {
               $("#material_PLN").attr("placeholder", "NON PLN");
               $('#material_PLN').val("NON PLN");
             }
          },
       });
     });




     $('.DDselect1').on("select2:select", function(e) {
       var idmat = document.getElementById("uraian1").value;
       var hrg = document.getElementById("jumlah1").value;
       $.ajax({
           type: 'GET',
           url: '/rgetmat',
           data:{'idmat': idmat},
           success:function(data)
           {
             var a=data[0];

             $("#harga_satuan1").attr("placeholder", a.harga_matkhs);
             $('#harga_satuan1').val(a.harga_matkhs);

             $("#satuan1").attr("placeholder", a.satuan_matkhs);
             $('#satuan1').val(a.satuan_matkhs);

             $("#total_biaya1").attr("placeholder", a.harga_matkhs*hrg);
             $('#total_biaya1').val(a.harga_matkhs*hrg);


             if(a.PLN==1)
             {
               $("#material_PLN1").attr("placeholder", "PLN");
               $('#material_PLN1').val("PLN");
             }
             else {
               $("#material_PLN1").attr("placeholder", "NON PLN");
               $('#material_PLN1').val("NON PLN");
             }

          },
       });
     });

     $("#jumlah").keyup(function(e) {
     $value=$(this).val();
     var idmat = document.getElementById("harga_satuan").value;
     $("#total_biaya").attr("placeholder", $value*idmat);
     $('#total_biaya').val($value*idmat);
     });

     $("#jumlah1").keyup(function(e) {
     $value1=$(this).val();
     var idmat1 = document.getElementById("harga_satuan1").value;
     $("#total_biaya1").attr("placeholder", $value1*idmat1);
     $('#total_biaya1').val($value1*idmat1);
     });


     function fetch_datatrasnport()
     {
      $.ajax({
      type: "GET",
      data:{'rab':$('#no_rabtr').val()},
       url:"Rdetilfetchtransport",
       dataType:"json",
       success:function(data)
       {
        html='';
        for(var count=0; count < data.length; count++)
        {

        html +='<tr>';
        html +='<td class="column_name" data-column_name="uraian" data-id="'+data[count].id_detilrab+'">'+data[count].uraians+'</td>';
        html +='<td  class="column_name" data-column_name="uraian" data-id="'+data[count].id_detilrab+'">'+data[count].total_biaya+'</td>';
        html += '<td><button class="edit-modaltr btn btn-info" data-id="'+data[count].id_detilrab+'"><span class="glyphicon glyphicon-trash">Edit</span></button>&nbsp;';
        html += '<button class="delete-modal btn btn-danger" data-id="'+data[count].id_detilrab+'"><span class="glyphicon glyphicon-trash">Delete</span></button></td></tr>';
        }
        // console.log(html);
        $('#transport').html(html);
       }
      });
     }


    function fetch_data()
    {
     $.ajax({
     type: "GET",
     data:{'rab':$('#no_rab').val()},
      url:"Rdetilfetch",
      dataType:"json",
      success:function(data)
      {
        // contenteditable can be puted inside td
       // console.log(data);
       html='';
       for(var count=0; count < data.length; count++)
       {
       html +='<tr>';
       html +='<td class="column_name" data-column_name="uraian" data-id="'+data[count].id_detilrab+'">'+data[count].uraian+'</td>';
       html +='<td  class="column_name" data-column_name="uraian" data-id="'+data[count].id_detilrab+'">'+data[count].jumlah+'</td>';
       html += '<td  class="column_name" data-column_name="satuan" data-id="'+data[count].id_detilrab+'">'+data[count].satuan+'</td>';
       html += '<td  class="column_name" data-column_name="satuan" data-id="'+data[count].id_detilrab+'">'+data[count].harga_satuan+'</td>';
       html += '<td  class="column_name" data-column_name="satuan" data-id="'+data[count].id_detilrab+'">'+data[count].total_biaya+'</td>';
       html += '<td  class="column_name" data-column_name="satuan" data-id="'+data[count].id_detilrab+'">'+data[count].material_PLN+'</td>';
       html += '<td><button class="edit-modal btn btn-info" data-id="'+data[count].id_detilrab+'"><span class="glyphicon glyphicon-trash">Edit</span></button>&nbsp;';
       html += '<button class="delete-modal btn btn-danger" data-id="'+data[count].id_detilrab+'"><span class="glyphicon glyphicon-trash">Delete</span></button></td></tr>';
       }
       // console.log(html);
       $('#matjasa').html(html);
      }
     });
    }

    // add a new post
    $(document).on('click', '.add-modal', function() {
                // Empty input fields
                // document.getElementById("no_rab").value;
                $('#DDselect').val(null).trigger('change');
                $('#uraian').val('');
                $('#jumlah').val('');
                $('#satuan').val('');
                $('#harga_satuan').val('');
                $('#material_PLN').val('');
                $('#material_PFK').val('');
                $('#total_biaya').val('');
                $('.modal-title').text('Add');
                $('#addModal').appendTo("body").modal('show');
            });


            //INI ADD TRANSPORTASI
            $('.modal-footer').on('click', '#addtr', function() {
                    $.ajax({
                        type: 'POST',
                        url: '/Rdetil',
                        data: {
                          '_token': $('input[name=_token]').val(),
                          'no_rab': $('#no_rabtr').val(),
                          'jumlah': $('#jumlahtr').val(),
                          'satuan': $('#satuantr').val(),
                          'uraian' : $('#uraiantr').val(),
                          'harga_satuan': $('#harga_satuantr').val(),
                          'nama_uraian': $('#nama_uraiantr').val(),
                          'total_biaya': $('#total_biayatr').val(),
                          'kontrak': $('#kontrak').val(),
                          'no_spbj': $('#no_spbj').val(),
                        },
                        success:function(data)
                        {
                       },
                    });
                    // fetch_datatrasnport();
                    fetch_datatrasnport();
                });


                 //open transport modal
                $(document).on('click', '.add-modaltr', function() {
                            // Empty input fields
                            // document.getElementById("no_rab").value;
                            $('#DDselect').val(null).trigger('change');
                            $('#uraian').val('');
                            $('#jumlah').val('');
                            $('#satuan').val('');
                            $('#harga_satuan').val('');
                            $('#material_PLN').val('');
                            $('#material_PFK').val('');
                            $('#total_biaya').val('');
                            $('.modal-title').text('Add');
                            $('#transportaddModal').appendTo("body").modal('show');
                        });
                        //get transportasi ddropdown
                        $('.DDselecttrans').select2({
                          placeholder: 'Select an item',
                          ajax: {
                            url: '/searchmaterialjasatr',
                            dataType: 'json',
                            delay: 250,
                            processResults: function (data) {
                              return {
                                results:  $.map(data, function (item) {
                                      return {
                                          text: item.uraian,
                                          id: item.id,
                                      }
                                  })

                              };
                            },
                            cache: true
                          }
                        });
                        //auto insert harga dan dd
                        $('.DDselecttrans').on("select2:select", function(e) {
                          var id = document.getElementById("nama_uraiantr").value;
                          var no_rab = document.getElementById("no_rabtr").value;
                          $.ajax({
                              type: 'GET',
                              url: '/rgetmattr',
                              data:{'id': id,'no_rab':no_rab},
                              success:function(data)
                              {
                                // console.log(data);
                               $("#total_biayatr").attr("placeholder", data[0]);
                               $('#total_biayatr').val(data[0]);
                               $('#jumlahtr').val(data[1]);
                               $("#jumlahtr").attr("placeholder", data[1]);
                               $('#harga_satuantr').val(data[2]);
                               $("#harga_satuantr").attr("placeholder", data[2]);

                              },
                          });
                        });


               $('.DDselecttrans1').select2({
                 placeholder: 'Select an item',
                 ajax: {
                   url: '/searchmaterialjasatr',
                   dataType: 'json',
                   delay: 250,
                   processResults: function (data) {
                     return {
                       results:  $.map(data, function (item) {
                             return {
                                 text: item.uraian,
                                 id: item.id,
                             }
                         })

                     };
                   },
                   cache: true
                 }
               });
               //auto insert harga dan dd
      $('.DDselecttrans1').on("select2:select", function(e) {
        var id = document.getElementById("nama_uraiantr1").value;
        var no_rab = document.getElementById("no_rabtr1").value;
        $.ajax({
            type: 'GET',
            url: '/rgetmattr',
            data:{'id': id,'no_rab':no_rab},
            success:function(data)
            {
              $("#total_biayatr1").attr("placeholder", data[0]);
              $('#total_biayatr1').val(data[0]);
              $('#jumlahtr1').val(data[1]);
              $("#jumlahtr1").attr("placeholder", data[1]);
              $('#harga_satuantr1').val(data[2]);
              $("#harga_satuantr1").attr("placeholder", data[2]);
            },
        });
      });


               //INI ADD BIASA MATERIAL ATAU JASA
                $('.modal-footer').on('click', '.add', function() {
                        $.ajax({
                            type: 'POST',
                            url: '/Rdetil',
                            data: {
                                '_token': $('input[name=_token]').val(),
                                'no_rab': $('#no_rab').val(),
                                'uraian': $('#uraian').val(),
                                'jumlah': $('#jumlah').val(),
                                'satuan': $('#satuan').val(),
                                'harga_satuan': $('#harga_satuan').val(),
                                'material_PLN': $('#material_PLN').val(),
                                'material_PFK': $('#material_PFK').val(),
                                'total_biaya': $('#total_biaya').val(),
                                'kontrak': $('#kontrak').val(),
                                'no_spbj': $('#no_spbj').val(),
                            },
                            success:function(data)
                            {
                           },
                        });
                        fetch_data();
                        fetch_datatrasnport();
                    });


                    //INI EDIT TRANSPORT
                                     $(document).on('click', '.edit-modaltr', function() {
                                          $('#DDselecttrans1').val('');
                                         $('.modal-title').text('Edit');
                                         $('#id_edittr1').val($(this).data('id'));
                                         id = $('#id_edittr1').val();
                                         $('#transporteditModal').appendTo("body").modal('show');
                                     });

                    //INI EDIT TRANSPORT
                                     $('.modal-footer').on('click', '#edittr1', function() {
                                             $.ajax({
                                                 type: 'PUT',
                                                 url: '/Rdetil/'+id,
                                                 data: {
                                                     '_token': $('input[name=_token]').val(),
                                                     'id_detilrab': $("#id_edittr1").val(),
                                                     'no_rab': $('#no_rabtr1').val(),
                                                     'uraian': $('#uraiantr1').val(),
                                                     'nama_uraian': $('#nama_uraiantr1').val(),
                                                     'total_biaya': $('#total_biayatr1').val(),
                                                     'satuan': $('#satuantr1').val(),
                                                 },
                                                 success:function(data)
                                                 {
                                                   fetch_datatrasnport();
                                                },
                                             });
                                         });




//INI EDIT BIASA MATERIAL DAN JASA
                $(document).on('click', '.edit-modal', function() {
                     $('#DDselect1').val('');
                    $('.modal-title').text('Edit');
                    $('#id_edit').val($(this).data('id'));
                    id = $('#id_edit').val();
                    $('#editModal').appendTo("body").modal('show');
                });

//INI EDIT BIASA MATERIAL DAN JASA
                $('.modal-footer').on('click', '.edit', function() {
                        $.ajax({
                            type: 'PUT',
                            url: '/Rdetil/'+id,
                            data: {
                                '_token': $('input[name=_token]').val(),
                                'id_detilrab': $("#id_edit").val(),
                                'no_rab': $('#no_rab1').val(),
                                'uraian': $('#uraian1').val(),
                                'jumlah': $('#jumlah1').val(),
                                'satuan': $('#satuan1').val(),
                                'harga_satuan': $('#harga_satuan1').val(),
                                'material_PLN': $('#material_PLN1').val(),
                                'material_PFK': $('#material_PFK1').val(),
                                'total_biaya': $('#total_biaya1').val(),
                            },
                            success:function(data)
                            {
                              fetch_data();
                              fetch_datatrasnport();
                           },
                        });
                    });

//DELETE ITEM DELETE ITEM DELETE ITEM
                    $(document).on('click', '.delete-modal', function() {
                        $('#id_delete').val($(this).data('id'));
                        $('#deleteModal').appendTo("body").modal('show');
                        id = $('#id_delete').val();
                       });

                       $('.modal-footer').on('click', '.delete', function() {
                           $.ajax({
                               type: 'DELETE',
                               url: '/Rdetil/' + id,
                               data: {
                                   '_token': $('input[name=_token]').val(),
                               },
                               success: function(data) {
                                   toastr.success('Successfully deleted Post!', 'Success Alert', {timeOut: 5000});
                                   $('.item' + data['id']).remove();
                               }
                           });

                             fetch_data();
                             fetch_datatrasnport();
                       });

</script>
<script>
// jQuery(document).ready(function($) {
//     $(".btn-primary").click(function(event) {
//       $("#export-content").wordExport();
//     });
//   });
// var a = function() {
//     var defer = $.Deferred();
//     // location.reload();
//     console.log("ajgajgajg");
//     setTimeout(function() {
//         defer.resolve(); // When this fires, the code in a().then(/..../); is executed.
//     }, 2000);
//     return defer;
// };
// var b = function() {
//     var defer = $.Deferred();
//
//     $("#export-content").wordExport();
//
//     setTimeout(function () {
//         defer.resolve();
//     }, 2000);
//
//     return defer;
// };
 $(document).on('click', '#cetakexcel', function() {

 $("#export-content").table2excel({
   name: "WorksheetName",
   filename: "RAB", //do not include extension
   fileext: ".xls" // file extension
 });
});


 $(document).on('click', '#cetakrab', function() {
 $("#export-content").wordExport();
 });
</script>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.indexNVM', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\etc\PEMBELAJARAN\project\AO2\resources\views/indexdetilRAB.blade.php ENDPATH**/ ?>
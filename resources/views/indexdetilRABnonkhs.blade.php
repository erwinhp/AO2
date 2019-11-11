 @extends('layouts.index')
@section('content')

<meta name="_token" content="{{ csrf_token() }}">

<?php
//dd($prk);
// if ($prk=="")
// {
//   $prk=[];
// }
?>


<section class="table table-bordered">


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
            <h3 class="h4">Table RAB {{$rab}}</h3>
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
                    <th>Action</th>
                  </tr>
                </thead>
                <?php $nomor=1; ?>
                <tbody>
                </tbody>

              </table>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>





<div class="modal fade" id="addModal" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title"</h4>
    </div>
    <div class="modal-body">
        <form id="sample_form" name="userForm" class="form-horizontal" enctype="multipart/form-data">
          @csrf

           <input type="hidden" name="no_rab" id="no_rab" value="{{$rab}}">
           <input type="hidden" name="material_PLN" id="material_PLN" value="NON PLN">

           <!-- <div class="form-group">
               <label for="uraian" class="col-sm-2 control-label">Uraian</label>
               <div class="col-sm-12">
                   <select class="DDselect" style="width:440px;" name="itemName" id="uraian"></select>
               </div>
           </div> -->

           <div class="form-group">
               <label class="col-sm-2 control-label">Uraian</label>
               <div class="col-sm-12">
                   <input type="jumlah" class="form-control" id="nama_uraian" name="nama_uraian" placeholder="Enter Uraian" value="" required="">
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
                    <input type="satuan" class="form-control" id="satuan" name="satuan" placeholder="Enter satuan" value="" required="" >
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Harga Satuan</label>
                <div class="col-sm-12">
                    <input type="harga_satuan" class="form-control" id="harga_satuan" name="harga_satuan" placeholder="Enter harga_satuan" value="" required="" >
                </div>
            </div>



            <div class="form-group">
                <label class="col-sm-2 control-label">Total Biaya</label>
                <div class="col-sm-12">
                    <input type="total_jasa" class="form-control" id="total_biaya" name="total_biaya" placeholder="Enter total_biaya" value="" required="" disabled>
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
    <div class="modal-footer">

    </div>
</div>
</div>
</div>




<!-- MODAL EDIT MODAL EDIT MODAL EDIT MODAL EDIT MODAL EDIT MODAL EDIT MODAL EDIT MODAL EDIT-->
<div class="modal fade" id="editModal" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
    <div class="modal-header">
        <h4 class="modal-title"</h4>
    </div>
    <div class="modal-body">
        <form id="sample_form" name="userForm" class="form-horizontal" enctype="multipart/form-data">
          @csrf


          <input type="hidden" name="id_edit" id="id_edit" >
           <input type="hidden" name="no_rab" id="no_rab1" value="{{$rab}}">

           <div class="form-group">
               <label class="col-sm-2 control-label">Uraian</label>
               <div class="col-sm-12">
                   <input type="jumlah" class="form-control" id="nama_uraian1" name="nama_uraian1" placeholder="Enter Uraian" value="" required="">
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
                    <input type="satuan" class="form-control" id="satuan1" name="satuan1" placeholder="Enter satuan1" value="" required="" >
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Harga Satuan</label>
                <div class="col-sm-12">
                    <input type="harga_satuan" class="form-control" id="harga_satuan1" name="harga_satuan1" placeholder="Enter harga_satuan" value="" required="" >
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
</div>





<!--
delete modal -->

<div id="deleteModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>

            </div>
            <div class="modal-body">
                <h4 align="center" style="margin:0;">Are you sure you want to remove this data?</h4>
            </div>
            <div class="modal-footer">
              <input type="hidden" name="id_delete" id="id_delete" >
              <input type="hidden" name="no_rab" id="no_rab" value="{{$rab}}">
              <button type="button" class="btn btn-danger delete" data-dismiss="modal">
                <span id="" class='glyphicon glyphicon-trash'></span> Delete
              </button>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>
        </div>
    </div>
</div>

</section>



<script>
   $(document).ready( function () {
     fetch_data();
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


      $("#harga_satuan").keyup(function(e) {
      $value1=$(this).val();
      var jumlah = document.getElementById("jumlah").value;
      $("#total_biaya").attr("placeholder", $value1*jumlah);
      $('#total_biaya').val($value1*jumlah);
      });

      $("#harga_satuan1").keyup(function(e) {
      $value1=$(this).val();
      var jumlah = document.getElementById("jumlah1").value;
      $("#total_biaya1").attr("placeholder", $value1*jumlah);
      $('#total_biaya1').val($value1*jumlah);
      });


     function fetch_data()
     {
      $.ajax({
      type: "GET",
      data:{'rab':$('#no_rab').val()},
       url:"Rdetilfetchnon",
       dataType:"json",
       success:function(data)
       {
         // contenteditable can be puted inside td
        // console.log(data);
        html='';
        for(var count=0; count < data.length; count++)
        {
        html +='<tr>';
        html +='<td class="column_name" data-column_name="uraian" data-id="'+data[count].id_detilrab+'">'+data[count].nama_uraian+'</td>';
        html +='<td  class="column_name" data-column_name="uraian" data-id="'+data[count].id_detilrab+'">'+data[count].jumlah+'</td>';
        html += '<td  class="column_name" data-column_name="satuan" data-id="'+data[count].id_detilrab+'">'+data[count].satuan+'</td>';
        html += '<td  class="column_name" data-column_name="satuan" data-id="'+data[count].id_detilrab+'">'+data[count].harga_satuan+'</td>';
        html += '<td  class="column_name" data-column_name="satuan" data-id="'+data[count].id_detilrab+'">'+data[count].total_biaya+'</td>';
        html += '<td><button class="edit-modal btn btn-info" data-id="'+data[count].id_detilrab+'"><span class="glyphicon glyphicon-trash">Edit</span></button>&nbsp;';
        html += '<button class="delete-modal btn btn-danger" data-id="'+data[count].id_detilrab+'"><span class="glyphicon glyphicon-trash">Delete</span></button></td></tr>';
        }
        // console.log(html);
        $('tbody').html(html);
       }
      });
     }

     // add a new post
     $(document).on('click', '.add-modal', function() {
                 // Empty input fields
                 // document.getElementById("no_rab").value;
                 $('#nama_uraian').val('');
                 $('#jumlah').val('');
                 $('#satuan').val('');
                 $('#harga_satuan').val('');
                 $('#total_biaya').val('');
                 $('.modal-title').text('Add');
                 $('#addModal').modal('show');
             });



             $('.modal-footer').on('click', '.add', function() {
                     $.ajax({
                         type: 'POST',
                         url: '/Rdetilnon',
                         data: {

                             '_token': $('input[name=_token]').val(),
                             'no_rab': $('#no_rab').val(),
                             'nama_uraian': $('#nama_uraian').val(),
                             'jumlah': $('#jumlah').val(),
                             'satuan': $('#satuan').val(),
                             'harga_satuan': $('#harga_satuan').val(),
                             'material_PLN': $('#material_PLN').val(),
                             'total_biaya': $('#total_biaya').val(),
                         },
                         success:function(data)
                         {
                            fetch_data();
                        },
                     });

                 });







                 $(document).on('click', '.edit-modal', function() {
                      $('#nama_uraian1').val('');
                     $('.modal-title').text('Edit');
                     $('#id_edit').val($(this).data('id'));
                     id = $('#id_edit').val();
                     $('#editModal').modal('show');
                 });

                 $('.modal-footer').on('click', '.edit', function() {
                         $.ajax({
                             type: 'PUT',
                             url: '/Rdetilnon/'+id,
                             data: {
                                 '_token': $('input[name=_token]').val(),
                                 'id_detilrab': $("#id_edit").val(),
                                 'no_rab': $('#no_rab1').val(),
                                 'nama_uraian': $('#nama_uraian1').val(),
                                 'jumlah': $('#jumlah1').val(),
                                 'satuan': $('#satuan1').val(),
                                 'harga_satuan': $('#harga_satuan1').val(),
                                 // 'material_PLN': $('#material_PLN1').val(),
                                 'material_PFK': $('#material_PFK1').val(),
                                 'total_biaya': $('#total_biaya1').val(),
                             },
                             success:function(data)
                             {
                               fetch_data();
                            },
                         });

                     });

//DELETE ITEM DELETE ITEM DELETE ITEM
                     $(document).on('click', '.delete-modal', function() {
                         $('#id_delete').val($(this).data('id'));
                         $('#deleteModal').modal('show');
                         id = $('#id_delete').val();
                        });

                        $('.modal-footer').on('click', '.delete', function() {
                            $.ajax({
                                type: 'DELETE',
                                url: '/Rdetilnon/' + id,
                                data: {
                                    '_token': $('input[name=_token]').val(),
                                },
                                success: function(data) {
                                    toastr.success('Successfully deleted Post!', 'Success Alert', {timeOut: 5000});
                                    $('.item' + data['id']).remove();

                                }

                            });
                              fetch_data();
                        });

</script>



@stop

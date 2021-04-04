<div class="panel panel-default">
    <div class="panel-heading"></div>
        <div class="panel-body">
            <table id="table_id" class="display table table-striped">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Brand Name</th>
                        <th scope="col">Creation Date</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($result as $key => $value):?>
                    <tr>
                        <td><?= $value['id'] ?></td>
                        <td ><?= $value['brand_name'] ?></td>
                        <td ><?= $value['created_at'] ?></td>
                        <td><a href="javascript:void(0);" data-id="<?=$value['id']?>" class="fa fa-edit edit-btn" data-toggle="modal" ></a>
                            &nbsp;
                            &nbsp;
                            <a href="javascript:void(0);" data-id="<?=$value['id']?>"  class="fa fa-times delete-btn" data-toggle="modal" >
                        </td>
                    </tr>
                    <?php endforeach;?>
                </tbody>
        </table>
    </div>
</div>

<!-- edit-modal -->
<!-- Button trigger modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit brand</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="update-Brand-Form" action="">
                        <input type="hidden" name="b_id" id="b_id">
                        <div class="form-group">
                            <label for="Brand name">Brand name</label>
                            <input type="text" name="b_name" id="b_name" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" type="submit" class="btn btn-primary">
                        </div>
                    </form>
                </div>
                <div class="modal-footer d-none">
                   
                    <button type="button" class="btn btn-primary del">Save changes</button>
                </div>
            </div>
        </div>
    </div>
    <!-- delete-modal -->
<!-- Button trigger modal -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit brand</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="delete-Form" action="">
                        <input type="hidden" name="d_id" id="d_id">
                            <h1>Delete this item</h1>
                        <div class="form-group">
                            <input type="submit" name="submit" type="submit" class="btn btn-primary">
                        </div>
                    </form>
                </div>
                <div class="modal-footer d-none">
                    <!-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> -->
                    <button type="button" class="btn btn-primary del">Save changes</button>
                </div>
            </div>
        </div>
    </div>

<script>

function getData()
{
    $.ajax({
         type:'GET',
         url:'AdminController/fetch_brand',
         dataType:'html',
         success:function(data)
         {
             alert(data);
         }
     });
}
$(document).ready( function() {

    $('#table_id').DataTable();

// update
    $(document).on('submit','#update-Brand-Form',function(e){
        e.preventDefault();
        var brand_id = $(this).data('id');
        console.log(brand_id);
        $.ajax({
            type:'POST',
            url:'AdminController/update_brand',
            data:new FormData($(this)[0]),
            dataType:'JSON',
            cache:false,
            contentType:false,
            processData:false,
            success:function(data)
            {
                $('#exampleModal').modal('hide');
                location.reload();
            },
            error: function(jqXHR, textStatus, errorThrown){
                alert('There is an error');    
            }

        });
        return false;
    });

//edit
    $(document).on('click','.edit-btn',function(e){
        var brand_id = $(this).data('id');
        console.log(brand_id);
        $.ajax({
            type:'POST',
            url:'AdminController/edit_brand',
            data:{brand_id:brand_id},
            dataType:'JSON',
            success:function(data)
            {
                $('#b_name').val(data[0].brand_name);
                $('#b_id').val(brand_id);
                $('#exampleModal').modal('show');
            },
            error: function(jqXHR, textStatus, errorThrown){
                alert('There is an error');    
            }

        });
        return false;
    });

// delete
    $('#exampleModal').on('hidden.bs.modal', function () {
        $('.message').remove();
    });

    $(document).on('click','.delete-btn', function(e){
        var brand_id_del = $(this).data('id');

        $('#d_id').val(brand_id_del);
        $('#deleteModal').modal('show');

    });

    $(document).on('submit','#delete-Form',function(e){
        e.preventDefault();
        $.ajax({
            type:'POST',
            url:'AdminController/delete_brand',
            data:new FormData($(this)[0]),
            dataType:'JSON',
            cache:false,
            contentType:false,
            processData:false,
            success:function(data)
            {
                $('#deleteModal').modal('hide');
                location.reload();
            },
            error: function(jqXHR, textStatus, errorThrown){
                alert('There is an error');    
            }

        });
        // return false;
    });

    // $(document).on('click','.del',function(e){
    //     var brand_id = $(this).data('id');
    //     console.log(brand_id);
    //     $.ajax({
    //         type:'POST',
    //         url:'AdminController/delete_brand',
    //         data:{brand_id:brand_id},
    //         dataType:'JSON',
    //         beforeSend:function()
    //         {
    //             $('.modal-body').append('<div class="message"></div>')
    //         },
    //         success:function(data)
    //         {
    //             // $('#b_name').val(data[0].brand_name);
    //             // $('#b_id').val(brand_id);
    //             $('#update-Brand-Form').hide();
    //             $('.message').html('');
    //             $('#exampleModal').modal('show');
    //         },
    //         error: function(jqXHR, textStatus, errorThrown){
    //             alert('There is an error');    
    //         }

    //     });
    //     return false;
    // });


});
</script>
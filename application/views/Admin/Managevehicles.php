<div class="panel panel-default">
    <div class="panel-heading"></div>
        <div class="panel-body">
            <table id="car_table" class="display table table-striped text-center">
                <thead class="thead-dark">
                    <tr>
                        <th >#</th>
                        <th >Brand Name</th>
                        <th >Car Model</th>
                        <th>Creation Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php $count = 1?>
                <?php foreach($brands_result as $val):?>
                
                   <tr row-id="<?= $count ?>" rows-id="<?= $val->id ?>">
                        <td><?= $count?></td>
                        <td><?= $val->brand_name?></td>
                        <td><?= $val->model?></td>
                        <td><?= $val->Created_at?></td>
                        <td>
                            <a href="<?=base_url('AdminController/admin_view_car/'.$val->id) ?>" target="blank" data-id="<?= $val->id?>" data-brand="<?= $val->brand_name?>" class="fas fa-eye vehicle-view"></a>
                            &nbsp;
                            &nbsp;
                            <a href="<?=base_url('AdminController/edit_vehicle/'.$val->id) ?>" target="blank" data-id="<?= $val->id?>" data-brand="<?= $val->brand_name?>" class="fa fa-edit vehicle-edit"></a>
                            &nbsp;
                            &nbsp;
                            <a href="javascript:void(0);" data-id="<?= $val->id?>" class="fa fa-times delete-btn "></a>
                        </td>
                        <?php  ?>
                   </tr>
                <?php $count=$count+1; endforeach;?>
                </tbody>
            </table>
      </div>
</div>

<!-- edit-modal -->
<!-- Button trigger modal -->
<div class="modal fade" id="v-edit-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Vehicle</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="update-Vehicle-Form" action="">
                        <input type="hidden" name="vh_id" id="vh_id">
                        <div class="form-group">
                            <!-- <label for="Brand name">Car brand</label> -->
                                <!-- <select name="v_brand" id="v_brand" class="form-control">
                                    <php foreach($brands_result as $keys): ?>
                                        <option value="<php $keys['id'] ?>"><= $bdname = $keys['brand_name'] ?></option>
                                    <php endforeach;?>
                                </select> -->
                            <h2 class="text-center" name="v_brand" id="v_brand"></h2>
                        </div>
                        <div class="form-group">
                            <label for="Brand name">Car name</label>
                            <input type="text" name="v_name" id="v_name" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="Brand name">Car model</label>
                            <input type="text" name="v_model" id="v_model" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="Brand name">Car model</label>
                            <input type="text" name="v_ymodel" id="v_ymodel" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="vehicle">Price</label>
                            <div class="input-group mb-3 ">
                                <div class="input-group-prepend">
                                    <span class="input-group-text">Php</span>
                                </div>
                                <input type="text" class="form-control" id="v_price" name="v_price"  aria-label="Amount (to the nearest dollar)">
                                <div class="input-group-append">
                                    <span class="input-group-text">.00</span>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Brand name">Car description</label>
                            <textarea name="v_desc" id="v_desc" class="form-control"cols="30" rows="5"></textarea>
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


    <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Vehicle</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="deleteForm" method="post">
                        <input type="hidden" name="d_id" id="d_id">
                            <h1>Delete this item</h1>
                        <div class="form-group">
                            <input type="submit" name="submit" class="btn btn-primary">
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
jQuery(document).ready( function() {
    jQuery('#car_table').DataTable();

    // $('').on('click',function(){

    //     $('#v-edit-modal').modal('vehicle);
    // });

    $(document).on('click','.delete-btn', function(e){
        var brand_id_del = $(this).data('id');
        var row = $(this).closest('tr');

        $('#d_id').val(brand_id_del);
        $('#deleteModal').modal('show');

    });

    $('#deleteForm').on('submit',function(e){
        e.preventDefault();

        let d_id = $('#d_id').val();
        let r_id = $(this).closest('tr');

        $.ajax({
            type:'POST',
            url:'AdminController/delete_car',
            dataType:'JSON',
            data:{d_id:d_id},
            success:function(data)
            { 

                $('tr[rows-id="'+data+'"]').remove();
                alertify.success('Item successfully deleted !');
                $('#deleteModal').modal('hide');
            }
        })
        
    });


});

</script>
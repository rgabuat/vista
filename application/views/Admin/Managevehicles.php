<div class="panel panel-default">
    <div class="panel-heading"></div>
        <div class="panel-body">
            <table id="car_table" class="display table table-striped text-center">
                <thead class="thead-dark">
                    <tr>
                        <th >#</th>
                        <th >Brand Name</th>
                        <th >Car Name</th>
                        <th>Creation Date</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php $count = 1?>
                <?php foreach($result as $val):?>
                   <tr row-id="<?= $count ?>" rows-id="<?= $val->id ?>">
                        <td><?= $count?></td>
                        <td><?= $val->brand_name?></td>
                        <td><?= $val->name?></td>
                        <td><?= $val->name?></td>
                        <td>
                            <a href="<?=base_url('AdminController/admin_view_car/'.$val->id) ?>" target="blank" data-id="<?= $val->id?>" data-brand="<?= $val->brand_name?>" class="fas fa-eye vehicle-view"></a>
                            &nbsp;
                            &nbsp;
                            <a href="<?=base_url('AdminController/edit_vehicle/'.$val->id) ?>" target="blank" data-id="<?= $val->id?>" data-brand="<?= $val->brand_name?>" class="fa fa-edit vehicle-edit"></a>
                            &nbsp;
                            &nbsp;
                            <a href="javascript:void(0);" data-id="<?= $val->id?>" class="fa fa-times vehicle-delete" ></a>
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
<script>
jQuery(document).ready( function() {
    jQuery('#car_table').DataTable();

    // $('').on('click',function(){

    //     $('#v-edit-modal').modal('vehicle);
    // });

    $(document).on('click','.vehicle-delete',function(e){
        e.preventDefault();
        
        let d_id = $(this).data('id');
        let r_id = $(this).closest('tr');

        $.ajax({
            type:'POST',
            url:'AdminController/delete_car',
            dataType:'JSON',
            data:{d_id:d_id},
            success:function(data)
            { 
                r_id.remove()
                alertify.success('Item successfully deleted !');
            }
        })
        
    })

    // $(document).on('click','.vehicle-edit',function(e){
    //     var v_id = $(this).data('id');
    //     var v_brand = $(this).data('brand');
    //     $.ajax({
    //         type:'POST',
    //         url:'AdminController/edit_vehicle',
    //         data:{v_id:v_id},
    //         dataType:'JSON',
    //         success:function(data)
    //         {
                
    //             $('#v_brand').html(data[0].brand_name);
    //             $('#v_name').val(data[0].name);
    //             $('#v_model').val(data[0].model);
    //             $('#v_desc').val(data[0].description);
    //             $('#v_ymodel').val(data[0].Model_Year);
    //             $('#v_price').val(data[0].price);
    //             $('#vh_id').val(v_id);
    //             $('#vb_id').val(data[0].brand);
    //             $('#v-edit-modal').modal('show');
    //         },
    //         error: function(jqXHR, textStatus, errorThrown){
    //             alert('There is an error');    
    //         }
    //     });
    //     return false;
    // });

});

</script>
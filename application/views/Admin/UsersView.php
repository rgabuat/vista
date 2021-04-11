<div class="panel panel-default">
    <div class="panel-heading"></div>
        <div class="panel-body">
            <table id="data_table" class="display table table-striped text-center">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Mobile</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Date Created</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php $count = 1?>
                <?php foreach($results as $val):?>

                    <tr>
                        <td><?= $count?></td>
                        <td><?= $val->first_name?></td>
                        <td><?= $val->last_name?></td>
                        <td><?= $val->mobile?></td>
                        <td><?= $val->email?></td>
                        <td><?= $val->role == 1  ? 'Admin' : 'User' ?></td>
                        <td><?= $val->date_registered?></td>
                        <td><a href="" target="blank" data-id="" data-brand="" class="fas fa-eye view-info"></a>
                        </td>
                        
                        <?php ?>
                   </tr>
                <?php $count=$count+1; endforeach;?>
                </tbody>
            </table>
      </div>
</div>

<div class="modal fade" id="v-edit-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <div class="d-block">
                        <img src="<?=base_url('assets/v_logo.png') ?>" alt="" srcset="" class="w-50">
                    </div>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-12">
                        <h4 class="modal-title text-center mb-3" id="exampleModalLabel">Customer Information</h5>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <h5 class="text-center mb-2">Personal Information</h5>
                            <div class="row">
                                <div id="person-info" class="col-md-6">
                                    <!-- <p>First Name :<span class="fname"></span> </p>
                                    <p>Last Name  :<span class="lname"></span> </p>
                                    <p>Email      :<span class="email"></span> </p>
                                    <p>Mobile #   :<span class="mobile"></span> </p>
                                    <p>Address    :<span class="address"></span> </p>
                                    <p>State      :<span class="state"></span> </p>
                                    <p>Zip code   :<span class="zipcode"></span> </p> -->
                                </div>
                                <div class="col-md-6">
                                    <p>test</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary del">CONFIRM</button>
                    <button type="button" class="btn btn-primary del">DECLINE</button>
                </div>
            </div>
        </div>
    </div>

<script>
 jQuery('#data_table').DataTable();



</script>
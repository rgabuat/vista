<div class="container-fluid">

<?php  if(isset($_SESSION['is_logged_in']) && $_SESSION['role'] == 1) : ?>
    <div class="row">
        <div class="col-12">
                <div class="row">
                <div class="col-sm-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                        <p class="text-center"><span><b>Brands</b></span></p>
                            <h1 class="text-center"><?= $brands_count;?></h1>
                        </div>
                        <div class="card-footer text-center"><a href="#">Click me</a></div>
                    </div>
                </div>
                <div class="col-sm-4 mb-3">
                    <div class="card">
                            <div class="card-body">
                            <p class="text-center"><span><b>Cars</b></span></p>
                                <h1 class="text-center"><?= $cars_count?></h1>
                            </div>
                            <div class="card-footer text-center"><a href="#">Click me</a></div>
                        </div>
                </div>
                <div class="col-sm-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                        <p class="text-center"><span><b>Reservations</b></span></p>
                            <h1 class="text-center">0</h1>
                        </div>
                        <div class="card-footer text-center"><a href="#">Click me</a></div>
                    </div>
                </div>
                <div class="col-sm-4 mb-3">
                    <div class="card">
                        <div class="card-body">
                        <p class="text-center"><span><b>Reports</b></span></p>
                            <h1 class="text-center">0</h1>
                        </div>
                        <div class="card-footer text-center"><a href="#">Click me</a></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endif ?>
<?php  if(isset($_SESSION['is_logged_in']) && $_SESSION['role'] == 2) : ?>
<div class="panel panel-default">
    <div class="panel-heading"></div>
        <div class="panel-body">
            <table id="data_table" class="display table table-striped text-center">
                <thead class="thead-dark">
                    <tr>
                    
                        <th>#</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Vehicle</th>
                        <th>From date</th>
                        <th>To date</th>
                        <th>Posting date</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                <?php $count = 1?>
                <?php foreach($sess_results as $val):?>
                   <tr>
                        <td><?= $count?></td>
                        <td><?= $val->fname?></td>
                        <td><?= $val->email?></td>
                        <td><a href="<?= base_url('AdminController/admin_view_car/'.$val->vh_id)?>" target="blank"><?= $val->cmodel?></a></td>
                        <td><?= $val->cdateform?></td>
                        <td><?= $val->cdateto?></td>
                        <td><?= $val->created_at?></td>
                        <td><?php
                        
                        if($val->status == 0)
                        {
                            echo '<button class="btn btn-warning">PENDING</button>';
                        }
                        else if ($val->status == 1)
                        {
                            echo '<button class="btn btn-success">CONFIRMED</button>';
                        }
                        else 
                        {
                            echo '<button class="btn btn-danger">DECLINED</button>';
                        }


                        ?></td>
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
<?php endif;?>
<script>
 jQuery('#data_table').DataTable();
</script>

</div>
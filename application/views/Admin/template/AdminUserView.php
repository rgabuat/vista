<style>
p,strong
{
    margin:0;
    text-transform:uppercase;
}

.btn-custom 
    {
      background:#2C1771;
      border-radius:unset;
      color:#fff;
    }
    .btn-custom:hover
    {
      background:#fff;
      border-radius:unset;
      border:1px solid #2C1771;
      color:#2C1771;
    }
</style>

<div class="container my-5">
<?php foreach($results as $rows): ?>
<div class="card">
    <div class="card-header">
        <div class="row align-items-center ">
            <div class="col-md-6 justify-content-start">
                <img src="<?= base_url('assets/v_logo.png') ?>" class="w-50" alt="" > 
            </div>
            <div class="col-md-6 justify-content-end">
                <div class="d-block">
                    <h5>VISTA RENT A CAR</h5>
                    <p class="m-0"><span>495 Rizal ave. West tapinac Olongapo City 2200 Zambales</span></p>
                </div>
            </div>
        </div>
    </div>
    <div class="card-body">
         <div class="row no-gutters">
             <div class="col-12 ">
                 <h2 class="text-center my-4" style="color:#2C1771;"><strong>Customer Information</strong></h2>
             </div>
         </div>
         <div class="row ">
             <div class="col-12 ">
                <div class="card-header" style="background-color:#2C1771; color:#ffff;">
                    <span><strong>Customer General Information</strong></span>
                </div>
                <div class="row no-gutters py-3">
                    <div class="col-md-6 py-1">
                        <div class="row no-gutters">
                            <div class="col-4">
                                <p><span><strong>First Name:</strong></span></p>
                            </div>
                            <div class="col-8">
                                <p><span><?= $rows['first_name'];?></span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 py-1">
                        <div class="row no-gutters">
                            <div class="col-4">
                                <p><span><strong>Last Name:</strong></span></p>
                            </div>
                            <div class="col-8">
                                <p><span><?= $rows['last_name'];?></span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 py-1">
                        <div class="row no-gutters">
                            <div class="col-4">
                                <p><span><strong>Email:</strong></span></p>
                            </div>
                            <div class="col-8">
                                <p><span><?= $rows['email'];?></span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 py-1">
                        <div class="row no-gutters">
                            <div class="col-4">
                                <p><span><strong>Mobile #:</strong></span></p>
                            </div>
                            <div class="col-8">
                                <p><span><?= $rows['mobile'];?></span></p>
                            </div>
                        </div>
                    </div>
                    
                </div>
             </div>    
         </div>
         <div class="row ">
             <div class="col-12 ">
                <div class="card-header" style="background-color:#2C1771; color:#ffff;">
                    <span><strong>Address Information</strong></span>
                </div>
                <div class="row no-gutters py-3">
                    <div class="col-md-6 py-1">
                        <div class="row no-gutters">
                            <div class="col-4">
                                <p><span><strong>House No.:</strong></span></p>
                            </div>
                            <div class="col-8">
                                <p><span><?= $rows['house_no'];?></span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 py-1">
                        <div class="row no-gutters">
                            <div class="col-4">
                                <p><span><strong>Village:</strong></span></p>
                            </div>
                            <div class="col-8">
                                <p><span><?= $rows['village'];?></span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 py-1">
                        <div class="row no-gutters">
                            <div class="col-4">
                                <p><span><strong>City:</strong></span></p>
                            </div>
                            <div class="col-8">
                                <p><span><?= $rows['city'];?></span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 py-1">
                        <div class="row no-gutters">
                            <div class="col-4">
                                <p><span><strong>State:</strong></span></p>
                            </div>
                            <div class="col-8">
                                <p><span><?= $rows['state'];?></span></p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 py-1">
                        <div class="row no-gutters">
                            <div class="col-4">
                                <p><span><strong>Zip Code:</strong></span></p>
                            </div>
                            <div class="col-8">
                                <p><span><?= $rows['zip_code'];?></span></p>
                            </div>
                        </div>
                    </div>
                </div>
             </div>    
         </div>
         <div class="row ">
             <div class="col-12 ">
                <div class="card-header" style="background-color:#2C1771; color:#ffff;">
                    <span><strong>Customer General Information</strong></span>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                        <a href="<?= base_url($rows['valid_id']);?>">
                            <img src="<?= base_url($rows['valid_id']);?>" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <a href="<?= base_url($rows['billing']);?>">
                            <img src="<?= base_url($rows['billing']);?>" class="img-fluid" alt="">
                        </a>
                    </div>
                    <div class="col-md-4 col-sm-12">
                        <a href="<?= base_url($rows['selfie']);?>">
                            <img src="<?= base_url($rows['selfie']);?>" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>
             </div>    
         </div>
    </div>
</div>
<div class="row">
    <div class="col-12 text-center my-5">
        <button id="print-btn" class="btn btn-secondary w-25"><span>Print</span></button>
        <button id="confirm-btn" data-id="<?=$rows['id'] ?>" class="btn btn-success w-25"><span>CONFIRM</span></button>
        <button id="decline-btn" data-id="<?=$rows['id'] ?>" class="btn btn-danger w-25"><span>DECLINE</span></button>
    </div>
</div>
<?php endforeach; ?>
</div>

<script>

$(document).ready(function(){
    $('#print-btn').on('click',function(){
        window.print();
    });

    $('#confirm-btn').on('click',function(e){
        e.preventDefault();
        let data_id = $(this).data('id');
        $.ajax({
            url:'<?= base_url('AdminController/user_confirmation')?>',
            type:'POST',
            data:{data_id:data_id},
            dataType:'JSON',
            success:function(data)
            {
                console.log(data);
                alertify.success('Confirmed');
            }

        });
    });

    $('#decline-btn').on('click',function(e){
        e.preventDefault();
        let data_id = $(this).data('id');
        $.ajax({
            url:'<?= base_url('AdminController/decline_booking')?>',
            type:'POST',
            data:{data_id:data_id},
            dataType:'JSON',
            success:function(data)
            {
                console.log(data);
                alertify.success('Customer Declined');
            }

        });
    });
});

</script>
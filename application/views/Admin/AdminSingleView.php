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
<?php foreach($car_info as $rows): ?>
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
                 <h2 class="text-center my-4" style="color:#2C1771;"><strong>Car Information</strong></h2>
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
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 py-1">
                        <div class="row no-gutters">
                            <div class="col-4">
                                <p><span><strong>Last Name:</strong></span></p>
                            </div>
                            <div class="col-8">
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 py-1">
                        <div class="row no-gutters">
                            <div class="col-4">
                                <p><span><strong>Email:</strong></span></p>
                            </div>
                            <div class="col-8">
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 py-1">
                        <div class="row no-gutters">
                            <div class="col-4">
                                <p><span><strong>Mobile #:</strong></span></p>
                            </div>
                            <div class="col-8">
                               
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
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 py-1">
                        <div class="row no-gutters">
                            <div class="col-4">
                                <p><span><strong>Village:</strong></span></p>
                            </div>
                            <div class="col-8">
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 py-1">
                        <div class="row no-gutters">
                            <div class="col-4">
                                <p><span><strong>City:</strong></span></p>
                            </div>
                            <div class="col-8">
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 py-1">
                        <div class="row no-gutters">
                            <div class="col-4">
                                <p><span><strong>State:</strong></span></p>
                            </div>
                            <div class="col-8">
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 py-1">
                        <div class="row no-gutters">
                            <div class="col-4">
                                <p><span><strong>Zip Code:</strong></span></p>
                            </div>
                            <div class="col-8">
                                
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
                        
                    </div>
                    <div class="col-md-4 col-sm-12">
                       
                    </div>
                    <div class="col-md-4 col-sm-12">
                        
                    </div>
                </div>
             </div>    
         </div>
         <!-- reservation details -->
         <div class="row ">
             <div class="col-12 ">
                <div class="card-header" style="background-color:#2C1771; color:#ffff;">
                    <span><strong>Car Details</strong></span>
                </div>
                <div class="row no-gutters py-3">
                    <div class="col-md-6 py-1">
                        <div class="row no-gutters">
                            <div class="col-4">
                                <p><span><strong>Make:</strong></span></p>
                            </div>
                            <div class="col-8">
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 py-1">
                        <div class="row no-gutters">
                            <div class="col-4">
                                <p><span><strong>Model:</strong></span></p>
                            </div>
                            <div class="col-8">
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 py-1">
                        <div class="row no-gutters">
                            <div class="col-4">
                                <p><span><strong>Manufacturing Date:</strong></span></p>
                            </div>
                            <div class="col-8">
                               
                            </div>
                        </div>
                    </div>
                </div>
             </div>    
         </div>
          <!-- car details -->
          <div class="row ">
             <div class="col-12 ">
                <div class="card-header" style="background-color:#2C1771; color:#ffff;">
                    <span><strong>Reservation Details</strong></span>
                </div>
                <div class="row no-gutters py-3">
                    <div class="col-md-6 py-1">
                        <div class="row no-gutters">
                            <div class="col-4">
                                <p><span><strong>Rental Days:</strong></span></p>
                            </div>
                            <div class="col-8">
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 py-1">
                        <div class="row no-gutters">
                            <div class="col-4">
                                <p><span><strong>Total Price:</strong></span></p>
                            </div>
                            <div class="col-8">
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 py-1">
                        <div class="row no-gutters">
                            <div class="col-4">
                                <p><span><strong>Location From:</strong></span></p>
                            </div>
                            <div class="col-8">
                              
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 py-1">
                        <div class="row no-gutters">
                            <div class="col-4">
                                <p><span><strong>Destination:</strong></span></p>
                            </div>
                            <div class="col-8">
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 py-1">
                        <div class="row no-gutters">
                            <div class="col-4">
                                <p><span><strong>Rental Date Start:</strong></span></p>
                            </div>
                            <div class="col-8">
                               
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 py-1">
                        <div class="row no-gutters">
                            <div class="col-4">
                                <p><span><strong>Rental Date End:</strong></span></p>
                            </div>
                            <div class="col-8">
                                
                            </div>
                        </div>
                    </div>
                </div>
             </div>    
         </div>
    </div>
</div>
<!-- <div class="row">
    <div class="col-12 text-center my-5">
        <button id="print-btn" class="btn btn-secondary w-25"><span>Print</span></button>
        <button id="confirm-btn" data-id="" class="btn btn-success w-25"><span>CONFIRM</span></button>
        <button id="decline-btn" data-id="" class="btn btn-danger w-25"><span>DECLINE</span></button>
    </div>
</div> -->
<?php endforeach; ?>
</div>

<script>

$(document).ready(function(){
  
});

</script>
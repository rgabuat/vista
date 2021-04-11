<?php $path = base_url('assets/no-image.png');?>
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

img.car-slides
{
    height:250px !important;
    object-fit:cover !important;
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
             <div class="col-12 " >
                 <h2 class="text-center my-4" style="color:#2C1771;"><strong>Car Information</strong></h2>
             </div>
             <section class="car_info my-5 col-12">
        <div class="container-lg">
                <div class="row">
                    <div class="col-lg-6 col-md-3 ">
                        <div class="card" style="width: 100%;">
                            <img class="card-img-top car-slide" src="<?= !empty($rows->vimg1)? base_url($rows->vimg5) : $path?>" alt="Card image cap">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <ul class="d-flex p-0 mt-md-3 justify-content-lg-start justify-content-sm-center">
                            <li class="text-center" >
                                    <h3 class="d-flex align-items-center justify-content-center border rounded-circle mx-3"style="width:60px; height:60px;"><i class="fas fa-gas-pump "></i></h3>
                                    <strong><?= isset($rows->fuel) == 1 ? 'PETROL' : 'DIESEL'?></strong><br>
                                </li>
                                <li class="text-center">
                                
                                    <h3 class="d-flex align-items-center justify-content-center border rounded-circle mx-3"style="width:60px; height:60px;"><i class="fa fa-cogs"></i></h3>
                                    <strong><?= isset($rows->engine) == 1 ? 'AUTOMATIC' : 'MANUAL'?></strong><br>
                                </li>
                                <li class="text-center">
                                
                                    <h3 class="d-flex align-items-center justify-content-center border rounded-circle mx-3"style="width:60px; height:60px;"><i class="fas fa-road"></i></h3>
                                    <strong>Unlimited</strong><br>
                                </li>
                            </ul>
                        <hr>


                        
                      

                        <div class="row">
                            <div class="col-12 mt-2">
                            <input type="hidden" name="car_id" id="car_id" value="<?= $this->uri->segment(3); ?>">
                            <p class="car_name" data-name="<?= $rows->brand_name?>" style="font-size:22px;"><strong><i class="fas fa-car mr-2"></i>Brand:</strong> <?= $rows->brand_name?></p>
                        <p class="car_model" data-model="<?= $rows->model?>"style="font-size:22px;"><strong><i class="fas fa-industry mr-2"></i>Model:</strong> <?= $rows->model?></p>
                        <p class="car_year" data-year="<?= $rows->Model_Year?>"style="font-size:22px;"><strong><i class="far fa-calendar-alt mr-2"></i>Year:</strong> <?= $rows->Model_Year?></p>
                        <h2 class="my-3"><span class=" p-2 ">&#8369; <?= $rows->price2?>: 6 HOURS</span></h2>
                        <h2 class="my-3"><span class=" p-2 ">&#8369; <?= $rows->price1?>: 12 HOURS</span></h2>
                        <h2 class="my-3"><span class=" p-2 ">&#8369; <?= $rows->price?>: 1 DAY </span></h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

</section>
         </div>
        
         <div class="row ">
             <div class="col-12 ">
                <div class="card-header" style="background-color:#2C1771; color:#ffff;">
                    <span><strong>Car Description</strong></span>
                    
                </div>
                
                <div class="col-12 text-center">
                  <?= $rows->description ; if (empty($rows->description)) {
                    echo "NO DESCRIPTION";
            }?>
                </div>
                
         
         <!-- reservation details -->
         <div class="row ">
             <div class="col-12 ">
                <div class="card-header" style="background-color:#2C1771; color:#ffff;">
                    <span><strong>Car Equipments</strong></span>
                    

                </div>
                <section class="price mb-5">
      
        <div class="container-lg">
                <div class="row">
                    <div class="col-12 mb-5">
                       
                    </div>
                </div>
                <div class="row justify-content-center mb-3"> <h2>Equipments</h2></div>
                <hr class="light-sep bg">
                <div class="row accesories">
                    <p class="col-md-6 col-sm-12 text-muted"><?= $rows->acc1 == '1'? ' <span><i class="far fa-check-circle  text-success"></i></span>' :  '<span><i class="far fa-times-circle text-danger"></i></span>'?>Air Conditioner</p>
                    <p class="col-md-6 col-sm-12 text-muted"><?= $rows->acc2 == '1'? ' <span><i class="far fa-check-circle  text-success"></i></span>' :  '<span><i class="far fa-times-circle text-danger"></i></span>'?>Power Steering</p>
                    <p class="col-md-6 col-sm-12 text-muted"><?= $rows->acc3 == '1'? ' <span><i class="far fa-check-circle  text-success"></i></span>' :  '<span><i class="far fa-times-circle text-danger"></i></span>'?>CD Player</p>
                    <p class="col-md-6 col-sm-12 text-muted"><?= $rows->acc4 == '1'? ' <span><i class="far fa-check-circle  text-success"></i></span>' :  '<span><i class="far fa-times-circle text-danger"></i></span>'?>Power Door Locks</p>
                    <p class="col-md-6 col-sm-12 text-muted"><?= $rows->acc5 == '1'? ' <span><i class="far fa-check-circle  text-success"></i></span>' :  '<span><i class="far fa-times-circle text-danger"></i></span>'?>Driver Airbag</p>
                    <p class="col-md-6 col-sm-12 text-muted"><?= $rows->acc6 == '1'? ' <span><i class="far fa-check-circle  text-success"></i></span>' :  '<span><i class="far fa-times-circle text-danger"></i></span>'?>Leather Seats</p>
                    <p class="col-md-6 col-sm-12 text-muted"><?= $rows->acc7 == '1'? ' <span><i class="far fa-check-circle  text-success"></i></span>' :  '<span><i class="far fa-times-circle text-danger"></i></span>'?>Central Locking</p>
                    <p class="col-md-6 col-sm-12 text-muted"><?= $rows->acc8 == '1'? ' <span><i class="far fa-check-circle  text-success"></i></span>' :  '<span><i class="far fa-times-circle text-danger"></i></span>'?>AntiLock Braking System</p>
                    <p class="col-md-6 col-sm-12 text-muted"><?= $rows->acc9 == '1'? ' <span><i class="far fa-check-circle  text-success"></i></span>' :  '<span><i class="far fa-times-circle text-danger"></i></span>'?>Passenger Airbag</p>
                    <p class="col-md-6 col-sm-12 text-muted"><?= $rows->acc10 == '1'? ' <span><i class="far fa-check-circle  text-success"></i></span>' :  '<span><i class="far fa-times-circle text-danger"></i></span>'?>Crash Sensor</p>
                    <p class="col-md-6 col-sm-12 text-muted"><?= $rows->acc11 == '1'? ' <span><i class="far fa-check-circle  text-success"></i></span>' :  '<span><i class="far fa-times-circle text-danger"></i></span>'?>Brake Assist</p>
                    <p class="col-md-6 col-sm-12 text-muted"><?= $rows->acc12 == '1'? ' <span><i class="far fa-check-circle  text-success"></i></span>' :  '<span><i class="far fa-times-circle text-danger"></i></span>'?>Power Windows</p>
            </div>
</section>
                
          <!-- car details -->
          <div class="row ">
             <div class="col-12 ">
                <div class="card-header" style="background-color:#2C1771; color:#ffff;">
                    <span><strong>CAR IMAGES</strong> </span>
                    
                   
               
<!-- <div class="row">
    <div class="col-12 text-center my-5">
        <button id="print-btn" class="btn btn-secondary w-25"><span>Print</span></button>
        <button id="confirm-btn" data-id="" class="btn btn-success w-25"><span>CONFIRM</span></button>
        <button id="decline-btn" data-id="" class="btn btn-danger w-25"><span>DECLINE</span></button>
    </div>
</div> -->



<?php endforeach; ?>

</div>
<div class="row">
    <div class="col-lg-4 mb-2">
        <img class="card-img-top car-slides" src="<?= !empty($rows->vimg1)? base_url($rows->vimg1) : $path?>" alt="Card image cap">
    </div>
    <div class="col-lg-4 mb-2">
        <img class="card-img-top car-slides" src="<?= !empty($rows->vimg2)? base_url($rows->vimg2) : $path?>" alt="Card image cap">
    </div>
    <div class="col-lg-4 mb-2">
        <img class="card-img-top car-slides" src="<?= !empty($rows->vimg3)? base_url($rows->vimg3) : $path?>" alt="Card image cap">
    </div>
    <div class="col-lg-4 mb-2">
        <img class="card-img-top car-slides" src="<?= !empty($rows->vimg4)? base_url($rows->vimg4) : $path?>" alt="Card image cap">
    </div>
    <div class="col-lg-4 mb-2">
        <img class="card-img-top car-slides " src="<?= !empty($rows->vimg5)? base_url($rows->vimg5) : $path?>" alt="Card image cap">
    </div>
</div>

<script>

$(document).ready(function(){
  
});

</script>
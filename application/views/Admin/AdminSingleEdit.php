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
<?php foreach($ids as $rows): ?>
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
                 <h2 class="text-center my-4" style="color:#2C1771;"><strong>Edit Car Information</strong></h2>
             </div>
         </div>
         <!-- reservation details -->
         <div class="row ">
             <div class="col-12 ">
                <div class="card-header" style="background-color:#2C1771; color:#ffff;">
                    <span><strong>Car Details</strong></span>
                </div>
                <form method="POST" id="editcarForm" enctype="multiform/form-data" >
                    <input type="hidden" value="<?=$rows->id ?>" id="vh_id" name="vh_id">
                    <div class="row no-gutters py-3">
                        <div class="col-md-4 py-1">
                            <div class="row no-gutters">
                                <div class="col-4">
                                    <p><span><strong>Make:</strong></span></p>
                                </div>
                                <div class="col-8">
                                    <div class="form-group">
                                        <input type="text" value="<?= $rows->brand_name?>" class="form-control" name="u_brandname">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 py-1">
                            <div class="row no-gutters">
                                <div class="col-4">
                                    <p><span><strong>Model:</strong></span></p>
                                </div>
                                <div class="col-8">
                                    <div class="form-group">
                                        <input type="text" value="<?= $rows->model?>" class="form-control" name="u_model">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 py-1">
                            <div class="row no-gutters">
                                <div class="col-4">
                                    <p><span><strong>Year:</strong></span></p>
                                </div>
                                <div class="col-8">
                                    <div class="form-group">
                                        <input type="text" value="<?= $rows->Model_Year?>" class="form-control" name="u_year">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-md-6 py-1">
                            <div class="row no-gutters">
                                <div class="col-4">
                                    <p><span><strong>Manufacturing Date:</strong></span></p>
                                </div>
                                <div class="col-8">
                                    <div class="form-group">
                                        <input type="text" value="<?= $rows->Model_Year?>" class="form-control" name="u_brandname">
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <div class="col-md-12 py-1">
                            <div class="row no-gutters">
                                <div class="col-2">
                                    <p><span><strong>Car description:</strong></span></p>
                                </div>
                                <div class="col-10">
                                    <div class="form-group">
                                        <textarea name="u_desc" cols="30" rows="5" class="form-control" style="resize:none;"><?= $rows->Model_Year?></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 py-1">
                            <div class="row no-gutters">
                                <div class="col-12">
                                    <p class="text-center "><span><strong>Reservation Price:</strong></span></p>
                                    <hr class="w-50">
                                </div>
                             
                                <div class="col-md-6 py-1">
                                    <div class="row no-gutters">
                                        <div class="col-4">
                                            <p><span><strong>Price for 6hrs :</strong></span></p>
                                        </div>
                                        <div class="col-8">
                                            <div class="input-group mb-3 col-sm-8 p-0">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Php</span>
                                                </div>
                                                <input type="number" class="form-control" id="u_vprice1" name="u_vprice1" value="<?= $rows->price?>" aria-label="Amount (to the nearest dollar)">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 py-1">
                                    <div class="row no-gutters">
                                        <div class="col-4">
                                            <p><span><strong>Price for 12hrs :</strong></span></p>
                                        </div>
                                        <div class="col-8">
                                            <div class="input-group mb-3 col-sm-8 p-0">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Php</span>
                                                </div>
                                                <input type="number" class="form-control" id="u_vprice2" name="u_vprice2" value="<?= $rows->price1?>" aria-label="Amount (to the nearest dollar)">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 py-1">
                                    <div class="row no-gutters">
                                        <div class="col-4">
                                            <p><span><strong>Price for a Day :</strong></span></p>
                                        </div>
                                        <div class="col-8">
                                            <div class="input-group mb-3 col-sm-8 p-0">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Php</span>
                                                </div>
                                                <input type="number" class="form-control" id="u_vprice3" name="u_vprice3" value="<?= $rows->price2 ?>" aria-label="Amount (to the nearest dollar)">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">.00</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                
                                    <!-- <div class="form-group">
                                        <p><span >Pricing</span></p>
                                        <label for="vehicle">Price for 6hrs</label>
                                        <div class="input-group mb-3 col-sm-8 p-0">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">Php</span>
                                            </div>
                                            <input type="number" class="form-control" id="vprice" name="vprice"  aria-label="Amount (to the nearest dollar)">
                                            <div class="input-group-append">
                                                <span class="input-group-text">.00</span>
                                            </div>
                                        </div>
                                    </div> -->
                             
                            </div>
                        </div>
                        
                        <div class="col-md-12 py-1">
                            <div class="row no-gutters">
                                <div class="col-12">
                                    <p class="text-center"><span><strong>Car Equipments:</strong></span></p>
                                    <hr class="w-50">
                                </div>
                                <div class="col-md-12 py-1">
                                    <div class="row no-gutters">
                                        <div class="col-md-6">
                                            <p class="text-center"><span><strong>Fuel Type:</strong></span></p>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="custom-control custom-radio">
                                                            <input type="radio" id="customRadio1" <?= $rows->fuel == 1 ?  'checked' : '' ?>  name="u_gas" class="custom-control-input" value="0">
                                                            <label class="custom-control-label" for="customRadio1">PETROL / UNLEADED</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                    <div class="custom-control custom-radio">
                                                            <input type="radio" id="customRadio2" name="u_gas" <?= $rows->fuel == 1 ?  'checked' : '' ?> class="custom-control-input" value="1">
                                                            <label class="custom-control-label" for="customRadio2">Diesel</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        <div class="col-md-6">
                                            <p class="text-center"><span><strong>Transmission:</strong></span></p>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="custom-control custom-radio">
                                                                <input type="radio" id="automatic" <?= $rows->engine == 0 ?  'checked' : '' ?> name="u_transmission" class="custom-control-input" value="0">
                                                                <label class="custom-control-label" for="automatic">Automatic transmission</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="custom-control custom-radio">
                                                                <input type="radio" id="manual" <?= $rows->engine == 1 ?  'checked' : '' ?> name="u_transmission" class="custom-control-input" value="1">
                                                                <label class="custom-control-label" for="manual">Manual transmission</label>
                                                        </div>
                                                    </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" <?= $rows->acc1 == 1 ?  'checked' : '' ?> name="u_chk1" class="custom-control-input" id="customCheck1">
                                        <label class="custom-control-label" for="customCheck1">Air Conditioner</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" <?= $rows->acc2 == 1 ?  'checked' : '' ?> name="u_chk2" class="custom-control-input" id="customCheck2">
                                        <label class="custom-control-label" for="customCheck2">Power Steering</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" <?= $rows->acc3 == 1 ?  'checked' : '' ?> name="u_chk3" class="custom-control-input" id="customCheck3">
                                        <label class="custom-control-label" for="customCheck3">CD Player</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" <?= $rows->acc4 == 1 ?  'checked' : '' ?> name="u_chk4"class="custom-control-input" id="customCheck4">
                                        <label class="custom-control-label" for="customCheck4">Power Door Locks</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" <?= $rows->acc5 == 1 ?  'checked' : '' ?> name="u_chk5" class="custom-control-input" id="customCheck5">
                                        <label class="custom-control-label" for="customCheck5">Driver Airbag</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" <?= $rows->acc6 == 1 ?  'checked' : '' ?> name="u_chk6"  class="custom-control-input" id="customCheck6">
                                        <label class="custom-control-label" for="customCheck6">Leather Seats</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" <?= $rows->acc7 == 1 ?  'checked' : '' ?> name="u_chk7" class="custom-control-input" id="customCheck7">
                                        <label class="custom-control-label" for="customCheck7">Central Locking</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" <?= $rows->acc8 == 1 ?  'checked' : '' ?> name="u_chk8" class="custom-control-input" id="customCheck8">
                                        <label class="custom-control-label" for="customCheck8">AntiLock Braking System</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" <?= $rows->acc9 == 1 ?  'checked' : '' ?> name="u_chk9" class="custom-control-input" id="customCheck9">
                                        <label class="custom-control-label" for="customCheck9">Passenger Airbag</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" <?= $rows->acc10 == 1 ?  'checked' : '' ?> name="u_chk10" class="custom-control-input" id="customCheck10">
                                        <label class="custom-control-label" for="customCheck10">Crash Sensor</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" <?= $rows->acc11 == 1 ?  'checked' : '' ?> name="u_chk11" class="custom-control-input" id="customCheck11">
                                        <label class="custom-control-label" for="customCheck11">Brake Assist</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" <?= $rows->acc12 == 1 ?  'checked' : '' ?> name="u_chk12" class="custom-control-input" id="customCheck12">
                                        <label class="custom-control-label" for="customCheck12">Power Windows</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- car-img -->
                        <div class="col-md-12 py-1">
                            <div class="row no-gutters">
                            <div class="col-12">
                                    <p class="text-center"><span><strong>Car Images:</strong></span></p>
                                    <hr class="w-50">
                                </div>
                                <div class="col-md-4 p-2">
                                    <a href="<?= !empty($rows->vimg1)? base_url($rows->vimg1) : $path?>" >
                                        <div class="card mb-3" style="width: 100%;">
                                            <img id="v1" class="card-img-top car-slides" src="<?= !empty($rows->vimg1)? base_url($rows->vimg1) : $path?>" alt="Card image cap" class="img-fluid">
                                        </div>
                                    </a>
                                    <div class="input-group mb-3 col-sm-12 p-0">
                                        <div class="custom-file">
                                            <label class="custom-file-label" for="test">Choose file</label>
                                            <input type="file" name="u_img1" class="custom-file-input " id="img1">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 p-2">
                                    <a href="<?= !empty($rows->vimg2)? base_url($rows->vimg2) : $path?>" > 
                                        <div class="card mb-3" style="width: 100%;">
                                            <img id="v2" class="card-img-top car-slides" src="<?= !empty($rows->vimg2)? base_url($rows->vimg2) : $path?>" alt="Card image cap" class="img-fluid v2">
                                        </div>
                                    </a>
                                    <div class="input-group mb-3 col-sm-12 p-0">
                                        <div class="custom-file">
                                            <label class="custom-file-label" for="inputGroupFile03">Choose file</label>
                                            <input type="file" name="u_img2" class="custom-file-input " id="img2">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 p-2">
                                    <a href="<?= !empty($rows->vimg3)? base_url($rows->vimg3) : $path?>" >
                                        <div class="card mb-3" style="width: 100%;">
                                            <img id="v3" class="card-img-top car-slides" src="<?= !empty($rows->vimg3)? base_url($rows->vimg3) : $path?>" alt="Card image cap" class="img-fluid v3">
                                        </div>
                                    </a>
                                    <div class="input-group mb-3 col-sm-12 p-0">
                                        <div class="custom-file">
                                            <label class="custom-file-label" for="inputGroupFile03">Choose file</label>
                                            <input type="file" name="u_img3" class="custom-file-input " id="img3">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 p-2">
                                    <a href="<?= !empty($rows->vimg4)? base_url($rows->vimg4) : $path?>" >
                                        <div class="card mb-3" style="width: 100%;">
                                            <img id="v4" class="card-img-top car-slides" src="<?= !empty($rows->vimg4)? base_url($rows->vimg4) : $path?>" alt="Card image cap" class="img-fluid v4">
                                        </div>
                                    </a>
                                    <div class="input-group mb-3 col-sm-12 p-0">
                                        <div class="custom-file">
                                            <label class="custom-file-label" for="inputGroupFile03">Choose file</label>
                                            <input type="file" name="u_img4" class="custom-file-input " id="img4">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4 p-2">
                                    <a href="<?= !empty($rows->vimg5)? base_url($rows->vimg5) : $path?>" >
                                        <div class="card mb-3" style="width: 100%;">
                                            <img id="v5" class="card-img-top car-slides" src="<?= !empty($rows->vimg5)? base_url($rows->vimg5) : $path?>" alt="Card image cap" class="img-fluid v5">
                                        </div>
                                    </a>
                                    <div class="input-group mb-3 col-sm-12 p-0">
                                        <div class="custom-file">
                                            <label class="custom-file-label" for="inputGroupFile03">Choose file</label>
                                            <input type="file" name="u_img5" class="custom-file-input " id="img5">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="form-group">
                            <input type="submit" value="SUBMIT" class="btn btn-custom">
                        </div>
                    </div>
                </form>
             </div>    
         </div>
          <!-- car details -->
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

    $('#editcarForm').submit(function(e){
        e.preventDefault();

        let vh_id = $('#vh_id').val();
        
       
        $.ajax({
            type:'POST',
            url:'<?= base_url('AdminController/update_vehicle/')?>'+vh_id,
            data:new FormData($(this)[0]),
            dataType:'JSON',
            contentType: false, 
            processData: false,
            success:function(data)
            {   
                // $("#addcarForm")[0].reset();
                alertify.success('car created');
                setTimeout(function(){
                    location.reload();
                },1000);
            
            },
            error: function(jqXHR, textStatus, errorThrown){
                alertify.error('There is an error');   
            }
        });
    });

    $("#img1").change(function(e) {
    readURL(this);
    });
    $("#img2").change(function() {
    readURL2(this);
    });
    $("#img3").change(function() {
    readURL3(this);
    });
    $("#img4").change(function() {
    readURL4(this);
    });
    $("#img5").change(function() {
    readURL5(this);
    });

  
});

function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#v1').attr('src', e.target.result);
    }
    reader.readAsDataURL(input.files[0]); // convert to base64 string
  }
}
function readURL2(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#v2').attr('src', e.target.result);
    }
    reader.readAsDataURL(input.files[0]); // convert to base64 string
  }
}

function readURL3(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#v3').attr('src', e.target.result);
    }
    reader.readAsDataURL(input.files[0]); // convert to base64 string
  }
}

function readURL4(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#v4').attr('src', e.target.result);
    }
    reader.readAsDataURL(input.files[0]); // convert to base64 string
  }
}

function readURL5(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();
    
    reader.onload = function(e) {
      $('#v5').attr('src', e.target.result);
    }
    reader.readAsDataURL(input.files[0]); // convert to base64 string
  }
}



</script>
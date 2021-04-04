<?php $path = base_url('assets/no-image.png');?>

<style>

img.car-slide
{
    height:40vh;
    object-fit:cover;
}

.jumbotron
{
    background-repeat:no-repeat;
    background-position:center center;
    background-size:cover;
}

    .next-btn,
    .prev-btn
    {
      padding: 2%;
      color:#fff;
      background: #2C1771;
      border-radius: 50%;
      width: 22px !important;
      height: 22px !important;
    }

ul li 
{
    list-style:none;
}

.accesories span 
{
    margin-right:10px;
}
.light-sep {
    max-width: 80px;
    border: 2px solid gray;
    margin-top: 20px;
    margin-bottom: 40px;
}

.preload {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    margin: auto;
    z-index: 99999;
}

</style>

<div class="loader">
    <img src="<?=base_url('assets/loading-x.gif')?>" class="preload d-none" alt="">
</div>

<?php foreach($result as $rows) : ?>
<section class="head-overlay mt-5 pt-5">
    <div class="jumbotron jumbotron-fluid" style="background-image:linear-gradient(to bottom, rgba(0,0,0,0.6) 0%,rgba(0,0,0,0.6) 100%),url('<?= !empty($rows->vimg5)? base_url($rows->vimg5) : $path?>');">
        <div class="container text-white text-center">
            <h1 class="display-4" ><?= $rows->brand_name?></h1>
            <p class="lead" ><?= $rows->model?></p>
        </div>
    </div>
</section>

<section class="car_info my-5">
        <div class="container-lg">
                <div class="row">
                    <div class="col-lg-6 col-md-12">
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
                        <h2 class="my-3"><span class=" p-2 ">&#8369; <?= $rows->price2?>/Day</span></h2>
                        <input type="hidden" id="p1" value="<?= $rows->price?>">
                        <input type="hidden" id="p2" value="<?= $rows->price1?>">
                        <input type="hidden" id="p3" value="<?= $rows->price2?>">
                        <div class="row">
                            <div class="col-12 mt-2">
                            <input type="hidden" name="car_id" id="car_id" value="<?= $this->uri->segment(3); ?>">
                            <p class="car_name" data-name="<?= $rows->brand_name?>" style="font-size:22px;"><strong><i class="fas fa-car mr-2"></i>Make:</strong> <?= $rows->brand_name?></p>
                        <p class="car_model" data-model="<?= $rows->model?>"style="font-size:22px;"><strong><i class="fas fa-industry mr-2"></i>Model:</strong> <?= $rows->model?></p>
                        <p class="car_year" data-year="<?= $rows->Model_Year?>"style="font-size:22px;"><strong><i class="far fa-calendar-alt mr-2"></i>Year:</strong> <?= $rows->Model_Year?></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

</section>

<section class="price mb-5">
      
            <!-- <div class="container-lg mb-3">
                <div class="card">
                    <div class="card-body">
                        <div class="row no-gutters text-center-sm">
                            <div class="col-lg-6 col-md-6 col-sm-12 border-bottom">
                                    <strong><span >Test</span></strong>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 border-bottom">
                                        <p>test</p>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 border-bottom">
                                    <strong><span >Test1</span></strong>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-12 border-bottom">
                                        <p>test1</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
        
        <div class="container-lg">
                <div class="row">
                    <div class="col-12 mb-5">
                        <p class="card-text car-description turncate-3 text-left"><h3>Car overview</h3><br><?= !empty($rows->description) ? $rows->description : 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s,'  ;?></p>
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

<section>
    <div class="container-lg">
        <div class="card border-0">
            <div class="card-Deader mb-5">
                <h2 class="text-center uppercase">Get your reservation now</h2>
                <hr class="light-sep">
                <img src="<?= base_url('assets/cars.png')?>" alt="" class="img-fluid">
            </div>
            <div class="card-body py-3 " style="background-image: url('<?= base_url('assets/key.png')?>'); background-repeat: no-repeat;">
            <form id="goReserve" action="">
                <div class="row">
                    <div class="col-md-12 col-lg-6">
                    </div>
                    <div class="col-md-12 col-lg-6 justify-content-end">
                        <div class="col-12">
                            <div class="form-group">
                                <label for="id_start_datetime">Location:</label>
                                <div class="input-group date" id="date-from" >
                                    <div class="input-group-prepend">
                                    <span class="input-group-text" ><i class="fas fa-home"></i></span>
                                </div>
                                <input type="text" class="form-control" id="Location_from" placeholder="Username" value="Olongapo" required>
                            </div>
                        </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <label for="id_start_datetime">Destination:</label>
                                <div class="input-group date" id="date-to" >
                                    <div class="input-group-prepend">
                                        <span class="input-group-text" ><i class="fas fa-map-marker-alt"></i></span>
                                    </div>
                                    <input type="text" id="destination_to" class="form-control" placeholder="Destination" required>
                                </div>
                            </div>
                        </div>
                        <div class='col-12'>
                        <div class="form-group">
                            <label for="id_start_datetime">Date from:</label>
                            <div class="input-group date" id="datetimepicker6" >
                                <div class="input-group-addon input-group-append">
                                    <div class="input-group-text">
                                        <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                    </div>
                                </div>
                                <input type="text" value="" class="form-control date-from" readonly required />
                            </div>
                        </div>
                    </div>
                <div class='col-12'>
                    <div class="form-group">
                            <label for="id_start_datetime">Date to:</label>
                            <div class="input-group date" id="datetimepicker7" >
                                <div class="input-group-addon input-group-append">
                                    <div class="input-group-text">
                                        <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                                    </div>
                                </div>
                                <input type="text" class="form-control date_to" readonly placeholder="End of rental" required/>
                            </div>
                        </div>
                        <div class="row">
                    <div class="col-12 text-center my-3">
                        <!-- <a href=""class="btn btn-custom text-uppercase w-25 submit_val">Reserve now</a> -->
                        <input type="submit"  class="btn btn-custom text-uppercase w-50 sub_val" value="RESERVE NOW">
                    </div>
                    </div>
                    <input type="hidden" class="form-control days-here" placeholder="Show Days difference here" >
                    <input type="hidden" class="form-control time-here" placeholder="Show Hours difference here" >
                    <input type="hidden" class="form-control total" placeholder="total" >
                    </div>
                    <div class="content">
                        <div class="price_day">
                            <input type="hidden" class="price-day">
                        </div>
                        <div class="price-12hrs"></div>
                        <div class="price-6hrs"></div>
                    </div>
                </div>
                </div>
            </form>
            </div>
        </div>
    </div>
</div> 
            
        </div>
        <!-- <= base_url('reservation')?> -->
</section>

<section class="cars">
<div class="container-lg">   
          <!-- Slider main container -->
          <div class="swiper-container my-5">
              <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
            <?php if($result > 0): ?>
                    <div class="swiper-slide">
                      <div class="card" style="width: 100%;">
                            <img class="card-img-top car-slide" src="<?= !empty($rows->vimg1)? base_url($rows->vimg1) : $path?>" alt="Card image cap">
                        </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="card" style="width: 100%;">
                            <img class="card-img-top car-slide" src="<?=!empty($rows->vimg2)? base_url($rows->vimg2) : $path ?>" alt="Card image cap">
                        </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="card" style="width: 100%;">
                            <img class="card-img-top car-slide" src="<?=!empty($rows->vimg3)? base_url($rows->vimg3) : $path ?>" alt="Card image cap">
                        </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="card" style="width: 100%;">
                            <img class="card-img-top car-slide" src="<?=!empty($rows->vimg4)? base_url($rows->vimg4) : $path ?>" alt="Card image cap">
                        </div>
                    </div>
                    <div class="swiper-slide">
                      <div class="card" style="width: 100%;">
                            <img class="card-img-top car-slide" src="<?=!empty($rows->vimg5)? base_url($rows->vimg5) : $path ?>" alt="Card image cap">
                        </div>
                    </div>
                
                <?php endif;?>
            </div>
<?php endforeach; ?>
            <div class="swiper-pagination"></div>
              <!-- If we need navigation buttons -->
              <div class="swiper-button-prev next-btn d-flex align-items-center">❮</div>
              <div class="swiper-button-next prev-btn d-flex align-items-center">❯</div>
          </div>
      </div>
</section>

<script>

$(function() {

   

// defualt script for datetimepicket
$('#datetimepicker6').datetimepicker({   
    "allowInputToggle": true,
    "showClose": true,
    "showClear": true,
    "showTodayButton": true,
    "format": "YYYY-MM-DD hh:mm A",
    defaultDate: new Date(),
    ignoreReadonly: true,
    minDate: new Date(),
    useCurrent: true,
});

$('#datetimepicker7').datetimepicker({
    "allowInputToggle": true,
    "showClose": true,
    "showClear": true,
    "showTodayButton": true,
    "format": "YYYY-MM-DD hh:mm A",
    minDate: new Date(),
    ignoreReadonly: true,
    useCurrent: false
});
$("#datetimepicker6").on("dp.change", function(e) {
    $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
     $('#datetimepicker7').data("DateTimePicker").date(e.date.add(6, 'hours'));
});
$("#datetimepicker7").on("dp.change", function(e) {

  $('#datetimepicker6').data("DateTimePicker").maxDate(e.date.add(6,'hours'));

    CalcDiff()
});
  
});



function CalcDiff(){
var a=$('#datetimepicker6').data("DateTimePicker").date();
var b=$('#datetimepicker7').data("DateTimePicker").date();
var price1 = $('#p1').val();
var price2 = $('#p2').val();
var price3 = $('#p3').val();
var w_day = 24;

  
  var timeDiff=0
   if (b) {
          timeDiff = (b - a) / 1000;
      }

  var t_days  = Math.floor(timeDiff/(60*60*24));
  var hours = Math.ceil(timeDiff/(60*60));
  var temp_day = t_days * w_day;
  var total = Math.floor(hours-temp_day);
  
  $('.days-here').val(t_days);
  $('.time-here').val(hours);
  $('.total').val(total); 

  
  if(t_days == 0 )
  {
    //   if(total == 1)
    //   {
    //       var t_p_day = 0;
    //       $('.price-day').html(t_p_day);
    //   }
      if(total >= 1 && total <= 6) 
      {
          var t_p_day = price1;
          $('.price-day').val(t_p_day);
      }
      if(total > 6 && total <= 12)
      {
          var t_p_day = price2;
          $('.price-day').val(t_p_day);
      }
      if(total > 12 && total <= 24)
      {
          var t_p_day = price3;
          $('.price-day').val(t_p_day);
      }
  
  }
  else if(t_days > 0)
  {
    //   if(total == 1 && t_days == 0)
    //   {
    //       var t_p_day = 0;
    //       $('.price-day').html(t_p_day);
    //   }
      if(total >= 1 && total <= 6) 
      {   
          var t_p_day = price3 * t_days + price1;
          $('.price-day').val(t_p_day);
      }
      if(total > 6 && total <= 12) 
      {   
          var t_p_day = price3 * t_days + price2;
          $('.price-day').val(t_p_day);
      }
      if(total > 12 && total <= 24) 
      {   
          var t_p_day = price3 * t_days + price3;
          $('.price-day').val(t_p_day);
      }

  }
  
}
$(document).ready(function() {

        $('#goReserve').on('submit',function(e){
            e.preventDefault();

            let dataId =  $('#car_id').val();
            let data_startDate =  $('.date-from').val(); //date from
            let data_endDate =  $('.date_to').val(); //date to

             
            $.ajax({
                url:'<?=base_url('UserController/reserveValidation/')?>'+dataId,
                type:'POST',
                data:{
                    dataId:dataId,
                    data_startDate:data_startDate,
                    data_endDate:data_endDate,
                },
                dataType:'JSON',
                beforeSend:function()
                {
                    $('.preload').removeClass('d-none');
                },
                success:function(data)
                {
                    if(data == 'true')
                    {       
                            let data_id = $('#car_id').val();
                            let data_name = $('.car_name').attr('data-name');
                            let data_model = $('.car_model').attr('data-model');
                            let data_year = $('.car_year').attr('data-year');
                            let data_loc = $('#Location_from').val(); // From olongapo
                            let data_dest = $('#destination_to').val(); // from manila
                            let data_dfrom = $('.date-from').val() //date from
                            let data_dto = $('.date_to').val(); //date to
                            let data_tdays = $('.days-here').val();
                            let data_total = $('.price-day').val();

                            let myObj = {
                            id:data_id,
                            name:data_name,
                            model:data_model,
                            year:data_year,
                            location:data_loc,
                            destination:data_dest,
                            start:data_dfrom,
                            end:data_dto,
                            days:data_tdays,
                            total:data_total
                        };
                        let myObj_serialized = JSON.stringify(myObj);
                        sessionStorage.setItem('myObj',myObj_serialized);

                        setTimeout(function(){ 
                            window.location.href="<?= base_url('reservation');?>";
                        }, 2000);
                        
                    }
                    else 
                    {
                        $('.preload').addClass('d-none');
                        alert('The car is booked between the selected dates');
                    }
                },
    
            });
            
        });
    // Swiper: Slider
        new Swiper('.swiper-container', {
            loop: true,
            nextButton: '.swiper-button-next',
            prevButton: '.swiper-button-prev',
            slidesPerView: 2,
            paginationClickable: true,
            spaceBetween: 0,
            effect: 'slide',
            longSwipes: true,
            autoplay:true,
            speed: 3000,
            disableOnInteraction: true,
            breakpoints: {
                1366: {
                    slidesPerView: 3,
                    spaceBetween: 30
                },
                768: {
                    slidesPerView: 2,
                    spaceBetween: 30
                },
                480: {
                    slidesPerView: 1,
                    spaceBetween: 10
                }
            }
        });
    });
</script>





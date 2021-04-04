<style>

.container{
      max-width: 1280px;
      margin: 0 auto;
      height: 100%;
    }
    /* .swiper-container {
        width: 100%;
        height: 100%;
    }
    .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;
        
      
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
    } */


    .swiper-container {
      width: 100%;
      height: 100%;
    }

    .swiper-slide {
      background-position: center;
      background-size: cover;
      width: 300px;
    }

    img.card-img-top {
    height: 20vh;
    object-fit: cover;
   }
    .turncate-3
    {
      overflow: hidden;
      text-overflow: ellipsis;
      display: -webkit-box;
      -webkit-line-clamp: 3;
      -webkit-box-orient: vertical;
      min-height: 80px;
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

    .swiper-button-prev, .swiper-container-rtl .swiper-button-next,
    .swiper-button-next, .swiper-container-rtl .swiper-button-prev
    {
      /* filter: brightness(0) invert(1) !important; */
    }

    .fas,.fa 
    {
      width:18px;
      text-align:center;
    }

    .service-ico
    {
      font-size:3rem;
      width: 90px;
      height: 90px;
      line-height: 1.8;
      color:#fff;
    }
    .border-3
    {
      border:solid 2px #fff;
    }

    #services p 
    {
      color:#fff;
    }

    .text-custom 
    {
      color:#2C1771;
    }
}

</style>


<div class="container-fluid p-0">
    <!-- carousel -->
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <!-- <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li> -->
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="d-block w-100" src="<?= base_url('assets/home.png');?>" alt="First slide" style="height: 757px; object-fit: cover;">
      </div>
      <!-- <div class="carousel-item">
        <img class="d-block w-100" src="<?= base_url('assets/img2.jpg');?>" alt="Second slide" style="height: 757px; object-fit: cover;">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src="<?= base_url('assets/img3.jpg');?>" alt="Third slide"style="height: 757px; object-fit: cover;">
      </div> -->
    </div>
    <a class="carousel-control-prev d-none" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next d-none href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

<section>
<div id="home" class="col-12">
        <div class="container my-5 text-center">
            <h2 class="bg">WELCOME TO VISTA RENT A CAR</h2>
            <hr class="light-sep bg">
            <p class="text-dark">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
    </div>
</section>


<section class="cars my-5">
<div class="container mb-5">   
          <!-- Slider main container -->
          <div class="swiper-container">
              <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
            <?php if($slider > 0): ?>
                <?php foreach($slider as $rows) : ?>
                    <div class="swiper-slide">
                      <div class="card" style="width: 100%;">
                      <a href="<?=base_url('viewcar/edit/'.$rows->id)?>">
                            <img class="card-img-top" src="
                            <?php 
                            $path = base_url('assets/no-image.png');
                            if(empty($rows->vimg3))
                            { 
                              echo  $path;
                            }
                            else 
                            {
                              echo base_url($rows->vimg3);
                            }
                           
                            ?>
                            "   alt="Card image cap">
                            </a>
                            <div class="card-body">
                              <h5 class="card-title"><?= $rows->name; ?></h5>
                              <p class="card-text car-description turncate-3 text-left"><small><?= !empty($rows->description) ? $rows->description : 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s,'  ;?></small></p>
                              <div class="row">
                                <div class="col-6"><small><a href="<?=base_url('viewcar/edit/'.$rows->id)?>" class="btn btn-custom " style="font-size:12px;">Reserve me</a></small></div>
                                <div class="col-6"><small><span>&#8369; <?= !empty($rows->price2)?> / Day</span></small></div>
                              </div>
                            </div>
                        </div>
                    </div>
                  <?php endforeach; ?>
                <?php endif;?>
            </div>

               <div class="swiper-pagination"></div>
              <!-- If we need navigation buttons -->
              <div class="swiper-button-prev next-btn d-flex align-items-center">❮</div>
              <div class="swiper-button-next prev-btn d-flex align-items-center">❯</div>
              
          </div>
      </div>  
      <section id="services" class="py-5" style="background-image: url('<?= base_url('assets/slide01.jpg')?>'); background-repeat: no-repeat; background-size:cover; background-position:center center; background-attachment:fixed;">
<div class="col-12">
            <div class="container text-center">
                <h2 class="text-white">SERVICES</h2>
                <p class="text-white"><span><small>Here at Vista Rent a Car. We Meet Every Demands/Standards For Self Drive Car Rentals.<br> We Make Everything Hassle Free And Also One of the Cheapest Car Rental Rates In Olongapo City.</small></span></p>
                <hr class="light-sep bg">
                    
                    <div class="row my-5">          
                      <div class="col-lg-4 col-md-6 my-3">
                        <div class="d-block">
                            <i class="service-ico fas fa-car border-3 rounded-circle" ></i>
                            <p class="my-2"><span>Car Rental</span></p>
                            <p class="my-2"><span>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</span></p>
                        </div>
                      </div>
                      <div class="col-lg-4 col-md-6 my-3">
                          <i class="service-ico fas fa-headset border-3 rounded-circle" ></i>
                          <p class="my-2"><span>Customer Support</span></p>
                          <p class="my-2"><span>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</span></p>
                      </div>
                      <div class="col-lg-4 col-md-6 my-3"><i class="service-ico fas fa-user-tie border-3 rounded-circle" ></i>
                          <p class="my-2"><span>Hire with Driver</span></p>
                          <p class="my-2"><span>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</span></p>
                      </div>
                      <div class="col-lg-4 col-md-6 my-3"><i class="service-ico fas fa-map-marker-alt border-3 rounded-circle" ></i>
                          <p class="my-2"><span>Transport</span></p>
                          <p class="my-2"><span>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</span></p>
                      </div>
                      <div class="col-lg-4 col-md-6 my-3"><i class="service-ico far fa-thumbs-up border-3 rounded-circle" ></i></i>
                          <p class="my-2"><span>Trusted Rent Service</span></p>
                          <p class="my-2"><span>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</span></p>
                      </div>
                      <div class="col-lg-4 col-md-6 my-3"><i class="service-ico fas fa-hand-holding-usd border-3 rounded-circle"></i>
                          <p class="my-2"><span>Low and affordable prices</span></p>
                          <p class="my-2"><span>is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,</span></p>
                      </div>
                </div>
            </div>
        </div>
</section>

<div id="cars"  class="container" class="py-5">
  <div class="row">
    <div class="col-12">
      <h2 class="bg text-center mt-5">Our Cars</h2>
              <hr class="light-sep bg">
      </div>
  </div>
  <div class="row">
  <?php if($results > 0): ?>

    <?php foreach($results as $rows) : ?>
          <div class="col-lg-4 col-md-6 col-sm-12 mb-3">
            <div class="card" style="width: 100%;">
              <a href="<?=base_url('viewcar/edit/'.$rows->id)?>">
                    <img class="card-img-top" src="
                    <?php 
                    $path = base_url('assets/no-image.png');
                    if(empty($rows->vimg3))
                    { 
                      echo  $path;
                    }
                    else 
                    {
                      echo base_url($rows->vimg3);
                    }
                    ?>
                    "   alt="Card image cap" style="height:30vh; object-fit:cover;">
                    </a>
                    <div class="card-body">
                      <h5 class="card-title text-center"><?= $rows->name; ?></h5>
                      <ul class="p-0 d-flex justify-content-between mx-5">
                        <li class="text-muted text-center" ><i class="fas fa-road d-block m-auto" style="font-size:32px; width:50px;"></i><span>Milage</span></li>
                        <li class="text-muted text-center" ><i class="fas fa-gas-pump d-block m-auto" style="font-size:32px; width:50px;"></i><span><?= isset($rows->fuel) == 1 ? 'DIESEL' : 'PETROL' ?></span></li>
                        <li class="text-muted text-center" ><i class="fas fa-cogs d-block m-auto" style="font-size:32px; width:50px;"></i><span><?= isset($rows->engine) == 1 ? 'MANUAL' : 'AUTOMATIC' ?></span></li>
                      </ul> 
                      <hr>
                      <p class="card-text car-description turncate-3 text-left"><?= !empty($rows->description) ? $rows->description : 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry standard dummy text ever since the 1500s,'  ;?></p>
                      <div class="row">
                                <div class="col-6"><a href="<?=base_url('viewcar/edit/'.$rows->id)?>" class="btn btn-custom ">Reserve me</a></div>
                                <div class="col-6 align-self-center"><h4 class="m-auto">&#8369; <?=$rows->price2 ?> / Day</h4></div>
                        </div>
                    </div>
                </div>
            </div>
          <?php endforeach; ?>
      <?php endif;?>
        <div class="row justify-content-center">
            
        </div>
    </div>
        <?= $this->pagination->create_links();?>
  </div>
</section>

<section class="py-5">
<div class="col-12">
            <div class="container text-center">
                <h2 class="text-muted">OUR PROCESS</h2>
                <p class=""><span><small>How To Rent a Car</small></span></p>
                <hr class="light-sep bg">
                    
                    <div class="row">          
                    <div class="col-lg-6 col-md-12">
                        <div class="accordion-groups">
                            <div class="accordion d-lg-flex align-items-center position-relative">
                                <span class="fas fa-rss border rounded-circle "></span>
                                <h4 class="px-4 py-5">1. CHOOSE</h4>
                            </div>
                            <div class="accordion d-lg-flex align-items-center position-relative">
                                <span class="far fa-comments  border rounded-circle "></span>
                                <h4 class="px-4 py-5">2. REQUEST</h4>
                            </div>
                            <div class="accordion d-lg-flex align-items-center position-relative">
                                <span class="fas fa-map-marker-alt  border rounded-circle "></span>
                                <h4 class="px-4 py-5">3. CONFIRM</h4> 
                            </div>
                            <div class="accordion d-lg-flex align-items-center position-relative">
                                <span class="fas fa-key border rounded-circle "></span>
                                <h4 class="px-4 py-5">4. DRIVE</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="text-left mb-5">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        </div>
                        <img src="<?=base_url('assets/28.jpg'); ?>" alt="car1" class="w-100">
                    </div>
                </div>
            </div>
        </div>
</section>

<section id="faq" class="py-5">
      <div class="container">
          <div class="row">
                <div class="col-12">
                  <h2 class="text-muted text-center">Frequently Asked Questions</h2>
                  <p class="text-center text-muted"><span><small>Feel free to browse the questions below to find information about Vista rent a car. Sould you require further information,<br> please do not hesitate to contact is directly. </small></span></p>
                      <hr class="light-sep bg">
                </div>
            </div>
            <div class="row" style="background-image: url('<?= base_url('assets/faq.png')?>'); background-repeat: no-repeat; background-size:contain;" >
              <div class="col-md-4">
              </div>
              <div class="bs-example col-md-8 col-sm-12">
              <div class="accordion" id="accordionExample">
                  <h5 class="text-center mb-5">About Vista rent a Car</h5>
                  <div class="card my-3 border-0">
                      <div class="card-header border-0" id="headingOne">
                          <h2 class="mb-0">
                              <button type="button" class="btn btn-link text-custom " data-toggle="collapse" data-target="#collapseOne"><i class="fa fa-plus"></i> 	
Can I Rent a Car Self-Drive without a Credit Card or any Proof of Finance?</button>									
                          </h2>
                      </div>
                      <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                          <div class="card-body">
                              <p>Having able to pay your measly and cheap rental rates/fee doesn’t mean you’re credible enough to be trusted with hundreds of thousands if not millions of pesos worth of car. We simply do not want to accept money unless we find you trustworthy.</p>
                          </div>
                      </div>
                  </div>
                  <div class="card my-3 border-0">
                      <div class="card-header border-0" id="headingTwo">
                          <h2 class="mb-0">
                              <button type="button" class="btn btn-link  text-custom " data-toggle="collapse" data-target="#collapseTwo"><i class="fa fa-plus"></i> May guarantee o warranty ba in case mag-breakdown yung car?</button>
                          </h2>
                      </div>
                      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                          <div class="card-body">
                              <p>Kung normal wear and tear ng kotse ang pagkasira, ito ay sagot ng kompanya. Ngunit, kung driver’s negligence (kapabayaan) or misuse (maling paggamit) sagot po ng client</p>
                          </div>
                      </div>
                  </div>
                  <div class="card my-3 border-0">
                      <div class="card-header border-0" id="headingThree">
                          <h2 class="mb-0">
                              <button type="button" class="btn btn-link  text-custom " data-toggle="collapse" data-target="#collapseThree"><i class="fa fa-plus"></i>Am I responsible for cleaning the car before returning it?</button>                     
                          </h2>
                      </div>
                      <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                          <div class="card-body">
                              <p>Not only we offer the cheapest Car Rental Rates.We are also strict when it comes to our cars cleanliness therefore please Clean your trash, dirt and crumbs out of the car before you return it.If the rental company finds the car unsuitable for inspection of scratch or dents. And has to do more than a quick vacuum, the rental company will have to HOLD your entire security bond.</p>
                          </div>
                      </div>
                  </div>
                  <div class="card my-3 border-0">
                      <div class="card-header border-0" id="headingThree">
                          <h2 class="mb-0">
                              <button type="button" class="btn btn-link  text-custom " data-toggle="collapse" data-target="#collapsefour"><i class="fa fa-plus"></i>Do I need to show IDs?</button>                     
                          </h2>
                      </div>
                      <div id="collapsefour" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                          <div class="card-body">
                              <p>Not only we offer the cheapest Car Rental Rates.We are also strict when it comes to our cars cleanliness therefore please Clean your trash, dirt and crumbs out of the car before you return it.If the rental company finds the car unsuitable for inspection of scratch or dents. And has to do more than a quick vacuum, the rental company will have to HOLD your entire security bond.</p>
                          </div>
                      </div>
                  </div>
              </div>
            </div>
        </div>
      </div>
</section>
  
<section id="contact" class="pt-5">
      <div class="container pb-5">
        <div class="row">
            <div class="col-12">
              <h2 class="text-muted text-center">CONTACT US NOW</h2>
              <p class="text-center text-muted"><span><small>Please feel free to get in touch with us and ask any questions, we’re more than happy to help. </small></span></p>
                  <hr class="light-sep bg">
            </div>
        </div>
        <div class="row">
          <div class="col-lg-8 col-md-12">
          <h3 class="bg text-center">GET IN TOUCH</h3>
                        <hr class="light-sep bg">
          <p class="text-center mb-5"><small>Have any questions or looking for help?<br>
    Let us know and we’ll get back to you as soon ASAP.</small></p>
                <form action="" id="contactform" class="">
                  <div class="row">
                      <div class="col-6 form-group text-left">
                          <input type="text" name="Fname"  class="form-control my-2" placeholder="First Name">
                      </div>
                      <div class="col-6 form-group text-left">
                          <input type="text" name="Lname"  class="form-control my-2" placeholder="Last Name">
                      </div>
                      <div class="col-6 form-group text-left">
                          <input type="text" name="email"  class="form-control my-2" placeholder="Email Address">
                      </div>
                      <div class="col-6 form-group text-left">
                          <input type="text" name="Contact"  class="form-control my-2" placeholder="Contact no.">
                      </div>
                  </div>
                  <div class="form-group text-left">
                      <textarea class="form-control my-2" name="inquiry"  id="exampleFormControlTextarea1" rows="4" placeholder="Inquiry" style="resize:none;"></textarea>
                  </div>
                  <div class="row justify-content-center">
                      <input type="submit" class="btn btn-custom w-25">
                  </div>
              </form>
             <div class="row">
                <div class="alert alert-success d-none" id="inquiry-success" role="alert">
                    <h4 class="alert-heading"><span>Thanks for contacting us! We will get in touch with you shortly.</span></h4>
                    
                </div>
             </div>
          </div>
          <div class="col-lg-4 col-md-12 text-lg-left text-md-center align-self-center mt-5">
            <ul class="p-0 my-3 text-left">
                  <li class="d-flex my-3">
                      <span><i class="fas fa-map-marker-alt mr-2"></i></span>
                      <span>495 Rizal ave. West tapinac Olongapo City 2200 Zambales</span>
                  </li>
                  <li class="my-3">
                      <span ><i class="fa fa-phone mr-2"></i>(047) 223 1619</span>
                  </li>
                  <li class="my-3">
                      <span><i class="fas fa-mobile-alt mr-2"></i>09208613793 / 09282670628</span>
                  </li>
                  <li class="my-3">
                      <span><i class="fa fa-envelope mr-2"></i>vistarentacar_08@yahoo.com</span>
                  </li>
                  <li >
                      <p class="mt-3"><span>Social media</span></p>
                      <span style="font-size:25px"><i class="fab fa-facebook-square mr-2"></i></span>
                      <span style="font-size:25px"><i class="fab fa-twitter-square mr-2"></i></span>
                      <span style="font-size:25px"><i class="fab fa-google-plus-g mr-2"></i></span>
                      <span style="font-size:25px"><i class="fab fa-instagram-square mr-2"></i></span>
                  </li>
              </ul>
          </div>
        </div>
      </div>
    <div class="container-fluid">
      <div class="row">
        <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=495%20Rizal%20Olongapo%202200%20Zambales&t=&z=19&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://grantorrent-es.com">grantorrent</a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:100%;}</style><a href="https://google-map-generator.com"></a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:100%;}</style></div></div>
      </div>
    </div>
</section>

<script>

$(document).ready(function(e){
  
  $('#contactform').on('submit',function(e){
    e.preventDefault();

    $.ajax({
      url:'UserController/contactInquiries',
      type:'POST',
      method:'POST',
      data:new FormData($(this)[0]),
      dataType:'JSON',
      contentType: false, 
      processData: false,
      success:function(data)
      {   
          $('#contactform').hide();
          $('#inquiry-success').removeClass('d-none');
      },
      error: function(jqXHR, textStatus, errorThrown){
          alert('There is an error');    
      }
    });

  });
  
});

$(document).ready(function() {
// Swiper: Slider

var swiper = new Swiper('.swiper-container', {
      loop: true,
      nextButton: '.swiper-button-next',
      prevButton: '.swiper-button-prev',
      effect: 'coverflow',
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: 'auto',
      autoplay:true,
      speed: 3000,
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
    });

    // new Swiper('.swiper-container', {
    //     loop: true,
    //     nextButton: '.swiper-button-next',
    //     prevButton: '.swiper-button-prev',
    //     slidesPerView: 4,
    //     paginationClickable: true,
    //     spaceBetween: 10,
    //     effect: 'slide',
    //     longSwipes: true,
    //     autoplay:true,
    //     speed: 3000,
    //     pagination :'.swiper-pagination',
    //     breakpoints: {
    //         1366: {
    //             slidesPerView: 3,
    //             spaceBetween: 30
    //         },
    //         768: {
    //             slidesPerView: 2,
    //             spaceBetween: 30
    //         },
    //         480: {
    //             slidesPerView: 1,
    //             spaceBetween: 10
    //         }
    //     }
    // });

        // Add minus icon for collapse element which is open by default
        $(".collapse.show").each(function(){
        	$(this).prev(".card-header").find(".fa").addClass("fa-minus").removeClass("fa-plus");
        });
        
        // Toggle plus minus icon on show hide of collapse element
        $(".collapse").on('show.bs.collapse', function(){
        	$(this).prev(".card-header").find(".fa").removeClass("fa-plus").addClass("fa-minus");
        }).on('hide.bs.collapse', function(){
        	$(this).prev(".card-header").find(".fa").removeClass("fa-minus").addClass("fa-plus");
        });

});


</script>
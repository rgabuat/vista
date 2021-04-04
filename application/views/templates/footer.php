<style>

ul li 
{
    list-style:none;
   
}

</style>


<footer class="py-5 border-top" style="">
<div class="container">
    <div class="row text-center">
        <div class="col-lg-3 col-sm-12">
            <div class="navbar-brand text-left">
                <a href="<?= base_url('home')?>"><img src="<?=base_url('assets/v_logo.png') ?>" alt="" class="w-75"></a>
            </div>
            <ul class="p-0 text-left">
                <li class="d-flex my-2">
                    <small><span><i class="fas fa-map-marker-alt mr-2"></i></span></small>
                    <small><span>495 Rizal ave. West tapinac Olongapo City 2200 Zambales</span></small>
                </li>
                <li class="my-2">
                    <small><span ><i class="fa fa-phone mr-2"></i></span>(047) 223 1619</small>
                </li>
                <li class="my-2">
                    <small><span><i class="fas fa-mobile-alt mr-2"></i>09208613793 / 09282670628</span></small>
                </li>
                <li class="my-2">
                    <small><i class="fa fa-envelope mr-2"></i>vistarentacar_08@yahoo.com</small>
                </li>
                <li>
                    <span style="font-size:25px"><i class="fab fa-facebook-square mr-2"></i></span>
                    <span style="font-size:25px"><i class="fab fa-twitter-square mr-2"></i></span>
                    <span style="font-size:25px"><i class="fab fa-google-plus-g mr-2"></i></span>
                    <span style="font-size:25px"><i class="fab fa-instagram-square mr-2"></i></span>
                </li>
            </ul>
        </div>
        <div class="col-lg-3 col-sm-12">
            <ul class="p-0 text-left">
                <li class="my-2">
                    <h5>MENU</h5>    
                </li>
                <li class="my-2">
                    <small><span><a href="javascript:void(0);">Home</a></span></small>
                </li>
                <li class="my-2">
                    <small><span><a href="javascript:void(0);" data-target="services">Services</a></span></small>
                </li>
                <li class="my-2">
                    <small><span><a href="javascript:void(0);">Cars</a></span></small>
                </li>
                <li class="my-2">
                    <small><span><a href="javascript:void(0);">FAQ</a></span></small>
                </li>
            </ul>
        </div>
        <div class="col-lg-3 col-sm-12">
            <ul class="p-0 text-left">
                <li class="my-2">
                    <h5>WORKING HOURS</h5>    
                </li>
                <li class="my-2">
                    <small><span>Monday - Saturday </span></small>
                </li>
                <li class="my-2">
                    <small><span>10:00 AM - 4:00 PM</span></small>
                </li>
            </ul>
        </div>
        <div class="col-lg-3 col-sm-12">
            <h3>Get latest news</h3>
            <span><small>*We send great deals and latest auto news to our subscribed users very week.</small></span>
            <form action="" id="subscriptions" >
                <div class="form-group">
                    <input type="text" name="name" class="form-control" placeholder="Name">
                </div>
                <div class="form-group">
                    <input type="text" name="email" class="form-control" placeholder="Email address">
                </div>
                <div class="form-group text-left">
                    <input type="submit" class="btn btn-custom w-100" value="Subscribe now">
                </div>
            </form>
                <div class="alert alert-success my-3 d-none" id="subscription-success" role="alert">
                    <span><small>Your subscription has been confirmed. You've been added to our list and will hear from us soon.</small></span>
                </div>
        </div>
        <!-- <div class="col-12">
              <h1>THIS IS FOOTER</h1>
              <h2>@2021 alrights reserved</h2>
        </div> -->
    </div>
</div>
</footer>
<div class="container-fluid">
<div class="row text-white " style="background:#2C1771;">
        <p class="my-2 mx-auto"><span>Copyright &#169; 2021 vista rent a car. Alrights reserved</span></p>
    </div>
</div>

<script>
$(document).ready(function(e){

$('#subscriptions').on('submit',function(e){
e.preventDefault();

    $.ajax({
    url:'UserController/subscriber',
    type:'POST',
    method:'POST',
    data:new FormData($(this)[0]),
    dataType:'JSON',
    contentType: false, 
    processData: false,
    success:function(data)
    {   
        $('#subscriptions').hide();
        $('#subscription-success').removeClass('d-none');
    },
    error: function(jqXHR, textStatus, errorThrown){
        alert('There is an error');    
    }
    });

});



});
</script>
<!-- <script src="assets/admin.js"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/js/swiper.min.js"></script> -->
<!-- <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script> -->
<!-- <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs="crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>	
</body>
</html>
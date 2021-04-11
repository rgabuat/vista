<?php 

$username = $_SESSION['email'];

?>

<style>
.nav-pills .nav-link.active, .nav-pills .show > .nav-link{
  background-color: #17A2B8;
}
.dropdown-menu{
  top: 60px;
  right: 0px;
  left: unset;
  width: 460px;
  box-shadow: 0px 5px 7px -1px #c1c1c1;
  padding-bottom: 0px;
  padding: 0px;
}
.dropdown-menu:before{
  content: "";
  position: absolute;
  top: -20px;
  right: 12px;
  border:10px solid #343A40;
  border-color: transparent transparent #343A40 transparent;
}
.head{
  padding:5px 15px;
  border-radius: 3px 3px 0px 0px;
}
.footer{
  padding:5px 15px;
  border-radius: 0px 0px 3px 3px; 
}
.notification-box{
  padding: 10px 0px; 
}
.bg-gray{
  background-color: #eee;
}
/* @media (max-width: 640px) {
    .dropdown-menu{
      top: 50px;
      left: -16px;  
      width: 290px;
    } 
    .nav{
      display: block;
    }
    .nav .nav-item,.nav .nav-item a{
      padding-left: 0px;
    }
    .message{
      font-size: 13px;
    }
} */
</style>

<div class="container-fluid p-0">
  
  <!-- Bootstrap row -->
  <div class="row" id="body-row">
      <!-- Sidebar -->
      <div id="sidebar-container" class="sidebar-expanded d-none d-md-block"><!-- d-* hiddens the Sidebar in smaller devices. Its itens can be kept on the Navbar 'Menu' -->
          <!-- Bootstrap List Group -->
          <ul class="list-group">
              <!-- Separator with title -->
              <li class="list-group-item sidebar-separator-title text-muted d-flex align-items-center menu-collapsed">
                  <small>MAIN MENU</small>
              </li>
              <!-- /END Separator -->
                <!-- Logo -->
              <li class="list-group-item logo-separator d-flex justify-content-center">
                  <a href="<?= base_url()?>">
                        <img src='assets/v_logo.png' width="100%" height="100%" />    
                  </a>
              </li>   
              <!-- Menu with submenu -->
              <?php if(isset($_SESSION['is_logged_in']) && $_SESSION['role'] == 1 ):?>
              <a href="dashboard"  aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                  <div class="d-flex w-100 justify-content-start align-items-center">
                      <span class="fas fa-tachometer-alt fa-fw mr-3"></span> 
                      <span class="menu-collapsed">Dashboard</span>
                      <span class="submenu-icon ml-auto"></span>
                  </div>
              </a>
              <a href="javascript:void(0)" data-toggle="collapse" data-target="#submenu2" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                  <div class="d-flex w-100 justify-content-start align-items-center">
                      <span class="fas fa-copy fa-fw mr-3"></span>
                      <span class="menu-collapsed">Brands</span>
                      <span class="submenu-icon ml-auto"></span>
                  </div>
              </a>
              <!-- Submenu content -->
              <div id='submenu2' class="collapse sidebar-submenu">
                  <a href="createbrand" class="list-group-item list-group-item-action bg-dark text-white">
                      <span class="menu-collapsed">Create brands</span>
                  </a>
                  <a href="managebrands" class="list-group-item list-group-item-action bg-dark text-white">
                      <span class="menu-collapsed">Manage brands</span>
                  </a>
              </div>
              <a href="javascript:void(0)" data-toggle="collapse" data-target="#submenu3" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                  <div class="d-flex w-100 justify-content-start align-items-center">
                      <span class="fas fa-car fa-fw mr-3"></span>
                      <span class="menu-collapsed">Vehicles</span>
                      <span class="submenu-icon ml-auto"></span>
                  </div>
              </a>
              <!-- Submenu content -->
              <div id='submenu3' class="collapse sidebar-submenu">
                  <a href="addcar" class="list-group-item list-group-item-action bg-dark text-white">
                      <span class="menu-collapsed">Post a Vehicle</span>
                  </a>
                  <a href="managevehicles" class="list-group-item list-group-item-action bg-dark text-white">
                      <span class="menu-collapsed">Manage Vehicles</span>
                  </a>
              </div>
              <a href="javascript:void(0)" data-toggle="collapse" data-target="#submenu4" aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                  <div class="d-flex w-100 justify-content-start align-items-center">
                      <span class="fas fa-sitemap fa-fw mr-3"></span>
                      <span class="menu-collapsed">Reservations</span>
                      <span class="submenu-icon ml-auto"></span>
                  </div>
              </a>

              <div id='submenu4' class="collapse sidebar-submenu">
                  <a href="booking" class="list-group-item list-group-item-action bg-dark text-white">
                      <span class="menu-collapsed">New Reservations</span>
                  </a>
                  <a href="confirmedbookings" class="list-group-item list-group-item-action bg-dark text-white">
                      <span class="menu-collapsed">Confirmed Reservations</span>
                  </a>
                  <a href="declinedbookings" class="list-group-item list-group-item-action bg-dark text-white">
                      <span class="menu-collapsed">Cancelled Reservations</span>
                  </a>
              </div>   
              

              <a href="users"  aria-expanded="false" class="bg-dark list-group-item list-group-item-action flex-column align-items-start">
                  <div class="d-flex w-100 justify-content-start align-items-center">
                      <span class="fas fa-users fa-fw mr-3"></span>
                      <span class="menu-collapsed">Users</span>
                      <span class="submenu-icon ml-auto"></span>
                  </div>
              </a>

              <!-- Submenu content -->
                          
              <?php endif ?>                    
              <!-- /END Separator -->
              <a href="<?= base_url()?>logout" class="bg-dark list-group-item list-group-item-action">
                  <div class="d-flex w-100 justify-content-start align-items-center">
                      <span class="fas fa-sign-out-alt fa-fw mr-3"></span>
                      <span class="menu-collapsed">Logout</span>
                  </div>
              </a>
              <a href="javascript:void(0)" data-toggle="sidebar-colapse" class="bg-dark list-group-item list-group-item-action d-flex align-items-center">
                  <div class="d-flex w-100 justify-content-start align-items-center">
                      <span id="collapse-icon" class="fa fa-2x mr-3"></span>
                      <span id="collapse-text" class="menu-collapsed">Collapse</span>
                  </div>
              </a>
            
          </ul><!-- List Group END-->
      </div><!-- sidebar-container END -->
  
      <!-- MAIN -->
      <div class="col">
        <div class="row">
            <div class="container-fluid p-0 mb-5">
            <div class="p-0">
          <nav class="navbar navbar-expand-lg bg-secondary">
            <a class="navbar-brand text-light menu-burger" href="#"><span class="fa fa-bars"></span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent" style="display: unset !important;">
                    <ul class="nav nav-pills mr-auto justify-content-end">
                        <li class="nav-item dropdown">
                        <?php if(isset($_SESSION['is_logged_in']) && $_SESSION['role'] == 1) : ?>
                        <a class="nav-link text-light" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-bell"></i>
                            <span class="badge badge-pill badge-danger notif_counter" style="font-size:11;">0</span>
                        </a>
                        <?php endif; ?>
                            <ul class="dropdown-menu">
                            <li class="head text-light bg-dark">
                                <div class="row">
                                <div class="col-lg-12 col-sm-12 col-12">
                                    <a href="" class="float-right text-light">Mark all as read</a>
                                </div>
                            </li>
                            <li class="notification-box">
                                <div class="row no-gutters">
                                    <ul class="w-100 list-group list-group-flush data-notifs">
                                    
                                    </ul>
                                    <!-- <strong id="post-name" class="text-info"></strong>
                                    <small id="post-date" class="text-warning"></small> -->
                                </div>
                            </li>
                            <li class="footer bg-dark text-center">
                                <a href="" class="text-light">View All</a>
                            </li>
                            </ul>
                        </li>
                    </ul>
                    </div>
                </nav>
                </div>
            </div>
        </div>
         
          <div class="card">
              <h4 class="card-header ">Welcome <?= $username ?></h4>
              <div class="card-body">
                  <?= $main_content?>
              </div>
          </div>
      </div><!-- Main Col END -->
      
  </div><!-- body-row END -->
    
  </div><!-- container -->

  <script>
  
  function read_notif(d)
  {
    let data_id = d.getAttribute("data-id");
    $.ajax({
        type:'POST',
        url:'<?= base_url('AdminController/read_notif')?>',
        data:{data_id:data_id},
        dataType:'JSON',
        beforeSend:function()
        {
            $('.preload').removeClass('d-none');
        },
        success:function()
        {
            $('.preload').addClass('d-none');
        }
    });
  }

  $(document).ready(function(){

    function load_unseen_message(view = '')
    {
        $.ajax({
            url:'AdminController/load_notifications',
            method:'POST',
            type:'POST',
            data:{
                view:view
            },
            dataType:'JSON',
            success:function(data)
            {
                let i=0;
                if(data.notification != "")
                {
                    $('.data-notifs').html(data.notification);
                }
                else
                {
                    $('.data-notifs').html('<li class="text-center my-3">No unread notifications</li>');
                }
                
                $('.notif_counter').html(data.unseen_notification);
            }
        });
    }


    load_unseen_message();

    setInterval(function(){
        load_unseen_message();
        }, 5000);
       

        $('.view-notif').on('click',function(){
            $(this).closest('li').remove();
        });


  });

  </script>

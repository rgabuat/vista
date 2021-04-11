<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="og_title" property="og:title" content="PAGE-TITLE" />
    <meta name="og_description" property="og:description" content="DESCRIPTION-HERE" />
    <meta name="og_url" property="og:url" content="PAGE-URL"/>
    <meta name="og_type" property="og:type" content="website"/>
    <meta name="og_site_name" property="og:site_name" content="SITENAME" />
    <meta name="twitter:card" property="twitter:card" content="summary" />
    <meta name="twitter:url" property="twitter:url" content="PAGE-URL" />
    <meta name="twitter:site" property="twitter:site" content="@SITENAME" />
    <meta name="twitter:title" property="twitter:title" content="PAGE-TITLE" />
    <meta name="twitter:description" property="twitter:description" content="DESCRIPTION-HERE" />
    <meta name="og_image" property="og:image" content="IMAGE-URL" />
    <meta name="msapplication-TileImage" content="IMAGE-URL" meta property="og:image:type" content="image/jpeg" />
    <meta name="twitter:image" property="twitter:image" content="IMAGE-URL" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"> -->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/css/swiper.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" integrity="sha512-HK5fgLBL+xu6dm/Ii3z4xhlSUyZgTT9tuc/hSrtw6uzJOvgRr2a9jyxxT1ely+B+xFAmJKVSTbpM/CuL7qxO8w==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="<?=base_url('assets/css/bootstrap-datetimepicker.min.css')?>">
    <link rel="stylesheet" href="<?=base_url('assets/css/stylesheet.css')?>">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/3.4.1/js/swiper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.15.0/jquery.validate.min.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.13.0/moment.min.js"></script> -->
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.9.0/moment-with-locales.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
    <script src="<?=base_url('assets/js/bootstrap-datetimepicker.min.js')?>"></script>
   
    <script>

      $(document).ready(function(e){
        $("a").on('click',function(e){
        if (this.hash != "") 
        {
                e.preventDefault();
                var hash = this.hash;
                $('html, body').animate({
                    scrollTop: $(hash).offset().top
                }, 800, function(){
                    window.location.hash = hash;
                });
            } 
        });
      })
    </script>

  
   
    <title>Vista Rent a Car | Home</title>

<style>
.light-sep {
    max-width: 80px;
    border: 2px solid gray;
    margin-top: 20px;
    margin-bottom: 40px;
}

.bg a
{
    color: #2C1771;
}
div#contact
{
    background-image: url('assets/img2.jpg');
    background-attachment: fixed;
}

/* input.form-control {
    border: unset;
    border-bottom: 2px solid black;
    border-radius: 0;
    outline: none;
} */

textarea#exampleFormControlTextarea1
{
    /* border: 2px solid black; */
    border-radius: 0;
    outline: none;
}

.form-control,.btn
{
  border-radius:0;
}

a.nav-link  
{
    color: #2C1771 !important;
    font-weight: 600;
}

span.fas,
span.far
{
    width: 3.75rem;
    height: 3.75rem;
    font-size: 2rem;
    padding:2%;
    color: #fff !important ;
    background-color: #2C1771;
    z-index: 10;
    cursor: pointer;
}

span.fas:hover,
span.far:hover
{
    transform: scale(1.4);
}

.accordion:not(:first-child)::before {
    content: "";
    position: absolute;
    top: 0;
    height: 38px;
    width: 2px;
    margin: 0 26px;
    background: #e5e5e5;
}

.accordion:not(:last-child)::after {
    content: "";
    position: absolute;
    bottom: 0;
    height: 38px;
    width: 2px;
    margin: 0 26px;
    background: #e5e5e5;
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

.btn-reg 
    {
      background: #fff;
      border-radius: unset;
      color: #2C1771;
      border:solid 1px #2C1771;
    }
    
    .btn-login 
    {
      background: #2C1771;
      border-radius: unset;
      color: #fff;
    }
    
    .btn-login:hover
    {
      color: #fff;
    }

</style>

</head>
<body>
<header>
        <nav class="navbar navbar-expand-lg navbar-light py-3 fixed-top bg-white border-bottom">
            <div class="container">
            <div class="col-4">
                <div class="navbar-brand">
                    <a href="<?= base_url()?>"><img src="<?=base_url('assets/v_logo.png') ?>" alt="" class="w-50"></a>
                </div>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>
            <div class="collapse navbar-collapse " id="navbarSupportedContent">
              <ul class="navbar-nav ml-auto ">
                <li class="nav-item active">
                  <a class="nav-link" href="#">HOME <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="#services">SERVICES</a>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link " href="#cars" id="navbarDropdown" role="button">
                    CARS
                  </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link " href="#faq">FAQ</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link " href="#contact">CONTACT US</a>
                </li>
                
                <li class="nav-item">
                    <a class="btn btn-reg mx-1" href="<?= isset($_SESSION['is_logged_in']) ? base_url('dashboard') : base_url('login') ?>"><?= isset($_SESSION['is_logged_in']) ? '<i class="mr-1 fas fa-user-circle"></i>My Account' : 'LOGIN' ?></a>
                </li>
                
                <?php if(empty($_SESSION['is_logged_in'])) : ?>
                  <li class="nav-item">
                        <a class="btn btn-login mx-1 " href="<?= base_url('register');?>" >REGISTER</a>
                  </li>
                <?php endif ?>
              </ul>
            </div>
            </div>
          </nav>
        </header>

    <!-- modal login -->
<div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Login Account</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url()?>LoginController/check_user">
          <div class="form-group">
            <label for="email">Email address:</label>
            <input type="email" class="form-control" id="email">
          </div>
          <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" id="pwd">
          </div>
          <div class="row justify-content-center">
            <button type="submit" class="btn btn-custom w-50">Submit</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>

    <!-- register login -->
  <div class="modal fade" id="regModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Register Account</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <!-- <fieldset aria-label="Step One" tabindex="-1" id="step-1"> -->
                    
      </div>
      <div class="modal-footer d-none">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<div class="loader">
    <img src="<?=base_url('assets/loading-x.gif')?>" class="preload d-none" alt="">
</div>
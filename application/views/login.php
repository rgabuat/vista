<div class="container">
   <div class="row d-flex justify-content-center mt-5">
    <div class="col-md-6 col-sm-12">
            <div class="card-header">
                <div class="row 12 row justify-content-center py-4">
                        <img src="<?= base_url('assets/v_logo.png') ?>" class="w-50" alt="" > 
                </div>
            </div>
            <div class="card-body border p-4 shadow-sm">
                <div class="text-center mb-5"></div>
                <div class="text-center w-75 m-auto ">
                    <h4><strong>Login</strong></h4>
                    <p class="text-muted">Enter your email address and password to access your site's admin panel.</p>
                </div>
                <form action="<?= base_url()?>LoginController/check_user" method="post" class="mt-5">
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" name="email" id="email" class="form-control" placeholder="Enter your email">
                    </div>
                    <div class="form-group">
                    <label for="password">Password</label>
                        <input type="password" name="password" id="password" class="form-control" placeholder="Enter your password">
                    </div>
                    <div class="form-group text-center ">
                        <input type="submit" name="submit" id="submit" class="btn btn-custom form-control w-50 my-3 ">
                    </div>
                </form> 
            </div>
        </div>
   </div>
</div>
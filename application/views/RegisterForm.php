<div class="container my-5 pt-5">

<?php echo validation_errors("<div class='alert alert-danger'>","</div>"); ?>

<form action="<?= base_url('UserController/register_form')?>" method="post" >
        <p></p>
        <div class="form-group">
            <label for="fname">First name </label><span class="text-danger">*</span>
            <input type="text" name="fname" class="form-control" value="<?php echo ($reset) ? "" : set_value('fname'); ?>">
        </div>
        <div class="form-group">
            <label for="fname">Last name </label><span class="text-danger">*</span>
            <input type="text" name="lname" class="form-control" value="<?php echo ($reset) ? "" :  set_value('lname');?>" >
        </div>
        <div class="form-group">
            <label for="fname">Mobile no. </label><span class="text-danger">*</span>
            <input type="number" name="mobile" class="form-control" value="<?php echo ($reset) ? "" :  set_value('mobile');?>">
        </div>
        <div class="form-group">
            <label for="fname">Email address </label><span class="text-danger">*</span>
            <input type="text" name="email" class="form-control" value="<?php echo ($reset) ? "" :  set_value('email');?>" >
        </div>
        <div class="form-group">
            <label for="fname">Password </label><span class="text-danger">*</span>
            <input type="password" name="password" class="form-control" >
        </div>
        <div class="form-group">
            <label for="fname">Confirm Password</label><span class="text-danger">*</span>
            <input type="password" name="repassword" class="form-control" >
        </div>
    </fieldset>
    
    <fieldset aria-label="Step Two" tabindex="-1" id="step-2">
        <h2>Residing address</h2>
        <div class="form-group">
            <label for="email-address">House #</label>
            <input class="form-control" type="text" name="house_no" id="email-address" value="<?php echo ($reset) ? "" :  set_value('house_no');?>" >
        </div>
        <div class="form-group">
            <label for="phone-number">Village name <span class="optional">(optional)</span></label>
            <input class="form-control" type="tel" name="village" value="<?php echo ($reset) ? "" : set_value('village');?>" >
        </div>
        <div class="form-group">
            <label for="phone-number">City <span class="optional">(optional)</span></label>
            <input class="form-control" type="tel" name="city" value="<?php echo ($reset) ? "" :  set_value('city');?>" >
        </div>
        <div class="form-group">
            <label for="phone-number">State or province <span class="optional">(optional)</span></label>
            <input class="form-control" type="tel" name="state" value="<?php echo ($reset) ? "" :  set_value('state');?>" >
        </div>
        <div class="form-group">
            <label for="phone-number">Zip code <span class="optional">(optional)</span></label>
            <input class="form-control" type="tel" name="zip" value="<?php echo ($reset) ? "" :  set_value('zip');?>" >
        </div>
    </fieldset>
    
    <fieldset aria-label="Step Three" tabindex="-1" id="step-3">
        <h2>Step Three</h2>
            <div class="form-group">
                <label for="phone-number">Valid IDs (Drivers' license or passport) <span class="text-danger">*</span></label>
                <input class="form-control" type="file" name="valid_id" id="phone-number" value="<?php echo ($reset) ? "" :  set_value('valid_id');?>" >
            </div>
            <div class="form-group">
                <label for="phone-number">Proof of billing <span class="text-danger">*</span></label>
                <input class="form-control" type="file" name="billing" id="phone-number" value="<?php echo ($reset) ? "" :  set_value('billing');?>" >
            </div>
            <div class="form-group">
                <label for="phone-number">Latest photograph (selfie)<span class="text-danger">*</span></label>
                <input class="form-control" type="file" name="selfie" id="phone-number" value="<?php echo ($reset) ? "" :  set_value('selfie');?>" >
            </div>
            <div class="form-group text-center">
                <button class="btn btn-custom w-25" type="submit">Submit</button> 
            </div>
    </fieldset>
</form>

</div>
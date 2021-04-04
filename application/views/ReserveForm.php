<style>
    .no-js .multi-step-form fieldset button, .multi-step-form.edit-form fieldset button, .no-js .multi-step-form h2, .multi-step-form.edit-form h2 {
        display: none !important;
    }
    .no-js .multi-step-form fieldset, .multi-step-form.edit-form fieldset {
        display: block !important;
    }
    .no-js .multi-step-form [type="submit"], .multi-step-form.edit-form [type="submit"], .no-js .multi-step-form [type="reset"], .multi-step-form.edit-form [type="reset"] {
        display: inline-block !important;
    }
    .no-js .multi-step-form .steps, .multi-step-form.edit-form .steps {
        display: none;
    }
    .multi-step-form fieldset {
        display: none;
    }
    .multi-step-form fieldset:first-of-type {
        display: block;
    }
    .multi-step-form fieldset.hidden {
        display: none;
    }
    .multi-step-form fieldset.visible {
        display: block;
    }
    .multi-step-form .steps button {
        border: 0;
    }
    .multi-step-form .steps [disabled] {
        background: none;
    }
    .multi-step-form .steps .active {
        background: #eee;
    }
</style>


<section class="head-overlay mt-5 pt-4" >
    <div class="jumbotron jumbotron-fluid" style="background-image:linear-gradient(to bottom, rgba(0,0,0,0.6) 0%,rgba(0,0,0,0.6) 100%),url('assets/Faqs.png');background-position: center center;
    background-repeat: no-repeat;">
        <div class="container text-white text-center">
            <h1 class="display-4 text-dark ">Reserve Form</h1>
            <p class="lead"></p>
        </div>
    </div>
</section>

<!-- form -->

<div class="container-lg">
    <div class="row">
        <div class="col-12 my-3">
            
            <div class="row">
            <!-- <section id="typeSelect col-md-6 px-5 py-3 border">
                <div class="form-control">

                </div>
            </section> -->
            <?php if(empty($_SESSION['is_logged_in'])) :?>
                <section class="multi-step-form col-md-6 px-5 py-3 border">
                <div class="text-center">
                    <h1>Customer information</h1>
                </div>
               
                <div class="steps text-center">
                    <button class="active" type="button" disabled>Step One</button> | 
                    <button type="button" disabled>Step Two</button> | 
                    <button type="button" disabled>Step Three</button>
                </div>
                    <form id="reserveForm" action="#" method="post">
                        <input type="hidden" name="vechicle_id" id="vechicle_id">
                        <input type="hidden" name="d_day" id="d_day">
                        <input type="hidden" name="d_total" id="d_total">
                        <input type="hidden" name="d_cname" id="d_cname">
                        <input type="hidden" name="d_cmodel" id="d_cmodel">
                        <input type="hidden" name="d_cyear" id="d_cyear">
                        <input type="hidden" name="d_clocation" id="d_clocation">
                        <input type="hidden" name="d_cdestination" id="d_cdestination">
                        <input type="hidden" name="d_cdateform" id="d_cdateform">
                        <input type="hidden" name="d_cdateto" id="d_cdateto">
                        <input type="hidden" name="type" value="walkin">
                        <fieldset aria-label="Step One" tabindex="-1" id="step-1">
                            <p></p>
                            <div class="form-group">
                                <label for="fname">First name </label><span class="text-danger">*</span>
                                <input type="text" name="fname" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="fname">Last name </label><span class="text-danger">*</span>
                                <input type="text" name="lname" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="fname">Email address </label><span class="text-danger">*</span>
                                <input type="text" name="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="fname">Mobile no. </label><span class="text-danger">*</span>
                                <input type="number" name="mobile" class="form-control" required>
                            </div>
                            <div class="form-group text-center">
                                <button class="btn btn-custom w-25 btn-next" type="button" aria-controls="step-2">NEXT</button>
                            </div>
                        </fieldset>
                        
                        <fieldset aria-label="Step Two" tabindex="-1" id="step-2">
                            <h2>Residing address</h2>
                            <div class="form-group">
                                <label for="email-address">House #</label>
                                <input class="form-control" type="text" name="house_no" id="email-address" required>
                            </div>
                            <div class="form-group">
                                <label for="phone-number">Village name <span class="optional">(optional)</span></label>
                                <input class="form-control" type="tel" name="village" id="phone-number">
                            </div>
                            <div class="form-group">
                                <label for="phone-number">City <span class="optional">(optional)</span></label>
                                <input class="form-control" type="tel" name="city" id="phone-number">
                            </div>
                            <div class="form-group">
                                <label for="phone-number">State or province <span class="optional">(optional)</span></label>
                                <input class="form-control" type="tel" name="state" id="phone-number">
                            </div>
                            <div class="form-group">
                                <label for="phone-number">Zip code <span class="optional">(optional)</span></label>
                                <input class="form-control" type="tel" name="zip" id="phone-number">
                            </div>
                        
                            <div class="form-group text-center">
                                <button class="btn btn-custom btn-prev w-25" type="button" aria-controls="step-1">Previous</button>
                                <button class="btn btn-custom btn-next w-25" type="button" aria-controls="step-3">Next</button>
                            </div>
                        </fieldset>
                        
                        <fieldset aria-label="Step Three" tabindex="-1" id="step-3">
                            <h2>Step Three</h2>
                                <div class="form-group">
                                    <label for="phone-number">Valid IDs (Drivers' license or passport) <span class="optional">(optional)</span></label>
                                    <input class="form-control" type="file" name="valid_id" id="phone-number">
                                </div>
                                <div class="form-group">
                                    <label for="phone-number">Proof of billing <span class="optional">(optional)</span></label>
                                    <input class="form-control" type="file" name="billing" id="phone-number">
                                </div>
                                <div class="form-group">
                                    <label for="phone-number">Latest photograph (selfie) <span class="optional">(optional)</span></label>
                                    <input class="form-control" type="file" name="selfie" id="phone-number">
                                </div>
                                <div class="form-group text-center">
                                    <button class="btn btn-custom w-25" type="submit">Submit</button> 
                                    <button class="btn btn-custom btn-edit w-25" type="button">Edit</button> 
                                </div>
                        </fieldset>
                    </form>
                </section>
                <?php endif; ?>
                <div class="col-md-6">
                    <div class="card">
                            <div class="card-header">
                               <h2 class="text-center">Reservation Info</h2>
                            </div>
                            <div class="card-body">

                                <?php if(isset($_SESSION['is_logged_in'])) :?>
                                    <?php foreach ($results as $rows) : ?>
                                        <p>Account ID:<span id="a_id" clas="text-bold">&nbsp;<?= $rows->id;?></span></p>
                                        <p>Name:<span id="a_name" clas="text-bold">&nbsp;<?= $rows->first_name." ".$rows->last_name; ?></span></p>
                                        <p>Email:<span id="a_email" clas="text-bold">&nbsp;<?= $rows->email;?></span></p>
                                    <?php endforeach; ?>
                                <?php endif; ?>
                                <p>Days:<span id="days" clas="text-bold"></span></p>
                                <p>Total: Php <span id="total" clas="text-bold"></span>.00</p>
                                <p>Car name: <span id="cname" clas="text-bold"></span></p>
                                <p>Car model: <span id="cmodel" clas="text-bold"></span></p>
                                <p>Year model: <span id="cyear" clas="text-bold"></span></p>
                                <p>Location: <span id="clocation" clas="text-bold"></span></p>
                                <p>Destination: <span id="cdestination" clas="text-bold"></span></p>
                                <p>Date start: <br><span id="cdatefrom" clas="text-bold"></span></p>
                                <p>Date end: <br><span id="cdateto" clas="text-bold"></span></p>
                            </div>
                           
                        </div>
                    </div>
                    
                </div>
                <?php if(isset($_SESSION['is_logged_in'])) :?>
                <form  id="reserveForm" action="" method="POST">
                    <div class="row justify-content-center">
                        <?php foreach ($results as $rows) : ?>
                            <input type="hidden" name="vechicle_id" id="vechicle_id">
                            <input type="hidden" name="d_day" id="d_day">
                            <input type="hidden" name="d_total" id="d_total">
                            <input type="hidden" name="d_cname" id="d_cname">
                            <input type="hidden" name="d_cmodel" id="d_cmodel">
                            <input type="hidden" name="d_cyear" id="d_cyear">
                            <input type="hidden" name="d_clocation" id="d_clocation">
                            <input type="hidden" name="d_cdestination" id="d_cdestination">
                            <input type="hidden" name="d_cdateform" id="d_cdateform">
                            <input type="hidden" name="d_cdateto" id="d_cdateto">
                            <input type="hidden" name="type" value="user">
                            <input type="hidden" name="acct_id" value="<?= $rows->id;?>">
                            <input type="hidden" name="fname" value="<?= $rows->first_name; ?>">
                            <input type="hidden" name="lname" value="<?= $rows->last_name; ?>">
                            <input type="hidden" name="email" value="<?= $rows->email?>">
                        <?php endforeach; ?>
                        <input type="submit" class="btn btn-custom my-5 w-50" value="submit">
                    </div>
                </form>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>


<script>

$(document).ready(function(){

    // function load_unseen_message(view = '')
    // {
    //     $.ajax({
    //         url:'AdminController/load_notifications',
    //         method:'POST',
    //         type:'POST',
    //         data:{view:view},
    //         dataType:'JSON',
    //         success:function(data)
    //         {
    //             let i=0;
    //             for(i=0;i<data.results.length;i++)
    //             {
    //                 $('#post-name').html(data.results[i].fname);
    //                 $('#post-date').html(data.results[i].created_at);
    //             }
                
    //             if(data.count > 0 )
    //             {
    //                 $('.notif_counter').html(data.count);
    //                 console.log(data.count);
    //             }
                
    //         }
    //     })
    // }


    if(sessionStorage.length != 0 )
    {
        window.myObj_unserialized = JSON.parse(sessionStorage.getItem('myObj'))
        $('#days').html(myObj_unserialized.days);
        $('#total').html(myObj_unserialized.total);
        $('#cname').html(myObj_unserialized.name);
        $('#cmodel').html(myObj_unserialized.model);
        $('#cyear').html(myObj_unserialized.year);
        $('#clocation').html(myObj_unserialized.location);
        $('#cdestination').html(myObj_unserialized.destination);
        $('#cdatefrom').html(myObj_unserialized.start);
        $('#cdateto').html(myObj_unserialized.end);

        $('#vechicle_id').val(myObj_unserialized.id);
        $('#d_day').val(myObj_unserialized.days);
        $('#d_total').val(myObj_unserialized.total);
        $('#d_cname').val(myObj_unserialized.name);
        $('#d_cmodel').val(myObj_unserialized.model);
        $('#d_cyear').val(myObj_unserialized.year);
        $('#d_clocation').val(myObj_unserialized.location);
        $('#d_cdestination').val(myObj_unserialized.destination);
        $('#d_cdateform').val(myObj_unserialized.start);
        $('#d_cdateto').val(myObj_unserialized.end);

    }

    $('#reserveForm').on('submit',function(e){
        e.preventDefault();

        $.ajax({
            type:'POST',
            url:'UserController/createBooking',
            data:new FormData($(this)[0]),
            dataType:'JSON',
            contentType: false, 
            processData: false,
            beforeSend:function(data)
            {
                $('.preload').removeClass('d-none');
            },
            success:function(data)
            {   
                console.log(data);
                alert('Created New booking');
                $('.preload').addClass('d-none');
                $("#reserveForm")[0].reset();
                // setTimeout(function(){ 
                //     window.location.href="<?= base_url('thankyou');?>";
                // }, 2000);
                // load_unseen_message();
                // console.log(load_unseen_message());
            },
            error: function(jqXHR, textStatus, errorThrown){
                alert('There is an error');    
            }
        });
                              
    });

    // setInterval(function(){
    //     load_unseen_message();
    //     console.log(load_unseen_message());
    //     }, 5000);
       

});

/**
 * @name Multi-step form - WIP
 * @description Prototype for basic multi-step form
 * @deps jQuery, jQuery Validate
 */

var app = {

init: function(){
    this.cacheDOM();
    this.setupAria();
    this.nextButton();
    this.prevButton();
    this.validateForm();
    this.startOver();
    this.editForm();
    this.killEnterKey();
    this.handleStepClicks();
},

cacheDOM: function(){
    if($(".multi-step-form").length === 0){ return; }
    this.$formParent = $(".multi-step-form");
    this.$form = this.$formParent.find("form");
    this.$formStepParents = this.$form.find("fieldset"),

    this.$nextButton = this.$form.find(".btn-next");
    this.$prevButton = this.$form.find(".btn-prev");
    this.$editButton = this.$form.find(".btn-edit");
    this.$resetButton = this.$form.find("[type='reset']");

    this.$stepsParent = $(".steps");
    this.$steps = this.$stepsParent.find("button");
},

htmlClasses: {
    activeClass: "active",
    hiddenClass: "hidden",
    visibleClass: "visible",
    editFormClass: "edit-form",
    animatedVisibleClass: "animated fadeIn",
    animatedHiddenClass: "animated fadeOut",
    animatingClass: "animating"
},

setupAria: function(){

    // set first parent to visible
    this.$formStepParents.eq(0).attr("aria-hidden",false);

    // set all other parents to hidden
    this.$formStepParents.not(":first").attr("aria-hidden",true);

    // handle aria-expanded on next/prev buttons
    app.handleAriaExpanded();

},

nextButton: function(){

    this.$nextButton.on("click", function(e){

        e.preventDefault();

        // grab current step and next step parent
        var $this = $(this),
                currentParent = $this.closest("fieldset"),
                nextParent = currentParent.next();

                // if the form is valid hide current step
                // trigger next step
                if(app.checkForValidForm()){
                    currentParent.removeClass(app.htmlClasses.visibleClass);
                    app.showNextStep(currentParent, nextParent);
                }

    });
},

prevButton: function(){

    this.$prevButton.on("click", function(e){

        e.preventDefault();

        // grab current step parent and previous parent
        var $this = $(this),
                currentParent = $(this).closest("fieldset"),
                prevParent = currentParent.prev();

                // hide current step and show previous step
                // no need to validate form here
                currentParent.removeClass(app.htmlClasses.visibleClass);
                app.showPrevStep(currentParent, prevParent);

    });
},

showNextStep: function(currentParent,nextParent){

    // hide previous parent
    currentParent
        .addClass(app.htmlClasses.hiddenClass)
        .attr("aria-hidden",true);

    // show next parent
    nextParent
        .removeClass(app.htmlClasses.hiddenClass)
        .addClass(app.htmlClasses.visibleClass)
        .attr("aria-hidden",false);

    // focus first input on next parent
    nextParent.focus();

    // activate appropriate step
    app.handleState(nextParent.index());

    // handle aria-expanded on next/prev buttons
    app.handleAriaExpanded();

},

showPrevStep: function(currentParent,prevParent){

    // hide previous parent
    currentParent
        .addClass(app.htmlClasses.hiddenClass)
        .attr("aria-hidden",true);

    // show next parent
    prevParent
        .removeClass(app.htmlClasses.hiddenClass)
        .addClass(app.htmlClasses.visibleClass)
        .attr("aria-hidden",false);

    // send focus to first input on next parent
    prevParent.focus();

    // activate appropriate step
    app.handleState(prevParent.index());

    // handle aria-expanded on next/prev buttons
    app.handleAriaExpanded();

},

handleAriaExpanded: function(){

    /*
        Loop thru each next/prev button
        Check to see if the parent it conrols is visible
        Handle aria-expanded on buttons
    */
    $.each(this.$nextButton, function(idx,item){
        var controls = $(item).attr("aria-controls");
        if($("#"+controls).attr("aria-hidden") == "true"){
            $(item).attr("aria-expanded",false);
        }else{
            $(item).attr("aria-expanded",true);
        }
    });

    $.each(this.$prevButton, function(idx,item){
        var controls = $(item).attr("aria-controls");
        if($("#"+controls).attr("aria-hidden") == "true"){
            $(item).attr("aria-expanded",false);
        }else{
            $(item).attr("aria-expanded",true);
        }
    });

},

validateForm: function(){
    // jquery validate form validation
    this.$form.validate({
        ignore: ":hidden", // any children of hidden desc are ignored
        errorElement: "span", // wrap error elements in span not label
        invalidHandler: function(event, validator){ // add aria-invalid to el with error
            $.each(validator.errorList, function(idx,item){
                if(idx === 0){
                    $(item.element).focus(); // send focus to first el with error
                }
                $(item.element).attr("aria-invalid",true); // add invalid aria
            })
        },
        submitHandler: function(form) {
            // alert("form submitted!");
        // form.submit();
      }
    });
},

checkForValidForm: function(){
    if(this.$form.valid()){
        return true;
    }
},

startOver: function(){

    var $parents = this.$formStepParents,
            $firstParent = this.$formStepParents.eq(0),
            $formParent = this.$formParent,
            $stepsParent = this.$stepsParent;

            this.$resetButton.on("click", function(e){

                // hide all parents - show first
                $parents
                    .removeClass(app.htmlClasses.visibleClass)
                    .addClass(app.htmlClasses.hiddenClass)
                    .eq(0).removeClass(app.htmlClasses.hiddenClass)
                    .eq(0).addClass(app.htmlClasses.visibleClass);

                    // remove edit state if present
                    $formParent.removeClass(app.htmlClasses.editFormClass);

                    // manage state - set to first item
                    app.handleState(0);

                    // reset stage for initial aria state
                    app.setupAria();

                    // send focus to first item
                    setTimeout(function(){
                        $firstParent.focus();
                    },200);

            }); // click

},

handleState: function(step){

    this.$steps.eq(step).prevAll().removeAttr("disabled");
    this.$steps.eq(step).addClass(app.htmlClasses.activeClass);

    // restart scenario
    if(step === 0){
        this.$steps
            .removeClass(app.htmlClasses.activeClass)
            .attr("disabled","disabled");
        this.$steps.eq(0).addClass(app.htmlClasses.activeClass)
    }

},

editForm: function(){
    var $formParent = this.$formParent,
            $formStepParents = this.$formStepParents,
            $stepsParent = this.$stepsParent;

            this.$editButton.on("click",function(){
                $formParent.toggleClass(app.htmlClasses.editFormClass);
                $formStepParents.attr("aria-hidden",false);
                $formStepParents.eq(0).find("input").eq(0).focus();
                app.handleAriaExpanded();
            });
},

killEnterKey: function(){
    $(document).on("keypress", ":input:not(textarea,button)", function(event) {
        return event.keyCode != 13;
    });
},

handleStepClicks: function(){

    var $stepTriggers = this.$steps,
            $stepParents = this.$formStepParents;

            $stepTriggers.on("click", function(e){

                e.preventDefault();

                var btnClickedIndex = $(this).index();

                    // kill active state for items after step trigger
                    $stepTriggers.nextAll()
                        .removeClass(app.htmlClasses.activeClass)
                        .attr("disabled",true);

                    // activate button clicked
                    $(this)
                        .addClass(app.htmlClasses.activeClass)
                        .attr("disabled",false)

                    // hide all step parents
                    $stepParents
                        .removeClass(app.htmlClasses.visibleClass)
                        .addClass(app.htmlClasses.hiddenClass)
                        .attr("aria-hidden",true);

                    // show step that matches index of button
                    $stepParents.eq(btnClickedIndex)
                        .removeClass(app.htmlClasses.hiddenClass)
                        .addClass(app.htmlClasses.visibleClass)
                        .attr("aria-hidden",false)
                        .focus();

            });

}

};

app.init();


</script>
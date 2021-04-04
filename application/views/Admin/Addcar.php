<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <h1>Post a Vehicle</h1>
        </div>
    </div>
    <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading"></div>
                        <div class="panel-body">
                            <form  method="POST" id="addcarForm" enctype="multiform/form-data">
                                <div class="row">
                                    <div class="col-md-6">
                                        <span><b>Vehicle information</b></span>
                                        <hr>
                                        <div class="form-group">
                                            <label for="vehicle">Vehicle Name</label>
                                            <select name="brands" id="brands" class="form-control col-sm-8">
                                                <?php foreach($results as $key => $value): ?>
                                                    <option value="<?= $value['id'] ?>" data-id="<?= $value['id'] ?>"><?= $value['brand_name'] ?></option>
                                                <?php endforeach; ?>
                                            </select>
                                        </div>
                                        <!-- <div class="dropdown">
                                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                Dropdown button
                                            </button>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                                <a class="dropdown-item" href="#">Action</a>
                                                <a class="dropdown-item" href="#">Another action</a>
                                                <a class="dropdown-item" href="#">Something else here</a>
                                            </div>
                                            </div>
                                        -->
                                        <div class="form-group">
                                            <label for="vehicle">Vehicle Name</label>
                                            <input type="text" id="vname" name="vname" class="form-control col-sm-8" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="vehicle">Model</label>
                                            <input type="text" id="vmodel" name="vmodel" class="form-control col-sm-8" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="vehicle">Model year</label>
                                            <input type="text" id="vmyear" name="vmyear" class="form-control col-sm-8" required>
                                        </div>
                                        <div class="form-group">
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
                                        </div>
                                        <div class="form-group">
                                            <label for="vehicle">Price for 12hrs</label>
                                            <div class="input-group mb-3 col-sm-8 p-0">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Php</span>
                                                </div>
                                                <input type="number" class="form-control" id="vprice2" name="vprice2"  aria-label="Amount (to the nearest dollar)">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="vehicle">Price for 1day</label>
                                            <div class="input-group mb-3 col-sm-8 p-0">
                                                <div class="input-group-prepend">
                                                    <span class="input-group-text">Php</span>
                                                </div>
                                                <input type="number" class="form-control" id="vprice3" name="vprice3"  aria-label="Amount (to the nearest dollar)">
                                                <div class="input-group-append">
                                                    <span class="input-group-text">.00</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="vehicle">Description</label>
                                            <textarea name="vdescription" id="vdescription" cols="30" rows="10" class="form-control col-sm-8"></textarea>
                                            <!-- <input type="text" id="vdescription" name="vdescription" class="form-control col-sm-8"> -->
                                        </div>
                                        <!-- <div class="form-group">
                                            <label for="vehicle">Vehicle Name</label>
                                            <input type="text" id="vname" name="vname5" class="form-control col-sm-8">
                                        </div> -->
                                    </div>
                                    <div class="col-md-6">
                                        <span><b class="text-center">Images</b></span>
                                        <hr>
                                        <div class="card mb-3">
                                            <div class="card-header">
                                                <p><span>Accessories</span></p>
                                            </div>
                                            <div class="card-body"> 
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" name="chk1" class="custom-control-input" id="customCheck1">
                                                            <label class="custom-control-label" for="customCheck1">Air Conditioner</label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" name="chk2" class="custom-control-input" id="customCheck2">
                                                            <label class="custom-control-label" for="customCheck2">Power Steering</label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" name="chk3" class="custom-control-input" id="customCheck3">
                                                            <label class="custom-control-label" for="customCheck3">CD Player</label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" name="chk4"class="custom-control-input" id="customCheck4">
                                                            <label class="custom-control-label" for="customCheck4">Power Door Locks</label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" name="chk5" class="custom-control-input" id="customCheck5">
                                                            <label class="custom-control-label" for="customCheck5">Driver Airbag</label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" name="chk6"  class="custom-control-input" id="customCheck6">
                                                            <label class="custom-control-label" for="customCheck6">Leather Seats</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" name="chk7" class="custom-control-input" id="customCheck7">
                                                            <label class="custom-control-label" for="customCheck7">Central Locking</label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" name="chk8" class="custom-control-input" id="customCheck8">
                                                            <label class="custom-control-label" for="customCheck8">AntiLock Braking System</label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" name="chk9" class="custom-control-input" id="customCheck9">
                                                            <label class="custom-control-label" for="customCheck9">Passenger Airbag</label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" name="chk10" class="custom-control-input" id="customCheck10">
                                                            <label class="custom-control-label" for="customCheck10">Crash Sensor</label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" name="chk11" class="custom-control-input" id="customCheck11">
                                                            <label class="custom-control-label" for="customCheck11">Brake Assist</label>
                                                        </div>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" name="chk12" class="custom-control-input" id="customCheck12">
                                                            <label class="custom-control-label" for="customCheck12">Power Windows</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-3">
                                            <div class="card-header">
                                                <p><span>FUEL TYPE</span></p>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="customRadio1" checked name="gas" class="custom-control-input" value="0">
                                                            <label class="custom-control-label" for="customRadio1">PETROL / UNLEADED</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                    <div class="custom-control custom-radio">
                                                            <input type="radio" id="customRadio2" name="gas" class="custom-control-input" value="1">
                                                            <label class="custom-control-label" for="customRadio2">Diesel</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card mb-3">
                                            <div class="card-header">
                                                <p><span>Transmission</span></p>
                                            </div>
                                            <div class="card-body">
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="custom-control custom-radio">
                                                            <input type="radio" id="automatic" checked name="transmission" class="custom-control-input" value="0">
                                                            <label class="custom-control-label" for="automatic">Automatic transmission</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                    <div class="custom-control custom-radio">
                                                            <input type="radio" id="manual" name="transmission" class="custom-control-input" value="1   ">
                                                            <label class="custom-control-label" for="manual">Manual transmission</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header">
                                                <p><span>Upload Images</span></p>
                                            </div>
                                            <div class="card-body">
                                                <div class="col-12">
                                                    <div class="form-group">
                                                        <span><b>Image Vehicle 1</b></span>
                                                        <div class="input-group mb-3 col-sm-8 p-0">
                                                            <div class="custom-file">
                                                                <label class="custom-file-label" for="inputGroupFile03">Choose file</label>
                                                                <input type="file" name="img1" class="custom-file-input " id="img1">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <span><b>Image Vehicle 1</b></span>
                                                        <div class="input-group mb-3 col-sm-8 p-0">
                                                            <div class="custom-file">
                                                                <label class="custom-file-label" for="inputGroupFile03">Choose file</label>
                                                                <input type="file" name="img2" class="custom-file-input " id="img2">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <span><b>Image Vehicle 2</b></span>
                                                        <div class="input-group mb-3 col-sm-8 p-0">
                                                            <div class="custom-file">
                                                                <label class="custom-file-label" for="inputGroupFile03">Choose file</label>
                                                                <input type="file" name="img3" class="custom-file-input " id="img3">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <span><b>Image Vehicle 3</b></span>
                                                        <div class="input-group mb-3 col-sm-8 p-0">
                                                            <div class="custom-file">
                                                                <label class="custom-file-label" for="inputGroupFile03">Choose file</label>
                                                                <input type="file" name="img4" class="custom-file-input " id="img4">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="form-group">
                                                        <span><b>Image Vehicle 4</b></span>
                                                        <div class="input-group mb-3 col-sm-8 p-0">
                                                            <div class="custom-file">
                                                                <label class="custom-file-label" for="inputGroupFile03">Choose file</label>
                                                                <input type="file" name="img5" class="custom-file-input " id="img1">
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                        <input type="submit" name="submit" id="submit" value="Submit" class="btn btn-success">
                                </div>
                            </form>
                        </div>
                </div>
            </div>
        </div>
</div>

<script>

$(document).ready(function(){

    $('#addcarForm').submit(function(e){
        e.preventDefault();
        $.ajax({
            type:'POST',
            url:'AdminController/addnew_vehicle',
            data:new FormData($(this)[0]),
            dataType:'JSON',
            contentType: false, 
            processData: false,
            success:function(data)
            {   
                $("#addcarForm")[0].reset();
                alertify.success('car created');

            },
            error: function(jqXHR, textStatus, errorThrown){
                alertify.error('There is an error');   
            }
        });
    });
});

</script>
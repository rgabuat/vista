<div class="row">
    <div class="col-md-10">
        <h1>Create Brand</h1>
        <hr>
        <div class="panel panel-default">
            <div class="panel-heading">Create Brand</div>
                <div class="panel-body">
                    <form action="<?= base_url()?>AdminController/create_brand" method="POST">
                        <div class="form-group">
                        <label for="brand">Brand Name</label>
                            <input type="text" name="brand" id="brand" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" name="submit" id="submit" value="submit">
                        </div>
                    </form>
            </div>
        </div>
    </div>
</div>

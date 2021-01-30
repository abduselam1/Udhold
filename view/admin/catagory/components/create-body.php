<section class="content">
    <div class="container-fluid">
        <div class="row mt-2">
            <div class="col-sm-6 col-12">
                <div class="card card-secondary">
                    <div class="card-header">
                        Select Picture
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="catagoryImage">
                                
                                <?php if(isset($data['catagory'])){echo "<img src=\"/custom/mvc/".$data['catagory']->img_path."\" width=\"200\" alt=\"error\">";}else{ echo  "<i class=\"fas fa-plus\" style=\"width:50%;height:50%s\"></i>";}?>
                            </label>
                            <input type="file" id="catagoryImage" name="catagoryImage" style="display:none">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-12">
                <div class="card card-secondary">
                    <div class="card-header">
                        Information
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label for="title">Name</label>
                            <input type="text" name="name" id="title" value="<?php if (isset($data['catagory']->name)){echo $data['catagory']->name;}else{echo "";}?> " class="form-control">
                        </div>
                    </div><!--end of card-body -->
                </div><!--end of card-body -->
                <button type="submit" class="btn btn-outline-success ">Create</button>
            </div>
            </div>
        </div>
        
    </div>
</section>

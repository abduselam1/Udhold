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
                            <label for="picture">
                                
                                <?php if(isset($data['secret'])){echo "<img src=\"/custom/mvc/".$data['secret']->image."\" width=\"200\" alt=\"error\">";}else{ echo  "<i class=\"fas fa-plus\" style=\"width:50%;height:50%s\"></i>";}?>
                            </label>
                            <input type="file" id="picture" name="postImage" class="form-control" id="picture" style="display:none">
                            <div class="invalid-feedback">
                                Invalid Image file
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="Catagory">Catagory</label>
                            <select name="catagory" id="catagory">
                                <option value="">Select the catagory</option> 
                                <?php foreach ($data['catagory'] as $catagory) {
                                    
                                    if (isset($data['secret'])) {
                                        if ($data['secret']->catagory_id == $catagory->id) {
                                            echo "<option selected value=\"$catagory->id\">$catagory->name</option>";
                                        }else{
                                            echo "<option value=\"$catagory->id\">$catagory->name</option>";
                                        }
                                    }
                                } ?>
                            </select>
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
                            <label for="title">Title</label>
                            <input type="text" name="title" id="title" value="<?php if (isset($data['secret']->title)){echo $data['secret']->title;}else{echo "";}?> " class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="content">Content</label>
                            <textarea name="content" class="form-control" id="content" cols="30" rows="10"><?php if (isset($data['secret']->body)){echo $data['secret']->body;}else{echo "";}?></textarea>
                        </div>
                    </div><!--end of card-body -->
                </div><!--end of card-body -->
                
            </div>
            </div>
        </div>
        


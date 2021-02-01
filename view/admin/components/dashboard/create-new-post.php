
    <div class="row">
        <div class="col-sm-6 col-12">
            <div class="card card-secondary">
            <img src="<?php if(isset($data['post'])){echo "/custom/mvc/".$data['post']->avatar;} ?>" id="post-image" width="200" class="card-img-top">
                <div class="card-header">
                    Select Picture
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="picture">
                            <i class="fas fa-plus" style="width:50%;height:50%s"></i>
                        </label>
                        <input type="file" id="picture" name="postImage" class="form-control" style="display:none">
                        <div class="invalid-feedback">
                            Invalid file
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="Catagory">Catagory</label>
                        <select class="custom-select my-1 mr-sm-2" name="catagory" id="catagory">
                            
                            <?php 
                            
                            if ($data['post'] != '') {
                                foreach ($data['catagory'] as $catagory) {
                                    if ($data['post']->catagory_id == $catagory->id) {
                                        echo "<option selected value=\"$catagory->id\">$catagory->name</option>";
                                    }else{
                                        echo "<option value=\"$catagory->id\">$catagory->name</option>"; 
                                    }                                } 
                                
                            }else{
                                echo "<option value=\"\" selected disabled>Select the catagory</option>";
                                foreach ($data['catagory'] as $catagory) {
                                    echo "<option value=\"$catagory->id\">$catagory->name</option>";
                                } 
                            }

                            ?>
                        </select>
                        <div class="invalid-feedback">
                            Invalid catagory type
                        </div>
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
                        <input type="text" name="title" id="title" value="<?php if (isset($data['post']->title)){echo $data['post']->title;}else{echo "";}?> " class="form-control">
                        <div class="invalid-feedback">
                            Invalid title
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea name="content" class="form-control" id="content" cols="30" rows="10"><?php if (isset($data['post']->content)){echo $data['post']->content;}else{echo "";}?></textarea>
                        <div class="invalid-feedback">
                            Invalid body
                        </div>
                    </div>
                </div><!--end of card-body -->
            </div><!--end of card-body -->
        </div>
        </div>
    </div>

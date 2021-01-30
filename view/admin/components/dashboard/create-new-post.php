
    <div class="row">
        <div class="col-sm-6 col-12">
            <div class="card card-secondary">
                <div class="card-header">
                    Select Picture
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="postImage">
                            
                            <?php if(isset($data['post'])){echo "<img src=\"/custom/mvc/".$data['post']->avatar."\" width=\"200\" alt=\"error\">";}else{ echo  "<i class=\"fas fa-plus\" style=\"width:50%;height:50%s\"></i>";}?>
                        </label>
                        <input type="file" id="postImage" name="postImage" style="display:none">
                    </div>

                    <div class="form-group">
                        <label for="Catagory">Catagory</label>
                        <select name="catagory" id="catagory">
                            <option value="">Select the catagory</option> 
                            <?php foreach ($data['catagory'] as $catagory) {
                                echo "<option value=\"$catagory->id\">$catagory->name</option>";
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
                        <input type="text" name="title" id="title" value="<?php if (isset($data['post']->title)){echo $data['post']->title;}else{echo "";}?> " class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="content">Content</label>
                        <textarea name="content" class="form-control" id="content" cols="30" rows="10"><?php if (isset($data['post']->content)){echo $data['post']->content;}else{echo "";}?></textarea>
                    </div>
                </div><!--end of card-body -->
            </div><!--end of card-body -->
            <button type="submit" class="btn btn-outline-success ">Post</button>
        </div>
        </div>
    </div>

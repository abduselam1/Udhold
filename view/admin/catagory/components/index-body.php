<?php include_once 'delete-modal.php'; ?>
<section class="content">
      <div class="container-fluid">
            <table class="table table-striped mt-2 mb-2">
                <?php 
                // print_r($data['catagory']);
                if ($data['catagory'] == '') {
                    echo "You have nothing in your catagory table";
                }else{

                    echo "<thead class=\"thead pt-1 pb-1 bg-success\">
                        <td>id</td>
                        <td>name</td>
                        <td>Image</td>
                        <td>Action</td>
                    </thead>";

                    foreach ($data['catagory'] as $value) {
                        echo "<tr>
                            <td>$value->id</td>
                            <td>$value->name</td>
                            <td><img src=\"/custom/mvc/$value->img_path\" class=\"\" width=\"75\" alt=\"$value->name\"></td>
                            <td>
                                <a href=\"/custom/mvc/admin/catagory/$value->id/edit\" class=\"btn btn-sm btn-warning\"><i class=\"fas fa-edit\"></i> Edit</a>
                                <button class=\"btn btn-sm btn-danger\" data=\"$value->id\" id=\"$value->id\" data-toggle=\"modal\" data-target=\"#DeleteModal\"><i class=\"fas fa-trash\"></i> Delete</button>
                            </td>
                        </tr>";
                    }
                }
                ?>
                
            </table>
      </div>
    </section>


    
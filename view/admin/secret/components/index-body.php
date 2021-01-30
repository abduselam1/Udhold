<?php include_once 'delete-modal.php'; ?>
<section class="content">
      <div class="container-fluid">
            <table class="table table-striped mt-2 mb-2">
                <?php 
                // print_r($data['secret']);
                if ($data['secret'] == '') {
                    echo "You have nothing in your secret table";
                }else{

                    echo "<thead class=\"thead pt-1 pb-1 bg-success\">
                        <td>id</td>
                        <td>Title</td>
                        <td>Image</td>
                        <td>Actions</td>
                    </thead>";

                    foreach ($data['secret'] as $value) {
                        echo "<tr>
                            <td>$value->id</td>
                            <td>$value->title</td>
                            <td><img src=\"/custom/mvc/$value->image\" width=\"75\" class=\"img-round\" alt=\"$value->title\"></td>
                            <td>
                                <a href=\"/custom/mvc/admin/secret/$value->id\" class=\"btn btn-sm btn-primary\"><i class=\"fas fa-eye\"></i> View</a>
                                <a href=\"/custom/mvc/admin/secret/$value->id/edit\" class=\"btn btn-sm btn-warning\"><i class=\"fas fa-edit\"></i> Edit</a>
                                <button class=\"btn btn-sm btn-danger\" data=\"$value->id\" id=\"$value->id\" data-toggle=\"modal\" data-target=\"#DeleteModal\"><i class=\"fas fa-trash\"></i> Delete</button>
                            </td>
                        </tr>";
                    }
                }
                ?>
                
            </table>
      </div>
    </section>


    
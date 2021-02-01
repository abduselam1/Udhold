<div class="col-md-6 mb-2">

    <div class="card">
        <img src="/custom/mvc/<?=$data['post']->avatar?>" class="card-img-top" alt="<?=$data['titles']?>">
    </div>

</div>

<div class="col-md-6">

    <div class="row ml-1 mr-1">
        <div class="col-12">
            <div class="card card-success">
                <div class="card-header">
                    <div class="card-title">
                        Title
                    </div>
                </div>
                <div class="card-body">
                    <?=$data['post']->title?>
                </div>
            </div>
        </div>
        <div class="col-12">
        <div class="card card-success">
            <div class="card-header">
                <div class="card-title">
                    Body
                </div>
            </div>
                <div class="card-body">
                    <?=$data['post']->content?>
                </div>
            </div>
        </div>
        
    </div>

</div>
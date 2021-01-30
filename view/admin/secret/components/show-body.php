<section class="content">
    <div class="container-fluid">

    <div class="row mt-2">
        <div class="col-sm-6 col-12">
            <div class="card">
                <img src="/custom/mvc/<?=$data['secret']->image?>" class="card-img-top" alt="<?=$data['secret']->title?>">
            </div>
        </div>
        <div class="col-sm-6 col-12">
            <div class="row">
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <div class="card-title">
                                Title
                            </div>
                        </div>
                        <div class="card-body">
                            <?=$data['secret']->title?>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <div class="card-title">
                                Body
                            </div>
                        </div>
                        <div class="card-body">
                            <?=$data['secret']->body?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    </div>
</div>
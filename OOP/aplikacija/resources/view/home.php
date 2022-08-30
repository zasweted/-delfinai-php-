<?php App\App::view('top', ['title' => $title]);?>





<div class="container">
    <div class="row justify-content-center">
        <div class="col-5">
            <div class="card m-4">
                <div class="card-header">
                    <h3><?=$welcome?></h3>
                </div>
                <div class="card-body">

                    <a class="btn btn-primary mt-5" href="<?= URL ?>animals/create">Create</a>
                    <a class="btn btn-primary mt-5" href="<?= URL ?>animals">List</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<?php App\App::view('bottom');?>
<?php

App\App::view('top', ['title'=> $title]);
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-5">
            <div class="card m-4">
                <div class="card-header">
                    <h2>To From</h2>
                </div>
                <div class="card-body">
                    <form action="<?= URL ?>api/go" method="post">
                        <div class="form-group">
                            <label>From</label>
                            <input type="text" name="from" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>To</label>
                            <input type="text" name="to" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary mt-5">Go</button>
                    </form>
                    <?php if($result) : ?>
                        <div class="result">
                            From: <?= $result['from'] ?> To: <?= $result['to'] ?> is <?= $result['d']?> KM
                        </div>
                        <?php endif ?>
                </div>
            </div>
        </div>
    </div>
</div>



<?php
App\App::view('bottom');
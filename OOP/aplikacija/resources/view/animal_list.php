<?php

App\App::view('top', ['title'=> $title]);
?>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-9">
            <div class="card m-4">
                <div class="card-header">
                    <h2>Animal List</h2>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <?php foreach($animals as $animal):?>
                        <li class="list-group-item">
                            <div class="line">
                                <div class="line__content">
                                    <div class="line__content__type">
                                        <?= $animal['type']?>
                                    </div>
                                    <div class="line__content__weight">
                                        <?= $animal['weight']?> kg
                                    </div>
                                    <?php if($animal['tail']) : ?>
                                    <div class="line__content__tail">
                                    </div>
                                    <?php endif ?>
                                </div>
                                <div class="line__buttons">
                                    <a href="<?=URL . 'animals/edit/' . $animal['id']?>" type="button"
                                        class="btn btn-outline-success">Edit</a>
                                    <a href="<?=URL?>" type="button" class="btn btn-outline-danger">Delete</a>
                                </div>
                            </div>
                        </li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>



<?php
App\App::view('bottom');
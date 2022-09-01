<div class="container">
    <div class="row justify-content-center">
        <div class="col-12">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="<?=URL?>">HOME</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=URL?>animals">Animals</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?=URL?>animals/create">New Animal</a>
                </li>
                <?php if(App\Middlewares\Auth::isLoged()) : ?>
                <li class="nav-item">
                    <div class="user-nav">
                        <div class="name"><?= $_SESSION['user']['name'] ?></div>
                        <form action="<?=URL?>logout" method="post">
                            <button class="btn nav-link red" type="submit">Logout</button>
                        </form>
                    </div>
                </li>
                <?php else : ?>
                <li class="nav-item">
                    <a class="nav-link" href="<?=URL?>login">Login</a>
                </li>

                <?php endif ?>
            </ul>
        </div>
    </div>
</div>
<?php

if(isset($_SESSION['msg'])) {
    $msg = $_SESSION['msg'];
    unset($_SESSION['msg']);
}

?>


<?php if(isset($msg)) : ?>
<div class="msg-bin">
    <div class="msg" style="background:<?=$msg['type']?>">
        <?=$msg['text'] ?>
    </div>

</div>
<?php endif ?>
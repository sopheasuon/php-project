<?php
    require_once('../model/model.php');
    $living_rooms = getImage();
    foreach ($living_rooms as $living_room):
?>
<img src="images<?= $living_room['image'] ?>" alt="">

<?php endforeach; ?> 
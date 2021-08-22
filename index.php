<?php
    include_once('partial/header.php');
    include_once('partial/navbar.php');

    // link page
    if (isset($_GET['page'])){
        if ($_GET['page'] == 'brand'){
            require_once('pages/brand.php');
        }elseif ($_GET['page'] == 'contact'){
            require_once('pages/contact.php');
        }elseif ($_GET['page'] == 'about_us') {
            require_once('pages/about_us.php');
        } elseif ($_GET['page'] == 'promotion'){
            require_once('pages/promotion.php');
        }elseif ($_GET['page'] == 'home'){
            require_once('pages/home.php');
        }elseif ($_GET['page'] == 'living') {
            require_once('pages/living_room.php');
        }elseif ($_GET['page'] == 'bed') {
            require_once('pages/bed_room.php');
        }elseif ($_GET['page'] == 'dining') {
            require_once('pages/dining_room.php');
        }elseif ($_GET['page'] == 'accessory') {
            require_once('pages/other_accessory.php');
        }elseif ($_GET['page'] == 'bath') {
            require_once('pages/bathroom.php');
        }elseif ($_GET['page'] == 'login') {
            require_once('pages/login.php');
        }elseif ($_GET['page'] == 'register') {
            require_once('pages/register.php');
        } else {
            require_once('pages/404.php');
        }
    }else {
        require_once('pages/home.php');
    }
    include_once('partial/footer.php');

?>
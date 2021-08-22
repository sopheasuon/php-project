<?php
    include_once('../model/model.php');
    $page = $_GET['page'];
    $id = $_GET['id'];
        
    delete($page, $id);
    header("location: http://localhost/php-project/?page=$page");
?>
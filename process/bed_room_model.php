<!-- Create item in bedroom page -->
<?php 
    include_once("../model/model.php");
    include_once('../model/model.php');
    if(isset($_FILES['file'])){
        $imageName = $_FILES['file']['name'];
        $tmp_name = $_FILES['file']['tmp_name'];
        $fileImage = '../images/';
        move_uploaded_file($tmp_name, $fileImage.$imageName);
        add_bed_room($_POST, $imageName);
        header("location: http://localhost/php-project/?page=bed");
    
    }else{
        echo "Not Successful";
    }

?>

<!-- Delete item in bed room page  -->
<?php
    require_once('../model/model.php');
    delete_bed_room($_GET['id']);
    header('Location: http://localhost/php-project/?page=bed');

?> 
<!-- Edit item in bed room -->
<?php
    include_once('../model/model.php');
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $image = $_POST['image'];
        if(!empty($name) && !empty($price)) {
            editBed_room($_POST);
        }
        header("location: http://localhost/php-project/?page=bed");
    } 
?>
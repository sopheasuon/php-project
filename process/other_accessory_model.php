<!-- add item in other accessories page -->
<?php 
    include_once('../model/model.php');
    if(isset($_FILES['file'])){
        $imageName = $_FILES['file']['name'];
        $tmp_name = $_FILES['file']['tmp_name'];
        $fileImage = '../images/';
        move_uploaded_file($tmp_name, $fileImage.$imageName);
        add_other_accessory($_POST, $imageName);
        header("location: http://localhost/php-project/?page=accessory");
    
    }else{
        echo "Not Successful";
    }

?>
<!-- Delet item in other accessories page -->
<?php
    require_once('../model/model.php');
    deleteOther_accessories($_GET['id']);
    header('Location: http://localhost/php-project/?page=accessory');

?>

<!-- Edit item in other accessories page  -->
<?php
    include_once('../model/model.php');
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $image = $_POST['image'];
        if(!empty($name) && !empty($price)) {
            editOther_accessory($_POST);
        }
        header("location: http://localhost/php-project/?page=accessory");
    } 
?>
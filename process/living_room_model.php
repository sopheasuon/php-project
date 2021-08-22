<!-- Add item in Living room page -->
<?php
    include_once('../model/model.php');
    if(isset($_FILES['file'])){
        $imageName = $_FILES['file']['name'];
        $tmp_name = $_FILES['file']['tmp_name'];
        $fileImage = '../images/';
        move_uploaded_file($tmp_name, $fileImage.$imageName);
        add_living_room($_POST, $imageName);
        header("location: http://localhost/php-project/?page=living");
    
    }else{
        echo "Not Successful";
    }
       
    
?>

<!-- Delete item in Living room page  -->
<?php
    require_once('../model/model.php');
    deletLiving($_GET['id']);
    header('Location: http://localhost/php-project/?page=living');

?> 

<!-- Edite item in living room page -->
<?php
    include_once('../model/model.php');
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $name = $_POST['name'];
        $price = $_POST['price'];
        $image = $_POST['image'];
        if(!empty($name) && !empty($price)) {
            editLiving($_POST);
        }
        header("location: http://localhost/php-project/?page=living");
    } 
?>


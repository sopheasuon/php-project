<?php include_once('../partial/header.php'); ?>

<div class="container p-5 mt-5 mb-5" style="height: 54vh;">
    <?php 
        require_once('../model/model.php');
        $id = $_GET['id'];
        $other_accessory = getOther_accessory($id);
        foreach($other_accessory as $row);

    ?>
    <!-- Form edit in other accessories -->
    <form action="other_accessory_model.php" method="post">
        <input type="hidden" value="<?= $row['otherId'] ?>" name="otherId">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Name ..." name="name" value="<?= $row['name'] ?>">
        </div>
        <div class="form-group">
            <input type="number" class="form-control" placeholder="Price ..." name="price" value="<?= $row['price'] ?>">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary btn-block">Create+</button>
        </div>
    </form>
</div>

<?php include_once('../partial/footer.php'); ?>
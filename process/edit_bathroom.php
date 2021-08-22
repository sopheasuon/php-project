<?php include_once('../partial/header.php'); ?>

<div class="container p-5 mt-5 mb-5" style="height: 54vh;">
    <!-- get id in model -->
    <?php 
        require_once('../model/model.php');
        $id = $_GET['id'];
        $bathroom = getBathroom($id);
        foreach($bathroom as $row);

    ?>
    <!-- From edit item in bathroom -->
    <form action="bathroom_model.php" method="post">
        <input type="hidden" value="<?= $row['bathId'] ?>" name="bathId">
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
<?php include_once('../partial/header.php'); ?>

<div class="container p-5 mt-5 mb-5" style="height: 54vh;">
<!-- php get id in model -->
    <?php 
        require_once('../model/model.php');
        $id = $_GET['id'];
        $bed_room = getBed_room($id);
        foreach($bed_room as $row);

    ?>
    <!-- Form edit in bed room -->
    <form action="bed_room_model.php" method="post">
        <input type="hidden" value="<?= $row['bedId'] ?>" name="bedId">
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
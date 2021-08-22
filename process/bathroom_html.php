<?php include_once('../partial/header.php'); ?>
<!-- Form to create -->
<div class="container p-5 mt-5 mb-5" style="height: 54vh;">
    <form action="bathroom_model.php" method="post"  enctype="multipart/form-data">
        <div class="form-group">
            <input type="text" class="form-control" placeholder="Name ..." name="name">
        </div>
        <div class="form-group">
            <input type="number" class="form-control" placeholder="Price ..." name="price">
        </div>
        <div class="form-group">
            <input type="file" class="form-control" placeholder="Image" name="file" id="file">
        </div>
        <div class="form-group mt-3">
            <button type="submit" class="btn btn-primary btn-block">Create+</button>
        </div>
    </form>
</div>

<?php include_once('../partial/footer.php'); ?>
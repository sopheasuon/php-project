
<?php
    include_once('model/model.php');
    $bathrooms = database()->query('SELECT * FROM bathroom ORDER BY bathId DESC');
?> 
<?php require_once('partial/header.php'); ?>
    <div class="card text-light">
        <img src="https://cdn.shopify.com/s/files/1/3000/3820/collections/SOFAS_AND_ARMCHAIRS_COLLECTION_1920x960.jpg?v=1595591155" style="height: 60vh; width: 100%;" alt="">
        <div class="card-img-overlay mt-5">
            <h1 class="card-title d-flex justify-content-center mt-5 font-weight-bold text-xl-left">Welcome to Peeco Furniture
            <h2 class="card-title d-flex justify-content-center font-weight-bold text-xl-left">BATHROOM</h2>
        </div>
    </div>
    <div class="d-flex justify-content-end p-2 mt-5">
        <a href="process/bathroom_html.php" class="btn btn-primary">Add +</a>
    </div>
    <?php
        //Columns must be a factor of 12 (1,2,3,4,6,12)
        $numOfCols = 3;
        $rowCount = 0;
        $bootstrapColWidth = 12 / $numOfCols;
    ?>
    <div class="row mt-3">   
        <?php
            foreach($bathrooms as $bathroom){
        ?>  
            <div class="card-<?php echo $bootstrapColWidth; ?> mt-5 ml-5 border border-muted" style="width: 25rem;">
                <div class="thumbnail">
                    <img class="img-thumbnail p-3" src="images/<?= $bathroom['image'] ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">Name: <?= $bathroom['name'] ?></h5>
                        <strong class="text-danger">Price: <?= $bathroom['price'] ?>$</strong>
                    </div>
                    <div class="action d-flex justify-content-end">
                        <a href="process/edit_bathroom.php?id=<?= $bathroom['bathId'] ?>" class="btn btn-primary btn-sm mr-2">Edit</a>
                        <a href="process/bathroom_model.php?id=<?= $bathroom['bathId'] ?>" class="btn btn-danger btn-sm mr-2">Delete</a>
                    </div>
                </div>
            </div>
        <?php
            $rowCount++;
            if($rowCount % $numOfCols == 0) echo '</div> <div class="row">';
        }
        ?>
</div>
<?php require_once('partial/footer.php'); ?>




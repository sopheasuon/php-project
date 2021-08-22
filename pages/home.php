
<div class="card text-light ">
        <img src="https://cdn.shopify.com/s/files/1/3000/3820/collections/SOFAS_AND_ARMCHAIRS_COLLECTION_1920x960.jpg?v=1595591155" style="height: 65vh; width: 100%;" alt="">
        <div class="card-img-overlay mt-5">
            <h1 class="card-title d-flex justify-content-center mt-5 font-weight-bold text-xl-left">Welcome to Peeco Furniture
            <h2 class="card-title d-flex justify-content-center font-weight-bold text-xl-left">HOME PAGE</h2>
        </div>
</div>
<div class="container mt-3 p-3">
            <?php 
                include_once('model/model.php');
                $products = getAllProducts();
                foreach($products as $product):
                    $product_name = readMore($product['productName'], 200);
            ?>
            <div class="card">
                <div class="card-body">
                    <div class="d-flex">
                        <div class="card-image mr-3">
                            <img class="img-fluid" width="200" src="<?= $product['image'] ?>" alt="">
                        </div>
                        <div class="info">
                            <h3 class="display-4"><?= $product['productName'] ?></h3>
                        </div>
                    </div>
                    <div class="action d-flex justify-content-end">
                        <a href="http://localhost/php-project/?page=<?= $product['productLink'] ?>" class="btn btn-primary btn-sm">See more</a>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
</div>
    
    
<?php require_once('partial/footer.php'); ?>
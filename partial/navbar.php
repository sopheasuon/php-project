<!-- Navbar search -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <!-- Text logo -->
  <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
    <div class="logo text-secondary ml-5 text-center" style="font-family: Cursive;">
      <h3>Peeco Furniture</h3>
    </div>
      <?php 
        require_once('model/model.php');
        $products = "";
        if($_SERVER['REQUEST_METHOD'] == 'POST'){
                // search
          $products = searchByName($_POST);

        } else{
              // select
          $products = getAllProducts();
        }
            
        // print_r($products);
        foreach($products as $product):
        
      ?>
            
        </a>
    </div>
        <?php endforeach; ?>
    </div>
    <!-- button search -->
    <div class="container mt-3 p-3" style="margin-left: 18em; ">
      <form action="http://localhost/php-project/?page=<?= $product['productLink'] ?>" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" style="width: 25rem;" placeholder="Search by type furniture" name="search">
          <div class="input-group-append" >
              <button class="btn btn-secondary" type="submit">Search</button>
          </div>
        </div>
      </from>
    </div>
    <!-- login, register, and Post product for customer -->
    <div>
     <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="?page=login">Login</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="?page=register">Register</a>
      </li>
      <!-- <button class="btn btn-outline-secondary my-2 my-sm-0" type="submit">POST Product</button> -->
    </ul>
  </div>
</nav>
<!-- Menu -->
<div class=" ">
  <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- Menu Category -->
    <div class="collapse navbar-collapse ml-5" id="navbarTogglerDemo03">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
      <!-- item in categories -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            CATEGORIES
          </a>
          <!-- item in category -->
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            <a class="dropdown-item text-primary" href="?page=living">Living Rooms</a>
            <a class="dropdown-item text-primary" href="?page=bed">Bed Rooms</a>
            <a class="dropdown-item text-primary" href="?page=dining">Dining Rooms</a>
            <a class="dropdown-item text-primary" href="?page=bath">Bathrooms</a>
            <a class="dropdown-item text-primary" href="?page=accessory">Other accessories</a>
          </div>
        </li>
        <!-- item menu -->
        <li class="nav-item">
          <a class="nav-link" href="?page=home">HOME</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=brand">BRANDS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=contact">CONTACT</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=about_us">ABOUT US</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="?page=promotion">PROMOTION</a>
        </li>
      </ul>
    </div>
  </nav>
</div>
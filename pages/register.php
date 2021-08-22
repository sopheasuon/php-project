<div class="card text-light">
    <img src="https://cdn.shopify.com/s/files/1/3000/3820/collections/SOFAS_AND_ARMCHAIRS_COLLECTION_1920x960.jpg?v=1595591155" style="height: 60vh; width: 100%;" alt="">
    <div class="card-img-overlay mt-5">
        <h1 class="card-title d-flex justify-content-center mt-5 font-weight-bold text-xl-left">Welcome to Peeco Furniture
        <h2 class="card-title d-flex justify-content-center font-weight-bold text-xl-left">REGISTER</h2>
    </div>
</div>

<div class="container p-3 mt-3">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-4 border border-secondary p-3">
            <h3 class="text-secondary" style="margin-left: 5em;">Register</h3>
            <form action="models/register_model.php" method="post">
                <div class="form-group">
                    <input type="text" name="username" class="form-control" placeholder="Username">
                </div>
                <div class="form-group">
                    <input type="password" name="password" class="form-control" placeholder="Password">
                </div>
                <input type="hidden" name="role" class="form-control" value="user">
                <div class="form-group">
                    <button class="btn btn-secondary btn-block" type="submit">Register now </button>
                </div>
            </form>
        </div>
        <div class="col-4"></div>
    </div>
</div>
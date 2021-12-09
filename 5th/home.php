<?php 
$title = "home";
include "layouts/header.php";
include "middleware/auth.php";
include "layouts/nav.php";
?>
    <div class="contianer">
        <div class="row mt-5">
            <div class="col-4">
                <div class="card">
                    <img class="card-img-top" src="images/products/mac.jpg" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Laptop</h4>
                        <p class="card-text">15000 EGP</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <img class="card-img-top" src="images/products/iphone13.jpg" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Mobile</h4>
                        <p class="card-text">5000 EGP</p>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card">
                    <img class="card-img-top" src="images/products/samsung.jpg" alt="">
                    <div class="card-body">
                        <h4 class="card-title">TV</h4>
                        <p class="card-text">9000 EGP</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php 
include "layouts/footer.php";
?> 
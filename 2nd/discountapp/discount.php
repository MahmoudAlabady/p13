<?php

#app 
// user -> enter his name
// user -> enter his phone
// $cities = ['cairo'=>0,'alex'=>50,'others'=>200]
// $products = ['laptop'=>15000,'mobile'=>12000,'tv'=>10000,'tshirt'=> 250]
// $discount = ['laptop'=>0.2,'mobile'=>0.1,'tv'=> 0.05 , 'tshirt'=>0]

// Name : Galal
// Phone : 01000498488
// City : Alex
// Delivery tax : 50 EGP
// Product : Laptop
// Discount Percentage : 20 %
// Disount Value : 3000 EGP
// Price After Discount : 12000 EGP
// Total Price : 12050 EGP
/*  solution */
?>

<?php

?>
<!doctype html>
<html lang="en">

<head>
    <title>Products</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="offset-3 col-6">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="h1 text-dark"> Buy Now! </h1>
                    </div>
                    <div class="col-12">
                        <form action="post_discount.php" method="post">
                            <div class="form-group">
                              <label for="name">Full Name</label>
                              <input type="text" name="name" id="name" class="form-control" placeholder="" aria-describedby="helpId" value="<?php if(isset($_POST['name'])){echo $_POST['name'];} ?>">
                            </div>
                            <div class="form-group">
                              <label for="Phone">Phone</label>
                              <input type="number" name="phone" id="Phone" class="form-control" placeholder="" aria-describedby="helpId" value="<?php if(isset($_POST['phone'])){echo $_POST['phone'];} ?>">
                            </div>
                            <div class="form-group">
                              <label for="city">City</label>
                              <select name="city" class="form-control" id="city">
                                    <option <?= (isset($_POST['city']) && $_POST['city'] == 'cairo') ? 'selected' : '' ?> value="cairo">Cairo</option>
                                    <option <?php if(isset($_POST['city']) && $_POST['city'] == 'alex') {echo "selected";} ?>  value="alex">Alex</option>
                                    <option <?= (isset($_POST['city']) && $_POST['city'] == 'others') ? 'selected' : '' ?> value="others">Others</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <label for="Products">Products</label>
                              <select name="product" class="form-control" id="Products">
                                    <option <?= (isset($_POST['product']) && $_POST['product'] == 'laptop') ? 'selected' : '' ?> value="laptop">Laptop</option>
                                    <option <?= (isset($_POST['product']) && $_POST['product'] == 'mobile') ? 'selected' : '' ?> value="mobile">Mobile</option>
                                    <option <?= (isset($_POST['product']) && $_POST['product'] == 'tv') ? 'selected' : '' ?>  value="tv">Tv</option>
                                    <option <?= (isset($_POST['product']) && $_POST['product'] == 'tshirt') ? 'selected' : '' ?>  value="tshirt">T-shirt</option>
                              </select>
                            </div>
                            <div class="form-group">
                              <button class="btn btn-dark rounded"> Calculate </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>
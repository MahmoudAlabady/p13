<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row">

            <div class="offset-3 col-6">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="text-warning">Your Invoice</h1>
                    </div>
                    <div class="col-12">
                        <?php

                        if ($_POST) {
                            switch ($_POST['city']) {
                                case 'cairo':
                                    $deliveryTax = 0;
                                    break;
                                case 'alex':
                                    $deliveryTax = 50;
                                    break;
                                default:
                                    $deliveryTax = 200;
                            }

                            switch ($_POST['product']) {
                                case 'laptop':
                                    $price = 15000;
                                    $discount = 0.2;
                                    break;
                                case 'tv':
                                    $price = 10000;
                                    $discount = 0.05;
                                    break;
                                case 'mobile':
                                    $price = 12000;
                                    $discount = 0.1;
                                    break;
                                default:
                                    $price = 250;
                                    $discount = 0;
                            }
                            $percentage = $discount * 100;
                            $discountValue = $discount * $price;
                            $priceAfterDiscount = $price - $discountValue;
                            $totalPrice = $priceAfterDiscount + $deliveryTax;

                            $message = "<div class='alert alert-success'>
                                            Name : {$_POST['name']} <br>
                                            Phone : {$_POST['phone']} <br>
                                            City : {$_POST['city']} <br>
                                            Delivery tax : $deliveryTax EGP  <br>
                                            Product :  {$_POST['product']} <br>
                                            Discount Percentage : $percentage % <br>
                                            Disount Value : $discountValue EGP <br>
                                            Price After Discount : $priceAfterDiscount EGP <br>
                                            Total Price : $totalPrice EGP <br>
                                        </div>";
                            echo $message;
                        } else {
                            echo "<div class='alert alert-danger'> 404 not found  </div>";
                        }
                        ?>
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
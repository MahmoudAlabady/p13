<?php
$title = "Login";
include "layouts/header.php";
include "middleware/guest.php";
include "layouts/nav.php";

$users = [
    (object)[
        'id' => 1,
        'name' => 'ahmed',
        "gender" => 'm',
        'image'=>'1.jpg',
        'email'=>'ahmed@gmail.com',
        'password'=>123456
    ],
    (object)[
        'id' => 1,
        'name' => 'moahmed',
        "gender" => 'm',
        'image'=>'2.jpg',
        'email'=>'mohamed@gmail.com',
        'password'=>123456
    ],
    (object)[
        'id' => 1,
        'name' => 'esraa',
        "gender" => 'f',
        'image'=>'3.jpg',
        'email'=>'esraa@gmail.com',
        'password'=>123456
    ],
];

if($_POST){
    // validation
    $errors = [];
    if(empty($_POST['email'])){
        $errors['email'] = "<div class='alert alert-danger'> Email Is Requried </div>";
    }

    if(empty($_POST['password'])){
        $errors['password'] = "<div class='alert alert-danger'> Password Is Requried </div>";
    }

    if(empty($errors)){
        foreach ($users as $index => $user) {
            if($user->email == $_POST['email'] && $user->password == $_POST['password']){
                $_SESSION['user'] = $user;
                header('location:home.php');die;
            }
        }
        $errors['wrong'] = "<div class='alert alert-danger'> Wrong Email Or Password </div>";
    }

}

?>
<div class="contianer">
    <div class="row mt-5">
        <div class="col-4 offset-4">
            <h1 class="h1 text-left text-dark mb-5"> Login </h1>
            <form method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" class="form-control" name="email" value="<?php if(isset($_POST['email'])){echo $_POST['email'];} ?>" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                    <?php 
                    if(isset($errors['email'])){
                        echo $errors['email'];
                    }
                    if(isset($errors['wrong'])){
                        echo $errors['wrong'];
                    }
                    ?>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
                    <?php 
                        if(isset($errors['password'])){
                            echo $errors['password'];
                        }
                    ?>
                </div>
                <button type="submit" class="btn btn-dark"><?= $title ?></button>
            </form>
        </div>
    </div>
</div>
<?php include "layouts/footer.php" ?>
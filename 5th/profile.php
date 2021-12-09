<?php
$title = "Profile";
include "layouts/header.php";
include "middleware/auth.php";
include "layouts/nav.php";

if($_POST){
    // print_r($_FILES);die;
    // validation
    $errors = [];
    if(empty($_POST['name'])){
        $errors['name'] = "<div class='alert alert-danger'> Name Is Required </div>";
    }

    if(empty($_POST['email'])){
        $errors['email'] = "<div class='alert alert-danger'> Email Is Required </div>";
    }

    if(empty($_POST['gender'])){
        $errors['gender'] = "<div class='alert alert-danger'> Gender Is Required </div>";
    }

    if(empty($errors)){
        // check if image exists
        if($_FILES['image']['error'] == 0){
            // validate on extension
            $allowedExtensions = ['png','jpg','jpeg'];
            $uploadedPhotoExtension = pathinfo($_FILES['image']['name'],PATHINFO_EXTENSION);
            if(!in_array($uploadedPhotoExtension,$allowedExtensions)){
                $errors['image-extension'] = "<div class='alert alert-danger'> Allowed Extensions Is ".implode(',',$allowedExtensions)." </div>";
            }
            // validate on size
            $maxUploadedFile = 10**6;
            if($_FILES['image']['size'] > $maxUploadedFile){
                $errors['image-size'] = "<div class='alert alert-danger'> Max Upload Size Is $maxUploadedFile Bytes </div>";
            }

            if(empty($errors)){
                $dir = "images/users/";
                $photoName = time() .'.' . $uploadedPhotoExtension  ; // 21321321.png
                $path = $dir . $photoName;
                // move image from temp dir to permenant dir
                move_uploaded_file($_FILES['image']['tmp_name'],$path);
                $_SESSION['user']->image = $photoName;
            }
            
        }
        // update
        $_SESSION['user']->name = $_POST['name'];
        $_SESSION['user']->email = $_POST['email'];
        $_SESSION['user']->gender = $_POST['gender'];
        // success message
        $success = "<div class='alert alert-success'> Data Updated Successfully </div>";
    }
    
    
}

?>

<div class="contianer">
    <div class="row mt-5">
        <div class="col-12">
            <h1 class="text-center text-primary h1 my-5"> Profile </h1>
        </div>
        <div class="col-4 offset-4">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-12">
                        <?php 
                            if(isset($success)){
                                echo $success;
                            }
                            if(!empty($errors)){
                                foreach($errors AS $error){
                                    echo $error;
                                }
                            }
                        ?>
                    </div>
                    <div class="col-6 offset-3">
                        <img src="images/users/<?= $_SESSION['user']->image ?>" alt="<?= $_SESSION['user']->name ?>" class="w-100 rounded-circle">
                        <input type="file" name="image" id="" class="form-control">
                    </div>
                </div>
                <div class="form-group">
                  <label for="name">Name</label>
                  <input type="text" name="name" id="name" class="form-control" placeholder="" aria-describedby="helpId" value="<?= $_SESSION['user']->name ?>">
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" name="email" id="email" class="form-control" placeholder="" aria-describedby="helpId" value="<?= $_SESSION['user']->email ?>">
                </div>
                <div class="form-group">
                  <label for="gender">Gender</label>
                  <select name="gender" id="gender" class="form-control">
                      <option <?= $_SESSION['user']->gender == 'm' ? 'selected' : '' ?> value="m">Male</option>
                      <option <?php if($_SESSION['user']->gender == 'f' ) { echo 'selected'; } ?> value="f">Female</option>
                  </select>
                </div>
                <div class="form-group">
                  <button class="btn btn-primary rounded"> Update </button>
                </div>
            </form>
        </div>
    </div>
</div>

<?php
include "layouts/footer.php";
?>
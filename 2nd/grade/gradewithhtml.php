<?php
// $message = "";
if ($_POST) {

    define('numberOfSubjects',5);
    $maxGradePerSubject = 120;
    $maxGradePerYear = $maxGradePerSubject * numberOfSubjects; // 600

    $totalGradePerStudent = $_POST['math'] +  $_POST['physics'] + $_POST['chemsitry'] + $_POST['arabic'] + $_POST['english']; // 500


    $percentage = round(($totalGradePerStudent / $maxGradePerYear) * 100, 1); // 80.3333

    if ($percentage >= 90) {
        $grade = 'A';
    } elseif ($percentage >= 80 && $percentage < 90) {
        $grade = "B";
    } elseif ($percentage >= 70 && $percentage < 80) {
        $grade = "C";
    } elseif ($percentage >= 60 && $percentage < 70) {
        $grade = "D";
    } elseif ($percentage >= 50 && $percentage < 60) {
        $grade = "D -";
    } else {
        $grade = 'F';
    }

    $message = "<div class='alert alert-success'> Your Percentage is $percentage% And Your Grade Is $grade </div>";
}
?>
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
        <div class="row mt-5">
            <div class="offset-3 col-6">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1 class="h1 text-success"> Calculate Your Percentage </h1>
                    </div>
                    <div class="col-12">
                        <form method="post">
                            <div class="form-group">
                                <label for="physicis">Physicis</label>
                                <input type="number" name="physics" id="physicis" class="form-control" placeholder="" aria-describedby="helpId" value="<?php if(isset($_POST['physics'])) {echo $_POST['physics'];} ?>">
                            </div>
                            <div class="form-group">
                                <label for="Math">Math</label>
                                <input type="number" name="math" id="Math" class="form-control" placeholder="" aria-describedby="helpId" value="<?= isset($_POST['math']) ? $_POST['math'] : '' ?>">
                            </div>
                            <div class="form-group">
                                <label for="English">English</label>
                                <input type="number" name="english" id="English" class="form-control" placeholder="" aria-describedby="helpId" value="<?= isset($_POST['english']) ? $_POST['english'] : '' ?>">
                            </div>
                            <div class="form-group">
                                <label for="Arabic">Arabic</label>
                                <input type="number" name="arabic" id="Arabic" class="form-control" placeholder="" aria-describedby="helpId" value="<?= isset($_POST['arabic']) ? $_POST['arabic'] : '' ?>">
                            </div>
                            <div class="form-group">
                                <label for="Chemsitry">Chemsitry</label>
                                <input type="number" name="chemsitry" id="Chemsitry" class="form-control" placeholder="" aria-describedby="helpId" value="<?= isset($_POST['chemsitry']) ? $_POST['chemsitry'] : '' ?>">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success rounded"> Calculate </button>
                            </div>
                        </form>
                        <?php echo(isset($message)  ?  $message : '');  ?>
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
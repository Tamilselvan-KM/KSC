<?php
$title = 'KSC Events';
require 'views/categories/categoryForm.php';
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- jquery cdn -->
    <script src="https://code.jquery.com/jquery-3.6.3.min.js"
        integrity="sha256-pvPw+upLPUjgMXY0G+8O0xUf+/Im1MZjXxxgOcBQBXU=" crossorigin="anonymous"></script>
    <title><?=$title?></title>
</head>

<body>

    <div class="container">
        <img src="./images/ksc-school-logo.png" alt="School Logo">
        <P>Affiliated to CBSE New Delhi. Affiliation No : 1931087</P>
        <form action="" method="post">
            <?php
                require 'includes/category.php';
            ?>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="mb-3 row">
                        <label for="selectBox" class="col-sm-3 col-form-label">School/ Individual</label>
                        <div class="col-sm-9">
                            <select class="form-select form-select" aria-label=".form-select-lg example" id="selectBox">
                                <option value="school">School</option>
                                <option value="individual">Individual</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="schoolName" class="col-sm-3 col-form-label">School Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="schoolName">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="address" class="col-sm-3 col-form-label">Address</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="address">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="phone" class="col-sm-3 col-form-label">Phone</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="phone">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="email" class="col-sm-3 col-form-label">E-mail</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="email">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="personToContact" class="col-sm-3 col-form-label">Person to contact</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="personToContact">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="ContactPersonNo" class="col-sm-3 col-form-label">Contact Person's Phone</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="ContactPersonNo">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="ContactPersonEmail" class="col-sm-3 col-form-label">Contact Person's E-mail</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="ContactPersonEmail">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <?php
                        require 'views/categories/category1.php';
                        require 'views/categories/category2.php';
                        require 'views/categories/category3.php';
                    ?>
                </div>
            </div>
        </form>
    </div>
    <script src="./js/script.js"></script>
    <script src="./js/validation.js"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>

</body>

</html>
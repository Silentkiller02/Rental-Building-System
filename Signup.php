<?php
$showAlert = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'partials/_dbconnect.php';
    $Firstname = $_POST["Firstname"];
    $Lastname = $_POST["Lastname"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $cpassword = $_POST["cpassword"];
    $address = $_POST["address"];
    $mobileNO = $_POST["mobileNO"];
    $city = $_POST["city"];
    $state = $_POST["state"];
    $pincode = $_POST["pincode"];
    //$exists == false;
//chek whether this username is exists
    $existSql = "SELECT * FROM `users` WHERE username = '$username'";
    $result = mysqli_query($conn, $existSql);
    $numExistRows = mysqli_num_rows($result);
    if ($numExistRows > 0) {
        //$exists = true;
        $showError = " Username Already Exist";
    } else {
        // $exists = false;
        if (($password == $cpassword)) {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            $sql = "INSERT INTO `users` ( `Firstname`, `Lastname`, `username`, `password`, `address`, `mobileNO`, `city`, `state`, `pincode`, `dt`) VALUES ( '$Firstname', '$Lastname', '$username', '$hash', '$address', '$mobileNO',
'$city', '$state', '$pincode', current_timestamp());";
            $result = mysqli_query($conn, $sql);
            if ($result) {
                $showAlert = true;
            }
        } 
        else {
            $showError = "Password do not match ";
        }
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-
ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>SignUp</title>
</head>

<body>
    <?php require 'partials/_nav.php' ?>
    <?php
    if($showAlert) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
 <strong>Success!</strong> Your account is now created and you can now login.
 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
 <span aria-hidden="true">&times;</span>
 </button>
 </div>';
    }
    if($showError) {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
 <strong>Error!</strong> ' . $showError . '
 <button type="button" class="close" data-dismiss="alert" aria-label="Close">
 <span aria-hidden="true">&times;</span>
 </button>
 </div>';
    }
    ?>
    <div class="container my-4">
        <h1 class="text-center">SignUp To Our Website.</h1>
        <hr>
        </hr>
        <div class="spinner-grow text-primary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-secondary" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-success" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-danger" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-warning" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-info" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-light" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-dark" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <form action="/mkup/signup.php" method="post">
            <div class="form-row">
                <div class="col-md-4 mb-3">
                    <label for="First name">Firstname</label>
                    <input type="text" class="form-control" id="first" name="Firstname">
                </div>
                <div class="col-md-4 mb-3">
                    <label for="Last name">Lastname</label>
                    <input type="text" class="form-control" id="last" name="Lastname">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="Username">Username</label>
                        <input type="text" maxlength="15" class="form-control" id="username" name="username">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="Password">Password</label>
                        <input type="password" maxlength="8" class="form-control" id="password" name="password">
                    </div>
                </div>
                <div class="form-group col-md-3 ">
                    <label for="cpassword">Confirm Password</label>
                    <input type="password" maxlength="8" class="form-control" id="cpassword" name="cpassword">
                    <small id="passhelp" class="form-text text-muted">Make sure to type the same
                        password</small>
                </div>
                <div class="form-group col-md-4">
                    <label for="inputAddress">Address </label>
                    <input type="text" class="form-control" id="address" name="address">
                </div>
                <div class="form-group col-md-4">
                    <label for="mobilenumber">Mob.Number</label>
                    <input type="number" maxlength="10" class="form-control" id="mobileNo" name="mobileNO">
                </div>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="inputCity">City</label>
                        <input type="text" class="form-control" id="city" name="city">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="inputState">State</label>
                        <select id="state" class="form-control" name="state">
                            <option selected>Choose...</option>
                            <option>Andhra Pradesh</option>
                            <option>Arunchal Pradesh</option>
                            <option>Assam</option>
                            <option>Bihar</option>
                            <option>Chhattisghar</option>
                            <option>Goa </option>
                            <option>Gujarat</option>
                            <option>Haryana</option>
                            <option>Himanchal Pradesh</option>
                            <option>Jharkhand</option>
                            <option>Karnataka</option>
                            <option> Kerala</option>
                            <option>Madhya Pradesh</option>
                            <option>Maharashtra</option>
                            <option> Manipur</option>
                            <option> Meghalaya</option>
                            <option> Mizoram</option>
                            <option> Nagaland</option>
                            <option> Odisha</option>
                            <option> Panjab</option>
                            <option> Rajasthan</option>
                            <option> Sikkim</option>
                            <option> Tamil Nadu </option>
                            <option> Telangana</option>
                            <option> Tripura</option>
                            <option> Uttarakhand</option>
                            <option> Uttar Pradesh</option>
                            <option>West Bengal</option>
                            <option> Other/UT</option>
                        </select>
                    </div>
                    <div class="form-group col-md-2">
                        <label for="inputpincode">pincode</label>
                        <input type="number" class="form-control" id="pincode" name="pincode">
                    </div>
                </div>
                <div class="col-sm-15">
                    <button type="submit" class="btn btn-primary"> Sign Up</button>
                </div>
        </form>
    </div>
    <div class="fixed-bottom">
        <?php require 'partials/_footer.php' ?>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
        </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-
UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
        </script>
</body>

</html>
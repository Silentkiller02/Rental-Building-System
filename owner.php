<?php
$showAlert = false;
$showError = false;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include 'partials/_cdconnect.php';

    $fullname = $_POST["fullname"];
    $emailid = $_POST["emailid"];
    $location = $_POST["location"];
    $money = $_POST["money"];
    $mob = $_POST["mob"];
    $type = $_POST["type"];
    $haddress = $_POST["haddress"];
    $yaddress = $_POST["yaddress"];
    $hphoto = $_POST["hphoto"];
    $tac = $_POST["tac"];
    $comment = $_POST["comment"];

    $sql = "INSERT INTO `owner`(`fullname`, `emailid`, `location`, `money`, `mob`, `type`, `haddress`,
`yaddress`, `hphoto`, `tac`, `comment`) VALUES ('$fullname', '$emailid', '$location', '$money', '$mob',
'$type', '$haddress', '$yaddress', '$hphoto', '$tac','$comment');";

    $result = mysqli_query($conn, $sql);

    if ($result) {
        $showAlert = true;
        // ... (success message)
    } else {
        $showError = "Error: " . mysqli_error($conn);
        // ... (log the error for debugging)
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
    <title>Give for rent</title>
</head>

<body background="img/A.jpg">
    <?php require 'partials/_head.php' ?>
    <?php if ($showAlert) {
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>Success!</strong> The details was uploded successfully.
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>';
    }
    if ($showError) {
        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
<strong>Error!</strong> ' . $showError . '
<button type="button" class="close" data-dismiss="alert" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>';
    }
    ?>
    <div class="container my-4">
        <h3 class="text-center">Fill The Information correct Ask below.</h3>
    </div>
    <hr>
    <form action="/mkup/owner.php" method="post">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <span class="input-group-text">Full Name</span>
                    <input type="text" class="form-control" name="fullname" id="fullname" placeholder="Full
Name" required>
                </div>
                <div class="col-md-4 mb-4">
                    <span class="input-group-text" id="email">GMAIL ID</span>
                    <input type="text" class="form-control" name="emailid" id="emailid" placeholder="email
id" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <span class="input-group-text" id="basic-url">your location url</span>
                    <input type="url" class="form-control" name="location" id="location" required>
                </div>
                <div class="col-md-4 mb-3">
                    <span class="input-group-text">House rent in Rupees.</span>
                    <input type="text" class="form-control" placeholder="house rent per month" name="money" id="money" required>
                </div>
                <div class="col-md-4 mb-3">
                    <span class="input-group-text">Mob.No</span>
                    <input type="number" maxlength="12" class="form-control" id="mob" name="mob"
                        placeholder="+91xxxxxxxxxx" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 ">
                    <span class="input-group-text">Type</span>
                    <select id="type" class="form-control" name="type" required>
                        <option selected>Choose...</option>
                        <option>Student(Girls)</option>
                        <option>Student(Boys)</option>
                        <option>Family Room</option>
                        <option>Buisness(Small room)</option>
                        <option>Buisness(Godown/warehouse)</option>
                    </select>
                </div>
                <div class="col-md-4 mb-3">
                    <span class="input-group-text" id="haddress">H.A</span>
                    <input type="text" class="form-control" name="haddress" placeholder="Input House
Address" required>
                </div>
                <div class="col-md-4 mb-3">
                    <span class="input-group-text" id="yaddress">Your address</span>
                    <input type="text" class="form-control" name="yaddress" placeholder="Input Your
Address" required>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 mb-3">
                    <label for="formFile" class="form-label">uplode a photo of your house</label>
                    <input class="form-control" type="file" name="hphoto" id="hphoto">
                </div>
                <div class="col-md-3 mb-3">
                    <label for="formFile" class="form-label">uplode your term&condition if any!</label>
                    <input class="form-control" type="file" name="tac" id="tac">
                </div>
            </div>
            <div class="form-row">
                <div class="col-md-6 mb-3">
                    <label for="floatingTextarea">Comments hear about your house</label>
                    <textarea class="form-control" name="comment" placeholder="Leave a comment here"
                        id="comment"></textarea>
                </div>
                <div class="col-sm-15">
                    <button type="submit" class="btn btn-primary"> Submit</button>
                </div>
            </div>
        </div>
    </form>
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
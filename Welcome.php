<?php
session_start();

if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin']!=true){
header("location: login.php");
exit;
}
?>
<!doctype html>
<html lang="en">
<head>

<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS -->
<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-
ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
crossorigin="anonymous">
<title>Welcome - <?php $_SESSION['username']?></title>
</head>
<body background="img/img (5).jpg">
<?php require 'partials/_nav.php' ?>
<div class="container my-4">
<div class="alert alert-info" role="alert">
<h4 class="alert-heading">Welcome-<?php echo $_SESSION['username']?></h4>
<p> hey how are you doing ? Welcome to  Rental Building System.</p>
<hr>
<p class="mb-0">We are hear for you to provide you a best deal!.</p>
</div>
</div>




<form action="/mkup/rental.php" method="post">
<div class="row g-0 bg-body-secondary position-relative">
<div class="col-md-2 mb-md-0 p-md-2">
<img src="img/House1.jpg" class="w-100" alt="...">
</div>
<div class="col-md-6 p-4 ps-md-0">
<h5 class="mt-0">House For Rent</h5>
<p >Long term dormitory or room rentals for male and female. perfect for student and hostal is also
available.</p>
<div class="col-sm-15">
<button type="submit" class="btn btn-primary">Click Now</button>
</div>
</div>
</div>
</form>
<form action="/mkup/owner.php" method="post">
<div class="row g-0 bg-body-secondary position-relative">
<div class="col-md-2 mb-md-0 p-md-2">
<img src="img/images2.jpg" class="w-100" alt="...">
</div>
<div class=" col-md-6 p-4 ps-md-0">
<h5 class="mt-0">House Owner</h5>
<p > If you are a House Owner and you want to give your house/room for rent so' Great Deal! for
you.</p>
<div class="col-sm-15">
<button type="submit" class="btn btn-primary">Click Now</button>
</div>
</div>
</div>
</form>
<form action="/mkup/hostel.php" method="post">
<div class="row g-0 bg-body-secondary position-relative">
<div class="col-md-2 mb-md-0 p-md-2">
<img src="img/images3.jpg" class="w-100" alt="...">
</div>
<div class=" col-md-6 p-4 ps-md-0">
<h5 class="mt-0">Hostel</h5>
<p > First timein your city, we present a hostel with full Services with yor budget.including responsible
warden and much more.</p>
<div class="col-sm-15">
<button type="submit" class="btn btn-primary">Click Now</button>
</div>
</div>
</div>
</form>
<?php require 'partials/_footer.php' ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
crossorigin="anonymous"></script>
</body>
</html> 
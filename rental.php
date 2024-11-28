<?php
include 'partials/_cdconnect.php';
?>
<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS -->
<link rel="stylesheet"
href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css"
integrity="sha384-
ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T"
crossorigin="anonymous">
<title>Rental</title>
</head>
<body>
<?php require 'partials/_head.php' ?>
<hr>
<div class="container">
<h3 class="text-center ">Room for rent are abliveleble!</h3>
<br>
<div class="table-responsive">
<table class="table table-bordered table-striped table-hover">
<thead>
<th>Name</th>
<th>location</th>
<th>House address</th>
<th>Rent fees</th>
<th>type</th>
<th>About/facility</th>
<th>Photo/TAC.</th>
<th>contact details</th>
</thead>
<tbody>
<?php
$display="select * from `owner`";
$querydisplay = mysqli_query($conn,$display);
while ($data = mysqli_fetch_array($querydisplay)){
?>
<tr>
<td> <?php echo $data['fullname']; ?></td>
<td> <?php echo $data['location']; ?></td>
<td> <?php echo $data['haddress']; ?></td>
<td> <?php echo $data['money']; ?></td>
<td> <?php echo $data['type']; ?></td>
<td> <?php echo $data['comment']; ?></td>
<td> <a href="<?php echo $data['hphoto']; ?>" download><svg
xmlns="http://www.w3.org/2000/svg"
width="16" height="16" fill="currentColor" class="bi bi-download"
viewBox="0 0 16 16">
<path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0
0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
<path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5
10.293V1.5a.5.5
0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
</svg></a> <a href="<?php echo $data['tac']; ?>" download><svg
xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
class="bi bi-download" viewBox="0 0 16 16">
<path
d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1
1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5z" />
<path
d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5
0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708l3 3z" />
</svg></a></td>
<td> <?php echo $data['mob']; ?>, <?php echo $data['emailid']; ?>
<?php echo $data['yaddress']; ?></td>
</tr>
<?php
}
?>
</tbody>
</table>
</div>
</div>
<?php require 'partials/_footer.php' ?>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js"
integrity="sha384-
UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js"
integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
crossorigin="anonymous">
</script>
</body>
</html>

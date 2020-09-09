<?php 
	include 'conn.php';
	$limit = 6;
	$page = isset($_GET['page']) ? $_GET['page'] : 1;
	$start = ($page - 1) * $limit;
	$result = $conn->query("SELECT * FROM register LIMIT $start, $limit");
	$customers = $result->fetch_all(MYSQLI_ASSOC);

	$result1 = $conn->query("SELECT count(id) AS id FROM register");
	$custCount = $result1->fetch_all(MYSQLI_ASSOC);
	$total = $custCount[0]['id'];
	$pages = ceil( $total / $limit );

	$Previous = $page - 1;
	$Next = $page + 1;

 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Learn Web Coding > Pagination in PHP and MySQL </title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
	<div class="container well">
		<h1 class="text-center">Results </h1>
		<div class="row">
			<div class="col-md-10">
				<nav aria-label="Page navigation">
					<ul class="pagination">
				    <li>
				      <a href="testing.php?page=<?= $Previous; ?>" aria-label="Previous">
				        <span aria-hidden="true">&laquo; Previous</span>
				      </a>
				    </li>
				    <?php for($i = 1; $i<= $pages; $i++) : ?>
				    	<li><a href="testing.php?page=<?= $i; ?>"><?= $i; ?></a></li>
				    <?php endfor; ?>
				    <li>
				      <a href="testing.php?page=<?= $Next; ?>" aria-label="Next">
				        <span aria-hidden="true">Next &raquo;</span>
				      </a>
				    </li>
				  </ul>
				</nav>
			</div>
			<?php foreach($customers as $customer) :  ?>
			<div class="col-lg-4">
								<div class="card" style="width: 18rem;">
  								<img class="card-img-top" src="<?= $customer['image']; ?>" height = "300px" width = "100px" alt="Card image cap">
  								<div class="card-body">
								<h5 class="card-title">Name : <?= $customer['name']; ?></h5>
								<p class="card-text">Phone number: <?= $customer['phone number']; ?></p>
								<p class="card-text">City: <?= $customer['city']; ?></p>
								</div>
								</div>
			</div>
			<?php endforeach; ?>
		</div>

<script type="text/javascript">
	$(document).ready(function(){
		$("#limit-records").change(function(){
			$('form').submit();
		})
	})
</script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
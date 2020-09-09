<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<div class="container">
	<h1 class="text-center text-white bg-dark">Registered form with Profile image ad details</h1>
	<div class="table-responsive">
		<table class="table table-bordered table-striped table-hover text-center">
		<thead>
			<th>ID</th>
			<th>Name</th>
			<th>City</th>
			<th>Phone number</th>
			<th>Profile Picture</th>
		</thead>

		<tbody>
			<?php  
				$conn = mysqli_connect('localhost','root');
				mysqli_select_db($conn,'img_form_php');
				// if (isset($_POST['submit'])){
					// $name = $_POST['namee'];
					// $city = $_POST['cityy'];
					// $phnum = $_POST['phnum'];
					// $files = $_FILES['file'];
					// $filename = $files['name'];
					// $fileerror = $files['error'];
					// $filetmp = $files['tmp_name'];

					// $fileext = explode('.',$filename);
					// $filecheck = strtolower(end($fileext));

					// $fileextensionstore = array('png','jpg','jpeg');
					// if(in_array($filecheck,$fileextensionstore)){
					// 	$dest = 'profile_pic/'.$filename;
					// 	move_uploaded_file($filetmp,$dest);
					// 	$q = "INSERT INTO `register`(`name`, `city`, `phone number`, `image`) VALUES ('$name','$city','$phnum','$dest')";
					// 	$query = mysqli_query($conn,$q);
						$limit = 6;
						$page = isset($_GET['page']) ? $_GET['page'] : 1;
						$start = ($page - 1) * $limit;
						$disp = "select * from register LIMIT $start,$limit";
						$result1 = $conn->query("SELECT count(id) AS id FROM register");
						$custCount = $result1->fetch_all(MYSQLI_ASSOC);
						$total = $custCount[0]['id'];
						$pages = ceil( $total / $limit );


						$querydisplay = mysqli_query($conn,$disp);
						$row = mysqli_num_rows($querydisplay);
						
						while($result = mysqli_fetch_array($querydisplay)){
								?>
								<tr>
									<td><?php echo $result['id']; ?></td>
									<td><?php echo $result['name']; ?></td>
									<td><?php echo $result['city']; ?></td>
									<td><?php echo $result['phone number']; ?></td>
									<td><img src="<?php echo $result['image']; ?>" height = "100px" width = "100px"></td>
								</tr>
								<?php

						// }
					// }
				}




			?>
		</tbody>
		</table>

	</div>
	
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</body>
</html>
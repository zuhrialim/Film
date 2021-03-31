<?php
require 'functions.php';

$film = film("SELECT * FROM movie");
?>

<html>
<head>
	<title>Film</title>

<link rel="stylesheet" href="style.css">	
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
</head>
<body>
	<div class="fixed-top">
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="bg-dark p-4">
      <h5 class="text-white h4">Collapsed content</h5>
      <span class="text-muted">Toggleable via the navbar brand.</span>
    </div>
  </div>
  <nav class="navbar navbar-dark bg-dark">
  	<h4 class="text text-white">MyFilmDramaList</h4>
  </nav>
</div>

<br><br><br>
<div class="container">
	
	<a class="btn btn-primary" href="tambah.php" role="button">Tambah Film</a>
	<br><br>
	<div class="row">
		 <div class="col-10">
		 	<h4 class="daftardrama">Daftar Film</h4>

		 	 <table id="mytable" class="table table-bordred table-striped">
		 		<tr>
		 			<th>No</th>
		 			<th>Nama Film</th>
		 			<th>Genre</th>
		 			<th>Negara</th>
		 			<th>Gambar</th>
		 			<th>aksi</th>
		 		</tr>

					<?php $i=1; ?>
					<?php foreach($film as $row) : ?>
				<tr>
					<td><?php echo $i; ?> </td>

					<td><?php echo $row["nama"]; ?> </td>
					<td><?php echo $row["genre"]; ?> </td>
					<td><?php echo $row["negara"]; ?> </td>
					<td><img src="img/<?php echo $row["gambar"]; ?>" width="50"></td>

				</tr>

				<?php $i++; ?>
				<?php endforeach; ?>

		 	</table>
		 </div>
    	</div>
	</div>
</div>

</body>
</html>

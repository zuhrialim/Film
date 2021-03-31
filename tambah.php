<!DOCTYPE html>
<html>
<head>
  <title>Tambah</title>
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
<center><h1 class="pt-5 mt-2">Tambah Film</h1></center>


  <div class="container">


  <form action="" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleInputEmail1">Nama</label>
    <input type="text" name="nama" class="form-control" id="nama">
  
  </div>
  <div class="form-group">
    <label for="genre">Genre</label>
    <input type="text" name="genre" class="form-control" id="genre">
  </div>
  <div class="form-group">
    <label for="genre">Negara</label>
    <input type="text" name="negara" class="form-control" id="negara">
  </div>
  <div>
    <label for="gambar">Masukkan Gambar</label>
    <input type="file" name="gambar" class="form-control" id="gambar">
  </div>
  <br>
  <center><button type="submit" name="submit" class="btn btn-primary" id="gambar">Submit</button></center>
</form>

</div>


</body>
</html>
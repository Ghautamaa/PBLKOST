<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h2>Stacked form</h2>
  <form action="/action_page.php">
    <div class="mb-3 mt-3">
      <label for="email">Nama Kost :</label>
      <input type="text" class="form-control" id="Nama" placeholder="Masukan Nama Kost" name="Nama">
    </div>
    <div class="mb-3">
      <label for="alamat">Alamat Kost :</label>
      <input type="text" class="form-control" id="Alamat" placeholder="Masukan alamat kost" name="Alamat">
    </div>
    <div class="mb-3">
      <label for="harga">Harga Kost :</label>
      <input type="text" class="form-control" id="Harga" placeholder="Masukan harga kost" name="Harga">
    </div>
    <div class="mb-3">
      <label for="Kodepos">Kode Pos :</label>
      <input type="text" class="form-control" id="Kodepos" placeholder="Masukan Kode Pos" name="Kodepos">
    </div>
    <div class="mb-3">
      <label for="pwd">Deskripsi :</label>
      <textarea name="deskripsi" id="deskripsi" cols="100" rows="10"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>

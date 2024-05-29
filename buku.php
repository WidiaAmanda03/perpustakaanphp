<?php
    include_once("./connect.php");

    $query = mysqli_query($db, "SELECT * FROM buku");
?>

<!DOCTYPE html>
<html lang="en">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<body>
<div class ="container w-75">

<table class="table">
  <thead>
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">ISBN</th>
      <th scope="col">Unit</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    <tr>
    <?php foreach($query as $buku) { ?>
            <tr>
                <td><?php echo $buku["nama"] ?></td>
                <td><?php echo $buku["isbn"] ?></td>
                <td><?php echo $buku["unit"] ?></td>
                <td>
                    <a class="btn btn-success" href=<?php echo "edit-buku.php?id=" . $buku["id"] ?>>EDIT</a> |
                    <a class="btn btn-primary" href=<?php echo "delete-buku.php?id=" . $buku["id"] ?>>HAPUS</a>
                </td>
            </tr>
        <?php } ?>
    </tr>
  </tbody>
  </table>

    <br>
    <a class="btn btn-info" href="./tambah-buku.php">Tambah daftar buku</a>
    <br>
    <a class="btn btn-info" href="./index.php">Kembali ke halaman utama</a>
</body>
</html>
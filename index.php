<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Perpustakaan</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
<div class ="container w-75">

    <h1>Aplikasi Perpustakaan Versi 3</h1>

    <a class="btn btn-primary"  href="./buku.php">Lihat Daftar Buku</a>
    <br>
    <a class="btn btn-success" href="./staff.php">Lihat Daftar staff</a>
    <br><br>
    
    <form classs= "mt-3" action="logout_proccess.php" methode="POST">
        <button class="btn btn-danger" typr="submit">LOGOUT</button>
    </form>
</div>

</body>
</html>
<?php
require 'function.php';


if (isset($_POST["submit"])) {
    // cek apakah data berhasil diubah atau tidak

    if (tambahBarang($_POST) > 0) {
        echo "
            <script>
            alert ('data berhasil diubah !');
            document.location.href = 'index.php';
            </script>
        ";
    } else {
        echo "
            <script>
            alert ('data gagal diubah !');
            document.location.href = 'index.php';
            </script>
        ";
    }
}

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Apotek</title>
</head>

<body class="container">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Apotek</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    <a class="nav-link" href="detailObat.php">Detail Obat</a>

                </div>
            </div>
        </div>
    </nav>
    <!-- akhir -->
    <br>
    <!-- button tambah -->
    <button type="button" class="btn btn-primary btn-lg " data-bs-toggle="modal" data-bs-target="#tambah">Tambah Obat</button>
    <!-- Modal -->
    <div class="modal fade" id="tambah" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form action="" method="POST">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="staticBackdropLabel">Tambah Obat</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <div class="mb-3">
                            <label for="namaobat" class="form-label">Nama Obat</label>
                            <input type="text" class="form-control" id="namaobat" aria-describedby="namaobat">

                        </div>
                        <div class="mb-3">
                            <label for="jenisobat" class="form-label">Jenis Obat</label>
                            <input type="text" class="form-control" id="jenisobat" aria-describedby="jenisobat">

                        </div>
                        <div class="mb-3">
                            <label for="kategori" class="form-label">Harga Kategori</label>
                            <input type="text" class="form-control" id="kategori" aria-describedby="kategori">

                        </div>
                        <div class="mb-3">
                            <label for="harga" class="form-label">Harga Obat</label>
                            <input type="number" class="form-control" id="harga" aria-describedby="harga">

                        </div>
                        <div class="mb-3">
                            <label for="jumlah" class="form-label">Jumlah Obat</label>
                            <input type="number" class="form-control" id="jumlah" aria-describedby="jumlah">

                        </div>


                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                        <button type="submit" class="btn btn-primary" name="submit">Tambah Obat</button>
                    </div>
            </form>
        </div>
    </div>
    </div>

    <!-- akhir -->

    <!-- table -->
    <table class="table">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Kode Obat</th>
                <th scope="col">Nama Obat</th>
                <th scope="col">Jenis obat</th>
                <th scope="col">Kategori</th>
                <th scope="col">Harga</th>
                <th scope="col">Jumlah</th>
                <th scope="col">Aksi</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td>001</td>
                <td>Paracetamol</td>
                <td>kapsul</td>
                <td>bebas</td>
                <td>Rp. 20.000</td>
                <td>4</td>
                <td>
                    <button type="button" class="btn btn-primary">Ubah</button>
                    <button type="button" class="btn btn-warning">Hapus</button>
                </td>
            </tr>


        </tbody>
    </table>
    <!-- akhir -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
</body>

</html>
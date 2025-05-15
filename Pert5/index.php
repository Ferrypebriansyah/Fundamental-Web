<?php
$server = "localhost";
$user = "root";
$pass = "";
$database = "mahasiswa_npm";
$koneksi = mysqli_connect($server, $user, $pass, $database);

if (!$koneksi) {
    die("Connection failed: " . mysqli_connect_error());
}

// Inisialisasi variabel untuk form
$nim = '';
$nama = '';
$alamat = '';
$prodi = '';
$edit = false;

// Jika tombol simpan diklik
if (isset($_POST['simpan'])) {
    if ($_POST['id']) {
        // mode update
        $update = mysqli_query($koneksi, "UPDATE mhs SET
            nim = '$_POST[nim]',
            nama = '$_POST[nama]',
            alamat = '$_POST[alamat]',
            prodi = '$_POST[prodi]'
            WHERE id_mhs = '$_POST[id]'");

        if ($update) {
            echo "<script>alert('Update data sukses!'); document.location='index.php';</script>";
        } else {
            echo "<script>alert('Update data gagal!'); document.location='index.php';</script>";
        }
    } else {
        // mode simpan baru
        $simpan = mysqli_query($koneksi, "INSERT INTO mhs (nim, nama, alamat, prodi)
        VALUES ('$_POST[nim]', '$_POST[nama]', '$_POST[alamat]', '$_POST[prodi]')");

        if ($simpan) {
            echo "<script>alert('Simpan data sukses!'); document.location='index.php';</script>";
        } else {
            echo "<script>alert('Simpan data gagal!'); document.location='index.php';</script>";
        }
    }
}

// Jika tombol edit atau hapus diklik
if (isset($_GET['hal'])) {
    if ($_GET['hal'] == "edit") {
        $tampil = mysqli_query($koneksi, "SELECT * FROM mhs WHERE id_mhs = '$_GET[id]'");
        $data = mysqli_fetch_array($tampil);
        if ($data) {
            $nim = $data['nim'];
            $nama = $data['nama'];
            $alamat = $data['alamat'];
            $prodi = $data['prodi'];
            $edit = true;
            $id_mhs = $_GET['id'];
        }
    } elseif ($_GET['hal'] == "hapus") {
        $hapus = mysqli_query($koneksi, "DELETE FROM mhs WHERE id_mhs = '$_GET[id]'");
        if ($hapus) {
            echo "<script>alert('Hapus data sukses!'); document.location='index.php';</script>";
        }
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container py-4">
        <h1 class="text-center mb-4">CRUD Mahasiswa</h1>

        <div class="card mb-4">
            <div class="card-header bg-primary text-white">Form Input Data Mahasiswa</div>
            <div class="card-body">
                <form method="post" action="">
                    <input type="hidden" name="id" value="<?= isset($id_mhs) ? $id_mhs : '' ?>">
                    <div class="mb-3">
                        <label class="form-label">NIM</label>
                        <input type="text" name="nim" value="<?= $nim ?>" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Nama</label>
                        <input type="text" name="nama" value="<?= $nama ?>" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Alamat</label>
                        <textarea name="alamat" class="form-control" required><?= $alamat ?></textarea>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Program Studi</label>
                        <select name="prodi" class="form-control" required>
                            <option value="">-- Pilih Prodi --</option>
                            <option value="D3-MI" <?= ($prodi == 'D3-MI') ? 'selected' : '' ?>>D3-MI</option>
                            <option value="S1-SI" <?= ($prodi == 'S1-SI') ? 'selected' : '' ?>>S1-SI</option>
                            <option value="S1-TI" <?= ($prodi == 'S1-TI') ? 'selected' : '' ?>>S1-TI</option>
                        </select>
                    </div>
                    <button type="submit" name="simpan" class="btn btn-success"><?= $edit ? 'Update' : 'Simpan' ?></button>
                    <button type="reset" class="btn btn-danger">Kosongkan</button>
                </form>
            </div>
        </div>

        <div class="card">
            <div class="card-header bg-success text-white">Data Mahasiswa</div>
            <div class="card-body">
                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Alamat</th>
                            <th>Prodi</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $no = 1;
                        $tampil = mysqli_query($koneksi, "SELECT * FROM mhs ORDER BY id_mhs DESC");
                        while ($data = mysqli_fetch_array($tampil)) :
                        ?>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $data['nim'] ?></td>
                                <td><?= $data['nama'] ?></td>
                                <td><?= $data['alamat'] ?></td>
                                <td><?= $data['prodi'] ?></td>
                                <td>
                                    <a href="index.php?hal=edit&id=<?= $data['id_mhs'] ?>" class="btn btn-warning btn-sm">Edit</a>
                                    <a href="index.php?hal=hapus&id=<?= $data['id_mhs'] ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus?')">Hapus</a>
                                </td>
                            </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
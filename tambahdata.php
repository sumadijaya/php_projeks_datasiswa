<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tambah data</title>

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
        }

        body{
            background: linear-gradient(to right, #4facfe, #00f2fe);
            min-height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 20px;
        }

        .container{
            width: 100%;
            max-width: 500px;
            background: white;
            padding: 35px;
            border-radius: 20px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
        }

        h1{
            text-align: center;
            margin-bottom: 25px;
            color: #333;
        }

        .form-group{
            margin-bottom: 20px;
        }

        label{
            display: block;
            margin-bottom: 8px;
            color: #555;
            font-weight: bold;
        }

        input,
        textarea{
            width: 100%;
            padding: 12px;
            border: 1px solid #ccc;
            border-radius: 10px;
            outline: none;
            transition: 0.3s;
            font-size: 15px;
        }

        input:focus,
        textarea:focus{
            border-color: #4facfe;
            box-shadow: 0 0 8px rgba(79,172,254,0.5);
        }

        textarea{
            resize: none;
            height: 100px;
        }

        .btn{
            width: 100%;
            padding: 14px;
            border: none;
            border-radius: 10px;
            background: #4facfe;
            color: white;
            font-size: 16px;
            font-weight: bold;
            cursor: pointer;
            transition: 0.3s;
        }

        .btn:hover{
            background: #008cdd;
        }

        .link-btn{
            display: block;
            text-align: center;
            margin-top: 15px;
            text-decoration: none;
            background: #00c851;
            color: white;
            padding: 12px;
            border-radius: 10px;
            transition: 0.3s;
            font-weight: bold;
        }

        .link-btn:hover{
            background: #009933;
        }
    </style>

</head>
<body>
<!--ini adalah code php -->
<?php
 include "koneksi.php";

 if (isset($_POST['nama'])) {
    $nama = $_POST['nama'];
    $kelas = $_POST['kelas'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];

    $query = mysqli_query ($koneksi, "INSERT into siswa (nama,kelas,
    email,alamat) values('$nama','$kelas','$email','$alamat')");

     if ($nama == "" || $kelas == "" || $email == "" || $alamat == "") {
        echo '<script>alert("semua harus di isi")</script>';
     }

    if ($query) {
        echo '<script>alert("tambah data berhasil")</script>';
    } else {
        echo '<script>alert("gagal!!")</script>';
    }
 }
?>
        <div class="container">

    <h1>Tambah Data</h1>

    <form action="" method="post">

        <div class="form-group">
            <label>Nama</label>
            <input type="text" name="nama" placeholder="Masukkan nama">
        </div>

        <div class="form-group">
            <label>Kelas</label>
            <input type="text" name="kelas" placeholder="Masukkan kelas">
        </div>

        <div class="form-group">
            <label>Email</label>
            <input type="email" name="email" placeholder="Masukkan email">
        </div>

        <div class="form-group">
            <label>Alamat</label>
            <textarea name="alamat" placeholder="Masukkan alamat"></textarea>
        </div>

        <button type="submit" class="btn">
            Simpan Data
        </button>

    </form>

    <a href="index.php" class="link-btn">
        Lihat Data
    </a>

</div>

</body>
</html>
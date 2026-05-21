<?php
include "koneksi.php";

$i = 1;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>table data</title>
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
        max-width: 1000px;
        background: white;
        padding: 30px;
        border-radius: 15px;
        box-shadow: 0 10px 25px rgba(0,0,0,0.2);
    }

    h1{
        text-align: center;
        margin-bottom: 25px;
        color: #333;
    }

    table{
        width: 100%;
        overflow: hidden;
        border-radius: 10px;
    }

    table thead{
        background: #4facfe;
        color: white;
    }

    table th,
    table td{
        padding: 15px;
        text-align: center;
    }

    table tbody tr{
        border-bottom: 1px solid #ddd;
        transition: 0.3s;
    }

    table tbody tr:hover{
        background: #f1f9ff;
        transform: scale(1.01);
    }

    .btn{
        display: inline-block;
        margin-top: 20px;
        padding: 12px 20px;
        background: #4facfe;
        color: white;
        text-decoration: none;
        border-radius: 8px;
        transition: 0.3s;
        font-weight: bold;
    }

    .btn:hover{
        background: #008cdd;
    }

    a {
        text-decoration: none;
    }

    @media(max-width: 768px){
        table{
            font-size: 14px;
        }

        table th,
        table td{
            padding: 10px;
        }
    }
</style>
</head>
<body>
    <center>
        <h1>table data base</h1>
            <table border="4">
                <tr>
                    <td>no</td>
                    <td>nama</td>
                    <td>kelas</td>
                    <td>email</td>
                    <td>alamat</td> 
                </tr>
            <?php
             $query = mysqli_query ($koneksi, "SELECT*FROM siswa");
             while ($data = mysqli_fetch_array ($query)) {
            ?>
                <tr>
                    <td><?php echo $i; ?></td>
                    <td><?php echo $data["nama"]; ?></td>
                    <td><?php echo $data["kelas"]; ?></td>
                    <td><?php echo $data["email"]; ?></td>
                    <td><?php echo $data["alamat"]; ?></td>
                    
                </tr>

                <?php
                $i++;
             }
             
                ?>

            </table>

            <button class="btn"><a href="tambahdata.php">tambah data</a></button>

    
    </center>
</body>
</html>
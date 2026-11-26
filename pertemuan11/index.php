<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Menu Praktikum Web 2 - Pertemuan 11</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; line-height: 1.6; }
        h1, h2 { color: #333; }
        ul { list-style-type: none; padding: 0; }
        li { margin-bottom: 10px; }
        a { 
            text-decoration: none; 
            color: #0056b3; 
            padding: 8px 12px; 
            border: 1px solid #ccc; 
            display: inline-block; 
            width: 350px; 
            border-radius: 4px;
            background-color: #f9f9f9;
        }
        a:hover { background-color: #e9e9e9; border-color: #999; }
        .container { max-width: 800px; margin: auto; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Praktikum Pemrograman Web 2 - Pertemuan 11</h1>
        <p><i>Versi MySQLi</i></p>
        <hr>
        
        <h2>Materi Latihan</h2>
        <ul>
            <li><a href="latih1.php">Latih 1: Tes Koneksi Database</a></li>
            <li><a href="latih2.php">Latih 2: Membuat Database (lat_dbase)</a></li>
            <li><a href="latih3.php">Latih 3: Membuat Tabel tbl_mhs & Insert Data</a></li>
            <li><a href="latih4.php">Latih 4: Menyisipkan Data Tambahan</a></li>
            <li><a href="latih5.php">Latih 5: Menampilkan Data (mysqli_fetch_row)</a></li>
            <li><a href="latih6.php">Latih 6: Menampilkan Data (mysqli_fetch_array)</a></li>
            <li><a href="latih7.php">Latih 7: Menghitung Jumlah Record</a></li>
            <li><a href="form.php">Latihan Form: Input Data Mahasiswa Baru</a></li>
        </ul>

        <h2>Tugas Latihan: Buku Tamu</h2>
        <ul>
            <li><a href="buku_tamu_setup.php">Langkah 1: Buat Tabel Buku Tamu</a></li>
            <li><a href="buku_tamu_form.php">Langkah 2: Form Input Buku Tamu</a></li>
            <li><a href="buku_tamu_tampil.php">Langkah 3: Tampilkan Buku Tamu (Dengan Paging)</a></li>
        </ul>
    </div>
</body>
</html>
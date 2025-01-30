<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <form action="form4.html" method="POST">
        <fielsed>
            <legend><h1>Formulir PPDB SMKN 1 BANYUWANGI </h1></legend>
        <p>
            <label>NISN: </label>
            <input type="number" name="NISN" placeholder="Masukkan NISN">
        </p>
        <p>
            <label>Nama: </label>
            <input type="text" name="Nama" placeholder="Masukkan Nama">
        </p>
        <p>
            <label>Tempat Lahir: </label>
            <input type="text" name="Tempat Lahir" placeholder="Masukkan Tempat lahir">
        </p>
        <form action="/action_page.php">
            <label for="birthday">Tanggal lahir: </label>
            <input type="date" id="Tempat lahir" name="Tanggal lahir">
        </form>
        <form action="/action.page">
        <p>Jenis Kelamin: </p>
        <input type="radio" id="Laki-Laki" name="Jenis_Kelamin" value="Laki-Laki">
        <label for="Laki-Laki">Laki-Laki</label><br>
        <input type="radio" id="Perempuan" name="Jenis_Kelamin" value="Perempuan">
        <label for="Perempuan">Perempuan</label><br>
        <p>
            <label for="Agama">Pilih Agama: </label>
            <select id="Agama">
                <option value="Islam">Islam</option>
                <option value="Kristen">Kristen</option>
                <option value="Katolik">Katolik</option>
                <option value="Hindu">Hindu</option>
                <option value="Budha">Budha</option>
                <option value="Konghucu">Konghucu</option>
            </select>
           <p>Alamat: </p>
           <textarea name="alamat" id="alamat" cols="30"
           rows="10"></textarea>
        <p>
            <label>Asal Sekolah: </label>
            <input type="text" name="Asal Sekolah" placeholder="Masukkan Asal sekolah">
        </p>
        <p>
        <label for="Jurusan">Pilih Jurusal Pertama: </label>
            <select id="Jurusan">
                <option value="AKL">AKUNTANSI KEUANGAN LEMBAGA</option>
                <option value="MPLB">MANAJEMEN DAN PELAYANAN BISNIS</option>
                <option value="PM">PEMASARAN</option>
                <option value="PH">PERHOTELAN</option>
                <option value="PPLG">PENGEMBANGAN PERANGKAT LUNAK DAN GIM</option>
                <option value="TJKT">TEKNIK JARINGAN KOMPUTER DAN TELEKOMUNIKASI</option>
                <option value="DKV">DESAIN KOMUNNIKASI VISUAL</option>
                <option value="BDP">BOARDCASTING DAN PERFILMAN</option>
                <option value="SP">SENI PERTUNJUKAN</option>
                <option value="KL">KULINER</option>
            </select>
        </p>
        <p>
        <label for="Jurusan">Pilih Jurusal Kedua: </label>
            <select id="Jurusan">
                <option value="AKL">AKUNTANSI KEUANGAN LEMBAGA</option>
                <option value="MPLB">MANAJEMEN DAN PELAYANAN BISNIS</option>
                <option value="PM">PEMASARAN</option>
                <option value="PH">PERHOTELAN</option>
                <option value="PPLG">PENGEMBANGAN PERANGKAT LUNAK DAN GIM</option>
                <option value="TJKT">TEKNIK JARINGAN KOMPUTER DAN TELEKOMUNIKASI</option>
                <option value="DKV">DESAIN KOMUNNIKASI VISUAL</option>
                <option value="BDP">BOARDCASTING DAN PERFILMAN</option>
                <option value="SP">SENI PERTUNJUKAN</option>
                <option value="KL">KULINER</option>
            </select>
        </p>
        <p>
        <label for="Jurusan">Pilih Jurusal Ketiga: </label>
            <select id="Jurusan">
                <option value="AKL">AKUNTANSI KEUANGAN LEMBAGA</option>
                <option value="MPLB">MANAJEMEN DAN PELAYANAN BISNIS</option>
                <option value="PM">PEMASARAN</option>
                <option value="PH">PERHOTELAN</option>
                <option value="PPLG">PENGEMBANGAN PERANGKAT LUNAK DAN GIM</option>
                <option value="TJKT">TEKNIK JARINGAN KOMPUTER DAN TELEKOMUNIKASI</option>
                <option value="DKV">DESAIN KOMUNNIKASI VISUAL</option>
                <option value="BDP">BOARDCASTING DAN PERFILMAN</option>
                <option value="SP">SENI PERTUNJUKAN</option>
                <option value="KL">KULINER</option>
            </select>
        </p>
            <p>
                <label>Ekstrakulikuler yang diminati: </label>
                <input type="checkbox" name="Encasa">Encasa
                <input type="checkbox" name="Hadrah">Hadrah
                <input type="checkbox" name="Tari">Tari
                <input type="checkbox" name="Basket">Basket
                <input type="checkbox" name="Voli">Voli
                <input type="checkbox" name="Teater">Teater
            </p>
            <button type="button" class="btn btn-success">Submit</button>
</body>
</html>
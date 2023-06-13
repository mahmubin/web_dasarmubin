<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar link php</title>
</head>
<body>
    <h1> tambah mahasiswa </h1>
    <hr>
    <a href="index.php"> kembali </a>
    <table>
        <tr>
            <td>npm</td>
            <td>:</td>
            <td>
                <input type="number" name="npm" id="">
            </td>
        </tr>
        <tr>
        <td>nama mahasiswa</td>
            <td>:</td>
            <td>
                <input type="text" name="nama_mahasiswa">
            </td>
        </tr>
        <tr>
        <td>jenis kelamin</td>
            <td>:</td>
            <td>
                <select name="jk" id="">
                    <option value="" selected> pilih jenis kelamin</option>
                    <option value="lk"> laki laki</option>
                    <option value="pr"> perempuan </option>
                </select>
            </td>
        </tr>
        <tr>
        <td>tanggal lahir</td>
            <td>:</td>
            <td>
                <input type="date" name="tanggal_lahir" id="">
            </td>
        </tr>
        <tr>
        <td>program studi</td>
            <td>:</td>
            <td>
                <select name="prodi" id="">
                    <option value="" selected> pilih program studi</option>
                    <option value="TI"> teknik informatika</option>
                    <option value="SI"> sistem informasi</option>
                    <option value="DS"> since data</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="3" style="text-align: right;">
            <a href="index.php">
            <button style="background: red; color: white; height: 30px; border:none;">kembali</button>
            </a>
            <button style="background: green; color: white; height: 30px; border:none;">simpan</button>
            </td>
        </tr>
    </table>
</body>
</html>
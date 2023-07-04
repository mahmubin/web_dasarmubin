<?php
require "functions.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Website</title>
</head>
<body>
    <h1>Ini adalah halaman tambah data dokter</h1>
    <ul>
     <a href = "dokter.php">
        <li>Data Dokter</li>
     </a>
     <a href = "Jadwal_dokter.php">
        <li>jadwal Dokter</li>
     </a>
    </ul>
    <hr>
    <form action="" method="post">

    <table>
        <tr>
            <th>Nama Dokter</th>
            <td>:</td>
            <td>
                <input type="text" name="nama_dokter" value="<?=@$_POST
                ["nama_dokter"]; ?>">
            </td>
        </tr>
        <tr>
            <th>spesialis</th>
            <td>:</td>
            <td>
                <select name="spesialis" >
                    <option value="" selected> pilih spesialis </option>
                    <?php
                    foreach (spesialis()as $s) : ?>
                    <option value="<?= $s["id_spesialis"];?>"><?= $s["nama"] ;?></option>

                    <?php endforeach ; ?>
                </select>
            </td>
        </tr>
        
        <tr>
        <td colspan = "3">
            <button style = "width: 100%;" type="submit"
            name="simpan_dokter">simpan</button> 
            
        </td>
        </tr>
    </table>
    </form>

    <?php
    $tanggal = date("Y-m-d H:i:s");
    

    if (isset($_POST["simpan_dokter"])) {
        $nama_dokter = $_POST["nama_dokter"];
        $id_spesialis = $_POST["spesialis"];
        if($nama_dokter == ""){
            echo "nama dokter masi kosong";
        }elseif($id_spesialis == ""){
            echo "id spesialis masi kosong";
    } else {
$simpan = mysqli_query(
    koneksi(),
    "INSERT INTO dokter VALUES(null,
    '$nama_dokter'
    '$id_spesialis
    '$tanggal',
    '$tanggal',)"
);
if($simpan) {
    echo"
    <script>
    alert('simpan dokter berhasil!');
</script>
";
}
    }
}
    ?>
</body>
</html>
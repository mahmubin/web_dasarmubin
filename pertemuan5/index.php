<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>INDEXED ARRAYS</title>
    
</head>
<body>
    <h1> indexed array</h1>
    <ul>
        <li>
            <a href="index.php"> indexed array</a>
        </li>
        <li>
            <a href="aa.php"> associative array</a>
        </li>
    </ul>
    <?php
    $laptop = array("acer","asus","lenovo","macbook");
    //var_dum($laptop);
    //echo $laptop[0];
    $jumlah_laptop = count($laptop);
    ?>

    <ol>
    <!-- memanggil array dengan for -->
    <?php
    //for($i=0; $i < 100; $i++){
        //echo "<li> umsu</li>";
        for($i=0; $i <$jumlah_laptop; $i++){
            echo "<li> $laptop[$i]</li>";
        }
    ?>
    <!-- memanggil array dengan index -->
        <!-- <li><?php echo $laptop[0]; ?></li>
        <li><?php echo $laptop[1]; ?></li>
        <li><?php echo $laptop[2]; ?></li>
        <li><?php echo $laptop[3]; ?></li>  -->
</ol>
</body>
</html>
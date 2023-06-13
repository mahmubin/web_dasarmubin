<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>associative arrays</title>
</head>
<body>
<h1> associative array</h1>
    <ul>
        <li>
            <a href="index.php"> indexed array</a>
        </li>
        <li>
            <a href="aa.php"> associative array</a>
        </li>
    </ul>
    <hr>
    <?php
    $laptop = array("acer" => "Rp.12.000.000","asus" => "Rp.13.000.000","lenovo"=> "Rp.14.000.000","macbook"=> "Rp.15.000.000");
    //var_dump($laptop);
    //echo $laptop["acer"];
    ?>
    <table border="1" style="border-collapse: collapse;">
        <tr>
            <th>no</th>
            <th>nama laptop</th>
            <th>harga laptop</th>
        </tr>
        <?php
        $i =1;
        foreach($laptop as $l => $l_value) :?>
        <tr>
            <td><?= $i++; ?></td>
            <td><?= $l; ?></td>
            <td><?= $l_value; ?></td>
        </tr>
        <?php endforeach;
        ?>
    </table>
</body>
</html>
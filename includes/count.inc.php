<?php

declare (strict_types = 1);

include 'autoloader.inc.php';

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operator = $_POST['operator'];

$num1 = intval($num1);
$num2 = intval($num2);
$operator = strval($operator);

$calc = new Clac((int)$num1, (int)$num2, (string)$operator);

$hasil = $calc->calculator();

?>

<div id="tempatHasil">
    <input type="number" name="hasil" id="hasil" class="form-control" value="<?= $hasil?>" disabled>
</div>
<?php
require_once ('class_lingkaran.php');

$lingkaran1 = new lingkaran(5);
$lingkaran2 = new lingkaran(10);

echo "luas lingkaran 1 : ".$lingkaran1->getluas().'<br>';
echo "luas lingkaran 2 : ".$lingkaran2->getluas().'<br>';

echo "luas keliling 1 : ".$lingkaran1->getkeliling().'<br>';
echo "luas keliling 2 : ".$lingkaran2->getkeliling().'<br>';

?>
<?php 

require 'Item.php';


$item1 = new Item('test');
$item2 = new Item('test2', $item1);
var_dump($item1);
var_dump($item2);

$item2->getNext()->setContent('test3');

var_dump($item1);
var_dump($item2);


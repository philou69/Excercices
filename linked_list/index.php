<?php 

require 'Item.php';
require 'LinkedList.php';

$list = new LinkedList();

$item1 = new Item('test');
$item2 = new Item('test2');
$item3 = new Item('test3');
$item4 = new Item('test4');

$list->add($item4);
$list->add($item3);
$list->add($item2);
$list->add($item1);
$list->iterate();
echo "Removing the item2 <br>";

$list->remove($item2);

$list->iterate();

echo 'creating a new item on the list <br>';
$list->createItem('text1');

$list->iterate();

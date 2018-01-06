<?php 
require 'vendor/autoload.php';
require 'Item.php';
require 'LinkedList.php';

$list = new LinkedList();

$item1 = new Item('test');
$item2 = new Item('test2');
$item3 = new Item('test3');
$item4 = new Item('test4');

$list->setFirst($item4);
$list->add($item3, $item4);
$list->add($item2, $item3);
$list->add($item1, $item2);
echo "lenght of the list " . $list->length() . "<br>";
$list->iterate();
echo "Removing the item2 <br>";

$list->remove($item2);

$list->iterate();

echo "adding item5 after item3 <br>";
$item5 = new Item('test5');
$list->add($item5, $item3);
echo "lenght of the list " . $list->length() . "<br>";
$list->iterate();
echo "adding item6 after item4 <br>";
$item6 = new Item('test6');
$list->add($item6, $item4);
echo "lenght of the list " . $list->length() . "<br>";
$list->iterate();
echo 'remove item4 <br>';
$list->remove($item4);
$list->iterate();
echo "lenght of the list " . $list->length() . "<br>";
$listReverse = $list->reverse();
$listReverse->iterate();
echo $list->isCircular() ? "La liste est cicrulaire " : "la liste n'est pas circulaire";

$item7 = new Item("test7", $item5);
$list->add($item7, $item1);
echo $list->isCircular() ? "La liste est cicrulaire " : "la liste n'est pas circulaire";

// 9h30 
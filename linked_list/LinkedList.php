<?php

class LinkedList 
{

	private $first;

	public function add(Item $newItem, Item $previous) {
		if($previous->getNext() !== null) {
			$newItem->setNext($previous->getNext());
		}
		$previous->setNext($newItem);
		
	}

	public function remove(Item $itemToRemove)
	{
			$item = $this->first;
			while($item !== null) {
				if($item === $itemToRemove) {
					if(isset($lastItem)) {
						$lastItem->setNext($item->getNext());
					} else {
						$this->first = $item->getNext();
					}
						
					break;
				}
				$lastItem = $item;
				$item = $item->getNext();
			}

	}

	public function setFirst(Item $item)
	{
		$this->first = $item;
	}

	public function iterate()
	{
		if($this->first !== null) {
			echo $this->first->getContent() . "<br>";
			$item = $this->first->getNext();
			while ($item !== null) {
				echo $item->getContent() . "<br>";
				$item = $item->getNext();
			}
		}
	}
}
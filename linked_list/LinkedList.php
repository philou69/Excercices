<?php

class LinkedList 
{

	private $first;

	public function add(Item $newItem, Item $previous = null) {
		if($this->first === null ){
			$this->first = $newItem;
		} else {
			if($this->first === $previous) {
				$newItem->setNext($this->first->getNext());
				$this->first->setNext($newItem);
			}
			$item = $this->first->getNext();
			$lastItem = $this->first;

			while($item !== null) {
				if($item === $previous) {
					$newItem->setNext($item->getNext());
					$item->setNext($newItem);
					break;
				}
				$lastItem = $item;
				$item = $item->getNext();
			}
			if($previous === null) {
				$lastItem->setNext($newItem);
			}
		} 
	}

	public function remove(Item $itemToRemove)
	{
		if($this->first === $itemToRemove) {
			$this->first = $itemToRemove->getNext();
		} else {
			$item = $this->first->getNext();
			$lastItem = $this->first;
			while($item !== null) {
				if($item === $itemToRemove) {
					$lastItem->setNext($itemToRemove->getNext());
					break;
				}
				$lastItem = $item;
				$item = $item->getNext();
			}
		}

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
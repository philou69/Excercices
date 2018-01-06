<?php
use Ds\Set;

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
				if (!isset($lastItem)) {
					$this->first = $item->getNext();
				} elseif ($item->getNext() !== null) {
					$lastItem->setNext($item->getNext());
				} else {
					$lastItem->setNext(null);
				}
				break;
			}
			$lastItem = $item;
			$item = $item->getNext();
		}
	}



	public function setFirst(Item $item)
	{
		if($this->first !== null) {
			$item->setNext($this->first);
		}
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

	public function length() : int
	{	
		$length = 0;
		$item = $this->first;
		while($item !==null) {
			$length ++;
			$item = $item->getNext();
		}
		return $length;
	}


	public function reverse()
	{
		$reverseList = new LinkedList();
		$item = $this->first;
		while($item !== null) {
			$cloneItem = clone($item);
			$cloneItem->setNext(null);
			$reverseList->setFirst($cloneItem);
			$item = $item->getNext();
		}

		return $reverseList;
	}
	
	public function isCircular() : bool
	{
		$setItem = new Set();
		$item = $this->first->getNext();
		while($item !== null) {
			if($setItem->contains($item)) {
				return true;
			} else {
				$setItem->add($item);
				$item = $item->getNext();
			}
		}
		return false;
	}
}
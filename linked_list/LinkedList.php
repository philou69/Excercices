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
		// $newFirst = null;
		// When the length of the list is more then 0,we get the last, put it on the queue on an temp list and remove it  
		while ($this->length() > 0) {
			$item = $this->first;
			while ($item !== null) {
				if($item->getNext() === null)
				{
					break;
				}
				$item = $item->getNext();
			}
			
			if(isset($newFirst)) {$newItem = $newFirst;
			while($newItem !== null) {
				if ($newItem->getNext() === null) {
					break;
				}
				$newItem = $newItem->getNext();
			}
				$newItem->setNext($item);
			} else {
				$newFirst = $item;
			}
			$this->remove($item);
		}
		 // We update the first
		$this->first = $newFirst;
	}
	// a>b>c>d>e
}
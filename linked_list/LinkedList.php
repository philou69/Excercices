<?php

class LinkedList 
{
	private $list;

	private $first;

	private $last;

	public function add(Item $item) {
		if($this->last !== null) {
		// We adding the item to the last 
		$this->last->setNext($item);
		
		}

		// we put it in the list and we store it to the last
		$this->list[] = $item;

		$this->last =& $item;

		// if first is null, we adding item to him
		if($this->first === null) {
			$this->first =& $item;
		}
	}

	public function remove(Item $itemToRemove)
	{
		foreach ($this->list as $key => $item) {
			if ($item === $itemToRemove) {
				$previous = $this->getPrevious($itemToRemove);
				$next = $this->getNext($itemToRemove);
				if ($previous !== false && $next !== false) {
					$previous->setNext($next);
				}
				unset($this->list[$key]);
			}
		}

	}

	public function iterate()
	{
		if(!empty($this->list)) {
			echo $this->first->getContent() . "<br>";
			$item = $this->first->getNext();
			while ($item !== null) {
				echo $item->getContent() . "<br>";
				$item = $item->getNext();
			}
		}
	}

	public function getPrevious($item)
	{
		foreach ($this->list as $itemPrevious) {
			if($itemPrevious->getNext() === $item) {
				return $itemPrevious;
			}
		}

		return false;
	}


	public function getNext($item) 
	{
		foreach ($this->list as $next) {
			if($next === $item->getNext()) {
				return $next;
			}
		}
		return false;
	}

	public function createItem(string $content)
	{
		$item = new Item($content);

		if($this->last !== null ) {
			$this->last->setNext($item);
		}
		$this->last =& $item;
	}
}
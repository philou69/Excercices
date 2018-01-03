<?php 

class Item
{
	/**
	 * @var string
	 */
	private $content;

	/**
	 * @var Item
	 */
	private $next;

	function __construct(string $content, Item $item = null)
	{
		$this->content = $content;

		if($item !== null) {
			$this->next = $item;
		}
	}


	public function getContent() : string
	{
		return $this->content;
	}

	public function setContent(string $content)
	{
		$this->content = $content;
	}


	public function setNext($item)
	{
		$this->next = $item;
	}

	public function getNext()
	{
		return $this->next;
	}

}
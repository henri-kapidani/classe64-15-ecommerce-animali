<?php

class Product {
	private string $name;
	private int $availableQty;
	private int $availableStartMonth;
	private int $availableEndMonth;


	public function isAvailable (int $qty) {
		if ($qty > $this->availableQty) {
			return false;
		}
		$currentMonth = date('m');
		if ($this->availableStartMonth <= $currentMonth && $currentMonth <= $this->availableEndMonth) { //da aggiustare
			return true;
		} else {
			return false;
		}
	}
}

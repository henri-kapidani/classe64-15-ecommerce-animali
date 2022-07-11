<?php

class CreditCard {
	private string $id;
	private int $expiryYear;
	private int $expiryMonth;
	private string $type; // visa, mastercard ...


	public function isExpired(): bool {
		// controlliamo $expiryYear ed $expiryMonth
		// restituisce true o false
		$isValid = true;
		return $isValid;
	}
}

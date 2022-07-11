<?php

class Order {
	private User $user;
	private $itemList;
	private CreditCard $creditCard;
	private $TotalPrice;
	private $isInvalid = true;

	public function __construct(User $user, CreditCard $creditCard, $itemList)
	{
		if (! $creditCard->isExpired()) {
			$this->isInvalid = false;
			$this->user = $user;
			$this->creditCard = $creditCard;
			$this->itemList = $this->availableItems($itemList);
			$this->TotalPrice = $this->CalculateTotal();
			// prendere la lista dei prodotti dal database
		}
	}

	private function CalculateTotal() {
		// iteriamo su $itemList e calcoliamo il prezzo totale dell'ordine
		$total = 100;
		return $total;
	}

	private function availableItems($itemList) {
		/* $itemList di esempio
		[
			[
				'product'	=> oggettoProduct1,
				'qty'			=> 2,
			],
			[
				'product'	=> oggettoProduct2,
				'qty'			=> 5,
			],
			[
				'product'	=> oggettoProduct3,
				'qty'			=> 1,
			],
		]
		*/

		// controlliamo che la disponibilità di ciascun prodotto sia maggiore di quella richiesta
		// controlliamo che ci troviamo nel periodo di tempo di disponibililtà del prodotto

		$availableProducts = [];
		foreach ($itemList as $value) {
			$product = $value['product'];
			$qty = $value['qty'];

			if ($product->isAvailable($qty)) {
				$availableProducts[] = $value;
			};
		}

		return $availableProducts;
	}
}

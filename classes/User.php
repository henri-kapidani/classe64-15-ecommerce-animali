<?php

class User {
	private int $id;
	private string $name;
	private string $address;

	static public function isRegistered() {
		// controllo sui cookies
		$is_registered = true;
		return $is_registered;
	}
}

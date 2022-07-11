<?php

class RegisteredUser extends User {
	private string $username;
	private string $password;

	public function __construct()
	{
		// leggere l'id dell'utente dalla sessione abbinata al cookie che il browser ci ha dato
		// connessione al database e prendiamo tutti i dati dell'utente registrato
		$username = 'Pippo'; // $row['username'];
	}
}
<?php

if (User::isRegistered()) {
	$user = new RegisteredUser();
} else {
	$user = new GuestUser();
}

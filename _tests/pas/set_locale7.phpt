--TEST--
AmazonPAS::set_locale

--FILE--
<?php
	// Dependencies
	require_once dirname(__FILE__) . '/../../cloudfusion.class.php';

	// Set a locale and trigger an operation
	$pas = new AmazonPAS();
	$pas->set_locale(PAS_LOCALE_US);
	$response = $pas->item_lookup('B002FZL94O');

	// Success?
	var_dump($response->isOK());
?>

--EXPECT--
bool(true)

--TEST--
AmazonPAS::item_lookup

--FILE--
<?php
	// Dependencies
	require_once dirname(__FILE__) . '/../../cloudfusion.class.php';

	// Lookup an item
	$pas = new AmazonPAS();
	$response = $pas->item_lookup('B002FZL94O');

	// Success?
	var_dump($response->isOK());
?>

--EXPECT--
bool(true)

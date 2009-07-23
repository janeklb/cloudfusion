--TEST--
AmazonSDB::cache_response CacheMC

--FILE--
<?php
	require_once dirname(__FILE__) . '/../../cloudfusion.class.php';
	$sdb = new AmazonSDB();

	// First time pulls live data
	$response = $sdb->cache_response('list_domains', array(
		array('host' => '127.0.0.1')
	), 10);
	var_dump($response->status);

	// Second time pulls from cache
	$response = $sdb->cache_response('list_domains', array(
		array('host' => '127.0.0.1')
	), 10);
	var_dump($response->status);
?>

--EXPECT--
int(200)
int(200)
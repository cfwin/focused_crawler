<?php
	include('crawler.php');
	include('FocusedCrawler.php');
	// phpinfo();die();
	$topic = "Shows, eventos, lazer, festas na bahia";
	echo stem_portuguese("quilométricas");die();
	$crawler = new FocusedCrawler($topic);


	// $crawler = new Crawler($topic);

	// debugPrint($crawler->getBaseUrlByTopic());
	// $crawler->initializeWeightTable();
	// $relevantPages  = $crawler->getRelevantPages();
	// debugPrint($relevantPages);
?>
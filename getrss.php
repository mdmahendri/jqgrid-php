<?php
$xmlDoc = new DOMDocument();
$xmlDoc->load("https://www.ekon.go.id/rss/berita/");
$xmlstr = simplexml_import_dom($xmlDoc);
return $xmlstr->channel[0];
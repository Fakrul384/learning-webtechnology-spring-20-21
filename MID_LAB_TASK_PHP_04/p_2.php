<?php

$vat = 15;

$priceExcludingVat = 20;

$vatToPay = ($priceExcludingVat / 100) * $vat;

echo "Total vat is:".$vatToPay;

?>
<?php
$qrCode = new \QrCode();

header('Content-type: application/jpg');

echo $qrCode->get('Test QrCode');
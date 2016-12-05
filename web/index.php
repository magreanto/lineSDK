<?php

$access_token = 'z/GzcmyA0wxHC/STmcr37ZcbDNdebGRTmWsg40Tcxn5aF2PVYRTkPZG6dCOrmCi4AHhhkOXLB0a9eHBua02Ea5TY72C/x1MZNpxbC3vCBCsjKNFqyj4JdJjmiu9Re1O3Fbjzw1jioTyH1b9D/snSpQdB04t89/1O/w1cDnyilFU=';
$mkt_cmn_channelSecret = '78c21e2207c6cf8733df2db0593d1a86';

require_once __DIR__.'../vendor/autoload.php';
$httpClient = new \LINE\LINEBot\HTTPClient\CurlHTTPClient($access_token);
$bot = new \LINE\LINEBot($httpClient, ['channelSecret' => $mkt_cmn_channelSecret]);

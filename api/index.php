<?php
// Copyright (c) 2018-2019, The Qwertycoin developers
//
// This file is part of Qwertycoin.
//
// Qwertycoin is free software: you can redistribute it and/or modify
// it under the terms of the GNU Lesser General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Qwertycoin is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU Lesser General Public License for more details.
//
// You should have received a copy of the GNU Lesser General Public License
// along with Qwertycoin.  If not, see <http://www.gnu.org/licenses/>.

ini_set('display_errors', 0);
ini_set('display_startup_errors', 0);
error_reporting(0);

// used as https relay for unsecure nodes
if(!isset($_GET['mode'])) $mode = false;
else $mode = true;

$url = '';
function get_data($url) {
	$ch = curl_init();
	$timeout = 5;
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
	$data = curl_exec($ch);
	curl_close($ch);
	return $data;
}

if($_GET['mode'] == "get") {
	if(isset($_GET['url'])) $url = $_GET['url'];
	header("Content-type: application/json; charset=utf-8");
	print_r(get_data($url));	
} else {
?>
<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" href="https://testplorer.qwertycoin.org/api/styles.css">
</head>

<body>
<h1>Market Related</h1>
<ul>
	<li><a href="https://testplorer.qwertycoin.org/api/totalsupply">Total Supply</a> [Integer]</li>
	<li><a href="https://testplorer.qwertycoin.org/api/supply">Circulating Supply</a> [Decimal]</li>
	<li><a href="https://testplorer.qwertycoin.org/api/lefttomine">Supply left to mine</a> [Decimal]</li>
	<li><a href="https://testplorer.qwertycoin.org/api/supplydeci">Total Supply</a> [Readable]</li>

</ul>
<h1>Network Related</h1>
<ul>
	<li><a href="https://testplorer.qwertycoin.org/api/chainsize">Blockchain size</a> [kiloByte]</li>
	<li><a href="https://testplorer.qwertycoin.org/api/reward">Current Block Reward</a> [Double]</li>
	<li><a href="https://testplorer.qwertycoin.org/api/difficulty">Current Difficulty</a> [Float]</li>
	<li><a href="https://testplorer.qwertycoin.org/api/hashrate">Network Hashrate</a> [Hash/s]</li>
	<li><a href="https://testplorer.qwertycoin.org/api/height">Network Height</a> [Integer]</li>
	<li><a href="https://testplorer.qwertycoin.org/api/totaltx">Transactions count</a> [Integer]</li>
</ul>

<h1>Checkpoint Section</h1>
<ul>
	<li><a href="https://testplorer.qwertycoin.org/api/checkpoint_raw">Render a Qwertycoin Checkpoint</a> [CodeLine]</li>
	<li><a href="https://testplorer.qwertycoin.org/api/checkpoint_csv">Download a Checkpoint file</a> [CSV-File]</li>
</ul>

</body>

</html>
<?php } ?>
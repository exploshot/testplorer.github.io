var api = "https://node-11.testnet.qwertycoin.org/nodesvr";
var apiList = [];
var blockTargetInterval = 120;
var coinUnits = 100000000;
var symbol = 'QWC';
var refreshDelay = 30000;
// pools stats by MainCoins
var poolsStat =
	[
		["pool-01.testnet.qwertycoin.org","https://pool-01.testnet.qwertycoin.org:8119/stats"],
		["pool-02.testnet.qwertycoin.org","https://pool-02.testnet.qwertycoin.org:8119/stats"]
    ];
var nodesStat = 
	[
		["node-00.testnet.qwertycoin.org:8197"],		//94.130.187.117
		["node-01.testnet.qwertycoin.org:8197"],
		["127.0.0.1:8197"],
		["pool-01.testnet.qwertycoin.org:8197"],
		["pool-02.testnet.qwertycoin.org:8197"],
		["explorer.testnet.qwertycoin.org:8197"]
    ];
<?php
//----------------------------------------------------
	error_reporting(E_ALL);
	ob_start();
	ob_clean();
	date_default_timezone_set("Asia/Karachi");
//----------------------------------------------------

	define('LMS_HOSTNAME'			, 'localhost');
	define('LMS_NAME'				, 'thebrai6_tbb');
	define('LMS_USERNAME'			, 'root');
	define('LMS_USERPASS'			, '');

///-----------------DB Tables ------------------------
	define('USERS'					, 'users');
	define('STATUS'					, 'status');
	define('SPORTS'					, 'sports');
	define('PREDICTIONS'			, 'predictions');
	define('NATIONS'				, 'nations');
	define('MATCHES_BET'			, 'matches_bet');
	define('MATCHES'				, 'matches');
	define('CHAMPION'				, 'champion');
	define('BETS'					, 'bets');
	define('AFFILIATES'				, 'affiliates');
//--------------------------------------------------
	// $control = (isset($_REQUEST['control']) && $_REQUEST['control'] != '') ? $_REQUEST['control'] : '';
	// $zone 	 = (isset($_REQUEST['zone']) && $_REQUEST['zone'] != '') ? $_REQUEST['zone'] : '';
	// $wrds 	 = (isset($_REQUEST['wrds']) && $_REQUEST['wrds'] != '') ? $_REQUEST['wrds'] : '';
	// $cat	 = (isset($_REQUEST['cat']) && $_REQUEST['cat'] != '') ? $_REQUEST['cat'] : '';
	// $ip	  	= (isset($_SERVER['REMOTE_ADDR']) && $_SERVER['REMOTE_ADDR'] != '') ? $_SERVER['REMOTE_ADDR'] : '';
	// $do	  	= (isset($_REQUEST['do']) && $_REQUEST['do'] != '') ? $_REQUEST['do'] : '';
	// $view 	= (isset($_REQUEST['view']) && $_REQUEST['view'] != '') ? $_REQUEST['view'] : '';
	// $page	= (isset($_REQUEST['page']) && $_REQUEST['page'] != '') ? $_REQUEST['page'] : '';
	// $Limit	= (isset($_REQUEST['Limit']) && $_REQUEST['Limit'] != '') ? $_REQUEST['Limit'] : '';
//--------------------------------------------------
	// $ask_close  = 1; // (1 for close / 0 for open)
	// $max_close	= 50; // maximum number of pending fatawa
//--------------------------------------------------
//------------months name in urdu---------
// $monthsname = array (
// 						array ('id' => '01'		,'name' => 'January'),
// 						array ('id' => '02'		,'name' => 'February'),
// 						array ('id' => '03'		,'name' => 'March'),
// 						array ('id' => '04'		,'name' => 'April'),
// 						array ('id' => '05'		,'name' => 'May'),
// 						array ('id' => '06'		,'name' => 'June'),
// 						array ('id' => '07'		,'name' => 'July'),
// 						array ('id' => '08'		,'name' => 'August'),
// 						array ('id' => '09'		,'name' => 'September'),
// 						array ('id' => '10'		,'name' => 'October'),
// 						array ('id' => '11'		,'name' => 'November'),
// 						array ('id' => '12'		,'name' => 'December')
// );
//------------months name in urdu---------
	// define('LMS_IP'				, $ip);
	// define('LMS_DO'				, $do);
	// define('LMS_EPOCH'			, date("U"));
	// define('LMS_VIEW'			, $view);
//--------------------------------------------------
?>
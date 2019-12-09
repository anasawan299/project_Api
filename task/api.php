<?php
//---------------------------------------------
include "dbsetting/lms_vars_config.php";
include "dbsetting/classdbconection.php";
$dblms = new dblms();
//---------------------------------------------
$json = file_get_contents('php://input');
$obj = json_decode($json, true);

//------------------------------------------------------------------------------------------------
if (isset($_GET['get_nation'])) {

	$sqllms  = $dblms->querylms("SELECT * FROM  " . NATIONS . "  
													ORDER BY id ");
	$dbdata = array();
	//------------------------------------------------------------------------------------------------	
	while ($rowstd = mysqli_fetch_assoc($sqllms)) {

		$row['id']						= $rowstd['id'];
		$row['name']					= $rowstd['name'];
		$row['sign']					= $rowstd['sign'];
		$row['isActive']				= $rowstd['isActive'];


		array_push($dbdata, $row);
	}
	//--------------------------------------------------------------------------------------------------
	$set = $dbdata;
	header("Content-type: application/json; charset=utf-8");
	echo $val = str_replace('\\/', '/', json_encode($set, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
	die();
}

//-*------------------------------------------------------------------------------------------------------------
if (isset($_GET['get_affiliates'])) {

	$sqllms  = $dblms->querylms("SELECT * FROM  " . AFFILIATES . "  
													ORDER BY id ");
	$dbdata = array();
	//------------------------------------------------------------------------------------------------	
	while ($rowstd = mysqli_fetch_assoc($sqllms)) {

		$row['id']						= $rowstd['id'];
		$row['name']					= $rowstd['name'];
		$row['description']				= $rowstd['description'];
		$row['img']						= $rowstd['img'];
		$row['link']					= $rowstd['link'];
		$row['isActive']				= $rowstd['isActive'];


		array_push($dbdata, $row);
	}
	//--------------------------------------------------------------------------------------------------
	$set = $dbdata;
	header("Content-type: application/json; charset=utf-8");
	echo $val = str_replace('\\/', '/', json_encode($set, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
	die();
}

//-*------------------------------------------------------------------------------------------------------------

if (isset($_GET['get_user'])) {

	$sqllms  = $dblms->querylms("SELECT *
		FROM " . USERS . "  
		WHERE isActive = '1'  ORDER BY id ");
	$dbdata = array();
	//------------------------------------------------------------------------------------------------	
	while ($rowstd = mysqli_fetch_assoc($sqllms)) {

		$row['id']					= $rowstd['id'];
		$row['firstname']			= $rowstd['firstname'];
		$row['lastname']			= $rowstd['lastname'];
		$row['username'] 			= $rowstd['username'];
		$row['email']				= $rowstd['email'];
		$row['password']			= $rowstd['password'];
		$row['birthday']			= $rowstd['birthday'];
		$row['img'] 				= $rowstd['img'];
		$row['isActive']			= $rowstd['isActive'];
		$row['isAdmin']				= $rowstd['isAdmin'];
		$row['created_at']			= $rowstd['created_at'];
		$row['updated_at'] 			= $rowstd['updated_at'];

		array_push($dbdata, $row);
	}
	//--------------------------------------------------------------------------------------------------
	$set = $dbdata;
	header("Content-type: application/json; charset=utf-8");
	echo $val = str_replace('\\/', '/', json_encode($set, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
	die();
}
//--------------------------------------------------------------------------------------------------

if (isset($_GET['submit_matches'])) {

	$game 			= 		$obj['game'];
	$datetime 		= 		$obj['datetime'];
	$sport_id 		= 		$obj['sport_id'];
	$champion_id 	= 		$obj['champion_id'];
	$v1 			= 		$obj['v1'];
	$x 				= 		$obj['x'];
	$v2 			= 		$obj['v2'];
	$v1ht 			= 		$obj['v1ht'];
	$xht 			= 		$obj['xht'];
	$v2ht 			= 		$obj['v2ht'];
	$o05 			= 		$obj['o05'];
	$u05 			= 		$obj['u05'];
	$o15 			= 		$obj['o15'];
	$u15 			= 		$obj['u15'];
	$o25 			= 		$obj['o25'];
	$u25 			= 		$obj['u25'];
	$o05ht 			= 		$obj['o05ht'];
	$u05ht 			= 		$obj['u05ht'];
	$o15ht 			= 		$obj['o15ht'];
	$u15ht 			= 		$obj['u15ht'];
	$gg 			= 		$obj['gg'];
	$ng 			= 		$obj['ng'];
	$v1x 			= 		$obj['v1x'];
	$x2 			= 		$obj['x2'];
	$v12 			= 		$obj['v12'];
	$result 		= 		$obj['result'];

	//------------------------------------------------
	$sqllms  = $dblms->querylms(
		"INSERT INTO " . MATCHES . "(						game					, 
															datetime				, 
															sport_id				, 
															champion_id				, 
															v1						, 
															x						, 
															v2						, 
															v1ht					,
															xht						, 
															v2ht					, 
															o05						, 
															u05						,
															o15						, 
															u15						, 
															o25						, 
															u25						,
															o05ht					, 
															u05ht					, 
															o15ht					, 
															u15ht					,
															gg						, 
															ng						, 
															v1x						, 
															x2						, 
															v12						, 
															result					
														  )
													VALUES(
															'" . $game . "'			, 
															'" . $datetime . "'		,
															'" . $sport_id . "'		, 
															'" . $champion_id . "'	,
															'" . $v1 . "'			, 
															'" . $x . "'			,
															'" . $v2 . "'			, 
															'" . $v1ht . "'			,
															'" . $xht . "'			, 
															'" . $v2ht . "'			,
															'" . $o05 . "'			, 
															'" . $u05 . "'			,
															'" . $o15 . "'			, 
															'" . $u15 . "'			, 
															'" . $o25 . "'		 	,
															'" . $u25 . "'			, 
															'" . $o05ht . "'		,
															'" . $u05ht . "'		, 
															'" . $o15ht . "'		,
															'" . $u15ht . "'		, 
															'" . $gg . "'			,
															'" . $ng . "'			, 
															'" . $v1x . "'			,
															'" . $x2 . "'			, 
															'" . $v12 . "'			,
															'" . $result . "'		)"
	);
	//--------------------------------------
	if ($sqllms) {
		// If the record inserted successfully then show the message as response. 
		$MSG = 'Data  Inserted into MySQL Database';

		// Converting the message into JSON format.
		$json = json_encode($MSG);

		// Echo the message on screen.
		// We would also show this message on our app.
		echo $json;
	} else {

		echo 'Something Went Wrong';
	}


	//--------------------------------------
}

//--------------------------------------------------------------------------------------------------------------

if (isset($_GET['get_matches'])) {

	$sqllms  = $dblms->querylms("SELECT mtc.id as Mtch_id, mtc.game, mtc.v1, mtc.x, mtc.v2, 
											mtc.v1ht, mtc.xht, mtc.v2ht, mtc.o05, mtc.u05,
											mtc.datetime, mtc.o05ht, mtc.u05ht, mtc.o15, 
											mtc.u15, mtc.o25, mtc.u25, mtc.gg, mtc.ng, 
											mtc.v1x, mtc.x2, mtc.v12, mtc.o15ht, mtc.u15ht, 
											mtc.result, sprt.name as Sprt_name, chm.name  FROM " . MATCHES . " mtc
												  INNER JOIN " . SPORTS . " sprt ON mtc.sport_id = sprt.id
												  INNER JOIN " . CHAMPION . " chm ON mtc.champion_id = chm.id 
									  			  ORDER BY mtc.id ASC");
	$dbdata = array();
	//------------------------------------------------------------------------------------------------	
	while ($rowstd = mysqli_fetch_assoc($sqllms)) {

		$row['id']					= $rowstd['Mtch_id'];
		$row['game']				= $rowstd['game'];
		$row['datetime']			= $rowstd['datetime'];
		$row['sport_id'] 			= $rowstd['Sprt_name'];
		$row['champion_id']			= $rowstd['name'];
		$row['v1']					= $rowstd['v1'];
		$row['x']					= $rowstd['x'];
		$row['v2']					= $rowstd['v2'];
		$row['v1ht'] 				= $rowstd['v1ht'];
		$row['xht'] 				= $rowstd['xht'];
		$row['v2ht']				= $rowstd['v2ht'];
		$row['o05']					= $rowstd['o05'];
		$row['u05']					= $rowstd['u05'];
		$row['o15'] 				= $rowstd['o15'];
		$row['u15'] 				= $rowstd['u15'];
		$row['o25']					= $rowstd['o25'];
		$row['u25']					= $rowstd['u25'];
		$row['o05ht']				= $rowstd['o05ht'];
		$row['u05ht']				= $rowstd['u05ht'];
		$row['o15ht']				= $rowstd['o15ht'];
		$row['u15ht'] 				= $rowstd['u15ht'];
		$row['gg']					= $rowstd['gg'];
		$row['ng']					= $rowstd['ng'];
		$row['v1x']					= $rowstd['v1x'];
		$row['x2'] 					= $rowstd['x2'];
		$row['v12'] 				= $rowstd['v12'];
		$row['result']				= $rowstd['result'];
		// $row['created_at']			= $rowstd['created_at'];
		// $row['created_at']			= $rowstd['updated_at'];


		array_push($dbdata, $row);
	}
	//--------------------------------------------------------------------------------------------------
	$set = $dbdata;
	header("Content-type: application/json; charset=utf-8");
	echo $val = str_replace('\\/', '/', json_encode($set, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
	die();
}
//--------------------------------------------------------------------------------------------------------------
if (isset($_GET['pre_id']) && ($_GET['pre_id'] != '')) {

	$match_id 		= 		$obj['match_id'];
	$user_id 		= 		$obj['user_id'];
	$V1x2			= 		$obj['1x2'];
	$V1x2ht 		=		$obj['1x2ht'];
	$ou05 			= 		$obj['ou05'];
	$ou15 			= 		$obj['ou15'];
	$ou25			= 		$obj['ou25'];
	$ou05ht 		=		$obj['ou05ht'];
	$ou15ht 		= 		$obj['ou15ht'];
	$ggng 			= 		$obj['ggng'];
	$double_change	= 		$obj['double_change'];
	$status_id 		=		$obj['status_id'];

	//------------------------------------------------
	$sqllms  = $dblms->querylms("UPDATE " . PREDICTIONS . " SET match_id	= '" . ($match_id) . "'
														, user_id			= '" . ($user_id) . "'
														, 1x2				= '" . ($V1x2) . "'
														, 1x2ht				= '" . ($V1x2ht) . "'
														, ou05				= '" . ($ou05) . "'
														, ou15				= '" . ($ou15) . "'
														, ou25				= '" . ($ou25) . "'
														, ou05ht			= '" . ($ou05ht) . "'
														, ou15ht			= '" . ($ou15ht) . "'
														, ggng				= '" . ($ggng) . "'
														, double_change		= '" . ($double_change) . "'
														, status_id			= '" . ($status_id) . "'

													
															WHERE id = '" . $_GET['pre_id'] . "'");
	//--------------------------------------
	if ($sqllms) {
		// If the record inserted successfully then show the message as response. 
		$MSG = 'Data  Inserted into MySQL Database';

		// Converting the message into JSON format.
		$json = json_encode($MSG);

		// Echo the message on screen.
		// We would also show this message on our app.
		echo $json;
	} else {

		echo 'Something Went Wrong';
	}


	//--------------------------------------
}
//--------------------------------------
if (isset($_GET['get_predictions'])) {

	$sqllms  = $dblms->querylms("SELECT prd.id as Prd_id, mtc.game, usr.username, prd.1x2, 
											prd.1x2ht, prd.ou05, prd.ou15, prd.ou25, prd.ou05ht, 
											prd.ou15ht, prd.ggng, prd.double_change, prd.created_at, 
											prd.updated_at, prd.status_id, sts.name 
											FROM " . PREDICTIONS . " prd
										  	INNER JOIN " . MATCHES . " mtc ON prd.match_id = mtc.id
										  	INNER JOIN " . USERS . " usr ON prd.user_id = usr.id
										  	INNER JOIN " . STATUS . " sts ON prd.status_id = sts.id");
	$dbdata = array();
	//------------------------------------------------------------------------------------------------	
	while ($rowstd = mysqli_fetch_assoc($sqllms)) {

		$row['id']						= $rowstd['Prd_id'];;
		$row['match_id']				= $rowstd['game'];
		$row['user_id']					= $rowstd['username'];
		$row['1x2'] 					= $rowstd['1x2'];
		$row['1x2ht'] 					= $rowstd['1x2ht'];
		$row['ou05'] 					= $rowstd['ou05'];
		$row['ou15'] 					= $rowstd['ou15'];
		$row['ou25'] 					= $rowstd['ou25'];
		$row['ou05ht'] 					= $rowstd['ou05ht'];
		$row['ou15ht'] 					= $rowstd['ou15ht'];
		$row['ggng'] 					= $rowstd['ggng'];
		$row['double_change'] 			= $rowstd['double_change'];
		$row['status_id'] 				= $rowstd['name'];
		$row['created_at'] 				= $rowstd['created_at'];
		$row['updated_at'] 				= $rowstd['updated_at'];

		array_push($dbdata, $row);
	}
	//--------------------------------------------------------------------------------------------------
	$set = $dbdata;
	header("Content-type: application/json; charset=utf-8");
	echo $val = str_replace('\\/', '/', json_encode($set, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
	die();
}
//--------------------------------------------------------------------------------------------------------------
if (isset($_GET['get_bets'])) {

	$sqllms  = $dblms->querylms("SELECT bet.id as Bet_id, bet.name, bet.stake, usr.username,
											bet.quote, bet.odds_win, bet.isLike,  sts.name as Status_name 
											FROM " . BETS . " bet
										  	INNER JOIN " . USERS . " usr ON bet.user_id = usr.id
											  INNER JOIN " . STATUS . " sts ON bet.status_id = sts.id
											  ORDER BY bet.id DESC");
	$dbdata = array();
	//------------------------------------------------------------------------------------------------	
	while ($rowstd = mysqli_fetch_assoc($sqllms)) {

		$row['id']						= $rowstd['Bet_id'];
		$row['name']					= $rowstd['name'];
		$row['user_id']					= $rowstd['username'];
		$row['stake'] 					= $rowstd['stake'];
		$row['quote'] 					= $rowstd['quote'];
		$row['odds_win'] 				= $rowstd['odds_win'];
		$row['status_id'] 				= $rowstd['Status_name'];
		$row['isLike'] 					= $rowstd['isLike'];

		array_push($dbdata, $row);
	}
	//--------------------------------------------------------------------------------------------------
	$set = $dbdata;
	header("Content-type: application/json; charset=utf-8");
	echo $val = str_replace('\\/', '/', json_encode($set, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
	die();
}
//--------------------------------------------------------------------------------------------------------------

if (isset($_GET['submit_sports'])) {

	$name 			= 		$obj['name'];
	$sign 			= 		$obj['sign'];
	$isActive		= 		$obj['isActive'];

	//------------------------------------------------
	$sqllms  = $dblms->querylms(
		"INSERT INTO " . SPORTS . "(						name					, 
															sign					, 
															isActive								
														  )
													VALUES(
															'" . $name . "'			, 
															'" . $sign . "'			, 
															'" . $isActive . "'		 )"
	);
	//--------------------------------------
	if ($sqllms) {
		// If the record inserted successfully then show the message as response. 
		$MSG = 'Data  Inserted into MySQL Database';

		// Converting the message into JSON format.
		$json = json_encode($MSG);

		// Echo the message on screen.
		// We would also show this message on our app.
		echo $json;
	} else {

		echo 'Something Went Wrong';
	}


	//--------------------------------------
}
//--------------------------------------------------------------------------------------------------------------

if (isset($_GET['get_sports'])) {

	$sqllms  = $dblms->querylms("SELECT * FROM  " . SPORTS . "  
	  ORDER BY id ");
	$dbdata = array();
	//------------------------------------------------------------------------------------------------	
	while ($rowstd = mysqli_fetch_assoc($sqllms)) {

		$row['id']						= $rowstd['id'];
		$row['name']					= $rowstd['name'];
		$row['sign']					= $rowstd['sign'];


		array_push($dbdata, $row);
	}
	//--------------------------------------------------------------------------------------------------
	$set = $dbdata;
	header("Content-type: application/json; charset=utf-8");
	echo $val = str_replace('\\/', '/', json_encode($set, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
	die();
}
//--------------------------------------------------------------------------------------------------------------

if (isset($_GET['submit_champion'])) {

	$name 			= 		$obj['name'];
	$sign 			= 		$obj['sign'];
	$nation_id 		=		$obj['nation_id'];
	$isActive		= 		$obj['isActive'];

	//------------------------------------------------
	$sqllms  = $dblms->querylms(
		"INSERT INTO " . CHAMPION . "(						name					, 
															sign					,
															nation_id				, 
															isActive								
														  )
													VALUES(
															'" . $name . "'			, 
															'" . $sign . "'			,
															'" . $nation_id . "'	,  
															'" . $isActive . "'		 )"
	);
	//--------------------------------------
	if ($sqllms) {
		// If the record inserted successfully then show the message as response. 
		$MSG = 'Data  Inserted into MySQL Database';

		// Converting the message into JSON format.
		$json = json_encode($MSG);

		// Echo the message on screen.
		// We would also show this message on our app.
		echo $json;
	} else {

		echo 'Something Went Wrong';
	}


	//--------------------------------------
}
//--------------------------------------------------------------------------------------------------------------

if (isset($_GET['get_champion'])) {

	$sqllms  = $dblms->querylms("SELECT * FROM  " . CHAMPION . "  
														ORDER BY id ");
	$dbdata = array();
	//------------------------------------------------------------------------------------------------	
	while ($rowstd = mysqli_fetch_assoc($sqllms)) {

		$row['id']						= $rowstd['id'];
		$row['name']					= $rowstd['name'];
		$row['sign']					= $rowstd['sign'];
		$row['nation_id']				= $rowstd['nation_id'];


		array_push($dbdata, $row);
	}
	//--------------------------------------------------------------------------------------------------
	$set = $dbdata;
	header("Content-type: application/json; charset=utf-8");
	echo $val = str_replace('\\/', '/', json_encode($set, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT));
	die();
}

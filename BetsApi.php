
<?php

class BetsApi{

	public $token='123281-ZtgevoHRAt4Zg1';

	 function __construct()
	 {

	 }

	 public function commonApi($url)
	 {
	 	$ch = curl_init($url);
	 	curl_setopt($ch, CURLOPT_TIMEOUT, 30);
	 	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30);
	 	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	 	$data = curl_exec($ch);
	 	if ($data === false) 
	 	{
	 	    $info = curl_getinfo($ch);
	 	    curl_close($ch);
	 	    die('error occured during curl exec. Additioanl info: ' . var_export($info));
	 	}
	 	curl_close($ch);
	 	return json_decode($data,true);
	 }


	 public  function InPlay($sport_id=null)
	 {
	 	$response= $this->commonApi('https://api.b365api.com/v1/betfair/sb/inplay?sport_id='.$sport_id.'&'.'token='.$this->token);
	 	return $response;
	 }

	 public function UpComing($sport_id=null)
	 {
	 	$response= $this->commonApi('https://api.b365api.com/v1/betfair/sb/upcoming?sport_id='.$sport_id.'&'.'token='.$this->token);
	 	
	 }

	 public function result($event_id)
	 {
	 	$response= $this->commonApi('https://api.b365api.com/v1/betfair/result?token='.$this->token.'&event_id='.$event_id);
	 	return $response;
	 }

	 public function SbEvent($event_id)
	 {

	 	$response= $this->commonApi('https://api.b365api.com/v1/betfair/sb/event?token='.$this->token.'&event_id='.$event_id);
	 	return $response;
	 }


	 public  function ExChnageInPlay($sport_id=null)
	 {
	 	$response= $this->commonApi('https://api.b365api.com/v1/betfair/ex/inplay?sport_id='.$sport_id.'&'.'token='.$this->token);
	 	return $response;
	 }

	 public  function ExChnageUpComing($sport_id=null)
	 {
	 	$response= $this->commonApi('https://api.b365api.com/v1/betfair/ex/upcoming?sport_id='.$sport_id.'&'.'token='.$this->token);
	 	return $response;
	 }

	 public  function ExChnageEvent($event_id=null)
	 {
	 	$response= $this->commonApi('https://api.b365api.com/v1/betfair/ex/event?event_id='.$event_id.'&'.'token='.$this->token);
	 	return $response;
	 }

	 public  function timeLine($event_id=null)
	 {
	 	$response= $this->commonApi('https://api.b365api.com/v1/betfair/timeline/?event_id='.$event_id.'&'.'token='.$this->token);
	 	return $response;
	 }

	 public function gameStatus($status)
	 {
	 	switch ($status) {
	 		case 0:
	 			echo "Not Started";
	 			break;
	 		case 1:
	 			echo "InPlay";
	 			break;
	 		case 2:
	 			echo 'TO BE FIXED';
	 			break;
	 		case 3:
	 			echo 'Ended';
	 			break;
	 		case 4:
	 			echo "Postponed";
	 			break;
	 		case 5:
	 			echo "Cancelled";
	 			break;
	 		case 6:
	 			echo "Walkover";
	 			break;
	 		case 7:
	 			echo "Interrupted";
	 			break;
	 		case 8:
	 			echo "Abandoned";
	 			break;
	 		case 9:
	 			echo "Retired";
	 			break;
	 		case 10:
	 			echo "Suspended";
	 			break;
	 		case 99:
	 			echo "Removed";
	 			break;
	 	}
	 }

}


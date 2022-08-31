<?php


class BetFair{

	/// more token
    //2a1781ddd4msh05f9c6d8b897607p15ec9bjsn2204b3515e7b
	
	public function live_matches_by_sport($sport_name)
	{

		    $curl = curl_init();

		    curl_setopt_array($curl, [
			CURLOPT_URL => "https://betfair-sportsbook.p.rapidapi.com/live-matches-by-sport?sport=".$sport_name."&lang=en",
			

			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_FOLLOWLOCATION => true,
			CURLOPT_ENCODING => "",
			CURLOPT_MAXREDIRS => 10,
			CURLOPT_TIMEOUT => 30,
			CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			CURLOPT_CUSTOMREQUEST => "GET",
			CURLOPT_HTTPHEADER => [
				"X-RapidAPI-Host: betfair-sportsbook.p.rapidapi.com",
				"X-RapidAPI-Key: 7425a160d6mshf6f5dcc9e16f4ebp1d93dejsn0c05fc899e56"
			],


		]);

		$response = curl_exec($curl);
		$err = curl_error($curl);

		curl_close($curl);

		if ($err) {
			echo "cURL Error #:" . $err;
		} else {
			$data=json_decode($response,true);
			return $data;
			 
		}

	}


	public function competitions_by_sport($sport_name){

		     
		       $curl = curl_init();

		       curl_setopt_array($curl, [
		       	CURLOPT_URL => "https://betfair-sportsbook.p.rapidapi.com/competitions-by-sport?sport=".$sport_name."&lang=en",
		       	CURLOPT_RETURNTRANSFER => true,
		       	CURLOPT_FOLLOWLOCATION => true,
		       	CURLOPT_ENCODING => "",
		       	CURLOPT_MAXREDIRS => 10,
		       	CURLOPT_TIMEOUT => 30,
		       	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		       	CURLOPT_CUSTOMREQUEST => "GET",
		       	CURLOPT_HTTPHEADER => [
		       		"X-RapidAPI-Host: betfair-sportsbook.p.rapidapi.com",
		       		"X-RapidAPI-Key: 7425a160d6mshf6f5dcc9e16f4ebp1d93dejsn0c05fc899e56"
		       	],
		       ]);

		       $response = curl_exec($curl);
		       $err = curl_error($curl);

		       curl_close($curl);

		       if ($err) {
		       	echo "cURL Error #:" . $err;
		       } else {
		         	$data=json_decode($response,true);
			        return $data;
		       }
	}





	public function matche_by_competition($competitionid){

		       
		       $curl = curl_init();

		       curl_setopt_array($curl, [
		       	CURLOPT_URL => "https://betfair-sportsbook.p.rapidapi.com/matches-by-competition?competitionid=".$competitionid."&lang=en",
		       	CURLOPT_RETURNTRANSFER => true,
		       	CURLOPT_FOLLOWLOCATION => true,
		       	CURLOPT_ENCODING => "",
		       	CURLOPT_MAXREDIRS => 10,
		       	CURLOPT_TIMEOUT => 30,
		       	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		       	CURLOPT_CUSTOMREQUEST => "GET",
		       	CURLOPT_HTTPHEADER => [
		       		"X-RapidAPI-Host: betfair-sportsbook.p.rapidapi.com",
		       		"X-RapidAPI-Key: 7425a160d6mshf6f5dcc9e16f4ebp1d93dejsn0c05fc899e56"
		       	],
		       ]);

		       $response = curl_exec($curl);
		       $err = curl_error($curl);

		       curl_close($curl);

		       if ($err) {
		       	echo "cURL Error #:" . $err;
		       } else {
		       	 $data=json_decode($response,true);
			      return $data;
		       }
	}


	public function markets_by_match($id){

		       
		      $curl = curl_init();

		      curl_setopt_array($curl, [
		      	CURLOPT_URL => "https://betfair-sportsbook.p.rapidapi.com/markets-by-match?matchid=".$id."&lang=en",
		      	CURLOPT_RETURNTRANSFER => true,
		      	CURLOPT_FOLLOWLOCATION => true,
		      	CURLOPT_ENCODING => "",
		      	CURLOPT_MAXREDIRS => 10,
		      	CURLOPT_TIMEOUT => 30,
		      	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		      	CURLOPT_CUSTOMREQUEST => "GET",
		      	CURLOPT_HTTPHEADER => [
		      		"X-RapidAPI-Host: betfair-sportsbook.p.rapidapi.com",
		      		 "X-RapidAPI-Key: 7425a160d6mshf6f5dcc9e16f4ebp1d93dejsn0c05fc899e56"
		      	],
		      ]);

		      $response = curl_exec($curl);
		      $err = curl_error($curl);

		      curl_close($curl);

		      if ($err) {
		      	echo "cURL Error #:" . $err;
		      } else {
		      	 $data=json_decode($response,true);
		      	  return $data;
		      }
	}




		public function outrights_by_competition(){

		       
		       $curl = curl_init();

		       curl_setopt_array($curl, [
		       	CURLOPT_URL => "https://betfair-sportsbook.p.rapidapi.com/outrights-by-competition?competitionid=%2Fsport%2Ffootball%2Fenglish-premier-league%2F10932509&lang=en",
		       	CURLOPT_RETURNTRANSFER => true,
		       	CURLOPT_FOLLOWLOCATION => true,
		       	CURLOPT_ENCODING => "",
		       	CURLOPT_MAXREDIRS => 10,
		       	CURLOPT_TIMEOUT => 30,
		       	CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
		       	CURLOPT_CUSTOMREQUEST => "GET",
		       	CURLOPT_HTTPHEADER => [
		       		"X-RapidAPI-Host: betfair-sportsbook.p.rapidapi.com",
		       		"X-RapidAPI-Key: 7425a160d6mshf6f5dcc9e16f4ebp1d93dejsn0c05fc899e56"
		       	],
		       ]);

		       $response = curl_exec($curl);
		       $err = curl_error($curl);

		       curl_close($curl);

		       if ($err) {
		       	echo "cURL Error #:" . $err;
		       } else {
		          $data=json_decode($response,true);
			      return $data;
		       }
	}



	
}
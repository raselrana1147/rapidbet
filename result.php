<?php 

require_once 'BetsApi.php';
ini_set('max_execution_time', 300);

  


	if (isset($_GET['event_id']) && $_GET['event_id'] !=="") {
		$event_id=$_GET['event_id'];
		$api=new BetsApi();
		$data=$api->result($event_id);
		
		//echo "<pre/>";
		//print_r($data);
    //die();
	
	}

 ?>


   <!DOCTYPE html>
  <html>
  <head>
  	<title></title>
  	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
  </head>
  <body>

  	<div class="container">
  		<?php 
  			foreach ($data['results'] as $value) {
  		
  		 ?>
  		<div class="card" style="width: 50rem;">
  		  	<div class="card-header bg-danger">
  		  		<?=$value['league']['name']; ?>
  		  	</div>
  		  	<div class="card-body">
  		  		<ul class="list-group list-group-flush">
  		  		  <li class="list-group-item">
  		  		  	<span><?=$value['home']['name']; ?></span> vs <span><?=$value['away']['name']; ?></span>
  		  		  	<p>Game Status:<?=$api->gameStatus($value['time_status']) ?></p>
  		  		 
  		  		  		<?php 

  		  		  			if ($value['time_status'] !=3) {
  		  		  				echo '<p>Score'.$value['ss'].'</p>';
  		  		  			}
  		  		  		 ?>
  		  		  
  		  		  	
  		  		  		<?php 
  		  		  				if ($value['time_status']==3) {

  		  		  					$last_score_key=(array_key_last($value['scores']));
  		  		  					$home_score=$value['scores'][$last_score_key]['home'];
  		  		  					$away_score=$value['scores'][$last_score_key]['away'];
  		  		  					echo '<h4>Score</h4>';
  		  		  					echo '<p>'.$value['home']['name'].'=>'.$home_score.'</p>';
  		  		  					echo '<p>'.$value['away']['name'].'=>'.$away_score.'</p>';

  		  		  					if ($home_score>$away_score) {
  		  		  						echo $value['home']['name']." has won the game";
  		  		  					}elseif ($away_score>$home_score) {
  		  		  						echo $value['away']['name']." has won the game";
  		  		  					}else{
  		  		  						echo "Game is dra";
  		  		  					}
  		  		  				}
  		  		  		 ?>
  		  		 
  		  		  </li>
  		  		</ul>
  		  	</div>
  		</div>
  	<?php } ?>
  		
  	</div>
  
  </body>
  </html> 
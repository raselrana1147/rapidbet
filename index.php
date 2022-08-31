<!-- 
<?php include('header.php') ?>
<body>
	

	
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
	<div class="container">
	 
	  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
	    <div class="navbar-nav">
	     
	      <a class="nav-link" href="index.php">HOme</a>
	      <a class="nav-link" href="group.php">Group</a>
	     
	     
	    </div>
	  </div>
	  </div>
	</nav>
	<div class="container">
		<?php 
			$datas=$api->live_matches_by_sport('cricket');
		//	echo "<pre/>";
		//	print_r($datas);
			//die();
			
		 ?>
		
		 <?php 
			foreach ($datas as $key => $value) {
				
				
		 ?>
			<div class="card" style="width: 100%;">
			 
			    <div class="card-header">
			   	  <h4><?=$value['competition_name'] ?></h4>
			   </div>
			  
			  <ul class="list-group list-group-flush">
			    <h3><a href="subquery.php?id=<?php echo $value['id'] ?>"><?=$value['name'] ?></a></h3>

			    <p><span><?=$value['team1']['name'] ?> 

			    <?php if ($value['team1']['score'] !=""): ?>
			    	 <?=$value['team1']['score'] ?>
			    <?php endif ?>
			    <?php if ($value['team1']['sets'] !=""): ?>
			    	 <?='Sets '.$value['team1']['sets'] ?>,
			    <?php endif ?>
			    <?php if ($value['team1']['games'] !=""): ?>
			    	 <?='Game '.$value['team1']['games'] ?>
			    <?php endif ?>
			         
			     || <span><?=$value['team2']['name'] ?> 
			     <?php if ($value['team2']['score'] !=""): ?>
			    	 <?=$value['team2']['score'] ?>
			    <?php endif ?>
			    <?php if ($value['team2']['sets'] !=""): ?>
			    	 <?='Sets '.$value['team2']['sets'] ?>,
			    <?php endif ?>
			    <?php if ($value['team2']['games'] !=""): ?>
			    	 <?='Game '.$value['team2']['games'] ?>
			    <?php endif ?>
			   
			 </span> 
			    	<?php
			    		if (array_key_exists('X', $value['odds'])) {?>
			    			<span class="badge badge-success"><?=$value['odds']['X'] ?></span>
			    	<?php } ?>
			    	<span class="badge badge-success"><?=$value['odds']['1'] ?></span>  <span class="badge badge-success"><?=$value['odds']['2'] ?></span></p>
			    	
			    	<a href="result.php?event_id=<?= $event_id ?>">result</a>
			  </ul> 
			  
			</div>
		<?php } ?> 
		 
	</div>
	 

</body>
</html>
 -->


 <?php

 $curl = curl_init();
 $PROJ_KEY = 'YOUR_PROJ_KEY';
 $API_TOKEN = 'YOUR_ACCESS_TOKEN';
 $key = 'rsaeng_2020_t20_03';


 curl_setopt_array($curl, array(
   CURLOPT_URL => "https://api.sports.roanuz.com/v5/cricket/${PROJ_KEY}/match/${key}/",
   CURLOPT_RETURNTRANSFER => true,
   CURLOPT_ENCODING => "",
   CURLOPT_MAXREDIRS => 10,
   CURLOPT_TIMEOUT => 0,
   CURLOPT_FOLLOWLOCATION => true,
   CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
   CURLOPT_CUSTOMREQUEST => "GET",
   CURLOPT_HTTPHEADER => array(
     "rs-token: ${API_TOKEN}"
   ),
 ));

 $response = curl_exec($curl);

 curl_close($curl);
 echo $response;
 ?>
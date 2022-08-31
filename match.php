
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
		if (isset($_GET['competitionid']) && $_GET['competitionid'] !=null) {

			$datas=$api->matche_by_competition($_GET['competitionid']);
			//echo "<pre/>";
			//print_r($datas);
			//die();
		}else{
			echo "some thing went wrong";
		}
			
			
		 ?>
	</div>

	<?php foreach ($datas as $key => $value): ?>
		
	
	<div class="card" style="width: 50%;">
	  <h6 class="card-header bg-secondary"><?=$value['name'] ?> 
	  

	</h6>

		  	<div class="card" style="width: 100%;">
		  	 
		  	    <div class="card-header">
		  	   	  <h4><?=$value['name'] ?></h4>
		  	   </div>
		  	  
		  	  <ul class="list-group list-group-flush">
		  	    <h3><a href="subquery.php?id=<?php echo $value['id'] ?>"><?=$value['name'] ?></a></h3>
		  	   <?php if ($value['is_live']){ ?>
		  	   	<p>Live Time : <?=$value['live_time'] ?></p>
		  	   	<p>In Play</p>
		  	   <?php }else{ ?>
		  	   	<p>Upcomming: </p>
		  	   	<p>start datetime: <?=$value['start_datetime'] ?></p>
		  	   <?php } ?>

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
		  	  </ul> 
		  	  
		  	</div>
	  	
	  
	</div>
	 <?php endforeach ?>

</body>
</html>


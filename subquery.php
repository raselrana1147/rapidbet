
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
		if (isset($_GET['id']) && $_GET['id'] !=null) {
			$sport_url=$_GET['id'];
			$datas=$api->markets_by_match($sport_url);
			//echo count($datas);
			//die();
			//echo "<pre/>";
			//print_r($datas);
			//die();
			
   //  		$array_path = explode("/", $sport_url);
   //  		$event_id = end($array_path);
			// foreach ($datas as $key => $value) {
			// 	echo $value['name']."<br>";
			// 	foreach ($value['values'] as $key2 => $val) {
			// 		echo $event_id."-".$key.'-'.$key2. "<br/>";
			// 	}
			// 	echo "<br/>";
				
			// }
	
		}else{
			echo "some thing went wrong";
		}
		
			//die();
			
		 ?>
	</div>

	<?php foreach ($datas as $key1 => $value): ?>
	<?php 

		//print_r($value);
		
		//echo array_search("To Win the Toss",$value,true);
		
	 ?>

	 <div class="accordion" id="accordionExample<?=$key1 ?>">

	   <div class="card">
	     <div class="card-header" id="headingOne">
	       <h2 class="mb-0">
	         <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse" data-target="#collapseOne<?=$key1 ?>" aria-expanded="true" aria-controls="collapseOne">
	          <h3><?=$value['name'] ?> </h3>
	         </button>
	       </h2>
	     </div>

	     <div id="collapseOne<?=$key1 ?>" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample<?=$key1 ?>">
	     		<?php foreach ($value['values'] as $key2 => $value2): ?>
	       <div class="card-body">
	        	<p>
	        		<?php if ($value2['val1'] !=""): ?>
	        			
	        			<span><?=$value2['val1'] ?></span>
	        		<?php endif ?>

	        		<?php if ($value2['val2'] !=""): ?>
	        			<span><?=$value2['val2'] ?></span>
	        		<?php endif ?>
	        	  <span class="badge badge-success"><?=$value2['odds'] ?></span>
	        	</p>
	        	
	       </div>
	      	<?php endforeach ?>
	     </div>
	   </div>
	  </div>

	
	
	<!-- <div class="card" style="width: 50%;">
	  <h6 class="card-header bg-secondary"><?=$value['name'] ?> 

	</h6>


	  	<?php foreach ($value['values'] as $key2 => $value2): ?>

		  	<div class="ml-4">
		  		<div class="row">
		  			<div class="col-md-6">

		  					
		  				
		  				<p>
		  					<?php if ($value2['val1'] !=""): ?>
		  						
		  						<span><?=$value2['val1'] ?></span>
		  					<?php endif ?>

		  					<?php if ($value2['val2'] !=""): ?>
		  						<span><?=$value2['val2'] ?></span>
		  					<?php endif ?>
		  				  <span class="badge badge-success"><?=$value2['odds'] ?></span>
		  				</p>
		  				
		  			</div>
		  		</div>
		  	</div>
	  	<?php endforeach ?>
	  
	</div -->

	 <?php endforeach ?>


	 <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>

</body>
</html>


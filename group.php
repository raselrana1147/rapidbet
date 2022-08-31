
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
			$datas=$api->competitions_by_sport('cricket');
		       //echo "<pre/>";
			   //print_r($datas);
			   //die();
			
		 ?>
		
		 <?php 
			foreach ($datas as $key => $value) {
				
				
		 ?>
			<div class="card" style="width: 100%;">
			 
			    <div class="card-header">
			   	  <h6>Group Name: <?=$value['group'] ?></h6>
			   	  <h6>Name: <?=$value['name'] ?></h6>
			   	  <a href="match.php?competitionid=<?php echo $value['id'] ?>">Detail</a>
			   </div>

			  
			  
			  
			 
			  
			</div>
		<?php } ?> 
		 
	</div>
	 

</body>
</html>


<?php 


//data retrieve
if (isset($_GET['action'])) {
	if ($_GET['action']=='book') {
		$package=$_GET['package'];
		$value=$_GET['value'];
		//echo $package;//
		//echo "||| ".$value;
	}
}

 ?>
<!-- Head -->
<!-- ---------------------------- -->
 <?php include'heading.php'; ?>
<!-- ---------------------------- -->
<!-- ---------------------------- -->



 <div class="row bghimg text-white text-center">
 	<div class="col">
 		
 		<h1 class="mt-3 mb-3 text-center p-2 display-1 htitle hover" style="font-weight: 800; text-shadow: 5px 1px 1px #c0d3be; text-rendering: auto; ">Sundarban Travels </h1>
 		<h4 class="mt-1 text-center display-4 htitle hover" style="font-weight: 800; text-rendering: auto; ">Booking Page</h4>
 		

 		<hr class="bg-light ">
 		<p class="m-5 p-1">
 			This project is meant to help make it easier for the people and tourist company to connect and deal online.
 		</p>
 		<hr class="bg-light ">
 		

 	</div>
 </div>


<!-- packages -->
<div class="row m-3 mt-5">
	<div class="col-md-8 offset-md-2 border border-success p-2 hover" style=" 
			border-width: 2px !important; 
			border-radius: 10px;
			box-shadow: 3px 10px #e2e0e0;
			">
		<h3 class="text-center text-success"><?php echo "$package"; ?></h3>

	</div>
</div>

<hr class="bg-color mt-3 mb-3" height="10px">
					<!-- Form -->
					<form>
						

					</form>
					<!-- Form -->

<hr class="bg-color mt-3 mb-3" height="10px">
<!-- packages -->
<hr class="bg-color mt-3 mb-3" height="10px">
<div class="row bg-color" >
	<div class="col-md-10 offset-md-1  bg-light">
		<div class="row pl-5 ml-4" >

			<?php 
				for ($j=1; $j < 7; $j++) { 
					$i=$j;
			 ?>

			<!-- Pakages -->
			<div class="col-md-3 border border-success mt-2 mb-2 ml-3 mr-5 p-1" style=" box-shadow: 3px 4px 2px #c0d3be;">
				<div class="border border-success p-2">
					<h2 class="text-center m-2 text-success"> Package <?php echo $i; ?> </h2>

					<p>Days: <?php echo $i+2;?>days and <?php echo $i+1;?> nights</p>
					<p>Package Cost: $<?php echo $i*56;?></p>

					<p>Package Details: Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod..</p>

					<div class="row">
						<a href="./book.php?action=book&package=<?php echo "Package ".$j; ?>&value=<?php echo $j; ?>" class="mx-auto m-1 p-2 btn btn-success">Book Package & Learn More. </a>
					</div>

				</div>
			</div>
			<!-- Pakages -->

			<?php 
			}
			 ?>

		</div>	
	</div>
</div>

<hr class="bg-color mt-3 mb-3" height="10px">









<!-- ------------------------- -->
 <!-- foot -->           
<!-- ---------------------------- -->
 <?php include'foot.php'; ?>
<!-- ---------------------------- -->
    


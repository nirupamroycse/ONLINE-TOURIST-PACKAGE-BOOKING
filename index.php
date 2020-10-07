
<!-- Head -->
<!-- ---------------------------- -->
 <?php include'heading.php'; ?>
<!-- ---------------------------- -->
<!-- ---------------------------- -->



 <div class="row bghimg text-white text-center">
 	<div class="col">
 		
 		<h1 class="mt-3 mb-3 text-center p-4 display-1 htitle hover" 
 		style="font-weight: 800; text-shadow: 5px 1px 1px #c0d3be; text-rendering: auto; ">Sundarban Travels</h1>
 		<hr class="bg-light ">
 		<p class="m-5 p-1">
 			This project is meant to help make it easier for the people and tourist company to connect and deal online.
 		</p>
 		<hr class="bg-light ">
 		<p class=" p-2 ">
 			The objectives are listed below:
				 	<ol>
				 		<li>Enter a new tour package</li>
						<li>Edit a package</li>		 		
						<li>Display all package </li>
				 		<li>Online Booking</li>
				 	</ol>

 		</p>

 	</div>
 </div>


<!-- packages -->
<div class="row m-3 mt-5">
	<div class="col-md-8 offset-md-2 border border-success p-2 hover" style=" 
			border-width: 2px !important; 
			border-radius: 10px;
			box-shadow: 3px 10px #e2e0e0;
			">
		<h3 class="text-center text-success">Select From Tour Packages </h3>

	</div>
</div>


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





<div class="row bg-light mt-3 mb-3">
	<div class="col-md-10 offset-md-1 bg-color">
		<div class="row bg-light " id="about">
			<div class="col-md-12 bg-color p-4">
				<h2 class="text-center text-light display-2" style="  text-shadow: 3px 5px 2px #c0d3be; font-weight: 600; ">About Us</i></h2>
			</div>

		</div>
		
		<div class="row bg-color p-4">
			<div class="col-md-12 bg-color">
				<p class="text-center text-light lead p-2">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				 </p>
			</div>
		</div>
	</div>
</div>

<hr class="bg-color mt-3 mb-3" height="10px">


<!-- ------------------------- -->
 <!-- foot -->           
<!-- ---------------------------- -->
 <?php include'foot.php'; ?>
<!-- ---------------------------- -->
    

